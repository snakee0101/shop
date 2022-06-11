<?php

namespace App\Providers;

use App\Contracts\Purchaseable;
use App\Http\Controllers\AddToCartController;
use App\Http\Controllers\CartController;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->when(AddToCartController::class)
                  ->needs(Purchaseable::class)
                  ->give(function () {
                        $id = request('object_id');
                        $class = request('object_type');

                        return $class::findOrFail($id);
                  });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrap();

        Request::macro('whereKeyContains', function ($str) {
            return $this->collect()
                        ->filter( fn($value, $key) => str_contains($key, $str) );
        });
    }
}
