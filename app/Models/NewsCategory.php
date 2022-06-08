<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsCategory extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function news()
    {
        return $this->hasMany(News::class);
    }

    public function parent_category()
    {
        return $this->belongsTo(self::class, 'parent_id');
    }
}
