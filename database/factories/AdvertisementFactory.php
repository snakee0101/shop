<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Foundation\Testing\WithFaker;

class AdvertisementFactory extends Factory
{
    use WithFaker;

    public function definition()
    {
        return [
            'caption' => $this->faker->sentence,
            'description' => $this->faker->sentence,
            'image_url_square' => '/images/products/product-' . random_int(1,15) . '.jpg',
            'image_url_rectangle' => '/images/products/product-' . random_int(1,15) . '.jpg',
            'start_date' => now()->subDays( random_int(1,15) ),
            'end_date' => now()->addDays( random_int(1,15) ),
        ];
    }

    public function withCategory(Category $category)
    {
        return $this->state(fn() => [
            'category_id' => $category->id,
        ]);
    }
}
