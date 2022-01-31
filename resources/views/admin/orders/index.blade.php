@extends('admin.main')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title font-weight-bold">All orders</h3>
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
                                @foreach($orders as $order)
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
                                            <a href="">
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
@endsection
