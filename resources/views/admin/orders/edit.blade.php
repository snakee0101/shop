@extends('admin.main')

@section('content')
    <p class="m-3 font-weight-bold"><a href="{{ route('order.index') }}" class="text-danger">&lt; Back to all orders</a></p>

    <div class="container m-3">
        {{--------------------------------------------ORDER DATA ITSELF--------------------------------------------}}

        {{--------------------------------------------ORDERED PRODUCTS --------------------------------------------}}
        <div class="card card-primary m-0">
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
