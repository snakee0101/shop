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

Route::resource('wishlist', \App\Http\Controllers\WishlistController::class)->middleware('authenticated');
Route::post('/wishlist/{wishlist}/{product}', [\App\Http\Controllers\WishlistProductController::class, 'toggle'])->name('wishlist_product.toggle');

Route::view('/cart', 'cart')->name('cart.index');
Route::view('/checkout', 'checkout')->name('checkout');
Route::view('/contacts', 'contact-us')->name('contacts');


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
