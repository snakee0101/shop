<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Foundation\Testing\WithFaker;

class BadgeStyleFactory extends Factory
{
    use WithFaker;

    public function definition()
    {
        return [
            'text_color' => $this->faker->hexColor(),
            'background_color' => $this->faker->hexColor()
        ];
    }
}
