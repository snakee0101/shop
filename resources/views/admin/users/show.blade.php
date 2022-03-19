@extends('admin.main')

@section('content')
    <p class="m-3 font-weight-bold"><a href="{{ route('admin.users.index') }}" class="text-danger">&lt; Back to all
            users</a></p>


    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title font-weight-bold">Information about user <span class="text-danger">#{{ $user->id }}</span> {{ $user->first_name }}  {{ $user->last_name }}</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                    <div class="row">
                        <div class="col-sm-12">
                            <table id="example1" class="table table-bordered table-striped dtr-inline text-center"
                                   aria-describedby="example1_info">
                                <thead>
                                <tr>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">#</th>
                                    <th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1"
                                        colspan="1" aria-sort="ascending">First name</th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Last name</th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Phone</th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Email</th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                        <tr>
                                            <td class="dtr-control sorting_1" tabindex="0">
                                                {{ $user->id }}
                                            </td>
                                            <td>
                                                {{ $user->first_name }}
                                            </td>
                                            <td>
                                                {{ $user->last_name }}
                                            </td>
                                            <td>
                                                {{ $user->phone }}
                                            </td>
                                            <td>
                                                {{ $user->email }}
                                            </td>
                                            <td>
                                                -
                                            </td>
                                        </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
        </div>
    </div>


    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title font-weight-bold text-danger">Orders</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
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
                                        colspan="1" aria-sort="ascending">Paid
                                    </th>
                                    <th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1"
                                        colspan="1" aria-sort="ascending">Status
                                    </th>
                                    <th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1"
                                        colspan="1" aria-sort="ascending">Country
                                    </th>
                                    <th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1"
                                        colspan="1" aria-sort="ascending">State
                                    </th>
                                    <th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1"
                                        colspan="1" aria-sort="ascending">City
                                    </th>
                                    <th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1"
                                        colspan="1" aria-sort="ascending">Address
                                    </th>
                                    <th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1"
                                        colspan="1" aria-sort="ascending">Apartment
                                    </th>
                                    <th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1"
                                        colspan="1" aria-sort="ascending">Post Office
                                    </th>
                                    <th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1"
                                        colspan="1" aria-sort="ascending">Post code
                                    </th>
                                    <th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1"
                                        colspan="1" aria-sort="ascending">Shipping date
                                    </th>
                                    <th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1"
                                        colspan="1" aria-sort="ascending">Details
                                    </th>
                                    <th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1"
                                        colspan="1" aria-sort="ascending">Actions
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($user->orders as $order)
                                    <tr>
                                        <td class="dtr-control sorting_1" tabindex="0">
                                            {{ $order->id }}
                                        </td>
                                        <td class="dtr-control sorting_1" tabindex="0" style="font-size: 1.2em">
                                            <a class="badge {{ $order->is_paid ? 'badge-primary' : 'badge-danger' }}">
                                                {{ $order->is_paid ? 'Yes' : 'No' }}
                                            </a>
                                        </td>
                                        <td class="dtr-control sorting_1" tabindex="0" style="font-size: 1.2em">
                                            @switch($order->status)
                                                @case('on hold')
                                                <a class="badge badge-secondary">
                                                    On Hold
                                                </a>
                                                @break

                                                @case('processing')
                                                <a class="badge badge-warning">
                                                    Processing
                                                </a>
                                                @break

                                                @case('cancelled')
                                                <a class="badge badge-danger">
                                                    Cancelled
                                                </a>
                                                @break

                                                @case('sent')
                                                <a class="badge badge-primary">
                                                    Sent
                                                </a>
                                                @break

                                                @case('completed')
                                                <a class="badge badge-success">
                                                    Completed
                                                </a>
                                                @break
                                            @endswitch
                                        </td>
                                        <td class="dtr-control sorting_1" tabindex="0">
                                            {{ $order->country }}
                                        </td>
                                        <td class="dtr-control sorting_1" tabindex="0">
                                            {{ $order->state }}
                                        </td>
                                        <td class="dtr-control sorting_1" tabindex="0">
                                            {{ $order->city }}
                                        </td>
                                        <td class="dtr-control sorting_1" tabindex="0">
                                            {{ $order->address ?? '-' }}
                                        </td>
                                        <td class="dtr-control sorting_1" tabindex="0">
                                            {{ $order->apartment ?? '-' }}
                                        </td>
                                        <td class="dtr-control sorting_1" tabindex="0">
                                            {{ $order->post_office_address ?? '-' }}
                                        </td>
                                        <td class="dtr-control sorting_1" tabindex="0">
                                            {{ $order->postcode ?? '-' }}
                                        </td>
                                        <td class="dtr-control sorting_1" tabindex="0">
                                            {{ $order->shipping_date }}
                                        </td>
                                        <td class="dtr-control sorting_1" tabindex="0">
                                            <a href="{{ route('order.edit', $order) }}">
                                                Show Details
                                            </a>
                                        </td>
                                        <td>
                                            <form action="{{ route('order.destroy', $order) }}" method="post" class="d-inline">
                                                @csrf
                                                @method('DELETE')

                                                <button class="btn btn-danger btn-sm">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
        </div>
    </div>


    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title font-weight-bold text-danger">Products in wishlist</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
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
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Name
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Price
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Discount
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Stock status
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Category
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Description
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($wishlisted_products as $product)
                                    <tr class="{{ $product->trashed() ? 'bg-secondary' : '' }}">
                                        <td class="dtr-control sorting_1">
                                            {{ $product->id }}
                                        </td>
                                        <td class="dtr-control sorting_1">
                                            <a href="{{ route('product.description', $product) }}" target="__blank">
                                                {{ $product->name }}
                                            </a>
                                        </td>
                                        <td class="dtr-control sorting_1">
                                            @if($product->priceWithDiscount < $product->price)
                                                <span
                                                    class="font-weight-bold text-danger">${{ $product->priceWithDiscount }}</span>
                                                <span class="text-secondary"
                                                      style=""><s><small>${{ $product->price }}</small></s></span>
                                            @else
                                                ${{ $product->price }}
                                            @endif
                                        </td>
                                        <td class="dtr-control sorting_1">
                                            @if($product->discount)
                                                @if($product->discount->isExpired())
                                                    <span class="font-weight-bold">Discount expired</span>
                                                @else
                                                    @switch($product->discount->discount_classname)
                                                        @case(\App\Discounts\FixedPriceDiscount::class)
                                                        Fixed price discount <span class="font-weight-bold text-danger">- ${{ $product->discount->value }}</span><br>
                                                        @if($product->discount->coupon_code)
                                                            <span class="font-weight-bold">Coupon code:</span> {{ $product->discount->coupon_code }}
                                                        @endif
                                                        <br>
                                                        @if($product->discount->active_until)
                                                            <span class="font-weight-bold">Expire date:</span> {{ $product->discount->active_since->format('Y-m-d') }} - {{ $product->discount->active_until->format('Y-m-d') }}
                                                        @endif
                                                        @break

                                                        @case(\App\Discounts\PercentDiscount::class)
                                                        Percent discount <span class="font-weight-bold text-danger">- {{ $product->discount->value }}%</span><br>
                                                        @if($product->discount->coupon_code)
                                                            <span class="font-weight-bold">Coupon code:</span> {{ $product->discount->coupon_code }}
                                                        @endif
                                                        <br>
                                                        @if($product->discount->active_until)
                                                            <span class="font-weight-bold">Expire date:</span> {{ $product->discount->active_since->format('Y-m-d') }} - {{ $product->discount->active_until->format('Y-m-d') }}
                                                        @endif
                                                        @break
                                                    @endswitch
                                                @endif
                                            @else
                                                -
                                            @endif
                                        </td>
                                        <td class="dtr-control sorting_1" style="font-size: 1.2em">
                                            @switch($product->in_stock)
                                                @case('In Stock')
                                                <a class="badge badge-success">
                                                    {{ $product->in_stock }}
                                                </a>
                                                @break

                                                @case('Ends')
                                                <a class="badge badge-warning">
                                                    {{ $product->in_stock }}
                                                </a>
                                                @break

                                                @case('Out Of Stock')
                                                <a class="badge badge-danger">
                                                    {{ $product->in_stock }}
                                                </a>
                                            @endswitch
                                        </td>
                                        <td class="dtr-control sorting_1">
                                            {{ $product->category->name }}
                                        </td>
                                        <td class="dtr-control sorting_1">
                                            {{ $product->description }}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
        </div>
    </div>


    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title font-weight-bold text-danger">Reports</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                    <div class="row">
                        <div class="col-sm-12">
                            <table id="example1" class="table table-bordered table-striped dataTable dtr-inline text-center"
                                   aria-describedby="example1_info">
                                <thead>
                                <tr>
                                    <th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1"
                                        colspan="1" aria-sort="ascending">Reported object
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Cause
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Comment
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Report Author
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Report Date
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Actions
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($reports as $report)
                                    <tr>
                                        <td class="dtr-control sorting_1" tabindex="0">
                                            <a href="{{ route( mb_strtolower(class_basename( $report->object )) . '.show', $report->object) }}" target="__blank">
                                                {{ class_basename( $report->object ) }} #{{ $report->object->id }}
                                            </a>
                                        </td>
                                        <td>
                                            {{ $report->cause }}
                                        </td>
                                        <td>
                                            {{ $report->comment }}
                                        </td>
                                        <td>
                                            User #{{ $report->author->id }}
                                        </td>
                                        <td>
                                            {{ $report->created_at }}
                                        </td>
                                        <td>
                                            <form action="{{ route('report.destroy', $report) }}" method="post" class="d-inline">
                                                @csrf
                                                @method('DELETE')

                                                <button class="btn btn-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
        </div>
    </div>


    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title font-weight-bold text-danger">Visited products</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
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
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Name
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Price
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Discount
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Stock status
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Category
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Description
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($visited_products as $product)
                                    <tr class="{{ $product->trashed() ? 'bg-secondary' : '' }}">
                                        <td class="dtr-control sorting_1">
                                            {{ $product->id }}
                                        </td>
                                        <td class="dtr-control sorting_1">
                                            <a href="{{ route('product.description', $product) }}" target="__blank">
                                                {{ $product->name }}
                                            </a>
                                        </td>
                                        <td class="dtr-control sorting_1">
                                            @if($product->priceWithDiscount < $product->price)
                                                <span
                                                    class="font-weight-bold text-danger">${{ $product->priceWithDiscount }}</span>
                                                <span class="text-secondary"
                                                      style=""><s><small>${{ $product->price }}</small></s></span>
                                            @else
                                                ${{ $product->price }}
                                            @endif
                                        </td>
                                        <td class="dtr-control sorting_1">
                                            @if($product->discount)
                                                @if($product->discount->isExpired())
                                                    <span class="font-weight-bold">Discount expired</span>
                                                @else
                                                    @switch($product->discount->discount_classname)
                                                        @case(\App\Discounts\FixedPriceDiscount::class)
                                                        Fixed price discount <span class="font-weight-bold text-danger">- ${{ $product->discount->value }}</span><br>
                                                        @if($product->discount->coupon_code)
                                                            <span class="font-weight-bold">Coupon code:</span> {{ $product->discount->coupon_code }}
                                                        @endif
                                                        <br>
                                                        @if($product->discount->active_until)
                                                            <span class="font-weight-bold">Expire date:</span> {{ $product->discount->active_since->format('Y-m-d') }} - {{ $product->discount->active_until->format('Y-m-d') }}
                                                        @endif
                                                        @break

                                                        @case(\App\Discounts\PercentDiscount::class)
                                                        Percent discount <span class="font-weight-bold text-danger">- {{ $product->discount->value }}%</span><br>
                                                        @if($product->discount->coupon_code)
                                                            <span class="font-weight-bold">Coupon code:</span> {{ $product->discount->coupon_code }}
                                                        @endif
                                                        <br>
                                                        @if($product->discount->active_until)
                                                            <span class="font-weight-bold">Expire date:</span> {{ $product->discount->active_since->format('Y-m-d') }} - {{ $product->discount->active_until->format('Y-m-d') }}
                                                        @endif
                                                        @break
                                                    @endswitch
                                                @endif
                                            @else
                                                -
                                            @endif
                                        </td>
                                        <td class="dtr-control sorting_1" style="font-size: 1.2em">
                                            @switch($product->in_stock)
                                                @case('In Stock')
                                                <a class="badge badge-success">
                                                    {{ $product->in_stock }}
                                                </a>
                                                @break

                                                @case('Ends')
                                                <a class="badge badge-warning">
                                                    {{ $product->in_stock }}
                                                </a>
                                                @break

                                                @case('Out Of Stock')
                                                <a class="badge badge-danger">
                                                    {{ $product->in_stock }}
                                                </a>
                                            @endswitch
                                        </td>
                                        <td class="dtr-control sorting_1">
                                            {{ $product->category->name }}
                                        </td>
                                        <td class="dtr-control sorting_1">
                                            {{ $product->description }}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
        </div>
    </div>


    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title font-weight-bold text-danger">Comparisons</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                @foreach($comparison as $products_in_category)
                    <div class="card border border-danger">
                        <div class="card-header">
                            <h3 class="card-title font-weight-bold">Category: <span class="text-danger">{{ \App\Models\Category::find($products_in_category[0]->category_id)->name }}</span></h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body d-inline-block mt-4">
                            <table id="example1" class="table table-bordered table-striped dataTable dtr-inline text-center"
                                   aria-describedby="example1_info">
                                <thead>
                                <tr>
                                    <th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1"
                                        colspan="1" aria-sort="ascending">#
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Name
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Price
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Discount
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Stock status
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Category
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Description
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($products_in_category as $product)
                                    <tr class="{{ $product->trashed() ? 'bg-secondary' : '' }}">
                                        <td class="dtr-control sorting_1">
                                            {{ $product->id }}
                                        </td>
                                        <td class="dtr-control sorting_1">
                                            <a href="{{ route('product.description', $product) }}" target="__blank">
                                                {{ $product->name }}
                                            </a>
                                        </td>
                                        <td class="dtr-control sorting_1">
                                            @if($product->priceWithDiscount < $product->price)
                                                <span
                                                    class="font-weight-bold text-danger">${{ $product->priceWithDiscount }}</span>
                                                <span class="text-secondary"
                                                      style=""><s><small>${{ $product->price }}</small></s></span>
                                            @else
                                                ${{ $product->price }}
                                            @endif
                                        </td>
                                        <td class="dtr-control sorting_1">
                                            @if($product->discount)
                                                @if($product->discount->isExpired())
                                                    <span class="font-weight-bold">Discount expired</span>
                                                @else
                                                    @switch($product->discount->discount_classname)
                                                        @case(\App\Discounts\FixedPriceDiscount::class)
                                                        Fixed price discount <span class="font-weight-bold text-danger">- ${{ $product->discount->value }}</span><br>
                                                        @if($product->discount->coupon_code)
                                                            <span class="font-weight-bold">Coupon code:</span> {{ $product->discount->coupon_code }}
                                                        @endif
                                                        <br>
                                                        @if($product->discount->active_until)
                                                            <span class="font-weight-bold">Expire date:</span> {{ $product->discount->active_since->format('Y-m-d') }} - {{ $product->discount->active_until->format('Y-m-d') }}
                                                        @endif
                                                        @break

                                                        @case(\App\Discounts\PercentDiscount::class)
                                                        Percent discount <span class="font-weight-bold text-danger">- {{ $product->discount->value }}%</span><br>
                                                        @if($product->discount->coupon_code)
                                                            <span class="font-weight-bold">Coupon code:</span> {{ $product->discount->coupon_code }}
                                                        @endif
                                                        <br>
                                                        @if($product->discount->active_until)
                                                            <span class="font-weight-bold">Expire date:</span> {{ $product->discount->active_since->format('Y-m-d') }} - {{ $product->discount->active_until->format('Y-m-d') }}
                                                        @endif
                                                        @break
                                                    @endswitch
                                                @endif
                                            @else
                                                -
                                            @endif
                                        </td>
                                        <td class="dtr-control sorting_1" style="font-size: 1.2em">
                                            @switch($product->in_stock)
                                                @case('In Stock')
                                                <a class="badge badge-success">
                                                    {{ $product->in_stock }}
                                                </a>
                                                @break

                                                @case('Ends')
                                                <a class="badge badge-warning">
                                                    {{ $product->in_stock }}
                                                </a>
                                                @break

                                                @case('Out Of Stock')
                                                <a class="badge badge-danger">
                                                    {{ $product->in_stock }}
                                                </a>
                                            @endswitch
                                        </td>
                                        <td class="dtr-control sorting_1">
                                            {{ $product->category->name }}
                                        </td>
                                        <td class="dtr-control sorting_1">
                                            {{ $product->description }}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                @endforeach
            </div>
            <!-- /.card-body -->
        </div>
    </div>



    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title font-weight-bold text-danger">Reviews</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped dataTable dtr-inline text-center"
                       aria-describedby="example1_info">
                    <thead>
                    <tr>
                        <th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1"
                            colspan="1" aria-sort="ascending">#
                        </th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Reviewed product
                        </th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Rating
                        </th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Comment
                        </th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Advantages
                        </th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Disadvantages
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($user->reviews as $review)
                        <tr>
                            <td class="dtr-control sorting_1">
                                {{ $review->id }}
                            </td>
                            <td class="dtr-control sorting_1">
                                <a href="{{ route('product.description', $review->product) }}" target="__blank">
                                    {{ $review->product->name }}
                                </a>
                            </td>
                            <td class="dtr-control sorting_1">
                                @for($i = 1; $i < $review->rating + 1; $i++)
                                    <svg class="rating__star d-inline-block" width="13px" height="12px">
                                        <g class="rating__fill">
                                            <use
                                                xlink:href="/images/sprite.svg#star-normal"></use>
                                        </g>
                                        <g class="rating__stroke">
                                            <use
                                                xlink:href="/images/sprite.svg#star-normal-stroke"></use>
                                        </g>
                                    </svg>
                                    <div class="rating__star rating__star--only-edge d-inline-block">
                                        <div class="rating__fill">
                                            <div class="fake-svg-icon"></div>
                                        </div>
                                        <div class="rating__stroke">
                                            <div class="fake-svg-icon"></div>
                                        </div>
                                    </div>
                                @endfor
                            </td>
                            <td class="dtr-control sorting_1">
                                {{ $review->comment }}
                            </td>
                            <td class="dtr-control sorting_1">
                                {{ $review->advantages }}
                            </td>
                            <td class="dtr-control sorting_1">
                                {{ $review->disadvantages }}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
    </div>



    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title font-weight-bold text-danger">Review replies</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped dataTable dtr-inline text-center"
                       aria-describedby="example1_info">
                    <thead>
                    <tr>
                        <th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1"
                            colspan="1" aria-sort="ascending">#
                        </th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Replied object
                        </th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Reply text
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($review_replies as $reply)
                        <tr>
                            <td class="dtr-control sorting_1">
                                    {{ $reply->id }}
                            </td>
                            <td class="dtr-control sorting_1">
                                <a href="{{ route( mb_strtolower(class_basename( $reply->object )) . '.show', $reply->object) }}" target="__blank">
                                    {{ class_basename( $reply->object ) }} #{{ $reply->object->id }}
                                </a>
                            </td>
                            <td class="dtr-control sorting_1">
                                {{ $reply->text }}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
    </div>


    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title font-weight-bold text-danger">Questions</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped dataTable dtr-inline text-center"
                       aria-describedby="example1_info">
                    <thead>
                    <tr>
                        <th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1"
                            colspan="1" aria-sort="ascending">#
                        </th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Product
                        </th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Question
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($user->questions as $question)
                        <tr>
                            <td class="dtr-control sorting_1">
                                <a href="{{ route('question.show', $question) }}" target="__blank">
                                    {{ $question->id }}
                                </a>
                            </td>
                            <td class="dtr-control sorting_1">
                                <a href="{{ route('product.description', $question->product) }}" target="__blank">
                                    {{ $question->product->name }}
                                </a>
                            </td>
                            <td class="dtr-control sorting_1">
                                {{ $question->comment }}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
    </div>


    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title font-weight-bold text-danger">Question replies</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped dataTable dtr-inline text-center"
                       aria-describedby="example1_info">
                    <thead>
                    <tr>
                        <th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1"
                            colspan="1" aria-sort="ascending">#
                        </th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Replied object
                        </th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Reply text
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($question_replies as $q_reply)
                        <tr>
                            <td class="dtr-control sorting_1">
                                {{ $q_reply->id }}
                            </td>
                            <td class="dtr-control sorting_1">
                                <a href="{{ route( mb_strtolower(class_basename( $q_reply->object )) . '.show', $q_reply->object) }}" target="__blank">
                                    {{ class_basename( $q_reply->object ) }} #{{ $q_reply->object->id }}
                                </a>
                            </td>
                            <td class="dtr-control sorting_1">
                                {{ $q_reply->text }}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
    </div>


    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title font-weight-bold text-danger">Votes</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped dataTable dtr-inline text-center"
                       aria-describedby="example1_info">
                    <thead>
                    <tr>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Voted object
                        </th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Vote
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($user->votes as $vote)
                        <tr>
                            <td class="dtr-control sorting_1">
                                <a href="{{ route( mb_strtolower(class_basename( $vote->voted_object )) . '.show', $vote->voted_object) }}" target="__blank">
                                    {{ class_basename( $vote->voted_object ) }} #{{ $vote->voted_object->id }}
                                </a>
                            </td>
                            <td class="dtr-control sorting_1">
                                {{ $vote->value }}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
    </div>


    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title font-weight-bold text-danger">Videos</h3>
            </div>
            <div class="card-body">
                @foreach($videos as $video)
                    <div class="text-center d-inline-block">
                        <div class="d-inline-block">
                            <iframe style="margin: 10px"
                                    width="280" height="157"
                                    src="{{ $video->url }}"
                                    title="YouTube video player"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen>

                            </iframe>
                            <h4 class="ml-2">
                                <a href="{{ route( mb_strtolower(class_basename( $video->object )) . '.show', $video->object) }}" target="__blank">
                                    {{ class_basename( $video->object ) }} #{{ $video->object->id }}
                                </a>
                            </h4>
                        </div>
                    </div>
                @endforeach
            </div>
            <!-- /.card-body -->
        </div>
    </div>


    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title font-weight-bold text-danger">Photos</h3>
            </div>
            <div class="card-body">
                @foreach($photos as $photo)
                    <div class="text-center d-inline-block">
                        <div class="d-inline-block">
                            <img src="{{ $photo->url }}" width="160">
                            <h4 class="ml-2">
                                <a href="{{ route( mb_strtolower(class_basename( $photo->object )) . '.show', $photo->object) }}" target="__blank">
                                    {{ class_basename( $photo->object ) }} #{{ $photo->object->id }}
                                </a>
                            </h4>
                        </div>
                    </div>
                @endforeach
            </div>
            <!-- /.card-body -->
        </div>
    </div>
@endsection
