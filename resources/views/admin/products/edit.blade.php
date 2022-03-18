@extends('admin.main')

@section('content')
    <p class="m-3 font-weight-bold"><a href="{{ route('admin.products.index') }}" class="text-danger">&lt; Back to all
            products</a></p>
    <h2 class="my-3 font-weight-bold">Edit product "{{ $product->name }}"</h2>

    <form action="{{ route('product.update', $product) }}" method="post" enctype="multipart/form-data">
        @method('PUT')
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
                                   placeholder="Enter product name" value="{{ $product->name }}">
                            @error('name')
                            <p class="text-danger mt-1">Product name is required</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="product_description">Description</label>
                            <textarea class="form-control" name="description" id="product_description"
                                      placeholder="Enter product description" rows="5">{{ $product->description }}</textarea>
                            @error('description')
                            <p class="text-danger mt-1">Product description is required</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="product_name">Price</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">$</span>
                                <input name="price" type="text" class="form-control" value="{{ number_format($product->price, 2) }}">
                            </div>
                            @error('price')
                            <p class="text-danger mt-1">Product price is required</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="product_category">Product category</label>
                            <admin-category-selector-component :categories="{{ $categories }}"
                                                               :current_category_id="{{ $product->category_id }}">

                            </admin-category-selector-component>

                            @error('category_id')
                                <p class="text-danger mt-1">Product category is required</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="product_category">Stock status</label>
                            <div class="custom-control custom-radio custom-control-inline d-inline-block">
                                <input type="radio" id="status_on_hold" name="in_stock" class="custom-control-input"
                                       value="{{ \App\Models\Product::STATUS_IN_STOCK }}" {{ $product->in_stock == \App\Models\Product::STATUS_IN_STOCK ? 'checked' : '' }}>
                                <label class="custom-control-label" for="status_on_hold">In Stock</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline d-inline-block">
                                <input type="radio" id="status_processing" name="in_stock"
                                       class="custom-control-input"
                                       value="{{ \App\Models\Product::STATUS_ENDS }}" {{ $product->in_stock == \App\Models\Product::STATUS_ENDS ? 'checked' : '' }}>
                                <label class="custom-control-label" for="status_processing">Ends</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline d-inline-block">
                                <input type="radio" id="status_cancelled" name="in_stock" class="custom-control-input"
                                       value="{{ \App\Models\Product::STATUS_OUT_OF_STOCK }}" {{ $product->in_stock == \App\Models\Product::STATUS_OUT_OF_STOCK ? 'checked' : '' }}>
                                <label class="custom-control-label" for="status_cancelled">Out Of Stock</label>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="product_payment_info">Payment info</label>
                            <textarea class="form-control" name="payment_info" id="product_payment_info"
                                      placeholder="Enter product payment info" rows="5">{{ $product->payment_info }}</textarea>
                            @error('payment_info')
                            <p class="text-danger mt-1">Product payment info is required</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="product_guarantee_info">Guarantee info</label>
                            <textarea class="form-control" name="guarantee_info" id="product_guarantee_info"
                                      placeholder="Enter product guarantee info" rows="5">{{ $product->guarantee_info }}</textarea>
                            @error('guarantee_info')
                            <p class="text-danger mt-1">Product guarantee info is required</p>
                            @enderror
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->

                @if( session()->has('message') )
                    <div class="alert alert-success" role="alert">
                        {{ session('message') }}
                    </div>
                @endif
            </div>
        </div>

        <div class="container row mt-4">
            <div class="card card-primary col p-0 m-auto">
                <div class="card-header">
                    <h3 class="card-title">Specification</h3>
                </div>
                <div class="card-body">
                    <admin-characteristic-table-component :chars="{{ $product->characteristics }}">

                    </admin-characteristic-table-component>
                </div>
            </div>
        </div>

        <div class="container row mt-4">
            <div class="card card-warning col p-0 m-auto">
                <div class="card-header">
                    <h3 class="card-title">Discount</h3>
                    <div class="form-check d-inline ml-4">
                        <input class="form-check-input" type="checkbox" id="discount_applied" name="discount_applied" {{ $product->discount()->exists() ? 'checked' : '' }}>
                        <label class="form-check-label" for="discount_applied">
                            Apply discount
                        </label>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col d-flex flex-row align-items-center">
                            - <input name="discount_value" class="form-control mx-2" type="text" value="{{ $product->discount()->exists() ? number_format($product->discount->value, 2) : '0.00' }}">
                            <div class="custom-control custom-radio custom-control-inline d-inline-block">
                                <input type="radio" id="fixed_discount" name="discount_classname"
                                       class="custom-control-input"
                                       value="{{ \App\Discounts\FixedPriceDiscount::class }}" {{ $product->discount()->exists() && $product->discount->discount_classname == \App\Discounts\FixedPriceDiscount::class ? 'checked' : '' }}>
                                <label class="custom-control-label" for="fixed_discount">$</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline d-inline-block">
                                <input type="radio" id="percent_discount" name="discount_classname"
                                       class="custom-control-input"
                                       value="{{ \App\Discounts\PercentDiscount::class }}" {{ $product->discount()->exists() && $product->discount->discount_classname == \App\Discounts\PercentDiscount::class ? 'checked' : '' }}>
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
                                   placeholder="Enter discount start date. Format: 2020-02-02" value="{{ $product->discount()->exists() && $product->discount->active_since ? $product->discount->active_since : '' }}">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <label for="discount_active_until" class="col-sm-2 col-form-label">Active until</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="discount_active_until"
                                   id="discount_active_until"
                                   placeholder="Enter discount expire date. Format: 2020-02-02" value="{{ $product->discount()->exists() && $product->discount->active_until ? $product->discount->active_until : '' }}">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="coupon_code" name="with_coupon_code" {{ $product->discount()->exists() && $product->discount->coupon_code ? 'checked' : '' }}>
                            <label class="form-check-label" for="coupon_code">
                                With coupon code
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container row mt-4">
            <div class="card card-success col p-0 m-auto">
                <div class="card-header">
                    <h3 class="card-title">Videos</h3>
                </div>
                <div class="card-body">
                    <admin-new-video-container-component :saved_videos="{{ $product->videos }}">
                    </admin-new-video-container-component>
                </div>
            </div>
        </div>

        <div class="container row mt-4">
            <div class="card card-primary col p-0 m-auto">
                <div class="card-header">
                    <h3 class="card-title">Photos</h3>
                </div>
                <div class="card-body">
                    <new-photo-container-component :saved_photos="{{ $product->photos }}">
                    </new-photo-container-component>
                </div>
            </div>
        </div>

        <button type="submit" class="btn btn-warning mt-3">Submit</button>
    </form>
@endsection
<script>
    import AdminCharacteristicTableComponent from "../../../js/components/AdminCharacteristicTableComponent";
    export default {
        components: {AdminCharacteristicTableComponent}
    }
</script>
