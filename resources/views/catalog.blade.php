@extends('layouts.main')

@section('body')
    <div class="block block--highlighted block-categories block-categories--layout--compact">
        <div class="container">
            <div class="block-header"><h3 class="block-header__title">Select a category</h3>
                <div class="block-header__divider"></div>
            </div>
            <div class="block-categories__list">
                @isset($is_subcategories_page)
                    @foreach($categories as $category)
                        <div class="block-categories__item category-card category-card--layout--compact">
                            <div class="category-card__body" style="align-items: start">
                                <div class="category-card__image">
                                    @if($category->hasSubCategories())
                                        <a>
                                            <img src="{{ $category->image_url }}">
                                        </a>
                                    @else
                                        <a href="{{ route('category.show', $category->id) }}">
                                            <img src="{{ $category->image_url }}">
                                        </a>
                                    @endif
                                </div>
                                <div class="category-card__content">
                                    <div class="category-card__name">
                                        @if($category->hasSubCategories())
                                            <a>{{ $category->name }}</a>
                                        @else
                                            <a href="{{ route('category.show', $category->id) }}">{{ $category->name }}</a>
                                        @endif
                                    </div>
                                    @foreach($category->subCategories as $subCategory)
                                        <div class="category-card__products">
                                            <a href="{{ route('category.show', $subCategory->id) }}">{{ $subCategory->name }}</a>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    @foreach($categories as $category)
                        <div class="block-categories__item category-card category-card--layout--compact">
                            <div class="category-card__body">
                                <div class="category-card__image">
                                    <a href="{{ route('category.show', $category->id) }}">
                                        <img src="{{ $category->image_url }}">
                                    </a>
                                </div>
                                <div class="category-card__content">
                                    <div class="category-card__name">
                                        <a href="{{ route('category.show', $category->id) }}">{{ $category->name }}</a>
                                    </div>
                                    <div class="category-card__products">000 Products</div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endisset
            </div>
        </div>
    </div>
@endsection
