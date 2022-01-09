@extends('layouts.main')

@section('body')
    <div class="block block--highlighted block-categories block-categories--layout--compact">
        <div class="container">
            <div class="block-header"><h3 class="block-header__title">Select a category</h3>
                <div class="block-header__divider"></div>
            </div>
            <div class="block-categories__list">
                @foreach($categories as $category)
                    <div class="block-categories__item category-card category-card--layout--compact">
                        <div class="category-card__body">
                            <div class="category-card__image"><a href="#"><img src="/images/categories/category-1.jpg"
                                                                               alt=""></a></div>
                            <div class="category-card__content">
                                <div class="category-card__name"><a href="#">{{ $category->name }}</a></div>
                                <div class="category-card__products">000 Products</div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
