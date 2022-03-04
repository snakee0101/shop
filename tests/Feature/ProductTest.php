<?php

namespace Tests\Feature;

use App\Discounts\FixedPriceDiscount;
use App\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProductTest extends TestCase
{
    public function test_product_could_be_created_with_basic_data() //basic data: name, description, price, payment_info, guarantee_info, category, stock_status
    {
        $product = Product::factory()->make();

        $this->post( route('admin.products.store_product'),
            $product->only('name', 'description', 'price', 'payment_info', 'guarantee_info', 'in_stock') + ['category_id' => $product->category_id]
        )->assertRedirect();

        $this->assertDatabaseHas('products', [
            'name' => $product->name
        ]);
    }

    public function test_product_could_be_created_with_discount()
    {
        $product = Product::factory()->make();

        $discount_data = [
            'discount_applied' => 'on',
            'discount_classname' => FixedPriceDiscount::class,
            'discount_value' => 10,
            'coupon_code' => 'ABCD'
        ];

        $this->post( route('admin.products.store_product'),
            $product->only('name', 'description', 'price', 'payment_info', 'guarantee_info', 'in_stock') + ['category_id' => $product->category_id]
            + $discount_data
        )->assertRedirect();

        $this->assertDatabaseHas('discounts', [
            'discount_classname' => FixedPriceDiscount::class,
            'value' => $discount_data['discount_value'],
            'item_type' => $product::class
        ]);
    }

    public function test_discount_is_not_applied_if_corresponding_checkbox_is_not_checked()
    {
        $product = Product::factory()->make();

        $discount_data = [
            'discount_classname' => FixedPriceDiscount::class,
            'discount_value' => 10,
            'coupon_code' => 'ABCD'
        ];

        $this->post( route('admin.products.store_product'),
            $product->only('name', 'description', 'price', 'payment_info', 'guarantee_info', 'in_stock') + ['category_id' => $product->category_id]
            + $discount_data
        )->assertRedirect();

        $this->assertDatabaseCount('discounts', 0);
    }

    public function test_product_could_be_created_with_images()
    {

    }

    public function test_product_could_be_created_with_videos()
    {

    }

    public function test_product_could_be_created_with_characteristics()
    {

    }

    public function test_product_could_be_created_with_product_set()
    {

    }
}
