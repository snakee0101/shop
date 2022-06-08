<?php

namespace Database\Factories;

use App\Models\NewsCategory;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Foundation\Testing\WithFaker;

class NewsFactory extends Factory
{
    use WithFaker;

    public function definition()
    {
        return [
            'caption' => $this->faker->sentence,
            'content' => implode( "<br>", $this->faker->paragraphs() ),
            'news_category_id' => NewsCategory::factory(),
            'main_image_url' => "/images/products/product-" . random_int(1, 15) . ".jpg"
        ];
    }
}
