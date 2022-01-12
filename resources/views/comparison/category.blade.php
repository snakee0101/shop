@extends('layouts.main')

@section('body')
    <div class="container mt-3">
        <h2>Comparing {{ $category->name }}</h2>
        <p class="text-muted">* Characteristics only with unique values across all products are displayed</p>
        <div class="d-flex flex-row-reverse bd-highlight">
            <a href="{{ route('comparison.index') }}">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-left-square" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M15 2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2zM0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm11.5 5.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
                </svg>
                Back to all comparisons
            </a>
        </div>
        <div class="special_specs_block mt-2">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col"></th>
                    @foreach($products as $product)
                        <th scope="col">{{ $product->name }}</th>
                    @endforeach
                </tr>
                </thead>
                <tbody>
                @foreach(\App\Models\Characteristic::diff($products) as $char)
                    <tr>
                        <th scope="row">{{ $char->name }}</th>
                        @foreach($products as $product)
                            <td>{{ $product->characteristics()->firstWhere('name', $char->name)->pivot->value }}</td>
                        @endforeach
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

