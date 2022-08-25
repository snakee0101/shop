<li class="widget-categories__item" data-collapse-item>
    <div class="widget-categories__row">
        <a href="{{ route('news.index', ['category' => $category->id]) }}"
           style="{{ isset($zero_padding) ? 'padding: 0' : '' }}">
            {{ $category->name }}
        </a>
        <button class="widget-categories__expander" type="button"
                data-collapse-trigger>

        </button>
    </div>
    <div class="widget-categories__subs" data-collapse-content>
        <ul>
            @foreach($subCategories as $subCategory)
                @if( $subCategory->hasSubcategories() )
                    @include('partials.categories_list_item', ['subCategories' => $subCategory->subCategories, 'category' => $subCategory, 'zero_padding' => true])
                @else
                    <li>
                        <a href="{{ route('news.index', ['category' => $subCategory->id]) }}">{{ $subCategory->name }}</a>
                    </li>
                @endif
            @endforeach
        </ul>
    </div>
</li>
