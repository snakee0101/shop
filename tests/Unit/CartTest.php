<?php

namespace Tests\Unit;

use App\Models\Product;
use App\Models\ProductSet;
use Darryldecode\Cart\Cart;
use Tests\TestCase;

class CartTest extends TestCase
{
    public function test_product_can_check_whether_it_in_cart()
    {
        $product = Product::factory()->create();
        $product_set = ProductSet::factory()->create();

        \Cart::add(array(
            'id' => 1001,
            'name' => 'product set',
            'price' => 1000,
            'quantity' => 1,
            'attributes' => array(),
            'associatedModel' => $product_set
        ));

        $this->assertFalse( $product->in_cart );

        \Cart::add(array(
            'id' => 1010101,
            'name' => 'product name',
            'price' => 1000,
            'quantity' => 1,
            'attributes' => array(),
            'associatedModel' => $product
        ));

        $this->assertTrue( $product->fresh()->in_cart );
    }

    public function test_product_set_can_check_whether_it_in_cart()
    {
        $product = Product::factory()->create();
        $product_set = ProductSet::factory()->create();

        \Cart::add(array(
            'id' => 1010101,
            'name' => 'product name',
            'price' => 1000,
            'quantity' => 1,
            'attributes' => array(),
            'associatedModel' => $product
        ));

        $this->assertFalse( $product_set->in_cart );

        \Cart::add(array(
            'id' => 1001,
            'name' => 'product set',
            'price' => 1000,
            'quantity' => 1,
            'attributes' => array(),
            'associatedModel' => $product_set
        ));

        $this->assertTrue( $product_set->fresh()->in_cart );
    }
}
