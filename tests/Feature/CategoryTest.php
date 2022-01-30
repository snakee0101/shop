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

    public function test_category_name_is_required()
    {
        Storage::fake();

        $file = UploadedFile::fake()->image('test.png');

        $category = Category::factory()->make();

        $this->post( route('category.store'), [
            'name' => '',
            'parent_id' => null,
            'image' => $file
        ] )->assertSessionHasErrors('name');
    }

    public function test_category_image_is_required()
    {
        Storage::fake();

        $file = UploadedFile::fake()->image('test.png');

        $category = Category::factory()->make();

        $this->post( route('category.store'), [
            'name' => '',
            'parent_id' => null,
            'image' => null
        ] )->assertSessionHasErrors('image');
    }

    public function test_category_could_be_deleted()
    {
        $category = Category::factory()->create();

        $this->assertDatabaseCount('categories', 1);
        $this->delete( route('category.destroy', $category) );

        $this->assertDatabaseCount('categories', 0);
    }

    public function test_category_data_could_be_updated()
    {
        $category = Category::factory()->create();

        $file = UploadedFile::fake()->image('test.png');

        $this->put( route('category.update', $category->id), [
            'name' => 'new name',
            'parent_id' => null,
            'image' => $file
        ] );

        $this->assertDatabaseHas('categories', [
            'name' => 'new name',
            'parent_id' => null
        ]);
    }

    public function test_user_may_omit_an_image_when_updating_category_then_the_image_is_unchanged()
    {
        $category = Category::factory()->create();

        $this->put( route('category.update', $category->id), [
            'name' => 'new name',
            'parent_id' => null,
            'image' => null
        ] );

        $this->assertDatabaseHas('categories', [
            'name' => 'new name',
            'parent_id' => null,
            'image_url' => $category->image_url
        ]);
    }
}
