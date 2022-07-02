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
}
