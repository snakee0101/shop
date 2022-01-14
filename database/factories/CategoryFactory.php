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
            'name' => $this->faker->word,
            'image_url' => '/images/products/product-1.jpg'
        ];
    }

    public function withParent(Category $category)
    {
        return $this->state(function (array $attributes) use ($category) {
            return [
                'parent_id' => $category->id,
            ];
        });
    }
}
