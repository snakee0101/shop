@extends('admin.main')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title font-weight-bold">All categories</h3>
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
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Parent category
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Image
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Actions
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($categories as $category)
                                        <tr>
                                            <td class="dtr-control sorting_1" tabindex="0">
                                                {{ $category->name }}
                                            </td>
                                            <td>
                                                {{ \App\Models\Category::find($category->parent_id)->name ?? '-' }}
                                            </td>
                                            <td>
                                                <img src="{{ $category->image_url }}" height="100" width="100">
                                            </td>
                                            <td>
                                                <form action="{{ route('category.destroy', $category) }}" method="post" class="d-inline">
                                                    @csrf
                                                    @method('DELETE')

                                                    <button class="btn btn-danger">Delete</button>
                                                </form>

                                                <a href="{{ route('category.edit', $category) }}">
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
