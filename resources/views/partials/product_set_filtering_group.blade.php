<div class="block block-products-carousel" data-layout="grid-5">
    <div class="container">
        <div class="block-header">
            <h3 class="block-header__title">Product Sets</h3>
        </div>
        <div class="text-center">
            @foreach($product_sets as $product_set)
                <product-set-card-component product_set="{{ $product_set }}"
                                            user="{{ auth()->user() }}"
                                            :key="{{ $product_set->id }}">

                </product-set-card-component>
            @endforeach
        </div>
    </div>
</div>
