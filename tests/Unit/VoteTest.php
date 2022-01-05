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

    public function test_review_knows_its_votes_statistics()
    {
        $review = Review::factory()->create();

        Vote::factory()->count(3)
            ->withObject($review)
            ->create(['value' => +1]);

        Vote::factory()->count(2)
            ->withObject($review)
            ->create(['value' => -1]);

        $this->assertEquals([
            'for_count' => 3,
            'against_count' => 2
        ], $review->fresh()->vote_statistics);
    }
}
