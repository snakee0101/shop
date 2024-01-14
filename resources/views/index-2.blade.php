@extends('layouts.main')

@section('body')
    <div class="site__body"><!-- .block-slideshow -->
        @includeWhen( $ads->isNotEmpty() , 'partials.ads_slider', ['ads' => $ads])
        <!-- .block-banner -->
        @unless( empty($popular_categories) )
            <!-- .block-categories -->
            <div class="block block--highlighted block-categories block-categories--layout--compact">
                <div class="container">
                    <div class="block-header"><h3 class="block-header__title">Popular Categories</h3>
                        <div class="block-header__divider"></div>
                    </div>
                    <div class="block-categories__list">
                        @foreach($popular_categories as $category_id => $number_sold)
                            <div class="block-categories__item category-card category-card--layout--compact">
                                <div class="category-card__body">
                                    <div class="category-card__image"><a href="{{ route('category.show', $category_id) }}"><img src="{{ \App\Models\Category::find($category_id)->image_url }}"
                                                                                       alt=""></a></div>
                                    <div class="category-card__content">
                                        <div class="category-card__name"><a href="{{ route('category.show', $category_id) }}">{{ \App\Models\Category::find($category_id)->name }}</a></div>
                                        <div class="category-card__products">{{ $number_sold }} items sold</div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div><!-- .block-categories / end --><!-- .block-products-carousel -->
        @endunless


        @include('partials.filtering_group', ['products' => $filtering_group_1_products,
                                              'group_name' => 'Filtering group'])<!-- .block-products-carousel / end -->
        <!-- .block-posts -->
        <div class="block block-posts block-posts--layout--grid-nl" data-layout="grid-nl">
            <div class="container">
                <div class="block-header"><h3 class="block-header__title">Latest News</h3>
                    <div class="block-header__divider"></div>
                    <div class="block-header__arrows-list">
                        <button class="block-header__arrow block-header__arrow--left" type="button">
                            <svg width="7px" height="11px">
                                <use xlink:href="/images/sprite.svg#arrow-rounded-left-7x11"></use>
                            </svg>
                        </button>
                        <button class="block-header__arrow block-header__arrow--right" type="button">
                            <svg width="7px" height="11px">
                                <use xlink:href="/images/sprite.svg#arrow-rounded-right-7x11"></use>
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="block-posts__slider">
                    <div class="owl-carousel">
                        @foreach($latest_news as $news)
                            <div class="post-card">
                                <div class="post-card__image">
                                    <a href="{{ route('news.show', $news) }}">
                                        <img src="{{ $news->main_image_url }}" alt="">
                                    </a>
                                </div>
                                <div class="post-card__info">
                                    <div class="post-card__category"><a href="{{ route('news.show', $news) }}">Special Offers</a></div>
                                    <div class="post-card__name"><a href="{{ route('news.show', $news) }}">{{ $news->caption }}</a></div>
                                    <div class="post-card__date" style="color: #f00">{{ $news->created_at->format('M d, Y') }}</div>
                                    <div class="post-card__content">{!! $news->excerpt() !!}</div>
                                    <div class="post-card__read-more"><a href="{{ route('news.show', $news) }}" class="btn btn-secondary btn-sm">Read
                                            More</a></div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div><!-- .block-posts / end -->
    </div>
@endsection
