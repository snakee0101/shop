<?php

namespace Tests\Feature;

use App\Models\Review;
use App\Models\Vote;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class VoteTest extends TestCase
{
    public function test_example()
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
}
