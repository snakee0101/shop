<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Wishlist;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Foundation\Testing\WithFaker;

class WishlistFactory extends Factory
{
    use WithFaker;

    protected $model = Wishlist::class;

    public function definition()
    {
        return [
            'name' => $this->faker->sentence,
            'user_id' => User::factory(),
            'is_active' => true,
            'access_token' => $this->faker->word
        ];
    }
}
