<?php

namespace Tests\Feature;

use App\Models\News;
use App\Models\NewsCategory;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class NewsTest extends TestCase
{
    public function test_news_has_a_category()
    {
        $news = News::factory()->create();

        $this->assertInstanceOf(NewsCategory::class, $news->category);
    }
}
