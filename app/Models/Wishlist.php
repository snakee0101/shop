<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    use HasFactory;

    protected $appends = ['products_json'];
    public $timestamps = false;

    public function owner()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function products()
    {
        return $this->belongsToMany(Product::class)
                    ->withTimestamps();
    }

    public function getProductsJsonAttribute()
    {
        return $this->products;
    }
}
