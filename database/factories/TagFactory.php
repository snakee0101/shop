<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Foundation\Testing\WithFaker;

class TagFactory extends Factory
{
    use WithFaker;

    public function definition()
    {
        return [
            'name' => $this->faker->word
        ];
    }
}
