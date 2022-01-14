<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\ProductSet;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSetSeeder extends Seeder
{
    public function run()
    {
        $products = Product::inRandomOrder()->take(14)->get();
        $products_grouped_by_2 = $products->chunk(2);

        foreach ($products_grouped_by_2 as $products)
        {
            $product_set = ProductSet::factory()->create();

            foreach ($products as $product) {
                DB::table('product_set_product')->insert([
                    'product_set_id' => $product_set->id,
                    'product_id' => $product->id
                ]);
            }

        }
    }
}
