<?php

namespace Tests\Unit;

use App\Discounts\FixedPriceDiscount;
use App\Discounts\PercentDiscount;
use App\Models\Discount;
use App\Models\Product;
use App\Models\ProductSet;
use Illuminate\Support\Facades\DB;
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

        $this->assertInstanceOf(Product::class, Discount::first()->item);
    }

    public function test_fixed_price_discount_calculates_price()
    {
        $this->assertEquals(175, (new FixedPriceDiscount)->calculatePrice(200, 25));
    }

    public function test_percent_discount_calculates_price()
    {
        $this->assertEquals(150, (new PercentDiscount)->calculatePrice(200, 25));
    }

    public function test_discount_could_be_applied_to_a_current_item()
    {
        $product = Product::factory()->create();
        $discount = Discount::factory()->withObject($product)->create(); //assumed FixedPriceDiscount

        $priceWithDiscount = $product->price - $discount->value;
        $this->assertEquals($priceWithDiscount, $discount->apply());
    }

    public function test_if_discount_is_present_product_price_is_returned_with_discount()
    {
        $product = Product::factory()->create();
        $discount = Discount::factory()->withObject($product)->create(); //assumed FixedPriceDiscount

        $priceWithDiscount = $product->price - $discount->value;
        $this->assertEquals($priceWithDiscount, $product->priceWithDiscount);
    }

    public function test_product_set_can_return_price_without_all_products_discounts()
    {
        $product1 = Product::factory()->create();
        $product2 = Product::factory()->create();
        Discount::factory()->withObject($product1)->create(); //assumed FixedPriceDiscount

        $product_set = ProductSet::factory()->create();

        DB::table('product_set_product')->insert([
            'product_set_id' => $product_set->id,
            'product_id' => $product1->id
        ]);

        DB::table('product_set_product')->insert([
            'product_set_id' => $product_set->id,
            'product_id' => $product2->id
        ]);

        $total = $product1->priceWithoutDiscount + $product2->priceWithoutDiscount;
        $this->assertEquals($total, $product_set->fresh()->priceWithoutDiscount);
    }

    public function test_product_set_can_return_price_with_its_own_discount()
    {
        $product1 = Product::factory()->create();
        $product2 = Product::factory()->create();

        $product_set = ProductSet::factory()->create();
        $discount = Discount::factory()->withObject($product_set)->create(); //assumed FixedPriceDiscount

        Discount::factory()->withObject($product1)->create(); //this discount must be ignored!

        DB::table('product_set_product')->insert([
            'product_set_id' => $product_set->id,
            'product_id' => $product1->id
        ]);

        DB::table('product_set_product')->insert([
            'product_set_id' => $product_set->id,
            'product_id' => $product2->id
        ]);

        $total = $product1->price + $product2->price;
        $withDiscount = (new FixedPriceDiscount)->calculatePrice($total, $discount->value);

        $this->assertEquals($withDiscount, $product_set->fresh()->priceWithDiscount);
    }

    public function test_if_there_is_no_product_set_discount_individual_product_discounts_are_applied()
    {
        $product1 = Product::factory()->create();
        $product2 = Product::factory()->create();

        $product_set = ProductSet::factory()->create();
        $discount = Discount::factory()->withObject($product1)->create(); //assumed FixedPriceDiscount

        DB::table('product_set_product')->insert([
            'product_set_id' => $product_set->id,
            'product_id' => $product1->id
        ]);

        DB::table('product_set_product')->insert([
            'product_set_id' => $product_set->id,
            'product_id' => $product2->id
        ]);

        $total = $product1->fresh()->priceWithDiscount + $product2->fresh()->priceWithDiscount;
        $this->assertEquals($total, $product_set->fresh()->price);
    }
}
