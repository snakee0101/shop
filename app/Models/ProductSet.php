<?php

namespace App\Models;

use App\Contracts\Purchaseable;
use App\Traits\HasDiscounts;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductSet extends Model implements Purchaseable
{
    use HasFactory, HasDiscounts;

    public $timestamps = false;

    protected $appends = ['inCart', 'ObjectType', 'PriceWithDiscount', 'price'];
    protected $with = ['products', 'discount'];

    /*
     * Name and Price attributes are mandatory to add an object to cart
     * */
    public function getNameAttribute()
    {
        return $this->products->implode('name', ' + ');
    }

    /**
     * If the product set discount exists - individual product price is returned without discount.
     * But if there is no product set discount - discounts may be applied on individual products.
     * */
    public function getPriceAttribute()
    {
        return $this->discount()->exists() ? $this->products->sum('price')
                                           : $this->products->sum(fn($product) => $product->priceWithDiscount);
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
}
