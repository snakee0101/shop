@extends('admin.main')

@section('content')
    <p class="m-3 font-weight-bold"><a href="{{ route('admin.products.index') }}" class="text-danger">&lt; Back to all
            products</a></p>
    <h2 class="my-3 font-weight-bold">Create product</h2>

    <form action="{{ route('admin.products.store_product') }}" method="post" enctype="multipart/form-data">
        <div class="container row">
            <div class="card card-primary col p-0 m-auto">
                <div class="card-header">
                    <h3 class="card-title">Basic data</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                @csrf
                <div class="card-body row">
                    <div class="col">
                        <div class="form-group">
                            <label for="product_name">Name</label>
                            <input type="text" class="form-control" name="name" id="product_name"
                                   placeholder="Enter product name">
                            @error('name')
                            <p class="text-danger mt-1">Product name is required</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="product_description">Description</label>
                            <textarea class="form-control" name="description" id="product_description"
                                      placeholder="Enter product description" rows="5">

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
                            <label for="product_category">Product category</label>
                            <select class="form-control select2 select2-hidden-accessible" style="width: 100%;"
                                    name="category_id" tabindex="-1" aria-hidden="true">
                                <option selected="selected" data-select2-id="0" value="">None</option>
                                @foreach($categories as $category)
                                    <option data-select2-id="{{ $category->id }}"
                                            value="{{ $category->id }}">{{ $category->name }}</option>
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
                    <div class="col">
                        <div class="form-group">
                            <label for="product_payment_info">Payment info</label>
                            <textarea class="form-control" name="payment_info" id="product_payment_info"
                                      placeholder="Enter product payment info" rows="5">

                        </textarea>
                            @error('payment_info')
                            <p class="text-danger mt-1">Product payment info is required</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="product_guarantee_info">Guarantee info</label>
                            <textarea class="form-control" name="guarantee_info" id="product_guarantee_info"
                                      placeholder="Enter product guarantee info" rows="5">

                        </textarea>
                            @error('guarantee_info')
                            <p class="text-danger mt-1">Product guarantee info is required</p>
                            @enderror
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->

                @if( session()->has('message') )
                    <div class="alert alert-success" role="alert">
                        {{ session()->pull('message') }}
                    </div>
                @endif
            </div>
        </div>

        <div class="container row mt-4">
            <div class="card card-warning col p-0 m-auto">
                <div class="card-header">
                    <h3 class="card-title">Discount</h3>
                    <div class="form-check d-inline ml-4">
                        <input class="form-check-input" type="checkbox" id="discount_applied" name="discount_applied">
                        <label class="form-check-label" for="discount_applied">
                            Apply discount
                        </label>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col d-flex flex-row align-items-center">
                            - <input name="discount_value" class="form-control mx-2" type="text" value="0.00">
                            <div class="custom-control custom-radio custom-control-inline d-inline-block">
                                <input type="radio" id="fixed_discount" name="discount_classname"
                                       class="custom-control-input"
                                       value="{{ \App\Discounts\FixedPriceDiscount::class }}">
                                <label class="custom-control-label" for="fixed_discount">$</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline d-inline-block">
                                <input type="radio" id="percent_discount" name="discount_classname" class="custom-control-input"
                                       value="{{ \App\Discounts\PercentDiscount::class }}">
                                <label class="custom-control-label" for="percent_discount">%</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="">

                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <label for="active_until" class="col-sm-2 col-form-label">Active until</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="active_until" id="active_until" placeholder="Enter discount expire date. Format: 2020-02-02">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <label for="coupon_code" class="col-sm-2 col-form-label">Coupon code</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="coupon_code" name="coupon_code">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <button type="submit" class="btn btn-warning mt-3">Submit</button>
    </form>
@endsection
