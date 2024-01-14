<div class="d-flex flex-row-reverse">
    <form action="{{ route('visit.clear_all') }}" method="POST">
        @csrf
        <button class="btn btn-warning btn-sm">Clear all</button>
    </form>
</div>
<div class="block block-products-carousel" data-layout="grid-5">
    <div class="container d-flex flex-wrap">
        @foreach($visited_products as $product)
            <div class="d-inline-block mt-4">
                <form action="{{ route('visit.destroy', $product) }}" method="POST" class="ml-4">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm">Delete visit</button>
                </form>

                <product-card-component product="{{ $product }}"
                                        user="{{ auth()->user() }}"
                                        :key="{{ $product->id }}"
                                        class="m-2">

                </product-card-component>
            </div>
        @endforeach
    </div>
</div>
