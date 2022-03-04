<?php

namespace Tests\Feature;

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
