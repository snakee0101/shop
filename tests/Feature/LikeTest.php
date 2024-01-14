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

    public function test_news_has_is_liked_attribute_to_check_whether_it_is_liked_by_current_user()
    {
        $user = User::factory()->create();
        $news = News::factory()->create();

        DB::table('likes')->insert([
            'news_id' => $news->id,
            'user_id' => $user->id
        ]);

        $this->assertFalse($news->isLiked);

        //new user - it hasn't made like yet
        $this->actingAs( $new_user = User::factory()->create() );
        $this->assertFalse($news->isLiked);

        //new user likes an article
        DB::table('likes')->insert([
            'news_id' => $news->id,
            'user_id' => $new_user->id
        ]);

        $this->assertTrue($news->fresh()->is_liked);

        $this->assertStringContainsString('"is_liked":true', $news->toJson());
    }

    public function test_authenticated_user_can_toggle_like_on_an_article()
    {
        $news = News::factory()->create();
        $this->actingAs( User::factory()->create() );

        $this->post( route('like'), [
            'news_id' => $news->id
        ] );

        $news->refresh();
        $this->assertTrue( $news->isLiked );

        $this->post( route('like'), [
            'news_id' => $news->id
        ] );

        $news->refresh();
        $this->assertFalse( $news->isLiked );
    }
}
