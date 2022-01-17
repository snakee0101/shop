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

    protected $appends = ['products_json', 'inCart', 'ObjectType', 'price'];

    public function getNameAttribute()
    {
        return $this->products->implode('name', ' + ');
    }

    public function getPriceAttribute()
    {
        return $this->products()->sum('price');
    }

    public function getObjectTypeAttribute()
    {
        return __CLASS__;
    }

    public function getInCartAttribute() :bool
    {
        return \Cart::getContent()->contains(
            fn($item) => ($item->associatedModel->id == $this->id) &&
                         ($this->object_type == $item->associatedModel->object_type)
        );
    }

    public function products()
    {
        return $this->belongsToMany(Product::class, 'product_set_product');
    }

    public function getProductsJsonAttribute()
    {
        return $this->products;
    }

    public static function whereContainsProduct(Product $product) :Builder
    {
        return ProductSet::whereHas('products', function ($query) use ($product) {
            $query->where('products.id', $product->id);
        });
    }
}
