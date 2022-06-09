<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        return view('news-index');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(News $news)
    {
        return view('news-article', [
            'news' => $news,
            'popular_news' => News::popular()->limit(6)->get(),
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
