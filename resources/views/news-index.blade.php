@extends('layouts.main')

@section('body')
    <div class="page-header">
        <div class="page-header__container container">
            <p style="font-size: 1.3em" class="d-inline">Filters:</p>

            @if( session()->has('news_search_category_id') )
                <span class="badge bg-warning p-2 m-2" style="font-size: 1em">
                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#000" class="bi bi-x-lg" viewBox="0 0 16 16">
                          <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"/>
                        </svg>
                    </a>
                    <b>Category</b>: {{ \App\Models\NewsCategory::find( session('news_search_category_id'))->name }}
                </span>
            @endif

            @if( session()->has('news_search_tag_id') )
                <span class="badge bg-warning p-2 m-2" style="font-size: 1em">
                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#000" class="bi bi-x-lg" viewBox="0 0 16 16">
                          <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"/>
                        </svg>
                    </a>
                    <b>Tag</b>: {{ \App\Models\Tag::find( session('news_search_tag_id'))->name }}
                </span>
            @endif

            @if( session()->has('news_search_query') )
                <span class="badge bg-warning p-2 m-2" style="font-size: 1em">
                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#000" class="bi bi-x-lg" viewBox="0 0 16 16">
                          <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"/>
                        </svg>
                    </a>
                    <b>Search query</b>: {{ session('news_search_query') }}
                </span>
            @endif
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8">
                <div class="block">
                    <div class="posts-view">
                        <div class="posts-view__list posts-list posts-list--layout--list">
                            <div class="posts-list__body">
                                @foreach($news as $news_article)
                                    @include('partials.news.card', ['news_article' => $news_article])
                                @endforeach
                            </div>
                        </div>
                        <div class="posts-view__pagination">
                            {{ $news->links() }}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <div class="block block-sidebar block-sidebar--position--end">
                    <div class="block-sidebar__item">
                        <div class="widget-search">
                            <form class="widget-search__body"><input class="widget-search__input"
                                                                     placeholder="Blog search..." type="text"
                                                                     autocomplete="off" spellcheck="false">
                                <button class="widget-search__button" type="submit">
                                    <svg width="20px" height="20px">
                                        <use xlink:href="/images/sprite.svg#search-20"></use>
                                    </svg>
                                </button>
                            </form>
                        </div>
                    </div>

                    @include('partials.news.categories', ['all_news_categories' => $all_news_categories])
                    @include('partials.news.popular_news', ['popular_news' => $popular_news])
                    @include('partials.news.newsletter_subscription')
                    @include('partials.news.popular_tags', ['popular_tags' => $popular_tags])
                </div>
            </div>
        </div>
    </div>
@endsection
