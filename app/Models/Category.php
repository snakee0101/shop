<?php

namespace App\Models;

use App\Contracts\Categorizable;
use App\Traits\HasSubcategories;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model implements Categorizable
{
    use HasFactory, HasSubcategories;

    public $timestamps = false;
    protected $guarded = [];

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function characteristics()
    {
        return $this->hasMany(Characteristic::class);
    }

    public function advertisements()
    {
        return $this->hasMany(Advertisement::class);
    }
}
