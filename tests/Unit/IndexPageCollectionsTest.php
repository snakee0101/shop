<?php

namespace Tests\Unit;

use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Tests\TestCase;

class IndexPageCollectionsTest extends TestCase
{
    /***
     *"Bought" means that order was finished - it has status "completed"; "most" means "most quantity"
     */
    public function test_most_bought_returns_appropriate_products_in_descending_order()
    {
        //products order in result: 2 -> 3 -> 1
        $product_1 = Product::factory()->create();  //quantity = 2
        $product_2 = Product::factory()->create();  //quantity = 5
        $product_3 = Product::factory()->create();  //quantity = 4

        $order_1 = Order::factory()->withUser( User::factory()->create() )
                        ->withStatus('completed')
                        ->create();

        $order_1->products()->attach($product_1, ['quantity' => 2]);

        $order_2 = Order::factory()->withUser( User::factory()->create() )
                        ->withStatus('completed')
                        ->create();

        $order_2->products()->attach($product_2, ['quantity' => 2]);
        $order_2->products()->attach($product_3, ['quantity' => 4]);

        $order_3 = Order::factory()->withUser( User::factory()->create() )
            ->withStatus('completed')
            ->create();

        $order_3->products()->attach($product_2, ['quantity' => 3]);

        $order_4_ignore = Order::factory()->withUser( User::factory()->create() )
            ->withStatus('on hold')
            ->create();

        $order_4_ignore->products()->attach($product_3, ['quantity' => 10]);

        $res = Product::mostBought();

        $this->assertCount(3, $res);

        $this->assertEquals($product_2->id, $res[0]->id);
        $this->assertEquals($product_3->id, $res[1]->id);
        $this->assertEquals($product_1->id, $res[2]->id);
    }
}
