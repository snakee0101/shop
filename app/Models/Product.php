<?php

namespace App\Models;

use App\Contracts\Purchaseable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model implements Purchaseable
{
    use HasFactory;
    protected $appends = ['inDefaultWishlist', 'inCart', 'ReviewStarsAverage', 'inComparison', 'ObjectType'];
    protected $perPage = 48;
    protected $withCount = ['reviews'];

    protected $casts = [
        'price' => 'float',
        'quantity' => 'integer'
    ];

    public function getObjectTypeAttribute()
    {
        return __CLASS__;
    }

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

    public function getInComparisonAttribute() :bool
    {
        return auth()->check() && auth()->user()->comparison()
                    ->where('products.id', $this->id)
                    ->exists();
    }


    public function getInDefaultWishlistAttribute()
    {
        return auth()->check() && $this->inWishlist( auth()->user()->default_wishlist );
    }

    public function getInCartAttribute() :bool
    {
        return \Cart::getContent()->contains(
            fn($item) => ($item->associatedModel->id == $this->id) &&
                         ($this->object_type == $item->associatedModel->object_type)
        );
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

    public function questions()
    {
        return $this->hasMany(Question::class);
    }

    public function getReviewStarsAverageAttribute()
    {
        return round( $this->reviews()->avg('rating') );
    }

    public function photos()
    {
        return $this->morphMany(Photo::class, 'photos', 'object_type', 'object_id');
    }

    public function videos()
    {
        return $this->morphMany(Video::class, 'videos', 'object_type', 'object_id');
    }

    public function visit()
    {
        try {
            if(auth()->check())
                auth()->user()->visited_products()->attach($this);
        } catch(\Exception) {}
    }
}
