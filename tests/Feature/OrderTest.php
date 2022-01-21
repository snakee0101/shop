<?php

namespace Tests\Feature;

use App\Models\Order;
use App\Models\Product;
use App\Models\ProductSet;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;

class OrderTest extends TestCase
{
    private array $credentials, $valid_data, $address, $post_office;

    protected function setUp(): void
    {
        parent::setUp();

        $this->credentials = [
            'first_name' => 'John',
            'last_name' => 'Wilson',
            'phone' => '+240879534025',
            'email' => 'test@gmail.com'
        ];

        $this->address = [
            'address' => 'Main Street, 72',
            'apartment' => 82
        ];

        $this->post_office = [
            'post_office_address' => 'Next Street, 88'
        ];

        $this->valid_data = [
            'country' => 'USA',
            'city' => 'New York',
            'state' => 'Washington',
            'postcode' => 85756,
            'shipping_date' => '2021-02-20 20:20:20',
            'checkout_payment_method' => 'card'
        ];
    }

    public function test_when_data_are_valid_order_is_saved_to_db()
    {
        $this->post( route('order.store'), $this->credentials + $this->post_office + $this->valid_data )
            ->assertSessionHasNoErrors()->assertOk();

        $this->assertDatabaseCount('orders', 1);
        $this->assertDatabaseHas('orders', [
            'is_paid' => true,
            'country' => $this->valid_data['country'],
            'address' => null,
            'apartment' => null,
            'post_office_address' => $this->post_office['post_office_address'],
            'city' => $this->valid_data['city'],
            'state' => $this->valid_data['state'],
            'postcode' => $this->valid_data['postcode'],
            'shipping_date' => $this->valid_data['shipping_date'],
        ]);
    }

    public function test_when_data_are_valid_credentials_are_also_saved_to_db_if_provided()
    {
        $this->post( route('order.store'), $this->credentials + $this->post_office + $this->valid_data )
            ->assertSessionHasNoErrors()->assertOk();

        $this->assertDatabaseCount('order_credentials', 1);
        $this->assertDatabaseHas('order_credentials', [
            'order_id' => Order::first()->id,
            'first_name' => $this->credentials['first_name'],
            'last_name' => $this->credentials['last_name'],
            'phone' => $this->credentials['phone'],
            'email' => $this->credentials['email']
        ]);
    }

    public function test_when_user_is_authenticated_credentials_are_not_saved()
    {
        $this->actingAs( User::factory()->create() );

        $this->post( route('order.store'), $this->credentials + $this->post_office + $this->valid_data )
            ->assertSessionHasNoErrors()->assertOk();

        $this->assertDatabaseCount('order_credentials', 0);
    }

    public function test_when_data_are_valid_cart_items_are_attached_to_order()
    {
        $product = Product::factory()->create();
        $product2 = Product::factory()->create();

        $product_set = ProductSet::factory()->create();

        DB::table('product_set_product')->insert([
            'product_set_id' => $product_set->id,
            'product_id' => $product2->id
        ]);
        $this->assertInstanceOf(Product::class, $product_set->fresh()->products()->first());


        \Cart::add([
            'id' => random_int(1,100),
            'name' => 'name',
            'price' => $product->price,
            'quantity' => 2,
            'attributes' => [],
            'associatedModel' => $product
        ]);

        \Cart::add([
            'id' => random_int(1,100),
            'name' => 'name 2',
            'price' => $product_set->price,
            'quantity' => 1,
            'attributes' => [],
            'associatedModel' => $product_set
        ]);

        $this->post( route('order.store'), $this->credentials + $this->post_office + $this->valid_data )
            ->assertSessionHasNoErrors()->assertOk();

        $this->assertDatabaseHas('order_item', [
            'item_id' => $product->id,
            'item_type' => Product::class,
            'quantity' => 2
        ]);

        $this->assertDatabaseHas('order_item', [
            'item_id' => $product_set->id,
            'item_type' => ProductSet::class,
            'quantity' => 1
        ]);
    }

