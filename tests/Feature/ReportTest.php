<?php

namespace Tests\Feature;

use App\Models\Report;
use App\Models\Review;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ReportTest extends TestCase
{
    public function test_report_could_be_created()
    {
        $user = User::factory()->create();
        $review = Review::factory()->create();

        $report_data = Report::factory()
            ->withObject($review)
            ->make();

        $this->actingAs($user);

        $this->post( route('report.store'), $report_data->toArray() )
             ->assertOk();

        $this->assertDatabaseHas('reports', [
            'object_id' => $review->id,
            'object_type' => $review::class
        ]);
    }

    public function test_report_could_be_deleted()
    {
        $user = User::factory()->create();
        $review = Review::factory()->create();

        $report = Report::factory()
            ->withObject($review)
            ->create();

        $this->actingAs($user);

        $this->delete( route('report.destroy', $report) )
             ->assertRedirect();

        $this->assertDatabaseCount('reports', 0);
    }
}
