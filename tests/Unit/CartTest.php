<?php

namespace Tests\Unit;

use App\Models\Product;
use Darryldecode\Cart\Cart;
use Tests\TestCase;

class CartTest extends TestCase
{
    public function test_product_can_check_whether_it_in_cart()
    {
        $product = Product::factory()->create();

        $this->assertFalse( $product->in_cart );

        \Cart::add(array(
            'id' => 1010101,
            'name' => $product->name,
            'price' => $product->price,
            'quantity' => 1,
            'attributes' => array(),
            'associatedModel' => $product
        ));

        $this->assertTrue( $product->fresh()->in_cart );
    }
}
