@extends('admin.main')

@section('content')
    <p class="m-3 font-weight-bold"><a href="{{ route('admin.categories.index') }}" class="text-danger">&lt; Back to all categories</a></p>

    <div class="container row">
        <div class="card card-primary col-5 p-0 m-auto">
            <div class="card-header">
                <h3 class="card-title">Edit category "{{ $category->name }}"</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{ route('category.update', $category) }}" method="post" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="category_name">Category name</label>
                        <input type="text" class="form-control" name="name" id="category_name" placeholder="Enter category name" value="{{ $category->name }}">
                        @error('name')
                            <p class="text-danger mt-1">Category name is required</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Parent category</label>
                        <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" name="parent_id" data-select2-id="1" tabindex="-1" aria-hidden="true">
                            <option selected="selected" data-select2-id="0" value="">None</option>
                            @foreach($categories as $category_loop)
                                <option data-select2-id="{{ $category_loop->id }}"
                                        value="{{ $category_loop->id }}"
                                        {{ $category->parent_id == $category_loop->id ? 'selected' : ''}}>
                                    {{ $category_loop->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="category_image">Category image</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" name="image" class="custom-file-input" id="category_image">
                                <label class="custom-file-label" for="category_image">Choose image</label>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>

                    <a href="" class="ml-3">
                        <button type="button" class="btn btn-secondary">Cancel</button>
                    </a>
                </div>
            </form>

            @if( session()->has('message') )
                <div class="alert alert-success" role="alert">
                    {{ session('message') }}
                </div>
            @endif
        </div>
    </div>
@endsection
