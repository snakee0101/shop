<?php

namespace App\Models;

use App\Contracts\Purchaseable;
use App\Traits\HasDiscounts;
use App\Traits\IndexPageCollections;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Scout\Searchable;

class Product extends Model implements Purchaseable
{
    use HasFactory, HasDiscounts, SoftDeletes, Searchable;

    protected $appends = ['inDefaultWishlist', 'inCart', 'inComparison', 'ObjectType', 'PriceWithDiscount'];
    protected $perPage = 48;
    protected $withCount = ['reviews'];
    protected $with = ['photos', 'badge'];
    protected $guarded = [];

    protected $casts = [
        'price' => 'float',
        'quantity' => 'integer'
    ];

    public const STATUS_IN_STOCK = 'In Stock';
    public const STATUS_ENDS = 'Ends';
    public const STATUS_OUT_OF_STOCK = 'Out Of Stock';

    public function toSearchableArray()
    {
        return [
            'name' => $this->name
        ];
    }

    public function getObjectTypeAttribute()
    {
        return __CLASS__;
    }

    public function badge()
    {
        return $this->hasOne(Badge::class)->with('style');
    }

    public function is_badge_text_corresponds_to_discount_value()
    {
        if ($this->discount) {
            $discount_unit = ($this->discount->discount_classname == \App\Discounts\FixedPriceDiscount::class) ? '$' : '%';

            return str_contains($this->badge->text, $this->discount->value) && str_ends_with($this->badge->text, $discount_unit);
        } else {
            return false;
        }
    }

    public function orders()
    {
        return $this->morphToMany(Order::class, 'item', 'order_item')
                    ->withPivot('quantity');
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function getInComparisonAttribute() :bool
    {
        return auth()->check() && auth()->user()->comparison()
                    ->where('products.id', $this->id)
                    ->exists();
    }

    public function getInDefaultWishlistAttribute()
    {
        return auth()->check() && auth()->user()->default_wishlist
                                                ->products()
                                                ->where('products.id', $this->id)
                                                ->exists();
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

    public function photos()
    {
        return $this->morphMany(Photo::class, 'photos', 'object_type', 'object_id');
    }

    public function videos()
    {
        return $this->morphMany(Video::class, 'videos', 'object_type', 'object_id');
    }

    public function product_sets()
    {
        return $this->belongsToMany(ProductSet::class, 'product_set_product');
    }

    public function visit()
    {
        try {
            auth()->user()?->visited_products()->attach($this);  //invalid visits must be ignored
        } catch(\Exception $e) {}
    }

    public function getAllBoughtTogetherProducts()
    {
        $completed_orders_that_contain_current_product = Order::whereStatus('completed')
                                                              ->whereRelation('products', 'products.id', $this->id)
                                                              ->get();

        return $completed_orders_that_contain_current_product->flatMap( fn($order) => $order->products ) //get all products in orders
                                                             ->unique( fn($product) => $product->id )   //remove product duplications
                                                             ->reject( fn($product) => $product->id == $this->id ); //"bought together" products must not contain current product
    }

    public function getGroupedBoughtTogetherProducts()
    {
        $products = $this->getAllBoughtTogetherProducts();

        return $products->groupBy( function($product) {
            return $product->category_id;
        } )->take(10);
    }
}
