<?php

namespace Tests\Unit;

use App\Models\Report;
use App\Models\Review;
use Tests\TestCase;

class ReportTest extends TestCase
{
    public function test_example()
    {
        $review = Review::factory()->create();

        dd( Report::factory()->withObject($review)->create() );
    }
}
