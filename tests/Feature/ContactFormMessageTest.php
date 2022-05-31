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
}
