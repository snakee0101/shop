<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $appends = ['is_voted', 'vote', 'vote_statistics'];

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function replies()
    {
        return $this->morphMany(Reply::class, 'replies', 'object_type', 'object_id');
    }

    public function votes()
    {
        return $this->morphMany(Vote::class, 'votes', 'object_type', 'object_id');
    }

    public function photos()
    {
        return $this->morphMany(Photo::class, 'photos', 'object_type', 'object_id');
    }

    public function videos()
    {
        return $this->morphMany(Video::class, 'videos', 'object_type', 'object_id');
    }

    public function getVoteStatisticsAttribute()
    {
        return [
            'for_count' => $this->votes()->where('value', +1)->count(),
            'against_count' => $this->votes()->where('value', -1)->count()
        ];
    }

    public function getIsVotedAttribute()
    {
        return $this->votes()
                    ->where('user_id', auth()->id())
                    ->exists();
    }

    public function getVoteAttribute()
    {
        return ($this->is_voted) ? $this->votes()->firstWhere('user_id', auth()->id())->value
                                 : 0;
    }
}
