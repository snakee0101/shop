@extends('admin.main')

@section('content')
    <p class="m-3 font-weight-bold"><a href="{{ route('admin.contacts.index') }}" class="text-danger">&lt; Back to all
            contact form messages</a></p>

    <div class="container">
        <div class="card">
            <div class="card-header d-flex">
                <h3 class="card-title font-weight-bold">Contact Form Message #{{ $message->id }}</h3>
                <form action="{{ route('contacts.destroy', $message) }}" method="post" class="d-inline ml-auto">
                    @csrf
                    @method('DELETE')

                    <button class="btn btn-danger btn-sm">Delete</button>
                </form>
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

        @if($message->is_replied)
            <div class="card">
                <div class="card-header bg-primary">
                    <h3 class="card-title font-weight-bold">Admin reply</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div id="example1_wrapper">
                        <div class="row">
                            {!! $message->reply->text !!}
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
        @else
            <div class="card">
                <div class="card-header bg-danger">
                    <h3 class="card-title font-weight-bold">Reply a message</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div id="example1_wrapper">
                        <div class="row">
                            <form action="{{ route('contacts.reply', $message) }}" method="post">
                                @csrf
                                <div class="mb-3">
                                    <label for="message" class="form-label">Your reply</label>
                                    <textarea class="form-control" id="message" name="text" rows="10" cols="100"></textarea>
                                </div>

                                <button class="btn btn-warning">Leave a reply</button>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
        @endif
    </div>
@endsection
