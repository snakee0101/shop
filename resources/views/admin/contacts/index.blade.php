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
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">not replied</th>
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
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="#fd7e14" class="bi bi-envelope-exclamation-fill" viewBox="0 0 16 16">
                                                        <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.026A2 2 0 0 0 2 14h6.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.606-3.446l-.367-.225L8 9.586l-1.239-.757ZM16 4.697v4.974A4.491 4.491 0 0 0 12.5 8a4.49 4.49 0 0 0-1.965.45l-.338-.207L16 4.697Z"/>
                                                        <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm.5-5v1.5a.5.5 0 0 1-1 0V11a.5.5 0 0 1 1 0Zm0 3a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0Z"/>
                                                    </svg>
                                                @else

                                                @endunless
                                            </td>
                                            <td>
                                                @unless($message->is_replied)
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="#dc3545" class="bi bi-exclamation-triangle" viewBox="0 0 16 16">
                                                        <path d="M7.938 2.016A.13.13 0 0 1 8.002 2a.13.13 0 0 1 .063.016.146.146 0 0 1 .054.057l6.857 11.667c.036.06.035.124.002.183a.163.163 0 0 1-.054.06.116.116 0 0 1-.066.017H1.146a.115.115 0 0 1-.066-.017.163.163 0 0 1-.054-.06.176.176 0 0 1 .002-.183L7.884 2.073a.147.147 0 0 1 .054-.057zm1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566z"/>
                                                        <path d="M7.002 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 5.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995z"/>
                                                    </svg>
                                                @else

                                                @endif
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
