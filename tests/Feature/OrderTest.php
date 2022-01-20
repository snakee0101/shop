<?php

namespace Tests\Feature;

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

    public function test_first_name_contains_only_letters()
    {
        $this->post( route('order.store'), $this->credentials + $this->post_office + $this->valid_data )
            ->assertSessionHasNoErrors();

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
}
