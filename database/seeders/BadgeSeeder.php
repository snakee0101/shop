<?php

namespace Database\Seeders;

use App\Models\Badge;
use App\Models\BadgeStyle;
use App\Models\Product;
use Illuminate\Database\Seeder;

class BadgeSeeder extends Seeder
{
    public function run()
    {
        $badge_styles = BadgeStyle::factory()->count(5)->create();

        $products = Product::inRandomOrder()->take(50);

        $products->each(function($product) use ($badge_styles) {
            Badge::factory()->create([
                'product_id' => $product->id,
                'badge_style_id' => $badge_styles->random(1)[0]
            ]);
        });
    }
}
