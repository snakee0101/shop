<?php

namespace Tests\Feature;

use App\Discounts\FixedPriceDiscount;
use App\Models\Category;
use App\Models\Characteristic;
use App\Models\Discount;
use App\Models\Photo;
use App\Models\Product;
use App\Models\Video;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Tests\TestCase;

class ProductTest extends TestCase
{
    private function getNewData($category) :array
    {
        return [
            'name' => 'new name',
            'description' => 'new descr',
            'price' => 105.20,
            'payment_info' => 'new payment info',
            'guarantee_info' => 'new guarantee info',
            'category_id' => $category->id,
            'in_stock' => Product::STATUS_ENDS
        ];
    }

    private function getDiscountData(bool $is_applied = true, bool $with_coupon_code = false, $active_until_date = null) :array
    {
        return [
            'discount_applied' => $is_applied ? 'on' : null,
            'discount_classname' => FixedPriceDiscount::class,
            'discount_value' => 10,
            'discount_active_until' => $active_until_date,
            'with_coupon_code' => $with_coupon_code ? 'on' : null
        ];
    }

    public function test_product_could_be_created_with_basic_data() //basic data: name, description, price, payment_info, guarantee_info, category, stock_status
    {
        $product = Product::factory()->make();

        $this->post( route('product.store'),
            $product->only('name', 'description', 'price', 'payment_info', 'guarantee_info', 'in_stock') + ['category_id' => $product->category_id]
        )->assertRedirect();

        $this->assertDatabaseHas('products', [
            'name' => $product->name
        ]);
    }

