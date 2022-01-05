<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    protected $guarded = [];

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
}
