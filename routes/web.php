<?php

use App\Http\Controllers\{AddToCartController, CartController, OrderController};
use App\Models\Advertisement;
use App\Models\Category;
use App\Models\News;
use App\Http\Controllers\{ProductActionsController, UserController, VoteController};
use App\Http\Controllers\{QuestionController, ReviewController, ReplyController};
use App\Http\Controllers\ReportController;
use App\Http\Controllers\{AdminController,
    AdminOrderActionsController,
    AdvertisementController,
    BadgeController,
    BadgeStyleController,
    CharacteristicController,
    ComparisonController,
    ContactController,
    CouponController,
    LikesController,
    NewsController,
    NewsSearchFilterController,
    NewsSubscriptionController,
    ProductController,
    ProductSetController,
    VisitsController,
    WishlistController,
    WishlistProductController};

use App\Models\Product;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;

//WATCH OTHER ROUTES IN routes/admin.php

Route::get('/', function () {
    return view('index-2', [
        'ads' => Advertisement::latest('start_date')
                            ->uncategorized()
                            ->notExpired()
                            ->limit(10)
                            ->get(),
        'filtering_group_1_products' => Product::limit(10)->get()->loadAvg('reviews', 'rating'),
        'latest_news' => News::latest()->limit(10)->get(),
        'popular_categories' => Category::popular()
    ]);
})->name('index-2');

Route::resource('wishlist', WishlistController::class)->except(['create', 'show', 'edit'])->middleware('authenticated');
Route::get('/wishlist/show/{wishlist_access_token}', [WishlistController::class, 'show'])->name('wishlist.show_guest');

Route::controller(WishlistProductController::class)->prefix('/wishlist')->group(function () {
    Route::post('/{wishlist}/{product}', 'toggle')->name('wishlist_product.toggle');
    Route::get('/toggle/{product}', 'toggle_default')->name('wishlist_product.toggle_default');
    Route::get('/{wishlist}/set_default', 'set_default')->name('wishlist.set_default');
    Route::post('/{wishlist}/{product}/move', 'move')->name('wishlist.move');
});

Route::post('/cart/add/{quantity}', [AddToCartController::class, 'add'])->name('cart.add');

Route::controller(CartController::class)->prefix('cart')->name('cart.')->group(function () {
    Route::get('/', 'show')->name('index');
    Route::delete('/delete/{cart_row_id}', 'destroy')->name('destroy');
    Route::post('/update_quantity/{cart_row_id}', 'update_quantity')->name('update_quantity');
});

Route::post('/coupon', [CouponController::class, 'store'])->name('coupon.store');

Route::controller(ComparisonController::class)->middleware('authenticated')->prefix('comparison')
                                              ->name('comparison.')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('{category}', 'show')->name('show');
    Route::post('{product}', 'store')->name('store');
    Route::delete('{product}', 'destroy')->name('destroy');
});

Route::get('/comparison/public/{access_token}/{category}', [ComparisonController::class, 'showPublic'])->name('comparison.showPublic');


Route::resource('category', CategoryController::class);
Route::resource('product', ProductController::class);
Route::resource('review', ReviewController::class);
Route::resource('product_set', ProductSetController::class);
Route::resource('question', QuestionController::class);
Route::resource('reply', ReplyController::class);
Route::resource('vote', VoteController::class);
Route::resource('report', ReportController::class);
Route::resource('order', OrderController::class);
Route::resource('characteristic', CharacteristicController::class);
Route::resource('advertisement', AdvertisementController::class);


Route::controller(ProductActionsController::class)->name('product.')->prefix('/product/{product}')
                                                                    ->group(function (){
        Route::get('/', 'description')->name('description');
        Route::get('characteristics', 'characteristics')->name('characteristics');
        Route::get('reviews', 'reviews')->name('reviews');
        Route::get('questions', 'questions')->name('questions');
        Route::get('videos', 'videos')->name('videos');
        Route::get('buy_together', 'buy_together')->name('buy_together');
});

Route::post('/product_set/{productSetId}/restore', [ProductSetController::class, 'restore'])->name('product_set.restore');

Route::post('/characteristic/for_category/{category}', [CharacteristicController::class, 'forCategory'])->name('characteristic.for_category');

Route::get('/checkout', [OrderController::class, 'checkout'])->name('checkout');


Route::prefix('account')->group(function () {
    Route::view('/', 'account')->name('account');
    Route::get('/visited_products', [VisitsController::class, 'show'])->name('account.visited_products');

    Route::get('/favorite_news', [UserController::class, 'favorite_news'])->name('account.favorite_news');
});

Route::delete('/visit/{product}', [VisitsController::class, 'destroy'])->name('visit.destroy');
Route::post('/visit/clearAll', [VisitsController::class, 'clearAll'])->name('visit.clear_all');


Route::post('/register-user', [UserController::class, 'register'])->name('register-user');
Route::post('/login-user', [UserController::class, 'login'])->name('login-user');


//News subscription
Route::post('/news/subscribe', [NewsSubscriptionController::class, 'create'])->name('news.subscribe');
Route::get('/news/confirm_subscription/{email}', [NewsSubscriptionController::class, 'store'])->name('news.confirm_subscription');
Route::get('/news/unsubscribe/{email}', [NewsSubscriptionController::class, 'destroy'])->name('news.unsubscribe');


//News
Route::resource('news', NewsController::class);
Route::post('/like', LikesController::class)->name('like');
Route::get('/news/clear_search/{filter}', [NewsSearchFilterController::class, 'clear'])->name('news.search.clear');


//Contacts
Route::get('/contacts', [ContactController::class, 'show'])->name('contacts');
Route::post('/contacts/reply/{contact_form_message}', [ContactController::class, 'store_reply'])->name('contacts.reply');
Route::get('/contacts/edit/{contact_form_message}', [ContactController::class, 'edit'])->name('contacts.edit');
Route::delete('/contacts/delete/{contact_form_message}', [ContactController::class, 'destroy'])->name('contacts.destroy');
Route::get('/contacts/index', [ContactController::class, 'index'])->name('admin.contacts.index');
Route::post('/contacts', [ContactController::class, 'store'])->name('contacts.store');


//Badges
Route::resource('badge', BadgeController::class);
Route::resource('badge_style', BadgeStyleController::class);


Route::get('/search_products', function() {
     $search_term = request('term');
     $product_search_results = Product::where('name', 'LIKE', "%$search_term%")
                                      ->take(8)
                                      ->get();

     $processed = [];
     foreach ($product_search_results as $product)  //reformat according to autocomplete plugin requirements
     {
         $processed[] = new class($product['id'], $product['name'], $product['name']){
             public function __construct(public $id, public $label, public $value) {}
         };
     }

     return $processed;
});

Route::fallback(fn() => view('404'));

require __DIR__.'/auth.php';
