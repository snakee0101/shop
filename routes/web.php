<?php

use App\Models\Product;
use Illuminate\Support\Facades\Route;
use App\Models\Category;
use App\Http\Controllers\CategoryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $filtering_group_1_products = Product::limit(10)->get();

    return view('index-2', [
        'filtering_group_1_products' => $filtering_group_1_products
    ]);
})->name('index-2');

Route::resource('wishlist', \App\Http\Controllers\WishlistController::class)->except(['create', 'show', 'edit'])->middleware('authenticated');
Route::get('/wishlist/show/{wishlist_access_token}', [\App\Http\Controllers\WishlistController::class, 'show'])->name('wishlist.show_guest');
Route::post('/wishlist/{wishlist}/{product}', [\App\Http\Controllers\WishlistProductController::class, 'toggle'])->name('wishlist_product.toggle');
Route::get('/wishlist/toggle/{product}', [\App\Http\Controllers\WishlistProductController::class, 'toggle_default'])->name('wishlist_product.toggle_default');
Route::get('/wishlist/{wishlist}/set_default', [\App\Http\Controllers\WishlistProductController::class, 'set_default'])->name('wishlist.set_default');
Route::post('/wishlist/{wishlist}/{product}/move', [\App\Http\Controllers\WishlistProductController::class, 'move'])->name('wishlist.move');


Route::get('/cart', [\App\Http\Controllers\CartController::class, 'show'])->name('cart.index');
Route::get('/cart/add/{product}/{quantity}', [\App\Http\Controllers\CartController::class, 'add'])->name('cart.add');
Route::delete('/cart/delete/{cart_row_id}', [\App\Http\Controllers\CartController::class, 'destroy'])->name('cart.destroy');
Route::post('/cart/update_quantity/{cart_row_id}', [\App\Http\Controllers\CartController::class, 'update_quantity'])->name('cart.update_quantity');

Route::view('/checkout', 'checkout')->name('checkout');
Route::view('/contacts', 'contact-us')->name('contacts');


Route::get('/product/{product}', [\App\Http\Controllers\ProductController::class, 'description'])->name('product.description');
Route::get('/product/{product}/characteristics', [\App\Http\Controllers\ProductController::class, 'characteristics'])->name('product.characteristics');
Route::get('/product/{product}/reviews', [\App\Http\Controllers\ProductController::class, 'reviews'])->name('product.reviews');
Route::get('/product/{product}/questions', [\App\Http\Controllers\ProductController::class, 'questions'])->name('product.questions');
Route::get('/product/{product}/videos', [\App\Http\Controllers\ProductController::class, 'videos'])->name('product.videos');
Route::get('/product/{product}/buy_together', [\App\Http\Controllers\ProductController::class, 'buy_together'])->name('product.buy_together');

Route::resource('review', \App\Http\Controllers\ReviewController::class);
Route::resource('question', \App\Http\Controllers\QuestionController::class);
Route::resource('reply', \App\Http\Controllers\ReplyController::class);
Route::resource('vote', \App\Http\Controllers\VoteController::class);
Route::resource('report', \App\Http\Controllers\ReportController::class);


Route::prefix('account')->group(function () {
    Route::view('/', 'account')->name('account');
});



Route::resource('category', CategoryController::class);
Route::redirect('/catalog', route('category.index'));

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::post('/register-user', [\App\Http\Controllers\UserController::class, 'register'])->name('register-user');
Route::post('/login-user', [\App\Http\Controllers\UserController::class, 'login'])->name('login-user');

Route::fallback(fn() => view('404'));

require __DIR__.'/auth.php';
