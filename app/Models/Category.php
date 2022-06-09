<?php

namespace App\Models;

use App\Traits\HasSubcategories;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
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
}