    public function test_when_order_is_saved_cart_is_cleared()
    {
        $product = Product::factory()->create();
        $product2 = Product::factory()->create();

        $product_set = ProductSet::factory()->create();

        DB::table('product_set_product')->insert([
            'product_set_id' => $product_set->id,
            'product_id' => $product2->id
        ]);
        $this->assertInstanceOf(Product::class, $product_set->fresh()->products()->first());


        \Cart::add([
            'id' => random_int(1,100),
            'name' => 'name',
            'price' => $product->price,
            'quantity' => 2,
            'attributes' => [],
            'associatedModel' => $product
        ]);

        \Cart::add([
            'id' => random_int(1,100),
            'name' => 'name 2',
            'price' => $product_set->price,
            'quantity' => 1,
            'attributes' => [],
            'associatedModel' => $product_set
        ]);

        $this->post( route('order.store'), $this->credentials + $this->post_office + $this->valid_data )
            ->assertSessionHasNoErrors()->assertOk();

        $this->assertTrue( \Cart::isEmpty() );
    }

    public function test_when_something_is_invalid_order_is_not_saved()
    {
        $this->credentials['first_name'] = '';
        $this->post( route('order.store'), $this->credentials + $this->post_office + $this->valid_data );

        $this->assertDatabaseCount('orders', 0);
    }

    public function test_when_something_is_invalid_cart_is_not_cleared()
    {

    }

    public function test_when_something_is_invalid_credentials_are_not_saved()
    {
        $this->credentials['first_name'] = '';
        $this->post( route('order.store'), $this->credentials + $this->post_office + $this->valid_data );

        $this->assertDatabaseCount('order_credentials', 0);
    }

    public function test_either_post_office_or_address_must_be_present()
    {
        $this->post( route('order.store'), $this->credentials + $this->post_office + $this->valid_data )
            ->assertSessionHasNoErrors();

        $this->post( route('order.store'), $this->credentials + $this->address + $this->valid_data )
            ->assertSessionHasNoErrors();

        $this->post( route('order.store'), $this->credentials + $this->valid_data )
            ->assertSessionHasErrors();
    }

    public function test_loggen_in_user_doesnt_enter_credentials_either_post_office_or_address_is_required()
    {
        $this->actingAs( User::factory()->create() );

        $this->post( route('order.store'),$this->post_office + $this->valid_data )
            ->assertSessionHasNoErrors();

        $this->post( route('order.store'), $this->address + $this->valid_data )
            ->assertSessionHasNoErrors();
    }

    public function test_first_name_contains_letters_and_some_symbols()
    {
        $this->credentials['first_name'] = '';
        $this->post( route('order.store'), $this->credentials + $this->post_office + $this->valid_data )
            ->assertSessionHasErrors('first_name');

        $this->credentials['first_name'] = 541;
        $this->post( route('order.store'), $this->credentials + $this->post_office + $this->valid_data )
             ->assertSessionHasErrors('first_name');

        $this->credentials['first_name'] = 'Test name';
        $this->post( route('order.store'), $this->credentials + $this->post_office + $this->valid_data )
            ->assertSessionHasNoErrors();

        $this->credentials['first_name'] = "Name'name-name";
        $this->post( route('order.store'), $this->credentials + $this->post_office + $this->valid_data )
            ->assertSessionHasNoErrors();
    }

    public function test_last_name_contains_only_letters()
    {
        $this->credentials['last_name'] = '';
        $this->post( route('order.store'), $this->credentials + $this->post_office + $this->valid_data )
            ->assertSessionHasErrors('last_name');

        $this->credentials['last_name'] = 541;
        $this->post( route('order.store'), $this->credentials + $this->post_office + $this->valid_data )
            ->assertSessionHasErrors('last_name');

        $this->credentials['last_name'] = 'Test name';
        $this->post( route('order.store'), $this->credentials + $this->post_office + $this->valid_data )
            ->assertSessionHasNoErrors();

        $this->credentials['last_name'] = "Name'name-name";
        $this->post( route('order.store'), $this->credentials + $this->post_office + $this->valid_data )
            ->assertSessionHasNoErrors();
    }

    public function test_phone_must_be_valid()
    {
        $this->credentials['phone'] = '';
        $this->post( route('order.store'), $this->credentials + $this->post_office + $this->valid_data )
            ->assertSessionHasErrors('phone');

        $this->credentials['phone'] = '+35094760244';
        $this->post( route('order.store'), $this->credentials + $this->post_office + $this->valid_data )
            ->assertSessionHasErrors('phone');
    }

    public function test_email_must_be_valid()
    {
        $this->credentials['email'] = '';
        $this->post( route('order.store'), $this->credentials + $this->post_office + $this->valid_data )
            ->assertSessionHasErrors('email');

        $this->credentials['email'] = 'test@';
        $this->post( route('order.store'), $this->credentials + $this->post_office + $this->valid_data )
            ->assertSessionHasErrors('email');

        $this->credentials['email'] = 'test';
        $this->post( route('order.store'), $this->credentials + $this->post_office + $this->valid_data )
            ->assertSessionHasErrors('email');

        $this->credentials['email'] = '@test';
        $this->post( route('order.store'), $this->credentials + $this->post_office + $this->valid_data )
            ->assertSessionHasErrors('email');
    }

