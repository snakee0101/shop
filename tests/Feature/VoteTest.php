<?php

namespace Tests\Feature;

use App\Models\Review;
use App\Models\Vote;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class VoteTest extends TestCase
{
    public function test_example()
    {
        dd( Vote::factory()->withObject( Review::factory()->create() )->create() );
    }
}
