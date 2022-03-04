@extends('admin.main')

@section('content')
    <p class="m-3 font-weight-bold"><a href="{{ route('admin.products.index') }}" class="text-danger">&lt; Back to all products</a></p>

    <div class="container row">
        <div class="card card-primary col-5 p-0 m-auto">
            <div class="card-header">
                <h3 class="card-title">Create product</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{ route('admin.products.store_product') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="product_name">Name</label>
                        <input type="text" class="form-control" name="name" id="product_name" placeholder="Enter product name">
                        @error('name')
                            <p class="text-danger mt-1">Product name is required</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="product_description">Description</label>
                        <textarea class="form-control" name="description" id="product_description" placeholder="Enter product description" rows="5">

                        </textarea>
                        @error('description')
                            <p class="text-danger mt-1">Product description is required</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="product_name">Price</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">$</span>
                            <input name="price" type="text" class="form-control" value="0.00">
                        </div>
                        @error('price')
                            <p class="text-danger mt-1">Product price is required</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="product_payment_info">Payment info</label>
                        <textarea class="form-control" name="payment_info" id="product_payment_info" placeholder="Enter product payment info" rows="5">

                        </textarea>
                        @error('payment_info')
                        <p class="text-danger mt-1">Product payment info is required</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="product_guarantee_info">Guarantee info</label>
                        <textarea class="form-control" name="guarantee_info" id="product_guarantee_info" placeholder="Enter product guarantee info" rows="5">

                        </textarea>
                        @error('guarantee_info')
                            <p class="text-danger mt-1">Product guarantee info is required</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="product_category">Product category</label>
                        <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" name="category_id" tabindex="-1" aria-hidden="true">
                            <option selected="selected" data-select2-id="0" value="">None</option>
                            @foreach($categories as $category)
                                <option data-select2-id="{{ $category->id }}" value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>

                        @error('category_id')
                            <p class="text-danger mt-1">Product category is required</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="product_category">Stock status</label>
                        <div class="custom-control custom-radio custom-control-inline d-inline-block">
                            <input type="radio" id="status_on_hold" name="in_stock" class="custom-control-input"
                                   value="{{ \App\Models\Product::STATUS_IN_STOCK }}" checked>
                            <label class="custom-control-label" for="status_on_hold">In Stock</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline d-inline-block">
                            <input type="radio" id="status_processing" name="in_stock"
                                   class="custom-control-input"
                                   value="{{ \App\Models\Product::STATUS_ENDS }}">
                            <label class="custom-control-label" for="status_processing">Ends</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline d-inline-block">
                            <input type="radio" id="status_cancelled" name="in_stock" class="custom-control-input"
                                   value="{{ \App\Models\Product::STATUS_OUT_OF_STOCK }}">
                            <label class="custom-control-label" for="status_cancelled">Out Of Stock</label>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>

            @if( session()->has('message') )
                <div class="alert alert-success" role="alert">
                    {{ session()->pull('message') }}
                </div>
            @endif
        </div>
    </div>
@endsection
