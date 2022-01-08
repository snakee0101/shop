<?php

namespace Tests\Unit;

use App\Models\Report;
use App\Models\Review;
use App\Models\User;
use Tests\TestCase;

class ReportTest extends TestCase
{
    public function test_report_has_an_author()
    {
        $review = Review::factory()->create();

        $report = Report::factory()
                        ->withObject($review)
                        ->create();

        $this->assertInstanceOf(User::class, $report->author);
    }
}
