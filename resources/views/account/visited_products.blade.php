<div class="block block-products-carousel" data-layout="grid-5">
    <div class="container d-flex flex-wrap">
        @foreach(auth()->user()->visited_products as $product)
            <product-card-component product="{{ $product }}"
                                    user="{{ auth()->user() }}"
                                    :key="{{ $product->id }}"
                                    class="m-2">

            </product-card-component>
        @endforeach
    </div>
</div>
