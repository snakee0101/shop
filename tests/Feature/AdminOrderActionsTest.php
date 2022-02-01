<?php

namespace Tests\Feature;

use App\Models\Order;
use App\Models\Product;
use App\Models\ProductSet;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;

class AdminOrderActionsTest extends TestCase
{
    public function test_product_could_be_deleted_from_order()
    {
        $order = Order::factory()->create();
        $product = Product::factory()->create();

        DB::table('order_item')->insert([
            'order_id' => $order->id,
            'item_id' => $product->id,
            'item_type' => Product::class,
            'quantity' => 1
        ]);

        $this->assertCount(1, $order->fresh()->products);

        $response = $this->delete(route('order.actions.delete_product', [$order, $product]) )
                         ->assertRedirect();

        $this->assertCount(0, $order->fresh()->products);
    }

    public function test_when_product_count_is_changed_other_products_are_not_detached()
    {
        $order = Order::factory()->create();
        $product = Product::factory()->create();
        $product2 = Product::factory()->create();

        DB::table('order_item')->insert([[
            'order_id' => $order->id,
            'item_id' => $product->id,
            'item_type' => Product::class,
            'quantity' => 1
        ],[
            'order_id' => $order->id,
            'item_id' => $product2->id,
            'item_type' => Product::class,
            'quantity' => 1
        ]]);

        $this->assertCount(2, $order->fresh()->products);

        $this->post(route('order.actions.change_product_quantity', [$order, $product]), [
            'quantity' => 10
        ] )->assertRedirect();

        $this->assertCount(2, $order->fresh()->products);
    }

    public function test_when_product_set_count_is_changed_other_products_are_not_detached()
    {
        $order = Order::factory()->create();
        $product_set = ProductSet::factory()->create();

        $product_1 = Product::factory()->create();
        $product_2 = Product::factory()->create();

        $product_3 = Product::factory()->create();

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
            'item_id' => $product_set->id,
            'item_type' => ProductSet::class,
            'quantity' => 1
        ],[
            'order_id' => $order->id,
            'item_id' => $product_3->id,
            'item_type' => Product::class,
            'quantity' => 1
        ]]);

        $this->post(route('order.actions.change_product_set_quantity', [$order, $product_set]), [
            'quantity' => 10
        ] )->assertRedirect();

        $this->assertDatabaseCount('order_item', 2);
    }

    public function test_product_set_could_be_deleted_from_order()
    {
        $order = Order::factory()->create();
        $product_set = ProductSet::factory()->create();

        $product_1 = Product::factory()->create();
        $product_2 = Product::factory()->create();

        DB::table('product_set_product')->insert([
            'product_set_id' => $product_set->id,
            'product_id' => $product_1->id
        ]);

        DB::table('product_set_product')->insert([
            'product_set_id' => $product_set->id,
            'product_id' => $product_2->id
        ]);

        DB::table('order_item')->insert([
            'order_id' => $order->id,
            'item_id' => $product_set->id,
            'item_type' => ProductSet::class,
            'quantity' => 1
        ]);

        $this->assertCount(1, $order->fresh()->product_sets);

        $response = $this->delete(route('order.actions.delete_product_set', [$order, $product_set]) )
            ->assertRedirect();

        $this->assertCount(0, $order->fresh()->product_sets);
    }

    public function test_products_quantity_in_order_could_be_changed()
    {
        $order = Order::factory()->create();
        $product = Product::factory()->create();

        DB::table('order_item')->insert([
            'order_id' => $order->id,
            'item_id' => $product->id,
            'item_type' => Product::class,
            'quantity' => 1
        ]);

        $this->post(route('order.actions.change_product_quantity', [$order, $product]), [
            'quantity' => 10
        ] )->assertRedirect();

        $this->assertDatabaseHas('order_item', [
            'quantity' => 10
        ]);
    }

    public function test_product_sets_quantity_in_order_could_be_changed()
    {
        $order = Order::factory()->create();
        $product_set = ProductSet::factory()->create();

        $product_1 = Product::factory()->create();
        $product_2 = Product::factory()->create();

        DB::table('product_set_product')->insert([
            'product_set_id' => $product_set->id,
            'product_id' => $product_1->id
        ]);

        DB::table('product_set_product')->insert([
            'product_set_id' => $product_set->id,
            'product_id' => $product_2->id
        ]);

        DB::table('order_item')->insert([
            'order_id' => $order->id,
            'item_id' => $product_set->id,
            'item_type' => ProductSet::class,
            'quantity' => 1
        ]);

        $this->post(route('order.actions.change_product_set_quantity', [$order, $product_set]), [
            'quantity' => 10
        ] )->assertRedirect();

        $this->assertDatabaseHas('order_item', [
            'quantity' => 10
        ]);
    }

    public function test_product_could_be_added_to_the_order()
    {
        $order = Order::factory()->create();
        $product = Product::factory()->create();

        $this->assertEmpty( $order->products );

        $this->post( route('order.actions.add_product', $order), [
            'id' => $product->id,
            'quantity' => 2
        ]);

        $this->assertCount(1, $order->fresh()->products);
        $this->assertDatabaseHas('order_item', [
            'quantity' => 2
        ]);
    }

    public function test_product_set_could_be_added_to_the_order()
    {
        $order = Order::factory()->create();
        $product_set = ProductSet::factory()->create();

        $product_1 = Product::factory()->create();
        $product_2 = Product::factory()->create();

        DB::table('product_set_product')->insert([
            'product_set_id' => $product_set->id,
            'product_id' => $product_1->id
        ]);

        DB::table('product_set_product')->insert([
            'product_set_id' => $product_set->id,
            'product_id' => $product_2->id
        ]);

        DB::table('order_item')->insert([
            'order_id' => $order->id,
            'item_id' => $product_set->id,
            'item_type' => ProductSet::class,
            'quantity' => 1
        ]);

        $this->post( route('order.actions.add_product_set', $order), [
            'id' => $product_set->id,
            'quantity' => 2
        ]);

        $this->assertDatabaseHas('order_item', [
            'item_type' => ProductSet::class,
            'quantity' => 2
        ]);
    }
}
