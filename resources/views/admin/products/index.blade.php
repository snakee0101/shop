@extends('admin.main')

@section('content')
    <p class="m-3">
        <a href="{{ route('admin.products.create') }}">
            <button class="btn btn-success">+ Create Product</button>
        </a>
    </p>

    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title font-weight-bold">All products</h3>
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
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Actions
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($products as $product)
                                    <tr>
                                        <td class="dtr-control sorting_1">
                                            {{ $product->id }}
                                        </td>
                                        <td class="dtr-control sorting_1">
                                            {{ $product->name }}
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
                                                @switch($product->discount->discount_classname)
                                                    @case(\App\Discounts\FixedPriceDiscount::class)
                                                        Fixed price discount<br> <span class="font-weight-bold text-danger">- ${{ $product->discount->value }}</span>
                                                    @break

                                                    @case(\App\Discounts\PercentDiscount::class)
                                                        Percent discount<br> <span class="font-weight-bold text-danger">- {{ $product->discount->value }}%</span>
                                                    @break
                                                @endswitch
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
                                        <td>
                                            <form action="{{ route('admin.product.destroy', $product) }}" method="post" class="d-inline">
                                                @csrf
                                                @method('DELETE')

                                                <button class="btn btn-danger">Delete</button>
                                            </form>

                                            <a href="{{ '' }}">
                                                <button class="btn btn-warning">Edit</button>
                                            </a>
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
