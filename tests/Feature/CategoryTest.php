<?php

namespace Tests\Feature;

use App\Models\Category;
use Illuminate\Http\UploadedFile;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class CategoryTest extends TestCase
{
    public function test_category_could_be_created()
    {
        $file = UploadedFile::fake()->image('test.png');

        $category = Category::factory()->make();

        $this->assertDatabaseCount('categories', 0);

        $this->post( route('category.store'), [
            'name' => 'test',
            'parent_id' => null,
            'image' => $file
        ] );

        $this->assertDatabaseCount('categories', 1);
    }

    public function test_category_could_be_saved_with_files()
    {
        Storage::fake();

        $file = UploadedFile::fake()->image('test.png');

        $category = Category::factory()->make();

        $this->post( route('category.store'), [
            'name' => 'test',
            'parent_id' => null,
            'image' => $file
        ] );

        $file_url = Storage::files('/public/images')[0];
        Storage::assertExists($file_url);
    }
}
