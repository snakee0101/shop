<?php

namespace App\Traits;

use Illuminate\Database\Eloquent\Builder;

trait HasSubcategories
{
    public function parentCategory()
    {
        return $this->belongsTo(static::class, 'parent_id', 'id')
            ->withDefault([
                'name' => '-'
            ]);
    }

    public function subCategories()
    {
        return $this->hasMany(static::class, 'parent_id', 'id');
    }

    public function hasSubCategories(): bool
    {
        return $this->subCategories()->exists();
    }

    public static function topLevelCategories(): Builder
    {
        return static::whereNull('parent_id');
    }
}
