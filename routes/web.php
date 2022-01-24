<?php

use App\Http\Controllers\{AddToCartController, CartController, OrderController};
use App\Http\Controllers\{ProductController, UserController, VoteController};
use App\Http\Controllers\{QuestionController, ReviewController, ReplyController};
use App\Http\Controllers\ReportController;
use App\Http\Controllers\{ComparisonController,
    CouponController,
    VisitsController,
    WishlistController,
    WishlistProductController};

use App\Models\Product;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;



Route::get('/', function () {
    $filtering_group_1_products = Product::limit(10)->get();

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


Route::controller(ProductController::class)->name('product.')->prefix('/product/{product}')
                                                             ->group(function (){
    Route::get('/', 'description')->name('description');
    Route::get('characteristics', 'characteristics')->name('characteristics');
    Route::get('reviews', 'reviews')->name('reviews');
    Route::get('questions', 'questions')->name('questions');
    Route::get('videos', 'videos')->name('videos');
    Route::get('buy_together', 'buy_together')->name('buy_together');
});



Route::controller(ComparisonController::class)->middleware('authenticated')->prefix('comparison')
                                              ->name('comparison.')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('{category}', 'show')->name('show');
    Route::post('{product}', 'store')->name('store');
    Route::delete('{product}', 'destroy')->name('destroy');
});

Route::get('/comparison/public/{access_token}/{category_id}', [ComparisonController::class, 'showPublic'])->name('comparison.showPublic');


Route::resource('review', ReviewController::class);
Route::resource('question', QuestionController::class);
Route::resource('reply', ReplyController::class);
Route::resource('vote', VoteController::class);
Route::resource('report', ReportController::class);
Route::resource('order', OrderController::class);


Route::get('/checkout', [OrderController::class, 'checkout'])->name('checkout');


Route::prefix('account')->group(function () {
    Route::view('/', 'account')->name('account');
    Route::get('/visited_products', [VisitsController::class, 'show'])->name('account.visited_products');
});

Route::delete('/visit/{product}', [VisitsController::class, 'destroy'])->name('visit.destroy');
Route::post('/visit/clearAll', [VisitsController::class, 'clearAll'])->name('visit.clear_all');


Route::resource('category', CategoryController::class);
Route::redirect('/catalog', route('category.index'));

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::post('/register-user', [UserController::class, 'register'])->name('register-user');
Route::post('/login-user', [UserController::class, 'login'])->name('login-user');

Route::fallback(fn() => view('404'));

require __DIR__.'/auth.php';
