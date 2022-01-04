<?php

namespace Tests\Unit;

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
}
