<?php

namespace App\Models;

use App\Contracts\Purchaseable;
use App\Traits\HasDiscounts;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model implements Purchaseable
{
    use HasFactory, HasDiscounts;

    protected $appends = ['inDefaultWishlist', 'inCart', 'ReviewStarsAverage', 'inComparison', 'ObjectType', 'PriceWithDiscount'];
    protected $perPage = 48;
    protected $withCount = ['reviews'];
    protected $with = ['discount', 'photos'];
    protected $guarded = [];

    protected $casts = [
        'price' => 'float',
        'quantity' => 'integer'
    ];

    public const STATUS_IN_STOCK = 'In Stock';
    public const STATUS_ENDS = 'Ends';
    public const STATUS_OUT_OF_STOCK = 'Out Of Stock';

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
            fn($item) => $this->is($item->associatedModel)
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
            auth()->user()?->visited_products()->attach($this);  //invalid visits must be ignored
        } catch(\Exception $e) {}
    }

    public function getAllBoughtTogetherProductsAttribute()
    {
        $current_product_id = $this->id;

        $completed_orders_that_contain_current_product = Order::whereHas('products', function($query) use ($current_product_id) {
            $query->where('products.id', $current_product_id);
        })->whereStatus('completed')->get();

        $all_order_products = $completed_orders_that_contain_current_product->flatMap( fn($order) => $order->products );


        $unique_products = $all_order_products->unique( fn($product) => $product->id );

        $products_that_dont_contain_current_product = $unique_products->reject( fn($product) => $product->id == $this->id );

        return $products_that_dont_contain_current_product;
    }

    public function getGroupedBoughtTogetherProductsAttribute()
    {
        $products = $this->allBoughtTogetherProducts;

        return $products->groupBy( function($product) {
            return $product->category_id;
        } )->take(10);
    }
}
