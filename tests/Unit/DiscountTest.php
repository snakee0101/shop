<?php

namespace Tests\Unit;

use App\Discounts\PercentDiscount;
use App\Models\Discount;
use App\Models\Product;
use Tests\TestCase;

class DiscountTest extends TestCase
{
    public function test_example()
    {
        $product = Product::factory()->create();

        dd( Discount::factory()->withObject($product)->create() );
    }
}
