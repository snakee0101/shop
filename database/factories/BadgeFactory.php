<?php

namespace Database\Factories;

use App\Models\BadgeStyle;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Foundation\Testing\WithFaker;

class BadgeFactory extends Factory
{
    use WithFaker;

    public function definition()
    {
        return [
            'text' => $this->faker->word(),
            'product_id' => Product::factory(),
            'badge_style_id' => BadgeStyle::factory()
        ];
    }
}
