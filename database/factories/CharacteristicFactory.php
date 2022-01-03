<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Characteristic;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Foundation\Testing\WithFaker;

class CharacteristicFactory extends Factory
{
    use WithFaker;

    protected $model = Characteristic::class;

    public function definition()
    {
        return [
            'name' => $this->faker->word,
            'category_id' => Category::factory()
        ];
    }
}
