<?php

namespace Tests\Feature;

use App\Models\Product;
use Darryldecode\Cart\Cart;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CartTest extends TestCase
{
    public function test_an_item_could_be_added_to_the_cart()
    {
        $this->assertTrue( \Cart::getContent()->isEmpty() );

        $product = Product::factory()->create();
        $this->get( route('cart.add', [$product->id, 1]) );

        $this->assertFalse( \Cart::getContent()->isEmpty() );
    }

    public function test_items_could_not_be_duplicated_when_added()
    {
        $this->assertTrue( \Cart::getContent()->isEmpty() );

        $product = Product::factory()->create();

        $this->get( route('cart.add', [$product->id, 1]) );
        $this->get( route('cart.add', [$product->id, 3]) );

        $this->assertEquals(1, \Cart::getContent()->count() );
    }

    public function test_item_could_be_deleted_from_cart_by_cart_row_id()
    {
        $product = Product::factory()->create();
        $product2 = Product::factory()->create();

        \Cart::add(array(
            'id' => 1010101,
            'name' => $product->name,
            'price' => $product->price,
            'quantity' => 1,
            'attributes' => array(),
            'associatedModel' => $product
        ));

        \Cart::add(array(
            'id' => 1001,
            'name' => $product2->name,
            'price' => $product2->price,
            'quantity' => 1,
            'attributes' => array(),
            'associatedModel' => $product2
        ));

        $this->assertTrue( $product->fresh()->in_cart );

        $this->delete( route('cart.destroy', 1010101) );
        $this->assertFalse( $product->fresh()->in_cart );
        $this->assertTrue( $product2->fresh()->in_cart );
    }
}
