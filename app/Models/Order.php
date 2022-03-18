<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $dates = ['shipping_date'];
    protected $guarded = [];

    public function owner()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function credentials()
    {
        return $this->hasOne(OrderCredentials::class)->withDefault([
            'first_name' => $this->owner->first_name,
            'last_name' => $this->owner->last_name,
            'phone' => $this->owner->phone,
            'email' => $this->owner->email
        ]);
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
        return $this->products->sum( fn($product) => $product->priceWithDiscount * $product->pivot->quantity )
             + $this->product_sets->sum( fn($product_set) => $product_set->priceWithDiscount * $product_set->pivot->quantity );
    }

    public function getProductSubtotalAttribute()
    {
        return $this->products->sum( fn($product) => $product->priceWithDiscount * $product->pivot->quantity );
    }

    public function getProductSetSubtotalAttribute()
    {
        return $this->product_sets->sum( fn($product_set) => $product_set->priceWithDiscount * $product_set->pivot->quantity );
    }
}
