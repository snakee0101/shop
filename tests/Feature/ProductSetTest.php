<?php

namespace Tests\Feature;

use App\Discounts\FixedPriceDiscount;
use App\Models\Product;
use App\Models\ProductSet;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProductSetTest extends TestCase
{
    public function test_product_set_could_be_created()
    {
        $product = Product::factory()->create();
        $product2 = Product::factory()->create();

        $this->post( route('product_set.store'), [
            'product-1' => $product->id,
            'product-2' => $product2->id,
        ])->assertRedirect();

        $this->assertDatabaseCount('product_sets', 1);
        $this->assertDatabaseHas('product_set_product', [
            'product_id' => $product->id,
        ]);
        $this->assertDatabaseHas('product_set_product', [
            'product_id' => $product2->id,
        ]);

    }

    public function test_product_set_could_be_created_with_discount()
    {
        $product = Product::factory()->create();
        $product2 = Product::factory()->create();

        $discount_data = [
            'discount_applied' => 'on',
            'discount_classname' => FixedPriceDiscount::class,
            'discount_value' => 10,
        ];

        $this->post( route('product_set.store'), [
            'product-1' => $product->id,
            'product-2' => $product2->id] + $discount_data)->assertRedirect();

        $this->assertDatabaseHas('discounts', [
            'discount_classname' => $discount_data['discount_classname'],
            'value' => $discount_data['discount_value'],
            'item_type' => ProductSet::class
        ]);
    }
}
