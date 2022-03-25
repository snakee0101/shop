<?php

namespace Tests\Unit;

use App\Models\Category;
use App\Models\Characteristic;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;

class CharacteristicTest extends TestCase
{
    private function createCharacteristicsForProduct($product)
    {
        $chars = Characteristic::factory()->count(2)->create();

        DB::table('characteristic_product')->insert([
            [
                'id' => 1,
                'product_id' => $product->id,
                'characteristic_id' => $chars[0]->id,
                'value' => 100],
            [
                'id' => 2,
                'product_id' => $product->id,
                'characteristic_id' => $chars[1]->id,
                'value' => 'test value']
        ]);
    }

    public function test_a_product_has_characteristics()
    {
        $product = Product::factory()->create();

        $this->createCharacteristicsForProduct($product);

        $this->assertInstanceOf(Characteristic::class, $product->characteristics()->first());
    }

    public function test_category_knows_its_characteristics()
    {
        Characteristic::factory()->create([
            'category_id' => $category = Category::factory()->create()
        ]);

        $this->assertInstanceOf(Characteristic::class, $category->characteristics()->first());
    }

    public function test_characteristics_pivot_table_stores_its_value()
    {
        $product = Product::factory()->create();

        $this->createCharacteristicsForProduct($product);

        $this->assertEquals(100, $product->characteristics()->first()->pivot->value);
    }

    public function test_characteristics_model_could_retrieve_unique_characteristics_data()
    {
        $product1 = Product::factory()->create();
        $product2 = Product::factory()->create();
        $product3 = Product::factory()->create();

        $char1 = Characteristic::factory()->create(['category_id' => $product1->category_id]);
        $char2 = Characteristic::factory()->create(['category_id' => $product2->category_id]);
        $char3 = Characteristic::factory()->create(['category_id' => $product3->category_id]);

        DB::table('characteristic_product')->insert(['product_id' => $product1->id, 'characteristic_id' => $char1->id, 'value' => 'unique']);
        DB::table('characteristic_product')->insert(['product_id' => $product2->id, 'characteristic_id' => $char1->id, 'value' => 10]);
        DB::table('characteristic_product')->insert(['product_id' => $product3->id, 'characteristic_id' => $char1->id, 'value' => 0]);

        DB::table('characteristic_product')->insert(['product_id' => $product1->id, 'characteristic_id' => $char2->id, 'value' => 'same value']);
        DB::table('characteristic_product')->insert(['product_id' => $product2->id, 'characteristic_id' => $char2->id, 'value' => 'same value']);
        DB::table('characteristic_product')->insert(['product_id' => $product3->id, 'characteristic_id' => $char2->id, 'value' => 'same value']);

        $this->assertCount(1, Characteristic::diff(Product::all()));
    }

    public function test_characteristics_diff_returns_valid_characteristics_even_for_one_product()
    {
        $product1 = Product::factory()->create();

        $char1 = Characteristic::factory()->create(['category_id' => $product1->category_id]);
        $char2 = Characteristic::factory()->create(['category_id' => $product1->category_id]);

        DB::table('characteristic_product')->insert(['product_id' => $product1->id, 'characteristic_id' => $char1->id, 'value' => 'unique']);
        DB::table('characteristic_product')->insert(['product_id' => $product1->id, 'characteristic_id' => $char2->id, 'value' => 'same value']);

        $this->assertNotEmpty(Characteristic::diff(Product::all()));
    }

    public function test_when_characteristics_are_deleted_all_products_are_detached()
    {
        $product1 = Product::factory()->create();

        $char = Characteristic::factory()->create(['category_id' => $product1->category_id]);
        DB::table('characteristic_product')->insert(['product_id' => $product1->id, 'characteristic_id' => $char->id, 'value' => 'unique']);

        $this->assertDatabaseCount('characteristic_product', 1);

        $char->delete();

        $this->assertDatabaseCount('characteristic_product', 0);

    }

    public function test_characteristic_name_must_be_unique_across_one_category()
    {
        $this->withoutExceptionHandling();
        $this->expectExceptionMessage('UNIQUE');

        $product = Product::factory()->create();

        $this->createCharacteristicsForProduct($product);
        $this->createCharacteristicsForProduct($product);
    }
}
