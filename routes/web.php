<?php

use App\Http\Controllers\{AddToCartController, CartController, OrderController};
use App\Http\Controllers\{ProductActionsController, UserController, VoteController};
use App\Http\Controllers\{QuestionController, ReviewController, ReplyController};
use App\Http\Controllers\ReportController;
use App\Http\Controllers\{AdminController,
    AdminOrderActionsController,
    CharacteristicController,
    ComparisonController,
    CouponController,
    NewsSubscriptionController,
    ProductController,
    ProductSetController,
    VisitsController,
    WishlistController,
    WishlistProductController};

use App\Models\Product;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;



Route::get('/', function () {
    $filtering_group_1_products = Product::limit(10)->get()->loadAvg('reviews', 'rating');

    return view('index-2', [
        'filtering_group_1_products' => $filtering_group_1_products
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

Route::view('/contacts', 'contact-us')->name('contacts');

Route::controller(AdminOrderActionsController::class)->name('order.actions.')->prefix('/order/{order}/')
                                                                             ->group(function (){
   Route::delete('/delete_product/{product}', 'delete_product')->name('delete_product');
   Route::delete('/delete_product_set/{product_set}', 'delete_product_set')->name('delete_product_set');

   Route::post('/change_quantity/product/{product}', 'change_product_quantity')->name('change_product_quantity');
   Route::post('/change_quantity/product_set/{product_set}', 'change_product_set_quantity')->name('change_product_set_quantity');

   Route::post('/add_product', 'add_product')->name('add_product');
   Route::post('/add_product_set', 'add_product_set')->name('add_product_set');
});

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
});

Route::delete('/visit/{product}', [VisitsController::class, 'destroy'])->name('visit.destroy');
Route::post('/visit/clearAll', [VisitsController::class, 'clearAll'])->name('visit.clear_all');


Route::post('/register-user', [UserController::class, 'register'])->name('register-user');
Route::post('/login-user', [UserController::class, 'login'])->name('login-user');


Route::controller(AdminController::class)->prefix('admin-panel')
                                         ->middleware('authenticated')
                                         ->group(function(){
    Route::get('/', 'products')->name('admin.products.index');

    Route::get('/users', 'list_users')->name('admin.users.index');
    Route::get('/users/{user}', 'show_user')->name('admin.users.show');

    Route::get('/category/index', 'categories_index')->name('admin.categories.index');

    Route::get('/statistics', 'statistics')->name('admin.statistics');

    Route::post('/product/restore/{product_id}', 'restore_product')->name('admin.product.restore');
});

Route::post('/news/subscribe', [NewsSubscriptionController::class, 'store'])->name('news.subscribe');
Route::delete('/news/unsubscribe/{email}', [NewsSubscriptionController::class, 'destroy'])->name('news.unsubscribe');


Route::fallback(fn() => view('404'));

require __DIR__.'/auth.php';
