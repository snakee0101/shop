<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $casts = [
        'price' => 'float'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function inWishlist(Wishlist $wishlist) :bool
    {
        return $wishlist->products()
                        ->where('products.id', $this->id)
                        ->exists();
    }
}
