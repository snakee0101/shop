<?php

namespace Tests\Feature;

use App\Models\Category;
use App\Models\News;
use App\Models\NewsCategory;
use App\Models\Tag;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\DB;
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

    public function test_category_has_parent_category()
    {
        $parent_category = NewsCategory::factory()->create();

        $category = NewsCategory::factory()
                                ->withParentNewsCategory($parent_category)->create();

        $this->assertInstanceOf(NewsCategory::class, $category->parentCategory);
    }

    public function test_news_has_many_tags()
    {
        $news = News::factory()->create();

        $tags = Tag::factory()->count(3)->create();

        DB::table('news_tag')->insert([
            ['news_id' => $news->id, 'tag_id' => $tags[0]->id],
            ['news_id' => $news->id, 'tag_id' => $tags[1]->id],
            ['news_id' => $news->id, 'tag_id' => $tags[2]->id],
        ]);

        $this->assertCount(3, $news_tags = $news->tags);
        $this->assertInstanceOf(Tag::class, $news_tags[0]);
    }

    public function test_tag_has_many_news()
    {
        $news_collection = News::factory()->count(3)->create();

        $tag = Tag::factory()->create();

        DB::table('news_tag')->insert([
            ['news_id' => $news_collection[0]->id, 'tag_id' => $tag->id],
            ['news_id' => $news_collection[1]->id, 'tag_id' => $tag->id],
            ['news_id' => $news_collection[2]->id, 'tag_id' => $tag->id],
        ]);

        $this->assertCount(3, $news = $tag->news);
        $this->assertInstanceOf(News::class, $news[0]);
    }
}
