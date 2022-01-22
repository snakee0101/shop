<?php

namespace Tests\Unit;

use App\Discounts\FixedPriceDiscount;
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

    public function test_discount_retrieves_an_object_it_is_associated_with()
    {
        $product = Product::factory()->create();
        Discount::factory()->withObject($product)->create();

        $this->assertInstanceOf(Product::class, Discount::first()->object);
    }

    public function test_fixed_price_discount_calculates_price()
    {
        $this->assertEquals(175, FixedPriceDiscount::apply(200, 25));
    }

    public function test_percent_discount_calculates_price()
    {
        $this->assertEquals(150, PercentDiscount::apply(200, 25));
    }

    public function test_discount_could_be_applied_to_a_current_item()
    {
        $product = Product::factory()->create();
        $discount = Discount::factory()->withObject($product)->create(); //assumed FixedPriceDiscount

        $priceWithDiscount = $product->price - $discount->value;
        $this->assertEquals($priceWithDiscount, $discount->apply());
    }
}
