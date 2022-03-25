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
        $report = Report::factory()
                        ->withObject( Review::factory()->create() )
                        ->create();

        $this->assertInstanceOf(User::class, $report->author);
    }

    public function test_report_associated_with_object()
    {
        $report = Report::factory()
                        ->withObject( Review::factory()->create() )
                        ->create();

        $this->assertInstanceOf(Review::class, $report->object);
    }

    public function test_report_could_be_posted_only_once_for_specific_object()
    {
        $this->expectExceptionMessage('UNIQUE constraint failed');

        $review = Review::factory()->create();

        $user = User::factory()->create();

        Report::factory()->withObject($review)->create(['user_id' => $user]);
        Report::factory()->withObject($review)->create(['user_id' => $user]);
    }
}
