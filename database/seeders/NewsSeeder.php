<?php

namespace Database\Seeders;

use App\Models\NewsCategory;
use App\Models\News;
use App\Models\Tag;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsSeeder extends Seeder
{
    public function run()
    {
        NewsCategory::inRandomOrder()->take(3)->each(function (NewsCategory $category) {
            $news = News::factory()->count(10)->create([  //create 10 news articles for each of 3 categories
                'news_category_id' => $category->id,
            ]);

            $news->each(function ($news_article) {  //for each article assign 3 random tags
                $tags = Tag::inRandomOrder()->get();
                
                DB::table('news_tag')->insert([
                    ['news_id' => $news_article->id, 'tag_id' => $tags[0]->id],
                    ['news_id' => $news_article->id, 'tag_id' => $tags[4]->id],
                    ['news_id' => $news_article->id, 'tag_id' => $tags[7]->id],
                ]);
            });
        });
    }
}
