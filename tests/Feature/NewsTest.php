<?php

namespace Tests\Feature;

use App\Models\News;
use App\Models\NewsCategory;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class NewsTest extends TestCase
{
    public function test_news_belongs_to_a_category()
    {
        $news = News::factory()->create();

        $this->assertInstanceOf(NewsCategory::class, $news->category);
    }

    public function test_category_has_many_news()
    {
        $category = NewsCategory::factory()->create();

        News::factory()->count(3)->create([
            'news_category_id' => $category->id
        ]);

        $category->refresh();

        $this->assertInstanceOf(News::class, $category->news()->first());
        $this->assertCount(3, $category->news);
    }
}
