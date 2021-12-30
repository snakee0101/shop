<div class="block block-products-carousel" data-layout="grid-5">
    <div class="container">
        <div class="block-header"><h3 class="block-header__title">Filter group 2</h3>
            <div class="block-header__divider"></div>
            <div class="block-header__arrows-list">
                <button class="block-header__arrow block-header__arrow--left" type="button">
                    <svg width="7px" height="11px">
                        <use xlink:href="images/sprite.svg#arrow-rounded-left-7x11"></use>
                    </svg>
                </button>
                <button class="block-header__arrow block-header__arrow--right" type="button">
                    <svg width="7px" height="11px">
                        <use xlink:href="images/sprite.svg#arrow-rounded-right-7x11"></use>
                    </svg>
                </button>
            </div>
        </div>
        <div class="block-products-carousel__slider">
            <div class="block-products-carousel__preloader"></div>
            <div class="owl-carousel">
                @foreach($filtering_group_1_products as $product)
                    <product-card-component product="{{ $product }}"
                                            user="{{ auth()->user() }}"
                                            :key="{{ $product->id }}">

                    </product-card-component>
                @endforeach
            </div>
        </div>
    </div>
</div>
