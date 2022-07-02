@extends('admin.main')

@section('content')
    <p class="m-3">
        <a href="{{ route('advertisement.create') }}">
            <button class="btn btn-success">+ Create Ad</button>
        </a>
    </p>

    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title font-weight-bold">All Ads</h3>
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
                                        colspan="1" aria-sort="ascending">Main image
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Caption
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Description
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Category
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Ends on
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Starts on
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Actions
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($advertisements as $ad)
                                        <tr class="{{ now()->greaterThan( $ad->end_date ) ? 'bg-secondary' : '' }}">
                                            <td class="dtr-control sorting_1" tabindex="0">
                                              {{ $ad->id }}
                                            </td>
                                            <td class="dtr-control sorting_1" tabindex="0">
                                              <img src="{{ $ad->image_url_rectangle }}" style="width: 150px; height: 150px">
                                            </td>
                                            <td>
                                              {{ Str::limit($ad->caption, 100) }}
                                            </td>
                                            <td>
                                              {{ Str::limit($ad->description, 100) }}
                                            </td>
                                            <td>
                                              {{ $ad->category->name }}
                                            </td>
                                            <td class="{{ now()->greaterThan( $ad->end_date ) ? 'font-weight-bold' : '' }}">
                                              {{ $ad->end_date->format('Y-m-d') }}
                                            </td>
                                            <td>
                                              {{ $ad->start_date->format('Y-m-d') }}
                                            </td>
                                            <td>
                                                <form action="{{ route('advertisement.destroy', $ad) }}" method="post" class="d-inline">
                                                    @csrf
                                                    @method('DELETE')

                                                    <button class="btn btn-danger">Delete</button>
                                                </form>

                                                <a href="{{ route('advertisement.edit', $ad) }}">
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
