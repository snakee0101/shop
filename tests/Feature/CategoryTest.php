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
    private UploadedFile $file;
    private array $data;

    protected function setUp(): void
    {
        parent::setUp();
        Storage::fake();

        $this->file = UploadedFile::fake()->image('test.png');
        $this->data = [
            'name' => 'test',
            'parent_id' => null,
            'image' => $this->file
        ];
    }

    public function test_category_could_be_created()
    {
        $this->post( route('category.store'), $this->data);

        $this->assertDatabaseCount('categories', 1);
    }

    public function test_category_could_be_saved_with_files()
    {
        $this->post( route('category.store'), $this->data);

        Storage::assertExists($file_url = Storage::files('/public/images')[0]);
    }

    public function test_category_name_is_required()
    {
        $this->data['name'] = '';

        $this->post( route('category.store'), $this->data)
             ->assertSessionHasErrors('name');
    }

    public function test_category_image_is_required()
    {
        $this->data['image'] = null;

        $this->post( route('category.store'), $this->data)
             ->assertSessionHasErrors('image');
    }

    public function test_category_could_be_deleted()
    {
        $category = Category::factory()->create();

        $this->delete( route('category.destroy', $category) );
        $this->assertDatabaseCount('categories', 0);
    }

    public function test_category_data_could_be_updated()
    {
        $category = Category::factory()->create();

        $this->data['name'] = 'new name';
        $this->put( route('category.update', $category->id), $this->data);

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
            'image' => null
        ] );

        $this->assertDatabaseHas('categories', [
            'image_url' => $category->image_url
        ]);
    }
}
