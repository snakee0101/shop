<?php

namespace Tests\Feature;

use App\Models\ContactFormMessage;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ContactFormMessageTest extends TestCase
{
    public function test_if_data_is_valid_contact_form_message_is_created()
    {
        $data = ContactFormMessage::factory()->raw();

        $this->post( route('contacts.store'),  $data);
        $this->assertDatabaseHas('contact_form_messages', $data);
    }

    public function test_all_fields_are_required()
    {
        $data = ContactFormMessage::factory()->raw();
        $data['name'] = '';
        $this->post( route('contacts.store'),  $data)
             ->assertSessionHasErrors('name');

        $data = ContactFormMessage::factory()->raw();
        $data['email'] = '';
        $this->post( route('contacts.store'),  $data)
             ->assertSessionHasErrors('email');

        $data = ContactFormMessage::factory()->raw();
        $data['subject'] = '';
        $this->post( route('contacts.store'),  $data)
             ->assertSessionHasErrors('subject');

        $data = ContactFormMessage::factory()->raw();
        $data['message'] = '';
        $this->post( route('contacts.store'),  $data)
             ->assertSessionHasErrors('message');
    }

    public function test_email_must_be_valid()
    {
        $data = ContactFormMessage::factory()->raw();
        $data['email'] = 'not.an.email';
        $this->post( route('contacts.store'),  $data)
            ->assertSessionHasErrors('email');
    }

    public function test_message_must_consist_of_at_least_20_symbols()
    {
        $data = ContactFormMessage::factory()->raw();
        $data['message'] = '123456789O123456789';
        $this->post( route('contacts.store'),  $data)
            ->assertSessionHasErrors('message');

        $data['message'] = '123456789O1234567890';
        $this->post( route('contacts.store'),  $data)
            ->assertSessionHasNoErrors();
    }
}
