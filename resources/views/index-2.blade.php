@extends('layouts.main')

@section('body')
    <div class="site__body"><!-- .block-slideshow -->
        <div class="block-slideshow block-slideshow--layout--full block">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="block-slideshow__body">
                            <div class="owl-carousel"><a class="block-slideshow__slide" href="#">
                                    <div class="block-slideshow__slide-image block-slideshow__slide-image--desktop"
                                         style="background-image: url('images/slides/slide-1-full.jpg')"></div>
                                    <div class="block-slideshow__slide-image block-slideshow__slide-image--mobile"
                                         style="background-image: url('images/slides/slide-1-mobile.jpg')"></div>
                                    <div class="block-slideshow__slide-content">
                                        <div class="block-slideshow__slide-title">Big choice of<br>Plumbing products
                                        </div>
                                        <div class="block-slideshow__slide-text">Lorem ipsum dolor sit amet, consectetur
                                            adipiscing elit.<br>Etiam pharetra laoreet dui quis molestie.
                                        </div>
                                        <div class="block-slideshow__slide-button"><span class="btn btn-primary btn-lg">Shop Now</span>
                                        </div>
                                    </div>
                                </a><a class="block-slideshow__slide" href="#">
                                    <div class="block-slideshow__slide-image block-slideshow__slide-image--desktop"
                                         style="background-image: url('images/slides/slide-2-full.jpg')"></div>
                                    <div class="block-slideshow__slide-image block-slideshow__slide-image--mobile"
                                         style="background-image: url('images/slides/slide-2-mobile.jpg')"></div>
                                    <div class="block-slideshow__slide-content">
                                        <div class="block-slideshow__slide-title">Screwdrivers<br>Professional Tools
                                        </div>
                                        <div class="block-slideshow__slide-text">Lorem ipsum dolor sit amet, consectetur
                                            adipiscing elit.<br>Etiam pharetra laoreet dui quis molestie.
                                        </div>
                                        <div class="block-slideshow__slide-button"><span class="btn btn-primary btn-lg">Shop Now</span>
                                        </div>
                                    </div>
                                </a><a class="block-slideshow__slide" href="#">
                                    <div class="block-slideshow__slide-image block-slideshow__slide-image--desktop"
                                         style="background-image: url('images/slides/slide-3-full.jpg')"></div>
                                    <div class="block-slideshow__slide-image block-slideshow__slide-image--mobile"
                                         style="background-image: url('images/slides/slide-3-mobile.jpg')"></div>
                                    <div class="block-slideshow__slide-content">
                                        <div class="block-slideshow__slide-title">One more<br>Unique header</div>
                                        <div class="block-slideshow__slide-text">Lorem ipsum dolor sit amet, consectetur
                                            adipiscing elit.<br>Etiam pharetra laoreet dui quis molestie.
                                        </div>
                                        <div class="block-slideshow__slide-button"><span class="btn btn-primary btn-lg">Shop Now</span>
                                        </div>
                                    </div>
                                </a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- .block-banner -->
        <!-- .block-categories -->
        <div class="block block--highlighted block-categories block-categories--layout--compact">
            <div class="container">
                <div class="block-header"><h3 class="block-header__title">Popular Categories</h3>
                    <div class="block-header__divider"></div>
                </div>
                <div class="block-categories__list">
                    <div class="block-categories__item category-card category-card--layout--compact">
                        <div class="category-card__body">
                            <div class="category-card__image"><a href="#"><img src="/images/categories/category-1.jpg"
                                                                               alt=""></a></div>
                            <div class="category-card__content">
                                <div class="category-card__name"><a href="#">Power Tools</a></div>
                                <ul class="category-card__links">
                                    <li><a href="#">Screwdrivers</a></li>
                                    <li><a href="#">Milling Cutters</a></li>
                                    <li><a href="#">Sanding Machines</a></li>
                                    <li><a href="#">Wrenches</a></li>
                                    <li><a href="#">Drills</a></li>
                                </ul>
                                <div class="category-card__all"><a href="#">Show All</a></div>
                                <div class="category-card__products">572 Products</div>
                            </div>
                        </div>
                    </div>
                    <div class="block-categories__item category-card category-card--layout--compact">
                        <div class="category-card__body">
                            <div class="category-card__image"><a href="#"><img src="/images/categories/category-2.jpg"
                                                                               alt=""></a></div>
                            <div class="category-card__content">
                                <div class="category-card__name"><a href="#">Hand Tools</a></div>
                                <ul class="category-card__links">
                                    <li><a href="#">Screwdrivers</a></li>
                                    <li><a href="#">Hammers</a></li>
                                    <li><a href="#">Spanners</a></li>
                                    <li><a href="#">Handsaws</a></li>
                                    <li><a href="#">Paint Tools</a></li>
                                </ul>
                                <div class="category-card__all"><a href="#">Show All</a></div>
                                <div class="category-card__products">134 Products</div>
                            </div>
                        </div>
                    </div>
                    <div class="block-categories__item category-card category-card--layout--compact">
                        <div class="category-card__body">
                            <div class="category-card__image"><a href="#"><img src="/images/categories/category-4.jpg"
                                                                               alt=""></a></div>
                            <div class="category-card__content">
                                <div class="category-card__name"><a href="#">Machine Tools</a></div>
                                <ul class="category-card__links">
                                    <li><a href="#">Lathes</a></li>
                                    <li><a href="#">Milling Machines</a></li>
                                    <li><a href="#">Grinding Machines</a></li>
                                    <li><a href="#">CNC Machines</a></li>
                                    <li><a href="#">Sharpening Machines</a></li>
                                </ul>
                                <div class="category-card__all"><a href="#">Show All</a></div>
                                <div class="category-card__products">301 Products</div>
                            </div>
                        </div>
                    </div>
                    <div class="block-categories__item category-card category-card--layout--compact">
                        <div class="category-card__body">
                            <div class="category-card__image"><a href="#"><img src="/images/categories/category-3.jpg"
                                                                               alt=""></a></div>
                            <div class="category-card__content">
                                <div class="category-card__name"><a href="#">Power Machinery</a></div>
                                <ul class="category-card__links">
                                    <li><a href="#">Generators</a></li>
                                    <li><a href="#">Compressors</a></li>
                                    <li><a href="#">Winches</a></li>
                                    <li><a href="#">Plasma Cutting</a></li>
                                    <li><a href="#">Electric Motors</a></li>
                                </ul>
                                <div class="category-card__all"><a href="#">Show All</a></div>
                                <div class="category-card__products">79 Products</div>
                            </div>
                        </div>
                    </div>
                    <div class="block-categories__item category-card category-card--layout--compact">
                        <div class="category-card__body">
                            <div class="category-card__image"><a href="#"><img src="/images/categories/category-5.jpg"
                                                                               alt=""></a></div>
                            <div class="category-card__content">
                                <div class="category-card__name"><a href="#">Measurement</a></div>
                                <ul class="category-card__links">
                                    <li><a href="#">Tape Measure</a></li>
                                    <li><a href="#">Theodolites</a></li>
                                    <li><a href="#">Thermal Imagers</a></li>
                                    <li><a href="#">Calipers</a></li>
                                    <li><a href="#">Levels</a></li>
                                </ul>
                                <div class="category-card__all"><a href="#">Show All</a></div>
                                <div class="category-card__products">366 Products</div>
                            </div>
                        </div>
                    </div>
                    <div class="block-categories__item category-card category-card--layout--compact">
                        <div class="category-card__body">
                            <div class="category-card__image"><a href="#"><img src="/images/categories/category-6.jpg"
                                                                               alt=""></a></div>
                            <div class="category-card__content">
                                <div class="category-card__name"><a href="#">Clothes and PPE</a></div>
                                <ul class="category-card__links">
                                    <li><a href="#">Winter Workwear</a></li>
                                    <li><a href="#">Summer Workwear</a></li>
                                    <li><a href="#">Helmets</a></li>
                                    <li><a href="#">Belts and Bags</a></li>
                                    <li><a href="#">Work Shoes</a></li>
                                </ul>
                                <div class="category-card__all"><a href="#">Show All</a></div>
                                <div class="category-card__products">81 Products</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- .block-categories / end --><!-- .block-products-carousel -->
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
                                    <a href="#">
                                        <img src="{{ $news->main_image_url }}" alt="">
                                    </a>
                                </div>
                                <div class="post-card__info">
                                    <div class="post-card__category"><a href="#">Special Offers</a></div>
                                    <div class="post-card__name"><a href="#">{{ $news->caption }}</a></div>
                                    <div class="post-card__date" style="color: #f00">{{ $news->created_at->format('M d, Y') }}</div>
                                    <div class="post-card__content">{!! $news->excerpt() !!}</div>
                                    <div class="post-card__read-more"><a href="#" class="btn btn-secondary btn-sm">Read
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
