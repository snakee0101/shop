@extends('product.main')

@section('buy_together')
    @foreach($bought_together_data as $category_id => $items_in_category)
        @include('partials.filtering_group', ['filtering_group_1_products' => $items_in_category])
    @endforeach
@endsection
