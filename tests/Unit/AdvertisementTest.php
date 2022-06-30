<?php

namespace Tests\Unit;

use App\Models\Advertisement;
use Carbon\Carbon;
use Tests\TestCase;

class AdvertisementTest extends TestCase
{
    public function test_start_date_and_end_date_are_carbon_instances()
    {
        Advertisement::factory()->create();

        $ad = Advertisement::first();

        $this->assertInstanceOf(Carbon::class, $ad->start_date);
        $this->assertInstanceOf(Carbon::class, $ad->end_date);
    }
}
