<?php

namespace App\Traits;

use App\Models\Vote;

trait HasVotes
{
    public function votes()
    {
        return $this->morphMany(Vote::class, 'votes', 'object_type', 'object_id');
    }

    public function getVoteStatisticsAttribute()
    {
        return [
            'for_count' => $this->votes
                                ->where('value', +1)
                                ->count(),
            'against_count' => $this->votes
                                    ->where('value', -1)
                                    ->count()
        ];
    }

    public function getIsVotedAttribute()
    {
        return $this->votes
                    ->contains( fn($vote) => $vote->user_id == auth()->id() );
    }

    public function getVoteAttribute()
    {
        return ($this->is_voted) ? $this->votes
                                        ->firstWhere('user_id', auth()->id())
                                        ->value
                                 : 0;
    }
}
