<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Wishlist;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductWishlistSeeder extends Seeder
{
    public function run()
    {
        foreach (Wishlist::all() as $wishlist)
        {
            $randomProducts = Product::inRandomOrder()->limit(5)->get();

            foreach ($randomProducts as $product){
                DB::table('product_wishlist')->insert([
                    'wishlist_id' => $wishlist->id,
                    'product_id' => $product->id,
                    'created_at' => now()
                ]);
            }
        }
    }
}
