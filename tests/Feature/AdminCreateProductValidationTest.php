<?php

namespace Tests\Feature;

use App\Discounts\FixedPriceDiscount;
use App\Models\Category;
use App\Models\Characteristic;
use App\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AdminCreateProductValidationTest extends TestCase
{
    private array $basic_data, $discount_data, $characteristics_data;

    protected function setUp() :void
    {
        parent::setUp();

        $characteristics = Characteristic::factory()
                                         ->count(3)
                                         ->create();

        $category = Category::factory()->create();
        $category->characteristics()->saveMany( $characteristics );

        $this->basic_data = [
            'name' => 'test name',
            'description' => 'description',
            'price' => '10.05',
            'payment_info' => 'payment info',
            'guarantee_info' => 'guarantee info',
            'category_id' => $category->id,
            'in_stock' => Product::STATUS_IN_STOCK
        ];

        $this->characteristics_data = [
            "char-{$characteristics[0]->id}" => 'test value 1',
            "char-{$characteristics[1]->id}" => 'test value 2',
            "char-{$characteristics[2]->id}" => 'test value 3',
        ];

        $this->discount_data = [
            'discount_applied' => 'on',
            'discount_classname' => FixedPriceDiscount::class,
            'discount_value' => 10,
        ];
    }

    public function field_values()
    {
        return [
            'product name is required' => ['name', ''],
            'product description is required' => ['description', ''],
            'product payment info is required' => ['payment_info', ''],
            'product guarantee info is required' => ['guarantee_info', ''],
            'product price is required' => ['price', ''],
            'product price is not a string' => ['price', 'a'],
            'product price cant be negative' => ['price', '-1'],
            'product price cant be zero' => ['price', '0.00'],
            'product price must be greater than zero' => ['price', '0.01', false],
            'product category must be selected' => ['category_id', '']
        ];
    }
    /**
     * @dataProvider field_values
     */
    public function test_fields_of_product_creation_form($field_name, $field_value, bool $check_for_errors = true)
    {
        $this->basic_data[$field_name] = $field_value;

        $res = $this->post( route('product.store'), $this->basic_data + $this->characteristics_data );

        $check_for_errors ? $res->assertSessionHasErrors($field_name)
                          : $res->assertSessionHasNoErrors();
    }
}
