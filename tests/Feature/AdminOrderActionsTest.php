<?php

namespace Tests\Feature;

use App\Models\Order;
use App\Models\Product;
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
}
