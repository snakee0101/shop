<?php

namespace Database\Factories;

use App\Models\NewsCategory;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Foundation\Testing\WithFaker;

class NewsCategoryFactory extends Factory
{
    use WithFaker;

    public function definition()
    {
        return [
            'name' => $this->faker->word,
        ];
    }

    public function withParentNewsCategory(NewsCategory $category)
    {
        return $this->state(function (array $attributes) use ($category) {
            return [
                'parent_id' => $category->id,
            ];
        });
    }
}
