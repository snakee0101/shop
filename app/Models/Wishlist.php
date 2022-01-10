<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Wishlist extends Model
{
    use HasFactory;

    protected $appends = ['products_json'];
    public $timestamps = false;
    protected $guarded = [];
    protected $casts = [
      'is_active' => 'boolean'
    ];

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

    public static function createDefault(User $user)
    {
        $user->wishlists()->create([
            'name' => 'My wishlist',
            'access_token' => Str::uuid(),
            'is_active' => true
        ]);
    }
}
