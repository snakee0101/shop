@extends('admin.main')

@section('content')
    <div class="container m-3">
        <div class="card card-primary m-0">
            <div class="card-header">
                <h3 class="card-title">Products of order #{{ $order->id }}</h3>
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
                                        colspan="1" aria-sort="ascending">Name
                                    </th>
                                    <th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1"
                                        colspan="1" aria-sort="ascending">Category
                                    </th>
                                    <th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1"
                                        colspan="1" aria-sort="ascending">Price
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
                    Total: <span class="font-weight-bold text-danger">${{ $order->total }}</span>
                </p>
            </div>
        </div>
    </div>
@endsection
