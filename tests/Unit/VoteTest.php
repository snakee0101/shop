<?php

namespace Tests\Unit;

use App\Models\Review;
use App\Models\Vote;
use Tests\TestCase;

class VoteTest extends TestCase
{
    public function test_review_has_many_votes()
    {
        $review = Review::factory()->create();

        Vote::factory()->count(2)
                       ->withObject($review)
                       ->create();

        $this->assertInstanceOf(Vote::class, $review->fresh()->votes()->first());
        $this->assertCount(2, $review->fresh()->votes);
    }
}
