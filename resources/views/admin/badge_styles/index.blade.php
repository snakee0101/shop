@extends('admin.main')

@section('content')
    <p class="m-3">
        <a href="{{ route('badge_style.create') }}">
            <button class="btn btn-success">+ Create Badge Style</button>
        </a>
    </p>

    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title font-weight-bold">All Badge Styles</h3>
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
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Background color
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Text Color
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Actions
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($badge_styles as $style)
                                        <tr>
                                            <td class="dtr-control sorting_1" tabindex="0">
                                                {{ $style->background_color }}
                                            </td>
                                            <td>
                                                {{ $style->text_color }}
                                            </td>
                                            <td>
                                                <form action="{{ route('badge_style.destroy', $style) }}" method="post" class="d-inline">
                                                    @csrf
                                                    @method('DELETE')

                                                    <button class="btn btn-danger">Delete</button>
                                                </form>

                                                <a href="{{ route('badge_style.edit', $style) }}">
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
