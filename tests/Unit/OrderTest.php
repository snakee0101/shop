<?php

namespace Tests\Unit;

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
            'item_type' => Product::class
        ],[
            'order_id' => $order->id,
            'item_id' => $product_set->id,
            'item_type' => ProductSet::class
        ]]);

        $this->assertInstanceOf(Product::class, $order->fresh()->products[0]);
        $this->assertInstanceOf(ProductSet::class, $order->fresh()->product_sets[0]);
    }

    public function test_order_has_credentials()
    {
        $credentials = OrderCredentials::factory()->create();
        $order = Order::find($credentials->order_id);

        $this->assertInstanceOf(OrderCredentials::class, $order->credentials);
    }
}
