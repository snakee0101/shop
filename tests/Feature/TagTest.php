<?php

namespace Tests\Feature;

use App\Models\News;
use App\Models\Tag;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;

class TagTest extends TestCase
{
    public function test_tags_could_be_sorted_by_news_count_descending()
    {
        $tag_collection = Tag::factory()->count(3)->create();

        DB::table('news_tag')->insert(['tag_id' => $tag_collection[2]->id, 'news_id' => News::factory()->create()->id]);

        DB::table('news_tag')->insert([['tag_id' => $tag_collection[0]->id, 'news_id' => News::factory()->create()->id],
            ['tag_id' => $tag_collection[0]->id, 'news_id' => News::factory()->create()->id]]);

        DB::table('news_tag')->insert([['tag_id' => $tag_collection[1]->id, 'news_id' => News::factory()->create()->id],
            ['tag_id' => $tag_collection[1]->id, 'news_id' => News::factory()->create()->id],
            ['tag_id' => $tag_collection[1]->id, 'news_id' => News::factory()->create()->id]]);

        $data = Tag::popular()->get();

        $this->assertEquals($tag_collection[1]->id, $data[0]->id);
        $this->assertEquals($tag_collection[0]->id, $data[1]->id);
        $this->assertEquals($tag_collection[2]->id, $data[2]->id);
    }
}
