<?php

namespace App\Models;

use App\Contracts\Categorizable;
use App\Traits\HasSubcategories;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model implements Categorizable
{
    use HasFactory, HasSubcategories;

    public $timestamps = false;
    protected $guarded = [];

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function characteristics()
    {
        return $this->hasMany(Characteristic::class);
    }

    public function advertisements()
    {
        return $this->hasMany(Advertisement::class);
    }

    public static function popular($limit = 6) :array
    {
        $statistics = []; //[category_id => total number of category occurrences in all orders]

        Order::recent()->with('products')->get()->each(function ($order) use (&$statistics) {    //go through all orders
            $order->products->each(function($product) use (&$statistics) {  //and all products of these orders
                $statistics[ $product->category_id ] ??= 0;  //initialize category counter cell
                $statistics[ $product->category_id ] += $product->pivot->quantity; //increment category counter for current product
            });
        });

        return collect($statistics)->sortByDesc( fn($occurrences) => $occurrences )
                                   ->slice(0, $limit)
                                   ->toArray();   //select only first $count categories and order them by descending of occurrences count
    }
}
