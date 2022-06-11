@extends('layouts.main')

@section('body')
    <div class="page-header">
        <div class="page-header__container container">
            <div class="page-header__breadcrumb">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('index-2') }}">Home</a>
                            <svg class="breadcrumb-arrow" width="6px" height="9px">
                                <use xlink:href="/images/sprite.svg#arrow-rounded-right-6x9"></use>
                            </svg>
                        </li>
                        <li class="breadcrumb-item"><a href="#">Breadcrumb</a>
                            <svg class="breadcrumb-arrow" width="6px" height="9px">
                                <use xlink:href="/images/sprite.svg#arrow-rounded-right-6x9"></use>
                            </svg>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Latest News</li>
                    </ol>
                </nav>
            </div>
            <div class="page-header__title"><h1>Latest News</h1></div>
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
