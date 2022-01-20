<?php

namespace Tests\Unit;

use App\Models\Order;
use App\Models\OrderCredentials;
use Tests\TestCase;

class OrderTest extends TestCase
{
    public function test_order_has_items()
    {

    }

    public function test_order_has_credentials()
    {
        $credentials = OrderCredentials::factory()->create();
        $order = Order::find($credentials->order_id);

        $this->assertInstanceOf(OrderCredentials::class, $order->credentials);
    }
}
