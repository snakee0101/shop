@extends('admin.main')

@section('content')
    <p class="m-3">
        <a href="{{ route('admin.characteristics.create') }}">
            <button class="btn btn-success">+ Create Characteristic</button>
        </a>
    </p>

    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title font-weight-bold">All characteristics</h3>
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
                                        colspan="1" aria-sort="ascending">Name
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Category
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Actions
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($characteristics as $char)
                                        <tr>
                                            <td class="dtr-control sorting_1" tabindex="0">
                                                {{ $char->name }}
                                            </td>
                                            <td>
                                                {{ \App\Models\Category::find($char->category_id)->name }}
                                            </td>
                                            <td>
                                                <form action="" method="post" class="d-inline">
                                                    @csrf
                                                    @method('DELETE')

                                                    <button class="btn btn-danger">Delete</button>
                                                </form>

                                                <a href="">
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
