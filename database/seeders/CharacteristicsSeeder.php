<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Characteristic;
use Illuminate\Database\Seeder;

class CharacteristicsSeeder extends Seeder
{
    public function run()
    {
        foreach (Category::all() as $category)
            Characteristic::factory()->count(5)->create([
                'category_id' => $category
            ]);
    }
}
