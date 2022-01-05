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

    public function test_review_comment_is_required()
    {
        $review = Review::factory()->make();
        auth()->login( $review->author );

        $revie_array = $review->toArray();
        $revie_array['comment'] = '';

        $this->post( route('review.store'),  $revie_array)
             ->assertSessionHasErrors('comment');
    }
}
