<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class News extends Model
{
    use HasFactory;

    public function category()
    {
        return $this->belongsTo(NewsCategory::class, 'news_category_id');
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function excerpt()
    {
        return Str::limit($this->content);
    }
}
