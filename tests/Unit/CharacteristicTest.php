<?php

namespace Tests\Unit;

use App\Models\Category;
use App\Models\Characteristic;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;

class CharacteristicTest extends TestCase
{
    public function test_a_product_has_characteristics()
    {
        $chars = Characteristic::factory()->count(2)->create();
        $product = Product::factory()->create();

        DB::table('characteristic_product')->insert([
            'id' => 1,
            'product_id' => $product->id,
            'characteristic_id' => $chars[0]->id,
            'value' => 100
        ]);

        DB::table('characteristic_product')->insert([
            'id' => 2,
            'product_id' => $product->id,
            'characteristic_id' => $chars[1]->id,
            'value' => 'test value'
        ]);

        $this->assertInstanceOf(Characteristic::class, $product->characteristics[0]);
    }

    public function test_category_knows_its_characteristics()
    {
        $category = Category::factory()->create();

        $chars = Characteristic::factory()->count(2)->create([
            'category_id' => $category->id
        ]);

        $this->assertInstanceOf(Characteristic::class, $category->characteristics[0]);
    }

    public function test_characteristics_pivot_table_stores_its_value()
    {
        $chars = Characteristic::factory()->count(2)->create();
        $product = Product::factory()->create();

        DB::table('characteristic_product')->insert([
            'id' => 1,
            'product_id' => $product->id,
            'characteristic_id' => $chars[0]->id,
            'value' => 100
        ]);

        DB::table('characteristic_product')->insert([
            'id' => 2,
            'product_id' => $product->id,
            'characteristic_id' => $chars[1]->id,
            'value' => 'test value'
        ]);

        $this->assertEquals(100, $product->characteristics[0]->pivot->value);
    }

    public function test_characteristics_model_could_retrieve_unique_characteristics_data()
    {
        $product1 = Product::factory()->create();
        $product2 = Product::factory()->create();
        $product3 = Product::factory()->create();

        $char1 = Characteristic::factory()->create(['category_id' => $product1->category_id]);
        $char2 = Characteristic::factory()->create(['category_id' => $product2->category_id]);
        $char3 = Characteristic::factory()->create(['category_id' => $product3->category_id]);

        DB::table('characteristic_product')->insert(['product_id' => $product1->id, 'characteristic_id' => $char1->id, 'value' => 'unique' ]);
        DB::table('characteristic_product')->insert(['product_id' => $product2->id, 'characteristic_id' => $char1->id, 'value' => 10 ]);
        DB::table('characteristic_product')->insert(['product_id' => $product3->id, 'characteristic_id' => $char1->id, 'value' => 0 ]);

        DB::table('characteristic_product')->insert(['product_id' => $product1->id, 'characteristic_id' => $char2->id, 'value' => 'same value' ]);
        DB::table('characteristic_product')->insert(['product_id' => $product2->id, 'characteristic_id' => $char2->id, 'value' => 'same value' ]);
        DB::table('characteristic_product')->insert(['product_id' => $product3->id, 'characteristic_id' => $char2->id, 'value' => 'same value' ]);

        $this->assertCount(1,Characteristic::diff(Product::all()) );
    }

    public function test_characteristics_diff_returns_valid_characteristics_even_for_one_product()
    {
        $product1 = Product::factory()->create();

        $char1 = Characteristic::factory()->create(['category_id' => $product1->category_id]);
        $char2 = Characteristic::factory()->create(['category_id' => $product1->category_id]);

        DB::table('characteristic_product')->insert(['product_id' => $product1->id, 'characteristic_id' => $char1->id, 'value' => 'unique' ]);
        DB::table('characteristic_product')->insert(['product_id' => $product1->id, 'characteristic_id' => $char2->id, 'value' => 'same value' ]);

        $this->assertNotEmpty( Characteristic::diff(Product::all()) );
    }
}