    public function test_address_is_required()
    {
        $this->credentials['address'] = '';
        $this->post( route('order.store'), $this->credentials + $this->valid_data )
            ->assertSessionHasErrors('address');
    }

    public function test_apartment_is_not_required_but_must_consists_of_numbers_only()
    {
        $this->credentials['apartment'] = '';
        $this->post( route('order.store'), $this->credentials + $this->address + $this->valid_data )
            ->assertSessionHasNoErrors();

        $this->credentials['apartment'] = '82A';
        $this->post( route('order.store'), $this->credentials + $this->address + $this->valid_data )
            ->assertSessionHasErrors('apartment');
    }

    public function test_apartment_must_not_be_present_with_post_office_address()
    {
        $this->credentials['apartment'] = '82';
        $this->post( route('order.store'), $this->credentials + $this->post_office + $this->valid_data )
            ->assertSessionHasErrors('post_office_address');

        $this->credentials['apartment'] = '';
        $this->post( route('order.store'), $this->credentials + $this->post_office + $this->valid_data )
            ->assertSessionHasNoErrors();
    }

    public function test_address_must_not_be_present_with_post_office_address()
    {
        $this->credentials['address'] = 'address';
        $this->post( route('order.store'), $this->credentials + $this->post_office + $this->valid_data )
            ->assertSessionHasErrors('post_office_address');

        $this->credentials['address'] = '';
        $this->post( route('order.store'), $this->credentials + $this->post_office + $this->valid_data )
            ->assertSessionHasNoErrors();
    }

    public function test_post_office_address_is_required()
    {
        $this->credentials['post_office_address'] = '';
        $this->post( route('order.store'), $this->credentials + $this->post_office + $this->valid_data )
            ->assertSessionHasErrors('post_office_address');
    }

    public function test_city_is_required()
    {
        $this->credentials['city'] = '';
        $this->post( route('order.store'), $this->credentials + $this->post_office + $this->valid_data )
            ->assertSessionHasErrors('city');
    }

    public function test_state_is_required()
    {
        $this->credentials['state'] = '';
        $this->post( route('order.store'), $this->credentials + $this->post_office + $this->valid_data )
            ->assertSessionHasErrors('state');
    }

    public function test_postcode_consists_of_five_digits()
    {
        $this->credentials['postcode'] = '';
        $this->post( route('order.store'), $this->credentials + $this->post_office + $this->valid_data )
            ->assertSessionHasErrors('postcode');

        $this->credentials['postcode'] = '123456';
        $this->post( route('order.store'), $this->credentials + $this->post_office + $this->valid_data )
            ->assertSessionHasErrors('postcode');

        $this->credentials['postcode'] = '1234';
        $this->post( route('order.store'), $this->credentials + $this->post_office + $this->valid_data )
            ->assertSessionHasErrors('postcode');

        $this->credentials['postcode'] = '12F34';
        $this->post( route('order.store'), $this->credentials + $this->post_office + $this->valid_data )
            ->assertSessionHasErrors('postcode');
    }

    public function test_shipping_date_must_be_in_valid_format()
    {
        $this->credentials['shipping_date'] = '';
        $this->post( route('order.store'), $this->credentials + $this->post_office + $this->valid_data )
            ->assertSessionHasErrors('shipping_date');

        $this->credentials['shipping_date'] = '10:10:10 2021-10-10';
        $this->post( route('order.store'), $this->credentials + $this->post_office + $this->valid_data )
            ->assertSessionHasErrors('shipping_date');

        $this->credentials['shipping_date'] = '15 Oct. 2012, 10:10:10';
        $this->post( route('order.store'), $this->credentials + $this->post_office + $this->valid_data )
            ->assertSessionHasErrors('shipping_date');
    }

    public function test_when_user_if_logged_in_credentials_are_not_checked()
    {
        $this->post( route('order.store'),$this->post_office + $this->valid_data )
            ->assertSessionHasErrors();

        $this->actingAs( User::factory()->create() );
        $this->post( route('order.store'),$this->post_office + $this->valid_data )
            ->assertSessionHasNoErrors();
    }
}
