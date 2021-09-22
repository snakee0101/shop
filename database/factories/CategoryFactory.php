<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Foundation\Testing\WithFaker;

class CategoryFactory extends Factory
{
    use WithFaker;

    protected $model = Category::class;

    public function definition()
    {
        return [
            'name' => $this->faker->sentence
        ];
    }
}
