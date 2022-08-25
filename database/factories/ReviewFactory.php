<?php

namespace Database\Factories;

use App\Models\Product;
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
         'product_id' => Product::factory(),
         'rating' => $this->faker->numberBetween(1,5),
         'comment' => $this->faker->sentence,
         'advantages' => $this->faker->sentence,
         'disadvantages' => $this->faker->sentence,
         'notify_on_reply' => false,
        ];
    }
}
