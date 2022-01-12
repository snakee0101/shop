<?php

namespace Tests\Feature;

use App\Models\Product;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ComparisonTest extends TestCase
{
    public function test_current_user_can_add_products_to_comparison()
    {
        $user = User::factory()->create();
        $product = Product::factory()->create();

        $this->actingAs($user);

        $this->post( route('comparison.store', $product) );

        $this->assertDatabaseHas('comparison', [
            'user_id' => $user->id,
            'product_id' => $product->id
        ]);
    }
}
