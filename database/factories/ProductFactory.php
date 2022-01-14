<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Foundation\Testing\WithFaker;

class ProductFactory extends Factory
{
    use WithFaker;

    protected $model = Product::class;

    public function definition()
    {
        return [
            'name' => $this->faker->word,
            'description' => $this->faker->text,
            'price' => $this->faker->numberBetween(1,1000) - 0.50,
            'guarantee_info' => $this->faker->sentence,
            'payment_info' => $this->faker->sentence,
            'category_id' => Category::factory()
        ];
    }
}
