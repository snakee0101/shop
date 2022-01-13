<?php

namespace Tests\Unit;

use App\Models\Product;
use App\Models\ProductSet;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;

class ProductSetTest extends TestCase
{
    public function test_product_set_contains_products()
    {
        $product_set = ProductSet::factory()->create();

        $product_1 = Product::factory()->create();
        $product_2 = Product::factory()->create();

        DB::table('product_set_product')->insert([
            'product_set_id' => $product_set->id,
            'product_id' => $product_1->id
        ]);

        DB::table('product_set_product')->insert([
            'product_set_id' => $product_set->id,
            'product_id' => $product_2->id
        ]);

        $this->assertInstanceOf(Product::class, $product_set->products[0]);
        $this->assertCount(2, $product_set->products);
    }

    public function test_product_set_adds_products_to_json()
    {
        $product_set = ProductSet::factory()->create();

        $product_1 = Product::factory()->create();
        $product_2 = Product::factory()->create();

        DB::table('product_set_product')->insert([
            'product_set_id' => $product_set->id,
            'product_id' => $product_1->id
        ]);

        DB::table('product_set_product')->insert([
            'product_set_id' => $product_set->id,
            'product_id' => $product_2->id
        ]);

        $this->assertStringContainsString('products_json', $product_set->fresh()->toJson());
    }

    public function test_product_sets_containing_specified_product_could_be_returned()
    {
        $product_set_with_product = ProductSet::factory()->create();
        $product_set_without_product = ProductSet::factory()->create();

        $product = Product::factory()->create();

        DB::table('product_set_product')->insert([
            'product_set_id' => $product_set_with_product->id,
            'product_id' => $product->id
        ]);

        $this->assertInstanceOf(ProductSet::class, ProductSet::whereContainsProduct($product)->first() );
        $this->assertCount(1, ProductSet::whereContainsProduct($product)->get() );
        $this->assertEquals($product_set_with_product->id, ProductSet::whereContainsProduct($product)->first()->id );
    }
}
