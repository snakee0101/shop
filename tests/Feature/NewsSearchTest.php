<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class NewsSearchTest extends TestCase
{
    public function test_news_filters_could_be_cleared()
    {
        $this->session([ 'news_search_tag_id' => 1 ]);

        $this->get( route('news.search.clear', 'news_search_tag_id') )
             ->assertSessionMissing('news_search_tag_id')
             ->assertRedirect();
    }
}
