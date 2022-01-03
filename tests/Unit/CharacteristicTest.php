<?php

namespace Tests\Unit;

use App\Models\Characteristic;
use Tests\TestCase;

class CharacteristicTest extends TestCase
{
    public function test_example()
    {
        dd( Characteristic::factory()->create() );
    }
}
