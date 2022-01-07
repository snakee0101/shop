<?php

namespace Tests\Feature;

use App\Models\Product;
use App\Models\Video;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class VideoTest extends TestCase
{
    public function test_example()
    {
        dd( Video::factory()->withObject( Product::factory()->create() )->create() );
    }
}
