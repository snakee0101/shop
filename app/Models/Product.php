<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $appends = ['inDefaultWishlist', 'inCart'];
    protected $perPage = 48;

    protected $casts = [
        'price' => 'float',
        'quantity' => 'integer'
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

    public function getInDefaultWishlistAttribute()
    {
        if(auth()->user())
            return $this->inWishlist( auth()->user()->wishlists()->firstWhere('is_active', true) );

        return false;
    }

    public function getInCartAttribute()
    {
        return \Cart::getContent()->map( fn($item) => $item->associatedModel->id )
                                  ->contains($this->id);
    }

    public function characteristics()
    {
        return $this->belongsToMany(Characteristic::class)
                    ->withPivot('value');
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function photos()
    {
        return $this->morphMany(Photo::class, 'photos', 'object_type', 'object_id');
    }

    public function videos()
    {
        return $this->morphMany(Video::class, 'videos', 'object_type', 'object_id');
    }
}
