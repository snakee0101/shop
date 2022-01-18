<?php

namespace Tests\Unit;

use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;

class VisitsTest extends TestCase
{
    public function test_user_contains_visited_products()
    {
       $user = User::factory()->create();
       $product = Product::factory()->create();

       DB::table('visited_products')->insert([
           'user_id' => $user->id,
           'product_id' => $product->id
       ]);

       $this->assertInstanceOf(Product::class, $user->visited_products()->first());
    }

    public function test_a_product_records_visits()
    {
        $user = User::factory()->create();
        $this->actingAs($user);

        $this->assertEmpty($user->visited_products);

        $product = Product::factory()->create();
        $product->visit();

        $this->assertCount(1, $user->fresh()->visited_products);
    }
}
