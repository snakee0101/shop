<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Storage;

class AdvertisementFactory extends Factory
{
    use WithFaker;

    public function definition()
    {
        $all_files = Storage::allFiles('/public/images');

        return [
            'caption' => $this->faker->sentence,
            'description' => $this->faker->sentence,
            'image_url_square' => $all_files[ array_rand($all_files) ],
            'image_url_rectangle' => $all_files[ array_rand($all_files) ],
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
