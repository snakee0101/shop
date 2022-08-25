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
    private function add_item_to_order($order, $item, $quantity = 1)
    {
        DB::table('order_item')->insert([
            'order_id' => $order->id,
            'item_id' => $item->id,
            'item_type' => $item::class,
            'quantity' => $quantity
        ]);
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

    public function test_product_could_be_deleted_from_order()
    {
        $order = Order::factory()->create();
        $product = Product::factory()->create();

        $this->add_item_to_order($order, $product);

        $this->assertCount(1, $order->products);

        $this->delete(route('order.actions.delete_product', [$order, $product]) )
             ->assertRedirect();

        $this->assertDatabaseCount('order_item',0);
    }

    public function test_when_product_count_is_changed_other_products_are_not_detached()
    {
        $order = Order::factory()->create();
        $product = Product::factory()->create();

        $this->add_item_to_order($order, $product);
        $this->add_item_to_order($order, Product::factory()->create());

        $this->assertCount(2, $order->products);

        $this->post(route('order.actions.change_product_quantity', [$order, $product]), [
            'quantity' => 10
        ] )->assertRedirect();

        $this->assertCount(2, $order->products);
    }

    public function test_when_product_set_count_is_changed_other_products_are_not_detached()
    {
        $order = Order::factory()->create();
        $product_set = ProductSet::factory()->create();

        $product_1 = Product::factory()->create();
        $product_2 = Product::factory()->create();

        $product_3 = Product::factory()->create();

        $this->fill_product_set($product_set, [$product_1, $product_2]);

        $this->add_item_to_order($order, $product_set);
        $this->add_item_to_order($order, $product_3);

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

        $this->fill_product_set($product_set, [$product_1, $product_2]);

        $this->add_item_to_order($order, $product_set);

        $this->assertCount(1, $order->product_sets);

        $this->delete(route('order.actions.delete_product_set', [$order, $product_set]) )
             ->assertRedirect();

        $this->assertCount(0, $order->fresh()->product_sets);
    }

    public function test_products_quantity_in_order_could_be_changed()
    {
        $order = Order::factory()->create();
        $product = Product::factory()->create();

        $this->add_item_to_order($order, $product);

        $this->post(route('order.actions.change_product_quantity', [$order, $product]), [
            'quantity' => 10
        ] )->assertRedirect();

        $this->assertDatabaseHas('order_item', ['quantity' => 10] );
    }

    public function test_product_sets_quantity_in_order_could_be_changed()
    {
        $order = Order::factory()->create();
        $product_set = ProductSet::factory()->create();

        $products = Product::factory()
                           ->count(2)
                           ->create();

        $this->fill_product_set($product_set, [ $products[0], $products[1] ]);

        $this->add_item_to_order($order, $product_set);

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

        $this->post( route('order.actions.add_product', $order), [
            'id' => Product::factory()->create()->id,
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

        $products = Product::factory()
            ->count(2)
            ->create();

        $this->fill_product_set($product_set, [ $products[0], $products[1] ]);

        $this->add_item_to_order($order, $product_set);

        $this->post( route('order.actions.add_product_set', $order), [
            'id' => $product_set->id,
            'quantity' => 2
        ]);

        $this->assertDatabaseHas('order_item', [
            'item_type' => ProductSet::class,
            'quantity' => 2
        ]);
    }

    public function test_when_product_is_not_exists_it_could_not_be_added_to_the_order()
    {
        $order = Order::factory()->create();

        $this->post( route('order.actions.add_product', $order), [
            'id' => 1000,
            'quantity' => 2
        ])->assertSessionHasErrorsIn('product', 'id');
    }

    public function test_when_product_set_is_not_exists_it_could_not_be_added_to_the_order()
    {
        $order = Order::factory()->create();

        $this->post( route('order.actions.add_product_set', $order), [
            'id' => 1000,
            'quantity' => 2
        ])->assertSessionHasErrorsIn('product_set', 'id');
    }
}
