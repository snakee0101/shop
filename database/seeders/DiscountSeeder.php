<?php

namespace Database\Seeders;

use App\Models\Discount;
use App\Models\Product;
use App\Models\ProductSet;
use Illuminate\Database\Seeder;

class DiscountSeeder extends Seeder
{
    public function run()
    {
        $product_count = ceil (Product::count() /4 );
        $product_set_count = ceil (ProductSet::count() /2 );

        $products = Product::inRandomOrder()
                           ->limit($product_count)
                           ->get();

        $product_sets = ProductSet::inRandomOrder()
                           ->limit($product_set_count)
                           ->get();

        $products->each(function($product) {
            Discount::factory()->withObject($product)
                               ->create();
        });
    }
}
