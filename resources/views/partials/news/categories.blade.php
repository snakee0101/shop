<div class="block-sidebar__item">
    <div class="widget-categories widget-categories--location--blog widget"><h4
            class="widget__title">Categories</h4>
        <ul class="widget-categories__list" data-collapse
            data-collapse-opened-class="widget-categories__item--open">
            @foreach($all_news_categories as $news_category)
                @if( $news_category->hasSubcategories() )
                    @include('partials.categories_list_item', ['subCategories' => $news_category->subCategories, 'category' => $news_category])
                @else
                    <li class="widget-categories__item" data-collapse-item>
                        <div class="widget-categories__row">
                            <a href="{{ route('news.index', ['category' => $news_category->id])  }}">
                                <svg class="widget-categories__arrow" width="6px" height="9px">
                                    <use xlink:href="/images/sprite.svg#arrow-rounded-right-6x9"></use>
                                </svg>
                                {{ $news_category->name }}
                            </a>
                        </div>
                    </li>
                @endif
            @endforeach
        </ul>
    </div>
</div>
