<?php

namespace Tests\Feature;

use App\Models\Category;
use App\Models\Characteristic;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;

class CharacteristicTest extends TestCase
{
    private $category;

    protected function setUp(): void
    {
        parent::setUp();
        $this->category = Category::factory()->create();
    }

    public function test_characteristic_could_be_created()
    {
        $this->post( route('characteristic.store'), [
            'name' => 'test',
            'category_id' => $this->category->id
        ] );

        $this->assertDatabaseHas('characteristics', [
           'name' => 'test',
           'category_id' => $this->category->id
        ]);
    }

    public function test_characteristic_name_is_required_to_store_the_characteristic()
    {
        $this->post( route('characteristic.store'), [
            'name' => '',
            'category_id' => $this->category->id
        ] )->assertSessionHasErrors('name');
    }

    public function test_characteristic_category_is_required_to_store_the_characteristic()
    {
        $this->post( route('characteristic.store'), [
            'name' => 'test',
            'category_id' => null
        ] )->assertSessionHasErrors('category_id');
    }

    public function test_characteristic_category_must_exist()
    {
        $this->post( route('characteristic.store'), [
            'name' => 'test',
            'category_id' => 1000
        ] )->assertSessionHasErrors('category_id');

        $this->post( route('characteristic.store'), [
            'name' => 'test',
            'category_id' => $this->category->id
        ] )->assertSessionHasNoErrors();
    }

    public function test_characteristic_could_be_deleted_from_controller()
    {
        $char = Characteristic::factory()->create();

        $this->delete( route('characteristic.destroy', $char) );

        $this->assertDatabaseCount('characteristics', 0);
    }

    public function test_characteristic_could_be_updated()
    {
        $char = Characteristic::factory()->create(['category_id' => $this->category->id]);

        $category2 = Category::factory()->create();

        $this->put( route('characteristic.update', $char), [
            'name' => 'new name',
            'category_id' => $category2->id
        ] );

        $this->assertDatabaseHas('characteristics', [
            'name' => 'new name',
            'category_id' => $category2->id
        ]);
    }

    public function test_characteristic_name_is_required_when_updating()
    {
        $char = Characteristic::factory()->create(['category_id' => $this->category->id]);

        $category2 = Category::factory()->create();

        $this->put( route('characteristic.update', $char), [
            'name' => '',
            'category_id' => $category2->id
        ] )->assertSessionHasErrors('name');
    }

    public function test_category_can_get_a_list_of_its_characteristics()
    {
        $chars = Characteristic::factory()->count(3)
                                         ->create(['category_id' => $this->category->id]);

        $json_response = $this->post( route('characteristic.for_category', $this->category) )->assertSuccessful()
                                                                      ->content();

        $this->assertStringContainsString($chars[0]->name, $json_response);
        $this->assertStringContainsString($chars[1]->name, $json_response);
        $this->assertStringContainsString($chars[2]->name, $json_response);
    }

    public function test_characteristic_name_must_be_unique_across_one_category()
    {
        $category_2 = Category::factory()->create();

        $this->post( route('characteristic.store'), [
            'name' => 'test',
            'category_id' => $this->category->id
        ] )->assertSessionHasNoErrors();

        $this->post( route('characteristic.store'), [
            'name' => 'test',
            'category_id' => $category_2->id
        ] )->assertSessionHasNoErrors();


        $this->post( route('characteristic.store'), [
            'name' => 'test',
            'category_id' => $this->category->id
        ] )->assertSessionHasErrors('name');
    }

    public function test_characteristic_name_must_be_unique_across_one_category_while_updating()
    {
        $char = Characteristic::factory()->create(['category_id' => $this->category->id]);
        $char_2 = Characteristic::factory()->create(['category_id' => $this->category->id]);

        $category2 = Category::factory()->create();
        $char_3 = Characteristic::factory()->create(['category_id' => $category2->id]);
        $char_4 = Characteristic::factory()->create(['category_id' => $category2->id]);

        $this->put( route('characteristic.update', $char), [
            'name' => 'new name',
            'category_id' => $this->category->id
        ] )->assertSessionHasNoErrors();

        $this->put( route('characteristic.update', $char_3), [
            'name' => $char->name,
            'category_id' => $category2->id
        ] )->assertSessionHasNoErrors();

        $this->put( route('characteristic.update', $char), [
            'name' => $char_2->name,
            'category_id' => $this->category->id
        ] )->assertSessionHasErrors('name');
    }
}
