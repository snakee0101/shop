<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductSet extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $appends = ['products_json'];

    public function products()
    {
        return $this->belongsToMany(Product::class, 'product_set_product');
    }

    public function getProductsJsonAttribute()
    {
        return $this->products;
    }
}
