<?php

namespace Tests\Feature;

use App\Models\Review;
use App\Models\Vote;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class VoteTest extends TestCase
{
    public function test_review_could_be_votes()
    {
        $review = Review::factory()->create();

        $this->actingAs( $review->author );
        $this->post( route('vote.store'), [
            'object_id' => $review->id,
            'object_type' => $review::class,
            'value' => -1
        ]);

        $this->assertDatabaseHas('votes', [
            'object_id' => $review->id,
            'object_type' => $review::class,
            'value' => -1
        ]);
    }

    public function test_when_object_is_voted_statistics_is_returned()
    {
        $review = Review::factory()->create();

        $this->actingAs( $review->author );
        $this->post( route('vote.store'), [
            'object_id' => $review->id,
            'object_type' => $review::class,
            'value' => -1
        ])->assertJson([
            'for_count' => 0,
            'against_count' => 1
        ]);
    }
}
