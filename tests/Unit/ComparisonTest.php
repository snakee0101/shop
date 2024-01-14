<?php

namespace Tests\Unit;

use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Tests\TestCase;

class ComparisonTest extends TestCase
{
    private function insert($user, $product)
    {
        DB::table('comparison')->insert([
            'product_id' => $product->id,
            'user_id' => $user->id
        ]);
    }

    public function test_a_user_has_product_comparison()
    {
        $user = User::factory()->create();
        $product = Product::factory()->create();

        $this->insert($user, $product);

        $this->assertInstanceOf(Product::class, $user->fresh()->comparison[0]);
    }

    public function test_comparison_contains_unique_items()
    {
        $this->expectExceptionMessage('UNIQUE constraint failed');

        $user = User::factory()->create();
        $product = Product::factory()->create();

        $this->insert($user, $product);
        $this->insert($user, $product);
    }

    public function test_product_can_determine_whether_it_is_in_compare_list()
    {
        $product = Product::factory()->create();
        $this->actingAs($user = User::factory()->create());

        $this->assertFalse( $product->inComparison );

        $user->comparison()->attach($product);
        $this->assertTrue( $product->inComparison );
    }

    public function test_user_knows_its_comparison_link()
    {
        $user = User::factory()->create();
        $product = Product::factory()->create();

        $this->assertStringContainsString("/comparison/public/{$user->comparison_access_token}/{$product->category_id}",
                            $user->comparison_link($product->category_id));
    }
}
