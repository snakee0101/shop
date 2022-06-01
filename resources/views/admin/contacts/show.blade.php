@extends('admin.main')

@section('content')
    <p class="m-3 font-weight-bold"><a href="{{ route('admin.contacts.index') }}" class="text-danger">&lt; Back to all
            contact form messages</a></p>

    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title font-weight-bold">Contact Form Message #{{ $message->id }}</h3>
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
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">#</th>
                                    <th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1"
                                        colspan="1" aria-sort="ascending">Name</th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Email</th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Subject</th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Created at</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="dtr-control sorting_1" tabindex="0">
                                            {{ $message->id }}
                                        </td>
                                        <td>
                                            {{ $message->name }}
                                        </td>
                                        <td>
                                            {{ $message->email }}
                                        </td>
                                        <td>
                                            {{ $message->subject }}
                                        </td>
                                        <td>
                                            {{ $message->created_at }}
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


        <div class="card">
            <div class="card-header bg-green">
                <h3 class="card-title font-weight-bold">Message content</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div id="example1_wrapper">
                    <div class="row">
                        <div class="col-sm-12">
                           {!! $message->formatted() !!}
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
@endsection
