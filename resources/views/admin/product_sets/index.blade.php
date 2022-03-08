@extends('admin.main')

@section('content')
    <p class="m-3">
        <a href="{{ route('product_set.create') }}">
            <button class="btn btn-success">+ Create Product Set</button>
        </a>
    </p>

    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title font-weight-bold">All Product Sets</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                    <div class="row">
                        <div class="col-sm-12">
                            <table id="example1"
                                   class="table table-bordered table-striped dataTable dtr-inline text-center"
                                   aria-describedby="example1_info">
                                <thead>
                                <tr>
                                    <th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1"
                                        colspan="1" aria-sort="ascending">#
                                    </th>
                                    <th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1"
                                        colspan="1" aria-sort="ascending">Products
                                    </th>
                                    <th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1"
                                        colspan="1" aria-sort="ascending">Price
                                    </th>
                                    <th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1"
                                        colspan="1" aria-sort="ascending">Discount
                                    </th>
                                    <th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1"
                                        colspan="1" aria-sort="ascending">Creation date
                                    </th>
                                    <th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1"
                                        colspan="1" aria-sort="ascending">Actions
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($product_sets as $product_set)
                                    <tr style="{{ $product_set->trashed() ? 'background: rgba(255, 0, 0, 0.21)' : '' }}">
                                        <td class="dtr-control sorting_1" tabindex="0">
                                            {{ $product_set->id }}
                                        </td>
                                        <td class="dtr-control sorting_1" tabindex="0">
                                            <a href="{{ route('product.description', $product_set->products[0]) }}"
                                               target="__blank">
                                                {{ $product_set->products[0]->name }}
                                            </a> +
                                            <a href="{{ route('product.description', $product_set->products[1]) }}"
                                               target="__blank">
                                                {{ $product_set->products[1]->name }}
                                            </a>
                                        </td>
                                        <td class="dtr-control sorting_1" tabindex="0">
                                            @if($product_set->priceWithDiscount < $product_set->price)
                                                <span
                                                    class="font-weight-bold text-danger">${{ $product_set->priceWithDiscount }}</span>
                                                <span class="text-secondary"
                                                      style=""><s><small>${{ $product_set->price }}</small></s></span>
                                            @else
                                                ${{ $product_set->price }}
                                            @endif
                                        </td>
                                        <td class="dtr-control sorting_1" tabindex="0">
                                            @if($product_set->discount)
                                                @switch($product_set->discount->discount_classname)
                                                    @case(\App\Discounts\FixedPriceDiscount::class)
                                                        Fixed price discount <span class="font-weight-bold text-danger">- ${{ $product_set->discount->value }}</span><br>
                                                        @if($product_set->discount->coupon_code)
                                                            <span class="font-weight-bold">Coupon code:</span> {{ $product_set->discount->coupon_code }}
                                                        @endif
                                                    @break

                                                    @case(\App\Discounts\PercentDiscount::class)
                                                        Percent discount <span class="font-weight-bold text-danger">- {{ $product_set->discount->value }}%</span><br>
                                                        @if($product_set->discount->coupon_code)
                                                            <span class="font-weight-bold">Coupon code:</span> {{ $product_set->discount->coupon_code }}
                                                        @endif
                                                    @break
                                                @endswitch
                                            @else
                                                -
                                            @endif
                                        </td>
                                        <td class="dtr-control sorting_1" tabindex="0">
                                            {{ $product_set->created_at }}
                                        </td>
                                        <td>
                                            @if($product_set->trashed())
                                                <form
                                                    action="{{ route('product_set.restore', $product_set) }}"
                                                    method="post" class="d-inline">
                                                    @csrf

                                                    <button class="btn btn-primary">Activate</button>
                                                </form>
                                            @else
                                                <form
                                                    action="{{ route('product_set.destroy', $product_set) }}"
                                                    method="post" class="d-inline">
                                                    @csrf
                                                    @method('DELETE')

                                                    <button class="btn btn-danger">Deactivate</button>
                                                </form>
                                                <a href="{{ route('product_set.edit', $product_set) }}">
                                                    <button class="btn btn-warning">Edit</button>
                                                </a>
                                            @endif
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
@endsection
