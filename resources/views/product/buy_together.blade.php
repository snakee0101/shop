@extends('product.main')

@section('buy_together')
    @foreach($bought_together_data as $category_id => $items_in_category)
        @include('partials.filtering_group', ['products' => $items_in_category])
    @endforeach
@endsection
