<?php

namespace Tests\Feature;

use App\Models\Advertisement;
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
}
