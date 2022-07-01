@extends('admin.main')

@section('content')
    <p class="m-3">
        <a href="{{ route('news.create') }}">
            <button class="btn btn-success">+ Create News</button>
        </a>
    </p>

    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title font-weight-bold">All News</h3>
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
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Category
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Content
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Tags
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Actions
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($news as $news_article)
                                        <tr>
                                            <td class="dtr-control sorting_1" tabindex="0">
                                              {{ $news_article->id }}
                                            </td>
                                            <td class="dtr-control sorting_1" tabindex="0">
                                              <img src="{{ $news_article->main_image_url }}" style="width: 150px; height: 150px">
                                            </td>
                                            <td>
                                              {{ $news_article->caption }}
                                            </td>
                                            <td>
                                              {{ $news_article->category->name }}
                                            </td>
                                            <td>
                                              {!! Str::limit($news_article->content, 300) !!}
                                            </td>
                                            <td>
                                              {{ $news_article->tags->implode('name', ', ') }}
                                            </td>
                                            <td>
                                                <form action="{{ route('news.destroy', $news_article) }}" method="post" class="d-inline">
                                                    @csrf
                                                    @method('DELETE')

                                                    <button class="btn btn-danger">Delete</button>
                                                </form>

                                                <a href="{{ route('news.edit', $news_article) }}">
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
