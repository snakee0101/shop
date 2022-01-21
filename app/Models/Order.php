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
        return $this->morphedByMany(Product::class, 'item', 'order_item');
    }

    public function product_sets()
    {
        return $this->morphedByMany(ProductSet::class, 'item', 'order_item');
    }
}
