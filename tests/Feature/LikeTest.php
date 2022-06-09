<?php

namespace Tests\Feature;

use App\Models\News;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;

class LikeTest extends TestCase
{
    public function test_news_article_contains_users_that_liked_it()
    {
        $user = User::factory()->create();
        $news = News::factory()->create();

        DB::table('likes')->insert([
            'news_id' => $news->id,
            'user_id' => $user->id
        ]);

        $news->refresh();
        $this->assertInstanceOf(User::class, $news->liked_users()->first());
    }
}
