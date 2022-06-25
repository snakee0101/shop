<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\NewsCategory;
use App\Models\Tag;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        if( request('category') )
            session([ 'news_search_category_id' => request('category') ]);

        if( request('tag') )
            session([ 'news_search_tag_id' => request('tag') ]);

        if( request('search') )
            session([ 'news_search_text' => request('search') ]);

        return view('news-index', [
            'news' => News::latest()->paginate(),
            'all_news_categories' => NewsCategory::topLevelCategories()->get(),
            'popular_news' => News::popular()->limit(6)->get(),
            'popular_tags' => Tag::popular()->limit(20)->get(),
        ]);
    }

    public function create()
    {
        return view('admin.news.create', [
            'news_categories' => NewsCategory::get(),
            'tags' => Tag::get(),
        ]);
    }

    public function store(Request $request)
    {
        //
    }

    public function show(News $news)
    {
        return view('news-article', [
            'news' => $news,
            'all_news_categories' => NewsCategory::topLevelCategories()->get(),
            'popular_news' => News::popular()->limit(6)->get(),
            'popular_tags' => Tag::popular()->limit(20)->get(),
            'breadcrumbs_menu' => app(\App\Actions\BreadcrumbsMenuAction::class)->execute($news->category)
        ]);
    }

    public function edit(News $news)
    {
        //
    }

    public function update(Request $request, News $news)
    {
        //
    }

    public function destroy(News $news)
    {
        //
    }
}
