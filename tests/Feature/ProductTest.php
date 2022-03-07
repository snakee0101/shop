<?php

namespace Tests\Feature;

use App\Discounts\FixedPriceDiscount;
use App\Models\Category;
use App\Models\Characteristic;
use App\Models\Discount;
use App\Models\Photo;
use App\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Storage;
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
        ];

        $this->post( route('admin.products.store_product'),
            $product->only('name', 'description', 'price', 'payment_info', 'guarantee_info', 'in_stock') + ['category_id' => $product->category_id]
            + $discount_data
        )->assertRedirect();

        $this->assertDatabaseCount('discounts', 0);
    }

    public function test_if_discount_active_until_date_is_defined_and_active_since_date_is_not_then_active_since_is_set_to_now()
    {
        $product = Product::factory()->make();

        $discount_data = [
            'discount_applied' => 'on',
            'discount_classname' => FixedPriceDiscount::class,
            'discount_value' => 10,
            'discount_active_until' => '2021-10-10'
        ];

        $this->post( route('admin.products.store_product'),
            $product->only('name', 'description', 'price', 'payment_info', 'guarantee_info', 'in_stock') + ['category_id' => $product->category_id]
            + $discount_data
        )->assertRedirect();

        $this->assertStringContainsString(date('Y-m-d'), Discount::first()->active_since);
    }

    public function test_product_could_be_created_with_discount_that_has_automatically_generated_coupon_code()
    {
        $product = Product::factory()->make();

        $discount_data = [
            'discount_applied' => 'on',
            'discount_classname' => FixedPriceDiscount::class,
            'discount_value' => 10,
            'with_coupon_code' => 'on'
        ];

        $this->post( route('admin.products.store_product'),
            $product->only('name', 'description', 'price', 'payment_info', 'guarantee_info', 'in_stock') + ['category_id' => $product->category_id]
            + $discount_data
        )->assertRedirect();

        $this->assertNotEmpty( Discount::first()->coupon_code );
    }

    public function test_product_could_be_created_with_images()
    {
        Storage::fake();
        $product = Product::factory()->make();

        $this->post( route('admin.products.store_product'),
            $product->only('name', 'description', 'price', 'payment_info', 'guarantee_info', 'in_stock')
            + ['category_id' => $product->category_id] + ['image-1' => base64_encode('test string')]
        )->assertRedirect();

        $this->assertDatabaseHas('products', [
            'name' => $product->name
        ]);

        $file_url = Storage::files('/public/images')[0];
        Storage::assertExists($file_url);

        $this->assertInstanceOf(Photo::class, Product::first()->photos[0]);
    }

    public function test_product_could_be_created_with_videos()
    {
        $video_json_data = [
            'video-0' => '{"url":"https://www.youtube.com/embed/UYbJNpC4Jt8","title":"38250"}'
        ];

        $product = Product::factory()->make();

        $this->post( route('admin.products.store_product'),
            $product->only('name', 'description', 'price', 'payment_info', 'guarantee_info', 'in_stock')
            + ['category_id' => $product->category_id] + $video_json_data
        )->assertRedirect();

        $this->assertDatabaseHas('products', [
            'name' => $product->name
        ]);

        $this->assertDatabaseHas('videos', [
            'url' => "https://www.youtube.com/embed/UYbJNpC4Jt8",
            'title' => "38250"
        ]);
    }

    public function test_product_could_be_created_with_characteristics()
    {
        $product = Product::factory()->make();
        $category = Category::factory()->create();
        $chars = Characteristic::factory()->count(3)
                                          ->create(['category_id' => $category->id]);

        $char_data = [
            'char-' . $chars[0]->id => 'value 1',
            'char-' . $chars[1]->id => 'value 2',
            'char-' . $chars[2]->id => 'value 3',
        ];

        $this->post( route('admin.products.store_product'),
            $product->only('name', 'description', 'price', 'payment_info', 'guarantee_info', 'in_stock')
            + ['category_id' => $category->id] + $char_data
        )->assertRedirect();

        $this->assertDatabaseHas('characteristic_product', [
            'product_id' => Product::first()->id,
            'characteristic_id' => $chars[0]->id,
            'value' => 'value 1'
        ]);

        $this->assertDatabaseHas('characteristic_product', [
            'product_id' => Product::first()->id,
            'characteristic_id' => $chars[1]->id,
            'value' => 'value 2'
        ]);

        $this->assertDatabaseHas('characteristic_product', [
            'product_id' => Product::first()->id,
            'characteristic_id' => $chars[2]->id,
            'value' => 'value 3'
        ]);
    }

    public function test_product_must_be_soft_deleted()
    {
        $product = Product::factory()->create();
        $product->delete();

        $this->assertSoftDeleted($product);
    }

    public function test_product_could_be_deleted_by_user()
    {
        $product = Product::factory()->create();
        $this->delete( route('admin.product.destroy', $product) );
        $this->assertSoftDeleted($product);
    }

    public function test_soft_deleted_product_could_be_restored()
    {
        $product = Product::factory()->create();
        $product->delete();

        $this->post( route('admin.product.restore', $product) );
        $this->assertNotSoftDeleted($product);
    }

    //UPDATE PRODUCT TESTS
    public function test_basic_product_data_could_be_updated()
    {
        $product = Product::factory()->create();

        $category = Category::factory()->create();

        $new_data = [
            'name' => 'new name',
            'description' => 'new descr',
            'price' => 105.20,
            'payment_info' => 'new payment info',
            'guarantee_info' => 'new guarantee info',
            'category_id' => $category->id,
            'in_stock' => Product::STATUS_ENDS
        ];

        $this->put( route('admin.product.update', $product), $new_data);

        $this->assertDatabaseHas('products', $new_data);
    }
}
