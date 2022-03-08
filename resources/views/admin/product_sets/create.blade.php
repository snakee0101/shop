@extends('admin.main')

@section('content')
    <p class="m-3 font-weight-bold"><a href="{{ route('product_set.index') }}" class="text-danger">&lt; Back to all
            product sets</a></p>
    <h2 class="my-3 font-weight-bold">Create product set</h2>

    <form action="{{ route('product_set.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row mt-3">
                <label for="discount_active_since" class="col-sm-2 col-form-label">Product 1</label>
                <div class="col-sm-10">
                    <select class="form-control select2 select2-hidden-accessible" style="width: 100%;"
                            tabindex="-1" aria-hidden="true" name="product-1">

                            <option value="" selected>Not selected</option>

                            @foreach($products as $product_1)
                                <option data-select2-id="{{ '#a' . $product_1->id }}"
                                        value="{{ $product_1->id }}">
                                    {{ "#{$product_1->id}. " . $product_1->name }}
                                </option>
                            @endforeach
                    </select>
                </div>
            </div>
            <div class="row mt-3">
                <label for="discount_active_until" class="col-sm-2 col-form-label">Product 2</label>
                <div class="col-sm-10">
                    <select class="form-control select2 select2-hidden-accessible" style="width: 100%;"
                            tabindex="-1" aria-hidden="true" name="product-2">

                        <option value="" selected>Not selected</option>

                        @foreach($products as $product_2)
                            <option data-select2-id="{{ '#b' . $product_2->id }}"
                                    value="{{ $product_2->id }}">
                                {{ "#{$product_2->id}. " . $product_2->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>


            @if( session()->has('message') )
                <div class="alert alert-success" role="alert">
                    {{ session()->pull('message') }}
                </div>
            @endif


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
                                       value="{{ \App\Discounts\FixedPriceDiscount::class }}" checked>
                                <label class="custom-control-label" for="fixed_discount">$</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline d-inline-block">
                                <input type="radio" id="percent_discount" name="discount_classname"
                                       class="custom-control-input"
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
                        <label for="discount_active_since" class="col-sm-2 col-form-label">Active since</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="discount_active_since"
                                   id="discount_active_since"
                                   placeholder="Enter discount start date. Format: 2020-02-02">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <label for="discount_active_until" class="col-sm-2 col-form-label">Active until</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="discount_active_until"
                                   id="discount_active_until"
                                   placeholder="Enter discount expire date. Format: 2020-02-02">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="coupon_code" name="with_coupon_code">
                            <label class="form-check-label" for="coupon_code">
                                With coupon code
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <button type="submit" class="btn btn-warning mt-3">Submit</button>
    </form>
@endsection
