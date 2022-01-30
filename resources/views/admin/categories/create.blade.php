@extends('admin.main')

@section('content')
    <div class="container row">
        <div class="card card-primary col-5 p-0 m-auto">
            <div class="card-header">
                <h3 class="card-title">Create category</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{ route('category.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="category_name">Category name</label>
                        <input type="text" class="form-control" name="name" id="category_name" placeholder="Enter category name">
                        @error('name')
                            <p class="text-danger mt-1">Category name is required</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Parent category</label>
                         <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" name="parent_id" data-select2-id="1" tabindex="-1" aria-hidden="true">
                            <option selected="selected" data-select2-id="0" value="">None</option>
                            @foreach($categories as $category)
                                <option data-select2-id="{{ $category->id }}" value="{{ $category->id }}">{{ $category->name }}</option>
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
                        @error('image')
                            <p class="text-danger mt-1">Category image is required - selected file must be an image</p>
                        @enderror
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
