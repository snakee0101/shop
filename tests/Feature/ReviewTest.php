<?php

namespace Tests\Feature;

use App\Models\Review;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ReviewTest extends TestCase
{
    public function test_a_review_could_be_stored()
    {
        $review = Review::factory()->make();
        auth()->login( $review->author );

        $this->post( route('review.store'), $review->toArray() );

        $this->assertDatabaseHas('reviews', [
            'comment' => $review->comment
        ]);
    }
}
