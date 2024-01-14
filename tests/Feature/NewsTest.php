<?php

namespace Tests\Feature;

use App\Models\Category;
use App\Models\News;
use App\Models\NewsCategory;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
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

    public function test_news_category_could_have_subcategories()
    {
        $parent_category = NewsCategory::factory()->create();

        $category = NewsCategory::factory()
            ->withParentNewsCategory($parent_category)->create();

        $category->refresh();

        $this->assertInstanceOf(NewsCategory::class, $parent_category->subCategories()->first());
    }

    public function test_category_could_check_whether_it_has_subcategories()
    {
        $parent_category = NewsCategory::factory()->create();

        NewsCategory::factory()->withParentNewsCategory($parent_category)
            ->create();

        $this->assertTrue($parent_category->hasSubCategories());

        $this->assertFalse(NewsCategory::factory()->create()->hasSubCategories());
    }

    public function test_top_level_categories_list_could_be_retrieved()
    {
        NewsCategory::factory()->withParentNewsCategory($top_level_category = NewsCategory::factory()->create())
            ->create();

        $this->assertEquals(NewsCategory::topLevelCategories()->first()->id, $top_level_category->id);
    }

    public function test_news_could_be_sorted_by_likes_count_descending()
    {
        $news_collection = News::factory()->count(3)->create();

        DB::table('likes')->insert(['news_id' => $news_collection[2]->id, 'user_id' => User::factory()->create()->id]);

        DB::table('likes')->insert([['news_id' => $news_collection[0]->id, 'user_id' => User::factory()->create()->id],
            ['news_id' => $news_collection[0]->id, 'user_id' => User::factory()->create()->id]]);

        DB::table('likes')->insert([['news_id' => $news_collection[1]->id, 'user_id' => User::factory()->create()->id],
            ['news_id' => $news_collection[1]->id, 'user_id' => User::factory()->create()->id],
            ['news_id' => $news_collection[1]->id, 'user_id' => User::factory()->create()->id]]);

        $data = News::popular()->get();

        $this->assertEquals($news_collection[1]->id, $data[0]->id);
        $this->assertEquals($news_collection[0]->id, $data[1]->id);
        $this->assertEquals($news_collection[2]->id, $data[2]->id);
    }

    public function test_a_news_with_basic_data_could_be_created()
    {
        Storage::fake();

        $tags = Tag::factory()->count(3)->create();

        $data = News::factory()->raw();

        $image = UploadedFile::fake()->image('main_image');
        $data['main_image'] = $image;

        $this->post( route('news.store'),  $data)
             ->assertRedirect();

        unset($data['main_image_url']);
        unset($data['main_image']);
        unset($data['created_at']);

        $this->assertDatabaseHas('news', $data);
    }

    public function test_news_could_be_created_with_tags()
    {
        Storage::fake();

        $tags = Tag::factory()->count(3)->create();

        $data = News::factory()->raw();
        $data['tags'] = $tags->pluck('id')->toArray();

        $image = UploadedFile::fake()->image('main_image');
        $data['main_image'] = $image;

        $this->post( route('news.store'),  $data)
            ->assertRedirect();

        unset($data['main_image_url']);
        unset($data['main_image']);
        unset($data['created_at']);
        unset($data['tags']);

        $this->assertDatabaseHas('news', $data);
        $this->assertDatabaseHas('news_tag', [ 'news_id' => News::first()->id, 'tag_id' => $tags[0]->id ]);
        $this->assertDatabaseHas('news_tag', [ 'news_id' => News::first()->id, 'tag_id' => $tags[1]->id ]);
        $this->assertDatabaseHas('news_tag', [ 'news_id' => News::first()->id, 'tag_id' => $tags[2]->id ]);
    }

    public function test_news_main_image_is_saved_when_article_is_created()
    {
        Storage::fake();

        $image = UploadedFile::fake()->image('main_image');

        $tags = Tag::factory()->count(3)->create();

        $data = News::factory()->raw();
        $data['tags'] = $tags->pluck('id')->toArray();

        $data['main_image'] = $image;
        $this->post( route('news.store'),  $data)
            ->assertRedirect();

        unset($data['main_image_url']);
        unset($data['main_image']);
        unset($data['created_at']);
        unset($data['tags']);

        $this->assertDatabaseHas('news', $data);

       $this->assertNotEmpty( Storage::allFiles( '/public/images' ) );
    }
}
