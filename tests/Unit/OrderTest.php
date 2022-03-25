<?php

namespace Tests\Unit;

use App\Models\Discount;
use App\Models\Order;
use App\Models\OrderCredentials;
use App\Models\Product;
use App\Models\ProductSet;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;

class OrderTest extends TestCase
{
    /**
     * $items format : [ [model, quantity], [model, quantity], ... ]
     * Example: [ [$product, 3], [$product_set, 2] ]
     * */
    private function create_order_with_items(array $items)
    {
        $order = Order::factory()->create();

        array_walk($items, function ($item, $index) use ($order) {
            DB::table('order_item')->insert([
                'order_id' => $order->id,
                'item_id' => $item[0]->id,
                'item_type' => $item[0]::class,
                'quantity' => $item[1]
            ]);
        });

        return $order;
    }

    private function fill_product_set($product_set, array $products)
    {
        foreach ($products as $product)
        {
            DB::table('product_set_product')->insert([
                'product_set_id' => $product_set->id,
                'product_id' => $product->id
            ]);
        }
    }

    public function test_order_has_items()
    {
        $product = Product::factory()->create();
        $product_set = ProductSet::factory()->create();

        $order =  $this->create_order_with_items([ [$product, 1], [$product_set, 1] ]);

        $this->assertInstanceOf(Product::class, $order->fresh()->products[0]);
        $this->assertInstanceOf(ProductSet::class, $order->fresh()->product_sets[0]);
    }

    public function test_item_knows_orders_it_belongs_to()
    {
        $product = Product::factory()->create();
        $product_set = ProductSet::factory()->create();

        $order = $this->create_order_with_items([ [$product, 1], [$product_set, 1] ]);;

        $this->assertInstanceOf(Order::class, $product->fresh()->orders[0]);
        $this->assertInstanceOf(Order::class, $product_set->fresh()->orders[0]);
    }

    public function test_order_has_an_owner()
    {
        $user = User::factory()->create();

        $order = Order::factory()->withUser($user)->create();
        $product = Product::factory()->create();

        DB::table('order_item')->insert([
            'order_id' => $order->id,
            'item_id' => $product->id,
            'item_type' => Product::class,
            'quantity' => 1
        ]);

        $this->assertInstanceOf(User::class, $order->fresh()->owner);
    }

    public function test_order_items_load_a_quantity()
    {
        $product = Product::factory()->create();
        $product_set = ProductSet::factory()->create();

        $order = $this->create_order_with_items([ [$product, 2], [$product_set, 1] ]);

        $this->assertEquals(2, $order->fresh()->products[0]->pivot->quantity);
        $this->assertEquals(1, $order->fresh()->product_sets[0]->pivot->quantity);
    }

    public function test_order_calculates_total()
    {
        $product = Product::factory()->create();
        $product_set = ProductSet::factory()->create();

        $product_1 = Product::factory()->create();
        $product_2 = Product::factory()->create();

        Discount::factory()->withObject($product)->create();

        $this->fill_product_set($product_set, [$product_1, $product_2]);

        $order = $this->create_order_with_items([ [$product, 2], [$product_set, 1] ]);

        $this->assertEquals($product_1->priceWithDiscount + $product_2->priceWithDiscount
                                                                  + $product->priceWithDiscount*2,
                                     $order->fresh()->getTotal());
    }

    public function test_order_calculates_product_subtotal()
    {
        $product = Product::factory()->create();
        $product_set = ProductSet::factory()->create();

        $product_1 = Product::factory()->create();
        $product_2 = Product::factory()->create();

        Discount::factory()->withObject($product)->create();

        $this->fill_product_set($product_set, [$product_1, $product_2]);

        $order = $this->create_order_with_items([ [$product, 2], [$product_set, 1] ]);

        $this->assertEquals($product->priceWithDiscount * 2,
            $order->fresh()->getProductSubtotal());
    }

    public function test_order_calculates_product_set_subtotal()
    {
        $product = Product::factory()->create();
        $product_set = ProductSet::factory()->create();

        $product_1 = Product::factory()->create();
        $product_2 = Product::factory()->create();

        Discount::factory()->withObject($product)->create();

        $this->fill_product_set($product_set, [$product_1, $product_2]);

        $order = $this->create_order_with_items([ [$product, 2], [$product_set, 1] ]);

        $this->assertEquals($product_set->priceWithDiscount,
            $order->fresh()->getProductSetSubtotal());
    }

    public function test_order_has_credentials()
    {
        OrderCredentials::factory()->create();

        $this->assertInstanceOf(OrderCredentials::class, Order::first()->credentials);
    }

    public function test_when_order_doesnt_have_credentials_it_returns_user_credentials()
    {
        $order = Order::factory()->for(User::factory(), 'owner')->create();

        $this->assertEquals($order->credentials->first_name, $order->owner->first_name);
        $this->assertEquals($order->credentials->last_name, $order->owner->last_name);
        $this->assertEquals($order->credentials->phone, $order->owner->phone);
        $this->assertEquals($order->credentials->email, $order->owner->email);
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

        $order = $this->create_order_with_items([ [$product, 2], [$product_set, 1] ]);

        $this->assertDatabaseCount('order_item', 2);

        $order->delete();

        $this->assertDatabaseCount('order_item', 0);
    }
}
