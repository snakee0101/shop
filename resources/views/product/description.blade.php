@extends('product.main')

@section('description')
    <div class="typography"><h3>Product Full Description</h3>
       <p>{{ $product->description }}</p>
    </div>
@endsection
