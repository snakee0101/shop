<?php

namespace Tests\Unit;

use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;

class ComparisonTest extends TestCase
{
    public function test_a_user_has_product_comparison()
    {
        $user = User::factory()->create();
        $product = Product::factory()->create();

        DB::table('comparison')->insert([
            'product_id' => $product->id,
            'user_id' => $user->id
        ]);

        $this->assertInstanceOf(Product::class, $user->fresh()->comparison[0]);
    }
}
