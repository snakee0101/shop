<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $withCount = ['products'];

    public function subCategories()
    {
        return $this->hasMany(self::class, 'parent_id', 'id');
    }

    public function parentCategory()
    {
        return $this->belongsTo(self::class, 'parent_id', 'id');
    }

    public function hasSubCategories() : bool
    {
        return $this->subCategories()->exists();
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public static function topLevelCategories() :Builder
    {
        return static::whereNull('parent_id');
    }

    public function characteristics()
    {
        return $this->hasMany(Characteristic::class);
    }
}
