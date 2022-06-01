@extends('admin.main')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title font-weight-bold">Contact Form Messages</h3>
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
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">is unread</th>
                                    <th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1"
                                        colspan="1" aria-sort="ascending">Name</th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Email</th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Subject</th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Message</th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Created at</th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Details</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($contacts as $message)
                                        <tr>
                                            <td class="dtr-control sorting_1" tabindex="0">
                                                {{ $message->id }}
                                            </td>
                                            <td>
                                                @unless($message->is_read)
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="#007bff" class="bi bi-envelope-exclamation-fill" viewBox="0 0 16 16">
                                                        <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.026A2 2 0 0 0 2 14h6.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.606-3.446l-.367-.225L8 9.586l-1.239-.757ZM16 4.697v4.974A4.491 4.491 0 0 0 12.5 8a4.49 4.49 0 0 0-1.965.45l-.338-.207L16 4.697Z"/>
                                                        <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm.5-5v1.5a.5.5 0 0 1-1 0V11a.5.5 0 0 1 1 0Zm0 3a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0Z"/>
                                                    </svg>
                                                @else

                                                @endunless
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
                                                {{ Str::limit($message->message, 30) }}
                                            </td>
                                            <td>
                                                {{ $message->created_at }}
                                            </td>
                                            <td>
                                                <a href="{{ route('contacts.edit', $message) }}">
                                                    Details
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
