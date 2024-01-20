<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

/**
 * Advertisements are bound to specific category and
 * contain products, that must be added manually
 */

class Advertisement extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $guarded = [];
    protected $dates = ['start_date', 'end_date'];

    protected static function boot()
    {
        parent::boot();

        static::deleting(function (self $ad) {
            Storage::delete($ad->image_url_square);
            Storage::delete($ad->image_url_rectangle);
        });
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }

    public function scopeUncategorized(Builder $query)
    {
        return $query->whereNull('category_id');
    }

    public function scopeNotExpired(Builder $query)
    {
        return $query->whereDate('end_date', '>', now());
    }
}
