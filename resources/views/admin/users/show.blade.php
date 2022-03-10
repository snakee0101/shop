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
@endsection
