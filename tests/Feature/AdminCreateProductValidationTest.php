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
            "char-{$characteristics[0]->name}" => 'test value 1',
            "char-{$characteristics[1]->name}" => 'test value 2',
            "char-{$characteristics[2]->name}" => 'test value 3',
        ];

        $this->discount_data = [
            'discount_applied' => 'on',
            'discount_classname' => FixedPriceDiscount::class,
            'discount_value' => 10,
        ];
    }

    public function test_product_name_is_required()
    {
        $this->basic_data['name'] = '';

        $this->post( route('product.store'), $this->basic_data + $this->characteristics_data )
             ->assertSessionHasErrors('name');
    }

    public function test_product_description_is_required()
    {
        $this->basic_data['description'] = '';

        $this->post( route('product.store'), $this->basic_data + $this->characteristics_data )
             ->assertSessionHasErrors('description');
    }

    public function test_product_payment_info_is_required()
    {
        $this->basic_data['payment_info'] = '';

        $this->post( route('product.store'), $this->basic_data + $this->characteristics_data )
             ->assertSessionHasErrors('payment_info');
    }

    public function test_product_guarantee_info_is_required()
    {
        $this->basic_data['guarantee_info'] = '';

        $this->post( route('product.store'), $this->basic_data + $this->characteristics_data )
            ->assertSessionHasErrors('guarantee_info');
    }

    public function test_product_price_is_required()
    {
        $this->basic_data['price'] = '';

        $this->post( route('product.store'), $this->basic_data + $this->characteristics_data )
            ->assertSessionHasErrors('price');
    }

    public function test_product_price_is_not_a_string()
    {
        $this->basic_data['price'] = 'a';

        $this->post( route('product.store'), $this->basic_data + $this->characteristics_data )
            ->assertSessionHasErrors('price');
    }

    public function test_product_price_is_not_less_than_1_cent()
    {
        $this->basic_data['price'] = '-1';

        $this->post( route('product.store'), $this->basic_data + $this->characteristics_data )
            ->assertSessionHasErrors('price');

        $this->basic_data['price'] = '0.00';

        $this->post( route('product.store'), $this->basic_data + $this->characteristics_data )
            ->assertSessionHasErrors('price');

        $this->basic_data['price'] = '0.01';

        $this->post( route('product.store'), $this->basic_data + $this->characteristics_data )
            ->assertSessionHasNoErrors();
    }
}