    public function test_product_could_be_created_with_discount()
    {
        $product = Product::factory()->make();

        $discount_data = $this->getDiscountData();

        $this->post( route('product.store'),
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

        $discount_data = $this->getDiscountData(is_applied: false);

        $this->post( route('product.store'),
            $product->toArray() + ['category_id' => $product->category_id] + $discount_data
        )->assertRedirect();

        $this->assertDatabaseCount('discounts', 0);
    }

    public function test_if_discount_active_until_date_is_defined_and_active_since_date_is_not_then_active_since_is_set_to_now()
    {
        $product = Product::factory()->make();

        $discount_data = $this->getDiscountData(active_until_date: '2021-10-10');

        $this->post( route('product.store'),
            $product->toArray() + ['category_id' => $product->category_id]
            + $discount_data
        )->assertRedirect();

        $this->assertStringContainsString(date('Y-m-d'), Discount::first()->active_since);
    }

    public function test_product_could_be_created_with_discount_that_has_automatically_generated_coupon_code()
    {
        $product = Product::factory()->make();

        $discount_data = $this->getDiscountData(with_coupon_code: true);

        $this->post( route('product.store'),
            $product->toArray() + ['category_id' => $product->category_id]
            + $discount_data
        )->assertRedirect();

        $this->assertNotEmpty( Discount::first()->coupon_code );
    }

    public function test_product_could_be_created_with_images()
    {
        $this->actingAs( User::factory()->create() );

        Storage::fake();
        $product = Product::factory()->make();

        $this->post( route('product.store'),
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
        $this->actingAs( User::factory()->create() );

        $video_json_data = [
            'video-0' => '{"url":"https://www.youtube.com/embed/UYbJNpC4Jt8","title":"38250"}'
        ];

        $product = Product::factory()->make();

        $this->post( route('product.store'),
            $product->only('name', 'description', 'price', 'payment_info', 'guarantee_info', 'in_stock')
            + ['category_id' => $product->category_id] + $video_json_data
        )->assertRedirect();

        $this->assertDatabaseHas('videos', [
            'url' => "https://www.youtube.com/embed/UYbJNpC4Jt8",
            'object_type' => Product::class,
            'title' => "38250"
        ]);
    }

    public function test_product_could_be_created_with_characteristics()
    {
        $product = Product::factory()->make();
        $category = Category::factory()->create();
        $chars = Characteristic::factory()->count(2)
                                          ->create(['category_id' => $category->id]);

        $char_data = [
            'char-' . $chars[0]->id => 'value 1',
            'char-' . $chars[1]->id => 'value 2',
        ];

        $this->post( route('product.store'),
            $product->toArray() + ['category_id' => $category->id] + $char_data
        )->assertRedirect();

        $this->assertDatabaseHas('characteristic_product', [
            'characteristic_id' => $chars[0]->id,
            'value' => 'value 1'
        ]);

        $this->assertDatabaseHas('characteristic_product', [
            'characteristic_id' => $chars[1]->id,
            'value' => 'value 2'
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
        $this->delete( route('product.destroy', $product) );
        $this->assertSoftDeleted($product);
    }

    public function test_soft_deleted_product_could_be_restored()
    {
        $this->actingAs( User::factory()->create() );

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

        $this->put( route('product.update', $product), $new_data = $this->getNewData($category));

        $this->assertDatabaseHas('products', $new_data);
    }

    public function test_discount_could_be_updated()
    {
        $product = Product::factory()->create();

        $new_data = $this->getNewData( Category::factory()->create() );

        $discount_data = $this->getDiscountData(with_coupon_code: true);
        $discount_data['discount_value'] = 5;

        $this->put( route('product.update', $product), $new_data + $discount_data);

        $this->assertDatabaseHas('discounts', [
            'discount_classname' => FixedPriceDiscount::class,
            'value' => 5,
        ]);
    }

    public function test_if_discount_is_not_applied_it_is_deleted()
    {
        $product = Product::factory()->create();
        $discount = Discount::factory()->withObject($product)->create( ['discount_classname' => FixedPriceDiscount::class] );

        $this->assertDatabaseHas('discounts', [
            'discount_classname' => FixedPriceDiscount::class,
            'value' => $discount->value,
        ]);

        $new_data = $this->getNewData( Category::factory()->create() );

        $this->put( route('product.update', $product), $new_data);
        $this->assertDatabaseCount('discounts', 0);
    }

    public function test_product_specification_could_be_updated()
    {
        $product = Product::factory()->create();

        $category = Category::factory()->create();
        $chars = Characteristic::factory()->count(2)
            ->create(['category_id' => $category->id]);

        $new_data = $this->getNewData($category);

        $this->put( route('product.update', $product), $new_data + [
            'char-' . $chars[0]->id => 'value 1',
            'char-' . $chars[1]->id => 'value 2',
        ]);

        $this->assertEquals('value 1', $product->fresh()->characteristics[0]->pivot->value);
        $this->assertEquals('value 2', $product->fresh()->characteristics[1]->pivot->value);
    }

    public function test_product_videos_could_be_updated()
    {
        $this->actingAs( $user = User::factory()->create() );

        $product = Product::factory()->create();

        $video = Video::factory()->withObject($product)->create();
        $video_1 = Video::factory()->make(['user_id' => $user->id]);
        $video_2 = Video::factory()->make(['user_id' => $user->id]);

        $new_data = $this->getNewData($category = Category::factory()->create());

        $this->put( route('product.update', $product), $new_data + [
            'video-1' => $video_1->toJson(),
            'video-2' => $video_2->toJson()
        ]);

        $this->assertDatabaseHas('videos', $video_1->only('url'));
        $this->assertDatabaseHas('videos', $video_2->only('url'));

        $this->assertDatabaseMissing('videos', $video->only('url'));
    }

    public function test_when_product_is_created_all_old_images_are_deleted()
    {
        Storage::fake();

        Storage::put('/images/testfile.png', 'test content');
        Storage::assertExists('/images/testfile.png');

        $product = Product::factory()->create();

        Photo::factory()->withObject($product)->create([
            'url' => Storage::url('/images/testfile.png')
        ]);
        $category = Category::factory()->create();

        $new_data = $this->getNewData($category);

        $this->put( route('product.update', $product), $new_data);

        Storage::assertMissing('/images/testfile.png');
    }

    public function test_product_images_could_be_updated()
    {
        $this->actingAs( User::factory()->create() );

        Storage::fake();
        $product = Product::factory()->create();

        $new_data = $this->getNewData( Category::factory()->create() );

        $this->put( route('product.update', $product), $new_data + [
            'image-1' => base64_encode('data')
        ]);

        $this->assertInstanceOf(Photo::class, $product->fresh()->photos()->first());
    }
}
