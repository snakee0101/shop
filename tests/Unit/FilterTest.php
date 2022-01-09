<?php

namespace Tests\Unit;

use App\Filters\RangeFilter;
use Tests\TestCase;

class FilterTest extends TestCase
{
    public function test_range_filter_returns_valid_expression()
    {
        $this->assertEquals("price 1500 TO 5000", RangeFilter::attribute('price')
                                                                     ->values([1500, 5000]));
    }
}
