<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminOrderActionsController;
use Illuminate\Support\Facades\Route;

Route::controller(AdminOrderActionsController::class)->name('order.actions.')->prefix('/order/{order}/')
    ->group(function () {
        Route::delete('/delete_product/{product}', 'delete_product')->name('delete_product');
        Route::delete('/delete_product_set/{product_set}', 'delete_product_set')->name('delete_product_set');

        Route::post('/change_quantity/product/{product}', 'change_product_quantity')->name('change_product_quantity');
        Route::post('/change_quantity/product_set/{product_set}', 'change_product_set_quantity')->name('change_product_set_quantity');

        Route::post('/add_product', 'add_product')->name('add_product');
        Route::post('/add_product_set', 'add_product_set')->name('add_product_set');
    });

Route::controller(AdminController::class)->prefix('admin-panel')
    ->middleware('authenticated')
    ->group(function () {
        Route::get('/', 'products')->name('admin.products.index');

        Route::get('/users', 'list_users')->name('admin.users.index');
        Route::get('/users/{user}', 'show_user')->name('admin.users.show');

        Route::get('/category/index', 'categories_index')->name('admin.categories.index');

        Route::get('/statistics', 'statistics')->name('admin.statistics');
        Route::get('/news', 'news')->name('admin.news.index');

        Route::post('/product/restore/{product_id}', 'restore_product')->name('admin.product.restore');

        Route::get('/advertisements', 'list_advertisements')->name('admin.advertisements.index');
});
