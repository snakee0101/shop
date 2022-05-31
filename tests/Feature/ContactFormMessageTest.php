<?php

namespace Tests\Feature;

use App\Models\ContactFormMessage;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ContactFormMessageTest extends TestCase
{
    public function test_example()
    {
        dd( ContactFormMessage::factory()->make() );
    }
}
