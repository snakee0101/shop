<?php

namespace Tests\Feature;

use App\Models\Order;
use App\Models\Product;
use App\Models\ProductSet;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;
use Tests\TestCase;

class OrderTest extends TestCase
{
    private array $credentials, $valid_data, $address, $post_office;

    private function add_to_cart($item, $quantity)
    {
        \Cart::add([
            'id' => \random_int(1, 10000),
            'name' => Str::uuid(),
            'price' => $item->price,
            'quantity' => $quantity,
            'attributes' => [],
            'associatedModel' => $item
        ]);
    }

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

        //add product to cart - the form request performs a check
        $product = Product::factory()->create();

        $this->add_to_cart($product, 2);
    }

    public function test_if_cart_is_empty_order_will_not_be_performed()
    {
        $this->withoutExceptionHandling();
        $this->expectException(ValidationException::class);

        \Cart::clear();

        $this->post( route('order.store'), $this->credentials + $this->post_office + $this->valid_data );

        $this->assertDatabaseCount('orders', 0);
    }

    public function test_when_data_are_valid_order_is_saved_to_db()
    {
        $this->post( route('order.store'), $this->credentials + $this->post_office + $this->valid_data )
            ->assertSessionHasNoErrors();

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
            ->assertSessionHasNoErrors();

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
            ->assertSessionHasNoErrors();

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

        $this->add_to_cart($product, 2);
        $this->add_to_cart($product_set, 1);

        $this->post( route('order.store'), $this->credentials + $this->post_office + $this->valid_data )
            ->assertSessionHasNoErrors();

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

        $this->add_to_cart($product, 2);
        $this->add_to_cart($product_set, 1);

        $this->post( route('order.store'), $this->credentials + $this->post_office + $this->valid_data )
            ->assertSessionHasNoErrors();

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
        $this->credentials['first_name'] = '';

        $product = Product::factory()->create();
        $this->add_to_cart($product, 2);

        $this->post( route('order.store'), $this->credentials + $this->post_office + $this->valid_data );

        $this->assertFalse( \Cart::isEmpty() );
    }

    public function test_when_transaction_fails_cart_is_not_cleared()
    {
        $product = Product::factory()->create();

        $this->add_to_cart($product, 2);

        Schema::dropIfExists('orders'); //Simulate failed transaction
        $this->post( route('order.store'), $this->credentials + $this->post_office + $this->valid_data );

        $this->assertFalse( \Cart::isEmpty() );
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

    private function validation_test_1($credentials_field, $field_value, bool $expect_error)
    {
        $method = $expect_error ? 'assertSessionHasErrors' : 'assertSessionHasNoErrors';
        $argument = $expect_error ? $credentials_field : null;

        $this->credentials[$credentials_field] = $field_value;
        $this->post( route('order.store'), $this->credentials + $this->post_office + $this->valid_data )
             ->$method($argument);
    }

    public function test_first_name_contains_letters_and_some_symbols()
    {
        $this->validation_test_1('first_name', '', true);
        $this->validation_test_1('first_name', 541, true);
        $this->validation_test_1('first_name', 'Test name', false);
        $this->validation_test_1('first_name', "Name'name-name", false);
    }

    public function test_last_name_contains_only_letters()
    {
        $this->validation_test_1('last_name', '', true);
        $this->validation_test_1('last_name', 541, true);
        $this->validation_test_1('last_name', 'Test name', false);
        $this->validation_test_1('last_name', "Name'name-name", false);
    }

    public function test_phone_must_be_valid()
    {
        $this->validation_test_1('phone', '', true);
        $this->validation_test_1('phone', '+35094760244', true);
    }

    public function test_email_must_be_valid()
    {
        $this->validation_test_1('email', '', true);
        $this->validation_test_1('email', 'test@', true);
        $this->validation_test_1('email', 'test', true);
        $this->validation_test_1('email', '@test.gmail.com', true);
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

        $this->validation_test_1('apartment', '', false);
    }

    public function test_address_must_not_be_present_with_post_office_address()
    {
        $this->credentials['address'] = 'address';
        $this->post( route('order.store'), $this->credentials + $this->post_office + $this->valid_data )
            ->assertSessionHasErrors('post_office_address');

        $this->validation_test_1('address', '', false);
    }

    public function test_post_office_address_is_required()
    {
        $this->validation_test_1('post_office_address', '', true);
    }

    public function test_city_is_required()
    {
        $this->validation_test_1('city', '', true);
    }

    public function test_state_is_required()
    {
        $this->validation_test_1('state', '', true);
    }

    public function test_postcode_consists_of_five_digits()
    {
        $this->validation_test_1('postcode', '', true);
        $this->validation_test_1('postcode', '123456', true);
        $this->validation_test_1('postcode', '1234', true);
        $this->validation_test_1('postcode', '12F34', true);
    }

    public function test_shipping_date_must_be_in_valid_format()
    {
        $this->validation_test_1('shipping_date', '', true);
        $this->validation_test_1('shipping_date', '10:10:10 2021-10-10', true);
        $this->validation_test_1('shipping_date', '15 Oct. 2012, 10:10:10', true);
    }

    public function test_when_user_if_logged_in_credentials_are_not_checked()
    {
        $this->post( route('order.store'),$this->post_office + $this->valid_data )
            ->assertSessionHasErrors();

        $this->actingAs( User::factory()->create() );
        $this->post( route('order.store'),$this->post_office + $this->valid_data )
            ->assertSessionHasNoErrors();
    }

    public function test_user_is_not_saved_if_it_is_not_logged_in()
    {
        $this->post( route('order.store'), $this->credentials + $this->post_office + $this->valid_data )
            ->assertSessionHasNoErrors();

        $this->assertNull( Order::first()->user_id );
    }

    public function test_user_is_saved_if_it_is_logged_in()
    {
        $this->actingAs( $user = User::factory()->create() );

        $this->post( route('order.store'), $this->credentials + $this->post_office + $this->valid_data )
            ->assertSessionHasNoErrors();

        $this->assertEquals( $user->id, Order::first()->user_id );
    }

    public function test_order_could_be_deleted()
    {
        $order = Order::factory()->create();

        $this->assertDatabaseCount('orders', 1);

        $this->delete( route('order.destroy', $order) );

        $this->assertDatabaseCount('orders', 0);
    }

    public function test_order_data_could_be_updated()
    {
        $order = Order::factory()->create();

        $data = Order::factory()->raw();
        $data['shipping_date'] = $data['shipping_date']->format('Y-m-d H:i:s');

        $this->put( route('order.update', $order), $data)
             ->assertRedirect();

        $this->assertDatabaseHas('orders', $data);
    }
}
