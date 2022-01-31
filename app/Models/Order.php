<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $dates = ['shipping_date'];
    protected $guarded = [];

    public function credentials()
    {
        return $this->hasOne(OrderCredentials::class);
    }

    public function products()
    {
        return $this->morphedByMany(Product::class, 'item', 'order_item')
                    ->withPivot('quantity');
    }

    public function product_sets()
    {
        return $this->morphedByMany(ProductSet::class, 'item', 'order_item')
                    ->withPivot('quantity');
    }

    public function getTotalAttribute()
    {
        return $this->products->sum( fn($product) => $product->priceWithDiscount )
             + $this->product_sets->sum( fn($product) => $product->priceWithDiscount );
    }
}
