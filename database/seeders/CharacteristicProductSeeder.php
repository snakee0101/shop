<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CharacteristicProductSeeder extends Seeder
{
    public function run()
    {
        foreach (Category::all() as $category)
        {
            foreach (Product::where('category_id', $category->id)->get() as $product)
            {
                foreach ($category->characteristics as $char)
                {
                    DB::table('characteristic_product')->insert([
                        'product_id' => $product->id,
                        'characteristic_id' => $char->id,
                        'value' => random_int(10, 100)
                    ]);
                }
            }
        }
    }
}
