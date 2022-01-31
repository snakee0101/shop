<?php

namespace Tests\Unit;

use App\Models\Discount;
use App\Models\Order;
use App\Models\OrderCredentials;
use App\Models\Product;
use App\Models\ProductSet;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;

class OrderTest extends TestCase
{
    public function test_order_has_items()
    {
        $product = Product::factory()->create();
        $product_set = ProductSet::factory()->create();

        $order = Order::factory()->create();

        DB::table('order_item')->insert([[
            'order_id' => $order->id,
            'item_id' => $product->id,
            'item_type' => Product::class,
            'quantity' => 1
        ],[
            'order_id' => $order->id,
            'item_id' => $product_set->id,
            'item_type' => ProductSet::class,
            'quantity' => 1
        ]]);

        $this->assertInstanceOf(Product::class, $order->fresh()->products[0]);
        $this->assertInstanceOf(ProductSet::class, $order->fresh()->product_sets[0]);
    }

    public function test_order_items_load_a_quantity()
    {
        $product = Product::factory()->create();
        $product_set = ProductSet::factory()->create();

        $order = Order::factory()->create();

        DB::table('order_item')->insert([[
            'order_id' => $order->id,
            'item_id' => $product->id,
            'item_type' => Product::class,
            'quantity' => 2
        ],[
            'order_id' => $order->id,
            'item_id' => $product_set->id,
            'item_type' => ProductSet::class,
            'quantity' => 1
        ]]);

        $this->assertEquals(2, $order->fresh()->products[0]->pivot->quantity);
        $this->assertEquals(1, $order->fresh()->product_sets[0]->pivot->quantity);
    }

    public function test_order_calculates_total()
    {
        $product = Product::factory()->create();
        $product_set = ProductSet::factory()->create();

        $order = Order::factory()->create();

        $product_1 = Product::factory()->create();
        $product_2 = Product::factory()->create();

        Discount::factory()->withObject($product)->create();

        DB::table('product_set_product')->insert([
            'product_set_id' => $product_set->id,
            'product_id' => $product_1->id
        ]);

        DB::table('product_set_product')->insert([
            'product_set_id' => $product_set->id,
            'product_id' => $product_2->id
        ]);

        DB::table('order_item')->insert([[
            'order_id' => $order->id,
            'item_id' => $product->id,
            'item_type' => Product::class,
            'quantity' => 2
        ],[
            'order_id' => $order->id,
            'item_id' => $product_set->id,
            'item_type' => ProductSet::class,
            'quantity' => 1
        ]]);

        $this->assertEquals($product_1->priceWithDiscount + $product_2->priceWithDiscount
                                                                  + $product->priceWithDiscount,
                                     $order->fresh()->total);
    }

    public function test_order_has_credentials()
    {
        $credentials = OrderCredentials::factory()->create();
        $order = Order::find($credentials->order_id);

        $this->assertInstanceOf(OrderCredentials::class, $order->credentials);
    }

    public function test_when_order_is_deleted_its_credentials_are_also_deleted()
    {
        $credentials = OrderCredentials::factory()->create();
        $order = Order::find($credentials->order_id);

        $this->assertDatabaseCount('order_credentials', 1);

        $order->delete();

        $this->assertDatabaseCount('order_credentials', 0);
    }

    public function test_when_order_is_deleted_all_items_are_also_deleted()
    {
        $product = Product::factory()->create();
        $product_set = ProductSet::factory()->create();

        $order = Order::factory()->create();

        DB::table('order_item')->insert([[
            'order_id' => $order->id,
            'item_id' => $product->id,
            'item_type' => Product::class,
            'quantity' => 2
        ],[
            'order_id' => $order->id,
            'item_id' => $product_set->id,
            'item_type' => ProductSet::class,
            'quantity' => 1
        ]]);

        $this->assertDatabaseCount('order_item', 2);

        $order->delete();


        $this->assertDatabaseCount('order_item', 0);
    }
}
