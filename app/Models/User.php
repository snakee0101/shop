<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $guarded = [];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function wishlists()
    {
        return $this->hasMany(Wishlist::class);
    }

    public function getDefaultWishlistAttribute()
    {
        return $this->wishlists()->firstWhere('is_active', true);
    }

    public function comparison()
    {
        return $this->belongsToMany(Product::class, 'comparison');
    }

    public function comparison_link($category_id)
    {
        return $_SERVER['HTTP_HOST'] . "/comparison/public/{$this->comparison_access_token}/{$category_id}";
    }

    public function visited_products()
    {
        return $this->belongsToMany(Product::class, 'visited_products')
                    ->withTimestamps()
                    ->orderByDesc('created_at');
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function questions()
    {
        return $this->hasMany(Question::class);
    }

    public function replies()
    {
        return $this->hasMany(Reply::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function reports()
    {
        return $this->hasMany(Report::class);
    }

    public function votes()
    {
        return $this->hasMany(Vote::class);
    }

    public function videos()
    {
        return $this->hasMany(Video::class);
    }

    public function photos()
    {
        return $this->hasMany(Photo::class);
    }
}
