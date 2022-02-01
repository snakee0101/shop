@extends('admin.main')

@section('content')
    <div class="container">
        <h3 class="my-3 font-weight-bold">Reports</h3>

        <table id="example1" class="table table-bordered table-striped dataTable dtr-inline text-center"
               aria-describedby="example1_info">
            <thead>
            <tr>
                <th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1"
                    colspan="1" aria-sort="ascending">Reported object
                </th>
                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Cause
                </th>
                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Comment
                </th>
                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Report Author
                </th>
                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Report Date
                </th>
                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Actions
                </th>
            </tr>
            </thead>
            <tbody>
            @foreach($reports as $report)
                <tr>
                    <td class="dtr-control sorting_1" tabindex="0">
                        <a href="{{ route( mb_strtolower(class_basename( $report->object )) . '.show', $report->object) }}" target="__blank">
                            {{ class_basename( $report->object ) }} #{{ $report->object->id }}
                        </a>
                    </td>
                    <td>
                        {{ $report->cause }}
                    </td>
                    <td>
                        {{ $report->comment }}
                    </td>
                    <td>
                        User #{{ $report->author->id }}
                    </td>
                    <td>
                        {{ $report->created_at }}
                    </td>
                    <td>
                        <form action="{{ route('report.destroy', $report) }}" method="post" class="d-inline">
                            @csrf
                            @method('DELETE')

                            <button class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
