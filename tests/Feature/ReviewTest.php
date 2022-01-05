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

        $review_array = $review->toArray();
        $review_array['comment'] = '';

        $this->post( route('review.store'),  $review_array)
             ->assertSessionHasErrors('comment');
    }

    public function test_advantages_and_disadvantages_are_required_together()
    {
        $review = Review::factory()->make();
        auth()->login( $review->author );

        $review_array = $review->toArray();

        $this->post( route('review.store'),  $review_array)
            ->assertSessionHasNoErrors();

        $review_array['advantages'] = '';

        $this->post( route('review.store'),  $review_array)
            ->assertSessionHasErrors('advantages');

        $review_array = $review->toArray();
        $review_array['disadvantages'] = '';

        $this->post( route('review.store'),  $review_array)
            ->assertSessionHasErrors('disadvantages');

        $review_array = $review->toArray();
        $review_array['advantages'] = '';
        $review_array['disadvantages'] = '';
        $this->post( route('review.store'),  $review_array)
            ->assertSessionHasNoErrors();
    }
}
