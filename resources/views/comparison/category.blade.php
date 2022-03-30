@extends('layouts.main')

@section('body')
    <div class="container mt-3">
        <h2>Comparing {{ $category->name }}</h2>
        <p class="text-muted">* Characteristics only with unique values across all products are displayed</p>
        <div class="d-flex flex-row-reverse bd-highlight align-items-center">
            <a href="{{ route('comparison.index') }}">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-left-square" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M15 2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2zM0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm11.5 5.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
                </svg>
                Back to all comparisons
            </a>

            <comparison-public-link-component link={{ auth()->check() ? auth()->user()->comparison_link($category->id) : url()->full() }}"">

            </comparison-public-link-component>
        </div>
        <div class="special_specs_block mt-2">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col"></th>
                    @foreach($products as $product)
                        <th scope="col">
                            <img src="{{ $product->photos[0]->url }}" style="width: 150px">
                            <br>
                            <form action="{{ route('comparison.destroy', $product) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')

                                <button class="btn btn-outline-danger btn-sm p-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                        <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                    </svg>
                                </button>
                            </form>

                            <a href="{{ route('product.description', $product) }}" target="__blank" class="ml-3">
                                {{ $product->name }}
                            </a>
                        </th>
                    @endforeach
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row" class="bg-warning">Price</th>
                    @foreach($products as $product)
                        <td class="bg-warning">
                            @if($product->priceWithDiscount < $product->price)
                                <small class="text-secondary"><s>${{ $product->price }}</s></small>
                                <span class="text-danger font-weight-bold">${{ $product->priceWithDiscount }}</span>
                            @else
                                <span class="font-weight-bold">${{ $product->price }}</span>
                            @endif
                        </td>
                    @endforeach
                </tr>
                @foreach($characteristic_diff as $char)
                    <tr>
                        <th scope="row">{{ $char->name }}</th>
                        @foreach($products as $product)
                            <td>{{ $product->characteristics->firstWhere('name', $char->name)->pivot->value }}</td>
                        @endforeach
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

