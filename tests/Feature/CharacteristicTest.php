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
    public function test_characteristic_could_be_created()
    {
        $category = Category::factory()->create();

        $response = $this->post( route('characteristic.store'), [
            'name' => 'test',
            'category_id' => $category->id
        ] )->assertOk();

        $this->assertDatabaseHas('characteristics', [
           'name' => 'test',
           'category_id' => $category->id
        ]);
    }

    public function test_characteristic_name_is_required_to_store_the_characteristic()
    {
        $category = Category::factory()->create();

        $response = $this->post( route('characteristic.store'), [
            'name' => '',
            'category_id' => $category->id
        ] )->assertSessionHasErrors('name');
    }

    public function test_characteristic_category_is_required_to_store_the_characteristic()
    {
        $category = Category::factory()->create();

        $response = $this->post( route('characteristic.store'), [
            'name' => 'test',
            'category_id' => null
        ] )->assertSessionHasErrors('category_id');
    }

    public function test_characteristic_category_must_exist()
    {
        $category = Category::factory()->create();

        $this->post( route('characteristic.store'), [
            'name' => 'test',
            'category_id' => 1000
        ] )->assertSessionHasErrors('category_id');

        $this->post( route('characteristic.store'), [
            'name' => 'test',
            'category_id' => $category->id
        ] )->assertSessionHasNoErrors();
    }

    public function test_characteristic_could_be_deleted_from_controller()
    {
        $category = Category::factory()->create();

        DB::table('characteristics')->insert([
            'name' => 'test',
            'category_id' => $category->id
        ] );

        $this->assertDatabaseCount('characteristics', 1);

        $this->delete( route('characteristic.destroy', Characteristic::first()) );

        $this->assertDatabaseCount('characteristics', 0);
    }
}
