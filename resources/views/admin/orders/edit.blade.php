@extends('admin.main')

@section('content')
    <p class="m-3 font-weight-bold"><a href="{{ route('order.index') }}" class="text-danger">&lt; Back to all orders</a></p>

    <div class="container m-3">
        {{--------------------------------------------ORDER DATA ITSELF--------------------------------------------}}
        <div class="card card-primary m-0">
            <div class="card-header">
                <h3 class="card-title font-weight-bold">Order #{{ $order->id }} data</h3>
            </div>
            <div class="card-body pb-0">
                <div class="container">
                    <div class="row mb-3">
                        <div class="col-3">
                           <span class="text-danger font-weight-bold">Paid:</span>
                                <div class="custom-control custom-radio custom-control-inline d-inline-block">
                                    <input type="radio" id="paid_yes" name="is_paid" class="custom-control-input" value="Yes" {{ $order->is_paid ? 'checked' : '' }}>
                                    <label class="custom-control-label" for="paid_yes">Yes</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="paid_no" name="is_paid" class="custom-control-input" value="No" {{ $order->is_paid == false ? 'checked' : '' }}>
                                    <label class="custom-control-label" for="paid_no">No</label>
                                </div>
                        </div>
                        <div class="col">
                            <span class="text-danger font-weight-bold">Status:</span>
                                <div class="custom-control custom-radio custom-control-inline d-inline-block">
                                    <input type="radio" id="status_on_hold" name="status" class="custom-control-input" value="on hold" {{ $order->status == 'on hold' ? 'checked' : '' }}>
                                    <label class="custom-control-label" for="status_on_hold">On hold</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline d-inline-block">
                                    <input type="radio" id="status_processing" name="status" class="custom-control-input" value="processing" {{ $order->status == 'processing' ? 'checked' : '' }}>
                                    <label class="custom-control-label" for="status_processing">Processing</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline d-inline-block">
                                    <input type="radio" id="status_cancelled" name="status" class="custom-control-input" value="cancelled" {{ $order->status == 'cancelled' ? 'checked' : '' }}>
                                    <label class="custom-control-label" for="status_cancelled">Cancelled</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline d-inline-block">
                                    <input type="radio" id="status_sent" name="status" class="custom-control-input" value="sent" {{ $order->status == 'sent' ? 'checked' : '' }}>
                                    <label class="custom-control-label" for="status_sent">Sent</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline d-inline-block">
                                    <input type="radio" id="status_completed" name="status" class="custom-control-input" value="completed" {{ $order->status == 'completed' ? 'checked' : '' }}>
                                    <label class="custom-control-label" for="status_completed">Completed</label>
                                </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <span class="text-danger font-weight-bold">User: </span>
                            @if($order->user_id)
                                {{ $order->owner->first_name }} {{ $order->owner->last_name }}
                            @else
                                &lt;anonymous user&gt;
                            @endif
                        </div>
                        <div class="col">
                            <span class="text-danger font-weight-bold">Order creation date: </span>
                            {{ $order->created_at }}
                        </div>
                        <div class="col d-flex">
                            <span class="text-danger font-weight-bold">Order shipping date: </span>
                            <div class="form-group d-inline">
                                <input type="text" class="form-control w-auto" name="shipping_date" value="{{ $order->shipping_date }}">
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col d-flex align-items-baseline">
                            <span class="text-danger font-weight-bold mr-2">Country: </span>
                            <div class="form-group d-inline">
                                <input type="text" class="form-control w-auto" name="country" value="{{ $order->country }}">
                            </div>
                        </div>
                        <div class="col d-flex align-items-baseline">
                            <span class="text-danger font-weight-bold mr-2">State: </span>
                            <div class="form-group d-inline">
                                <input type="text" class="form-control w-auto" name="state" value="{{ $order->state }}">
                            </div>
                        </div>
                        <div class="col d-flex align-items-baseline">
                            <span class="text-danger font-weight-bold mr-2">City: </span>
                            <div class="form-group d-inline">
                                <input type="text" class="form-control w-auto" name="city" value="{{ $order->city }}">
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col d-flex flex-col">
                            <div class="row">
                                <span class="text-danger font-weight-bold mr-2">Address: </span>
                                <div class="form-group d-inline">
                                    <input type="text" class="form-control w-auto" name="address" value="{{ $order->address }}">
                                </div>
                            </div>
                            <div class="row">
                                <span class="text-danger font-weight-bold mr-2">Apartment: </span>
                                <div class="form-group d-inline">
                                    <input type="text" class="form-control w-auto" name="apartment" value="{{ $order->apartment }}">
                                </div>
                            </div>
                        </div>
                        <div class="col d-flex flex-col">
                            <div class="row ">
                                <span class="text-danger font-weight-bold mr-2">Post Office Address: </span>
                                <div class="form-group d-inline">
                                    <input type="text" class="form-control w-auto" name="post_office_address" value="{{ $order->post_office_address }}">
                                </div>
                            </div>
                            <div class="row">
                                <span class="text-danger font-weight-bold mr-2">Postcode: </span>
                                <div class="form-group d-inline">
                                    <input type="text" class="form-control w-auto" name="postcode" value="{{ $order->postcode }}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{--------------------------------------------ORDERED PRODUCTS --------------------------------------------}}
        <div class="card card-primary m-0 mt-3">
            <div class="card-header">
                <h3 class="card-title font-weight-bold">Products of order #{{ $order->id }}</h3>
            </div>
            <div class="card-body pb-0">
                <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                    <div class="row">
                        <div class="col-sm-12">
                            <table id="example1" class="table table-bordered table-striped dataTable dtr-inline text-center"
                                   aria-describedby="example1_info">
                                <thead>
                                <tr>
                                    <th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1"
                                        colspan="1" aria-sort="ascending">#
                                    </th>
                                    <th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1"
                                        colspan="1" aria-sort="ascending">Name
                                    </th>
                                    <th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1"
                                        colspan="1" aria-sort="ascending">Category
                                    </th>
                                    <th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1"
                                        colspan="1" aria-sort="ascending">Price per item
                                    </th>
                                    <th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1"
                                             colspan="1" aria-sort="ascending">Quantity
                                    </th>
                                    <th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1"
                                        colspan="1" aria-sort="ascending">Total price
                                    </th>
                                    <th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1"
                                        colspan="1" aria-sort="ascending">Description
                                    </th>
                                    <th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1"
                                        colspan="1" aria-sort="ascending">Image
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($order->products as $product)
                                    <tr>
                                        <td class="dtr-control sorting_1" tabindex="0">
                                            {{ $product->id }}
                                        </td>
                                        <td class="dtr-control sorting_1" tabindex="0">
                                            <a href="{{ route('product.description', $product) }}" target="__blank">
                                                {{ $product->name }}
                                            </a>
                                        </td>
                                        <td class="dtr-control sorting_1" tabindex="0">
                                           {{ \App\Models\Category::find($product->category_id)->name }}
                                        </td>
                                        <td class="dtr-control sorting_1" tabindex="0">
                                            @if($product->priceWithDiscount < $product->price)
                                                <span class="font-weight-bold text-danger">${{ $product->priceWithDiscount }}</span>
                                                <span class="text-secondary" style=""><s><small>${{ $product->price }}</small></s></span>
                                            @else
                                                ${{ $product->price }}
                                            @endif
                                        </td>
                                        <td class="dtr-control sorting_1" tabindex="0">
                                            {{ $product->pivot->quantity }}
                                        </td>
                                        <td class="dtr-control sorting_1" tabindex="0">
                                            @if($product->priceWithDiscount < $product->price)
                                                <span class="font-weight-bold text-danger">${{ $product->priceWithDiscount * $product->pivot->quantity }}</span>
                                                <span class="text-secondary" style=""><s><small>${{ $product->price * $product->pivot->quantity }}</small></s></span>
                                            @else
                                                ${{ $product->price * $product->pivot->quantity }}
                                            @endif
                                        </td>
                                        <td class="dtr-control sorting_1" tabindex="0">
                                           {{ $product->description }}
                                        </td>
                                        <td class="dtr-control sorting_1" tabindex="0">
                                            <img src="{{ $product->photos[0]->url }}" height="100" width="100">
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <p style="font-size: 2em">
                    Subtotal: <span class="font-weight-bold text-danger">${{ $order->product_subtotal }}</span>
                </p>
            </div>
        </div>

        {{--------------------------------------------ORDERED PRODUCT SETS --------------------------------------------}}
        <div class="card card-primary m-0 mt-4">
            <div class="card-header">
                <h3 class="card-title font-weight-bold">Product sets of order #{{ $order->id }}</h3>
            </div>
            <div class="card-body pb-0">
                <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                    <div class="row">
                        <div class="col-sm-12">
                            <table id="example1" class="table table-bordered table-striped dataTable dtr-inline text-center"
                                   aria-describedby="example1_info">
                                <thead>
                                <tr>
                                    <th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1"
                                        colspan="1" aria-sort="ascending">#
                                    </th>
                                    <th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1"
                                        colspan="1" aria-sort="ascending">Name
                                    </th>
                                    <th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1"
                                        colspan="1" aria-sort="ascending">Price per item
                                    </th>
                                    <th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1"
                                        colspan="1" aria-sort="ascending">Quantity
                                    </th>
                                    <th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1"
                                        colspan="1" aria-sort="ascending">Total price
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($order->product_sets as $product_set)
                                    <tr>
                                        <td class="dtr-control sorting_1" tabindex="0">
                                            {{ $product_set->id }}
                                        </td>
                                        <td class="dtr-control sorting_1" tabindex="0">
                                            <a href="{{ route('product.description', $product_set->products[0]) }}" target="__blank">
                                                {{ $product_set->products[0]->name }}
                                            </a> +
                                            <a href="{{ route('product.description', $product_set->products[1]) }}" target="__blank">
                                                {{ $product_set->products[1]->name }}
                                            </a>
                                        </td>
                                        <td class="dtr-control sorting_1" tabindex="0">
                                            @if($product_set->priceWithDiscount < $product_set->price)
                                                <span class="font-weight-bold text-danger">${{ $product_set->priceWithDiscount }}</span>
                                                <span class="text-secondary" style=""><s><small>${{ $product_set->price }}</small></s></span>
                                            @else
                                                ${{ $product_set->price }}
                                            @endif
                                        </td>
                                        <td class="dtr-control sorting_1" tabindex="0">
                                            {{ $product_set->pivot->quantity }}
                                        </td>
                                        <td class="dtr-control sorting_1" tabindex="0">
                                            @if($product_set->priceWithDiscount < $product_set->price)
                                                <span class="font-weight-bold text-danger">${{ $product_set->priceWithDiscount * $product_set->pivot->quantity }}</span>
                                                <span class="text-secondary" style=""><s><small>${{ $product_set->price * $product_set->pivot->quantity }}</small></s></span>
                                            @else
                                                ${{ $product_set->price * $product_set->pivot->quantity }}
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <p style="font-size: 2em">
                    Subtotal: <span class="font-weight-bold text-danger">${{ $order->product_set_subtotal }}</span>
                </p>
            </div>
        </div>

        {{--------------------------------------------TOTALS SECTION ---------------------------------------------------}}
        <div class="card card-warning m-0 mt-4">
            <div class="card-header">
                <h3 class="card-title font-weight-bold">Totals</h3>
            </div>
            <div class="card-body pb-0">
                <p style="font-size: 1.5em">
                    Products subtotal: <span class="font-weight-bold">${{ $order->product_subtotal }}</span>
                </p>
                <p style="font-size: 1.5em">
                    Product sets subtotal: <span class="font-weight-bold">${{ $order->product_set_subtotal }}</span>
                </p>
                <p style="font-size: 2em" class="font-weight-bold">
                    Total: <span class="text-danger">${{ $order->total }}</span>
                </p>
            </div>
        </div>

        {{--------------------------------------------CREDENTIALS SECTION ---------------------------------------------------}}
        <div class="card card-success m-0 mt-4">
            <div class="card-header">
                <h3 class="card-title font-weight-bold">Order Credentials</h3>
            </div>
            <div class="card-body pb-0">
                <table class="table">
                    <tr>
                        <th>First name</th>
                        <th>Last name</th>
                        <th>Phone</th>
                        <th>Email</th>
                    </tr>
                    <tr>
                        <td>{{ $credentials->first_name }}</td>
                        <td>{{ $credentials->last_name }}</td>
                        <td>{{ $credentials->phone }}</td>
                        <td>{{ $credentials->email }}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
@endsection
