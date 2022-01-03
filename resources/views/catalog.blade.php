@extends('layouts.main')

@section('body')
    <div class="block block--highlighted block-categories block-categories--layout--compact">
        <div class="container">
            <div class="block-header"><h3 class="block-header__title">Select a category</h3>
                <div class="block-header__divider"></div>
            </div>
            <div class="block-categories__list">
                <div class="block-categories__item category-card category-card--layout--compact">
                    <div class="category-card__body">
                        <div class="category-card__image"><a href="#"><img src="/images/categories/category-1.jpg"
                                                                           alt=""></a></div>
                        <div class="category-card__content">
                            <div class="category-card__name"><a href="#">Power Tools</a></div>
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
                            <div class="category-card__products">81 Products</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
