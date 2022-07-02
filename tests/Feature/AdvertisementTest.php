<?php

namespace Tests\Feature;

use App\Models\Advertisement;
use App\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
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

        $this->delete( route('advertisement.destroy', $ad) )
             ->assertRedirect();

        $this->assertDatabaseCount('advertisements', 0);

        Storage::assertMissing('/public/images/test1.jpg');
        Storage::assertMissing('/public/images/test2.jpg');
    }

    public function test_when_advertisement_is_deleted_products_are_detached()
    {
        Storage::fake();

        $ad = Advertisement::factory()->create();

        $ad->products()->attach( Product::factory()
                                        ->count(2)
                                        ->create() );

        $this->assertDatabaseCount('advertisement_product', 2);

        $this->delete( route('advertisement.destroy', $ad) )
             ->assertRedirect();

        $this->assertDatabaseCount('advertisement_product', 0);
    }
}
