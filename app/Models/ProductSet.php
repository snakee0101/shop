<?php

namespace App\Models;

use App\Contracts\Purchaseable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductSet extends Model implements Purchaseable
{
    use HasFactory;
    public $timestamps = false;

    protected $appends = ['inCart', 'ObjectType', 'price'];
    protected $with = ['products'];

    /*
     * Name and Price attributes are mandatory to add an object to cart
     * */
    public function getNameAttribute()
    {
        return $this->products->implode('name', ' + ');
    }

    /**
     * Price is calculated based on total price without discount
     * */
    public function getPriceAttribute()
    {
        return ($this->discount()->exists()) ? $this->discount->apply()
                                             : $this->products()->sum('price');
    }

    public function getObjectTypeAttribute()
    {
        return __CLASS__;
    }

    public function getInCartAttribute() :bool
    {
        return \Cart::getContent()->contains(
            fn($item) => $this->is($item->associatedModel)
        );
    }

    public function products()
    {
        return $this->belongsToMany(Product::class, 'product_set_product');
    }

    public static function whereContainsProduct(Product $product) :Builder
    {
        return ProductSet::whereHas('products', function ($query) use ($product) {
            $query->where('products.id', $product->id);
        });
    }

    public function discount()
    {
        return $this->morphOne(Discount::class, 'object');
    }

    /**
     * Price without discount is a sum of products price without discount.
     * So, specific products' discounts are not taken into account.
     * */
    public function getPriceWithoutDiscountAttribute()
    {
        return $this->products->sum( fn($item) => $item->priceWithoutDiscount);
    }
}
