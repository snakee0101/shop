<?php

namespace Tests\Feature;

use App\Models\Advertisement;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class AdvertisementTest extends TestCase
{
    public function test_advertisement_could_be_deleted_with_its_images()
    {
        Storage::fake();
        Storage::put('/public/images/test1.jpg', 12345);
        Storage::put('/public/images/test2.jpg', 12345);

        $ad = Advertisement::factory()->create([
            'image_url_square' => '/public/images/test1.jpg',
            'image_url_rectangle' => '/public/images/test2.jpg',
        ]);

        $this->delete(route('advertisement.destroy', $ad))
            ->assertRedirect();

        $this->assertDatabaseCount('advertisements', 0);

        Storage::assertMissing('/public/images/test1.jpg');
        Storage::assertMissing('/public/images/test2.jpg');
    }

    public function test_when_advertisement_is_deleted_products_are_detached()
    {
        Storage::fake();
        Storage::put('/public/images/test1.jpg', 12345);
        Storage::put('/public/images/test2.jpg', 12345);

        $ad = Advertisement::factory()->create();

        $ad->products()->attach(Product::factory()
            ->count(2)
            ->create());

        $this->assertDatabaseCount('advertisement_product', 2);

        $this->delete(route('advertisement.destroy', $ad))
            ->assertRedirect();

        $this->assertDatabaseCount('advertisement_product', 0);
    }

    public function test_advertisement_could_be_created_with_images()
    {
        Storage::fake();
        Storage::put('/public/images/test1.jpg', 12345);
        Storage::put('/public/images/test2.jpg', 12345);

        $ad_data = Advertisement::factory()->withCategory(Category::factory()->create())->raw([
            'image_url_square' => null
        ]);

        $ad_data_without_urls = array_diff_key($ad_data, ['image_url_square' => null, 'image_url_rectangle' => null]);
        $ad_data_without_urls['image_rectangle'] = UploadedFile::fake()->image('img_1.jpg');
        $ad_data_without_urls['image_square'] = UploadedFile::fake()->image('img_2.jpg');

        $ad_data_without_urls['start_date'] = now()->format('Y-m-d');
        $ad_data_without_urls['end_date'] = now()->addDays(5)->format('Y-m-d');

        $this->post(route('advertisement.store'), $ad_data_without_urls)
            ->assertRedirect();

        $this->assertDatabaseHas('advertisements', [
            'caption' => $ad_data_without_urls['caption'],
            'category_id' => $ad_data_without_urls['category_id'],
            'start_date' => "{$ad_data_without_urls['start_date']} 00:00:00",
            'end_date' => "{$ad_data_without_urls['end_date']} 00:00:00"
        ]);

        Storage::assertExists(Advertisement::first()->image_url_square);
        Storage::assertExists(Advertisement::first()->image_url_rectangle);
    }

    public function test_advertisement_could_be_created_with_products_attached()
    {
        Storage::fake();
        Storage::put('/public/images/test1.jpg', 12345);
        Storage::put('/public/images/test2.jpg', 12345);

        $ad_data = Advertisement::factory()->withCategory(Category::factory()->create())->raw([
            'image_url_square' => null
        ]);

        $ad_data_without_urls = array_diff_key($ad_data, ['image_url_square' => null, 'image_url_rectangle' => null]);
        $ad_data_without_urls['image_rectangle'] = UploadedFile::fake()->image('img_1.jpg');
        $ad_data_without_urls['image_square'] = UploadedFile::fake()->image('img_2.jpg');

        $ad_data_without_urls['products'] = Product::factory()->count(2)
                                                              ->create()
                                                              ->pluck('id')
                                                              ->toArray();

        $this->post(route('advertisement.store'), $ad_data_without_urls)
            ->assertRedirect();

        $this->assertDatabaseCount('advertisements', 1);
        $this->assertDatabaseCount('advertisement_product', 2);
    }

    public function test_basic_ad_data_could_be_changed()
    {
        Storage::fake();
        Storage::put('/public/images/test.png', 12233);

        $ad = Advertisement::factory()
                           ->withCategory(Category::factory()->create())
                           ->create();

        $data = [
            'caption' => 'new caption',
            'description' => 'new description',
            'category_id' => Category::factory()->create()->id,
            'start_date' => now()->addDays(5)->format('Y-m-d H:i:s'),
            'end_date' => now()->addDays(10)->format('Y-m-d H:i:s')
        ];

        $this->put( route('advertisement.update', $ad), $data )
            ->assertRedirect();

        $this->assertDatabaseHas('advertisements', $data);
    }

    public function test_products_attached_to_ad_could_be_changed()
    {
        Storage::fake();
        Storage::put('/public/images/test.png', 12233);

        $ad = Advertisement::factory()
            ->withCategory(Category::factory()->create())
            ->create();

        $data = [
            'caption' => 'new caption',
            'description' => 'new description',
            'category_id' => Category::factory()->create()->id,
            'start_date' => now()->addDays(5)->format('Y-m-d H:i:s'),
            'end_date' => now()->addDays(10)->format('Y-m-d H:i:s')
        ];

        $data['products'] = Product::factory()->count(3)
            ->create()
            ->pluck('id')
            ->toArray();

        $this->put( route('advertisement.update', $ad), $data )
            ->assertRedirect();

        $this->assertDatabaseCount('advertisement_product', 3);

        $this->assertDatabaseHas('advertisement_product', [ 'product_id' => $data['products'][0] ]);
        $this->assertDatabaseHas('advertisement_product', [ 'product_id' => $data['products'][1] ]);
        $this->assertDatabaseHas('advertisement_product', [ 'product_id' => $data['products'][2] ]);
    }

    public function test_images_attached_to_ad_could_be_changed()
    {
        Storage::fake();

        Storage::put('/public/images/test.png', 12233);
        Storage::put('/public/images/test2.png', 12233);

        $ad = Advertisement::factory()
            ->withCategory(Category::factory()->create())
            ->create([
                'image_url_square' => 'public/images/test.png',
                'image_url_rectangle' => 'public/images/test2.png',
            ]);

        //if the image is null - nothing happens
        $this->put( route('advertisement.update', $ad), ['caption' => 12345] )
            ->assertRedirect();

        $this->assertDatabaseHas('advertisements', [
            'image_url_square' => 'public/images/test.png',
            'image_url_rectangle' => 'public/images/test2.png',
        ]);

        //if not - images are reattached (old are deleted and new are saved)
        $data = [
            'image_square' => UploadedFile::fake()->image('img_1.jpg', 40, 40),
            'image_rectangle' => UploadedFile::fake()->image('img_2.jpg', 40, 40),
        ];

        $this->put( route('advertisement.update', $ad), $data )
            ->assertRedirect();

        Storage::assertMissing('public/images/test.png');
        Storage::assertMissing('public/images/test2.png');

        $files = Storage::allFiles('public/images');
        $this->assertCount(2, $files);
    }
}
