<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Foundation\Testing\WithFaker;

class NewsSubscriberFactory extends Factory
{
    use WithFaker;

    public function definition()
    {
        return [
            'email' => $this->faker->unique()->email
        ];
    }
}
