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
}
