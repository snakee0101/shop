<?php

namespace App\Models;

use App\Traits\HasVotes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory, HasVotes;

    protected $guarded = [];
    protected $appends = ['is_voted', 'vote', 'vote_statistics'];
    protected $with = ['votes', 'photos', 'videos', 'replies', 'author'];

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }

    public function replies()
    {
        return $this->morphMany(Reply::class, 'replies', 'object_type', 'object_id');
    }

    public function photos()
    {
        return $this->morphMany(Photo::class, 'photos', 'object_type', 'object_id');
    }

    public function videos()
    {
        return $this->morphMany(Video::class, 'videos', 'object_type', 'object_id');
    }
}
