<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Review;
use App\Models\User;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    public function run()
    {
        foreach (Product::all() as $product)
        {
            foreach (User::inRandomOrder()->take(3)->get() as $review_author) {
                Review::factory()->create([
                    'user_id' => $review_author->id,
                    'product_id' => $product->id
                ]);
            }
        }
    }
}
