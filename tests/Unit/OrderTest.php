<?php

namespace Tests\Unit;

use App\Models\Order;
use Tests\TestCase;

class OrderTest extends TestCase
{
    public function test_example()
    {
        dd( Order::factory()->create() );
        $this->assertTrue(true);
    }
}
