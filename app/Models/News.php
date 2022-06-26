<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Laravel\Scout\Searchable;

class News extends Model
{
    use HasFactory, Searchable;

    protected $appends = ['is_liked'];  //JSON representation of this model must contain is_liked attribute - it is for vue component that checks whether current user liked an article

    public function toSearchableArray()
    {
        $tags_array = $this->tags->pluck('id')->toArray();
        $string_tags_array = array_map(function ($item){
            return (string)$item;
        }, $tags_array);

        return [
            'id' => $this->id,
            'caption' => $this->caption,
            'content' => strip_tags( $this->content ),
            'category_id' => $this->news_category_id,
            'tags' => $string_tags_array
        ];
    }

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

    public function liked_users()
    {
        return $this->belongsToMany(User::class, 'likes');
    }

    public function getIsLikedAttribute()
    {
        return $this->liked_users()->where('user_id', auth()->id())
                                   ->exists();
    }

    public function scopePopular()
    {
        return static::withCount('liked_users')
                     ->orderBy('liked_users_count', 'desc');
    }
}
