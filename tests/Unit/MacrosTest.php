<?php

namespace Tests\Unit;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Tests\TestCase;

class MacrosTest extends TestCase
{
    public function test_request_can_filter_through_keys()
    {
        $r = new Request;
        $r['firstKey'] = 'value 1';
        $r['secondKey'] = 10;
        $r['stKey'] = 'uiui';

        $result = $r->whereKeyContains('first');

        $this->assertInstanceOf(Collection::class, $result);
        $this->assertCount(1, $result);
        $this->assertEquals('value 1', $result['firstKey']);
    }
}
