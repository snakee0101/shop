<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $guarded = [];

    public function subCategories()
    {
        return $this->hasMany(self::class, 'parent_id', 'id');
    }

    public function parentCategory()
    {
        return $this->belongsTo(self::class, 'parent_id', 'id')
                    ->withDefault([
                        'name' => '-'
                    ]);
    }

    public function hasSubCategories(): bool
    {
        return $this->subCategories()->exists();
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public static function topLevelCategories(): Builder
    {
        return static::whereNull('parent_id');
    }

    public function characteristics()
    {
        return $this->hasMany(Characteristic::class);
    }

    public function breadcrumbsMenu()
    {
        $categories_list_reversed = [$category = $this]; //category 3 > category 2 > category 1

        while($category->parent_id != null)
            $categories_list_reversed[] = $category = $category->parentCategory; //recursively search for categories

        return array_reverse($categories_list_reversed); //category 1 > category 2 > category 3
    }
}
