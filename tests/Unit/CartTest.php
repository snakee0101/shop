<?php

namespace Tests\Unit;

use App\Models\Product;
use App\Models\ProductSet;
use Darryldecode\Cart\Cart;
use Tests\TestCase;

class CartTest extends TestCase
{
    private function add_to_cart($item)
    {
        \Cart::add(array(
            'id' => 1001,
            'name' => 'product set',
            'price' => 1000,
            'quantity' => 1,
            'associatedModel' => $item
        ));
    }

    public function test_product_can_check_whether_it_in_cart()
    {
        $product = Product::factory()->create();
        $product_set = ProductSet::factory()->create();

        $this->add_to_cart($product_set);
        $this->assertFalse($product->in_cart);

        $this->add_to_cart($product);
        $this->assertTrue($product->in_cart);
    }

    public function test_product_set_can_check_whether_it_in_cart()
    {
        $product = Product::factory()->create();
        $product_set = ProductSet::factory()->create();

        $this->add_to_cart($product);
        $this->assertFalse($product_set->in_cart);

        $this->add_to_cart($product_set);
        $this->assertTrue($product_set->in_cart);
    }
}
