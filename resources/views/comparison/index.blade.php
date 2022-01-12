@extends('layouts.main')

@section('body')
    <div class="container mt-3">
        <h2>Select a category to compare</h2>
        <ol class="list-group list-group-numbered d-inline-block ml-4">
            @foreach($comparison as $category_id => $count)
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                        <div class="fw-bold"><a href="#">{{ \App\Models\Category::find($category_id)->name }}</a></div>

                    </div>
                    <span class="badge bg-primary rounded-pill text-white ml-2">{{ $count }}</span>
                </li>
            @endforeach

        </ol>
    </div>
@endsection
