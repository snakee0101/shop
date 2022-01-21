<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
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
            'shipping_date' => '2021-02-20 20:20:20'
        ];
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

    public function test_first_name_contains_only_letters()
    {
        $this->credentials['first_name'] = 541;
        $this->post( route('order.store'), $this->credentials + $this->post_office + $this->valid_data )
             ->assertSessionHasErrors('first_name');

        $this->credentials['first_name'] = 'Test name';
        $this->post( route('order.store'), $this->credentials + $this->post_office + $this->valid_data )
            ->assertSessionHasErrors('first_name');

        $this->credentials['first_name'] = 'Test&';
        $this->post( route('order.store'), $this->credentials + $this->post_office + $this->valid_data )
            ->assertSessionHasErrors('first_name');
    }

    public function test_last_name_contains_only_letters()
    {
        $this->post( route('order.store'), $this->credentials + $this->post_office + $this->valid_data )
            ->assertSessionHasNoErrors();

        $this->credentials['last_name'] = 541;
        $this->post( route('order.store'), $this->credentials + $this->post_office + $this->valid_data )
             ->assertSessionHasErrors('last_name');

        $this->credentials['last_name'] = 'Test name';
        $this->post( route('order.store'), $this->credentials + $this->post_office + $this->valid_data )
            ->assertSessionHasErrors('last_name');

        $this->credentials['last_name'] = 'Test&';
        $this->post( route('order.store'), $this->credentials + $this->post_office + $this->valid_data )
            ->assertSessionHasErrors('last_name');
    }

    public function test_phone_must_be_valid()
    {
        $this->credentials['phone'] = '+35094760244';
        $this->post( route('order.store'), $this->credentials + $this->post_office + $this->valid_data )
            ->assertSessionHasErrors('phone');
    }

    public function test_email_must_be_valid()
    {
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
        $this->post( route('order.store'), $this->credentials + $this->post_office + $this->valid_data )
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
}
