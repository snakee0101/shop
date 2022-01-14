<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run()
    {
        foreach (Category::all() as $category)
            Product::factory()->count(5)->create([
                'category_id' => $category
            ]);
    }
}
