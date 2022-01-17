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
}
