<?php

namespace Tests\Unit;

use App\Discounts\PercentDiscount;
use App\Models\Discount;
use App\Models\Product;
use App\Models\ProductSet;
use Tests\TestCase;

class DiscountTest extends TestCase
{
    public function test_product_has_a_discount()
    {
        $product = Product::factory()->create();
        Discount::factory()->withObject($product)->create();

        $this->assertInstanceOf(Discount::class, $product->fresh()->discount);
    }

    public function test_product_set_has_a_discount()
    {
        $product = Product::factory()->create();
        $product_set = ProductSet::factory()->create();

        Discount::factory()->withObject($product_set)->create();

        $this->assertInstanceOf(Discount::class, $product_set->fresh()->discount);
    }
}
