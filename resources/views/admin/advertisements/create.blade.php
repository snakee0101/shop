@extends('admin.main')

@section('content')
    <p class="m-3 font-weight-bold"><a href="{{ route('admin.advertisements.index') }}" class="text-danger">&lt; Back to all ads</a></p>

    <div class="container row">
        <div class="card card-primary col-10 p-0 m-auto">
            <div class="card-header">
                <h3 class="card-title">Create advertisement</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{ route('advertisement.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="caption">Caption</label>
                        <input type="text" class="form-control" name="caption" id="caption" placeholder="Enter ad caption">
                        @error('caption')
                            <p class="text-danger mt-1">Caption must not be empty</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control" name="description" id="description" placeholder="Enter ad description" rows="6">
                        </textarea>
                        @error('description')
                            <p class="text-danger mt-1">Description must not be empty</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Category</label>
                        <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" name="category_id" data-select2-id="1" tabindex="-1" aria-hidden="true">
                            <option data-select2-id="" value=""> - No Category -</option>
                            @foreach($categories as $category)
                                <option data-select2-id="{{ $category->id }}" value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Select rectangle image</label>
                        <input type="file" name="image_rectangle">
                    </div>
                    <div class="form-group">
                        <label>Select square image</label>
                        <input type="file" name="image_square">
                    </div>
                    <div class="form-group">
                        <label for="start_date">Start date</label>
                        <input type="date" class="form-control" name="start_date" id="start_date">
                        @error('start_date')
                             <p class="text-danger mt-1">Start date must not be empty</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="end_date">End date</label>
                        <input type="date" class="form-control" name="end_date" id="end_date">
                        @error('end_date')
                            <p class="text-danger mt-1">End date must not be empty</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Add products to the ad</label>
                        <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" name="products[]" data-select2-id="1" tabindex="-1" aria-hidden="true" multiple>
                            @foreach($products as $product)
                                <option data-select2-id="{{ $product->id }}" value="{{ $product->id }}">{{ $product->name }} #{{ $product->id }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>

            @if( session()->has('successful_message') )
                <div class="alert {{ (session('status') == 'OK') ? 'alert-success' : 'alert-danger' }} " role="alert">
                    {{ session('successful_message') }}
                </div>
            @endif
        </div>
    </div>
@endsection
