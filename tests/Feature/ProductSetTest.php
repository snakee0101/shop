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

    public function test_product_set_product_list_could_be_updated()
    {
        $product = Product::factory()->create();
        $product2 = Product::factory()->create();

        $product3 = Product::factory()->create();
        $product4 = Product::factory()->create();

        $product_set = ProductSet::factory()->create();
        $product_set->products()
                    ->attach([ $product->id, $product2->id ]);

        $this->put( route('product_set.update', $product_set), [
                'product-1' => $product3->id,
                'product-2' => $product4->id] )->assertRedirect();

        $this->assertDatabaseCount('product_set_product', 2);

        $this->assertEquals($product3->id, $product_set->fresh()->products[0]->id);
        $this->assertEquals($product4->id, $product_set->fresh()->products[1]->id);
    }

    public function test_product_set_discount_could_be_updated()
    {

    }
}
