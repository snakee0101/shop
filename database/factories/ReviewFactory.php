<?php

namespace Database\Factories;

use App\Models\Review;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Foundation\Testing\WithFaker;

class ReviewFactory extends Factory
{
    use WithFaker;

    protected $model = Review::class;

    public function definition()
    {
        return [
         'user_id' => User::factory(),
         'rating' => $this->faker->numberBetween(1,5),
         'comment' => $this->faker->sentence,
         'parent_id' => null,
         'advantages' => $this->faker->sentence,
         'disadvantages' => $this->faker->sentence,
         'notify_on_reply' => false,
        ];
    }

    public function withParent(Review $review)
    {
        return $this->state(function (array $attributes) use ($review) {
            return [
                'parent_id' => $review->id
            ];
        });
    }
}
