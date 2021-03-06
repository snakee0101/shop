<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function news()
    {
        return $this->belongsToMany(News::class);
    }

    public function scopePopular()
    {
        return static::withCount('news')
                     ->orderBy('news_count', 'desc');
    }
}
