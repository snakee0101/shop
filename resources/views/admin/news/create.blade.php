@extends('admin.main')

@section('content')
    <p class="m-3 font-weight-bold"><a href="{{ route('admin.news.index') }}" class="text-danger">&lt; Back to all news</a></p>

    <div class="container row">
        <div class="card card-primary col-10 p-0 m-auto">
            <div class="card-header">
                <h3 class="card-title">Create news</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{ route('news.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="caption">Caption</label>
                        <input type="text" class="form-control" name="caption" id="caption" placeholder="Enter News article caption">
                        @error('caption')
                            <p class="text-danger mt-1">Caption must not be empty</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>News category</label>
                        <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" name="news_category_id" data-select2-id="1" tabindex="-1" aria-hidden="true">
                            @foreach($news_categories as $category)
                                <option data-select2-id="{{ $category->id }}" value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Select main image</label>
                        <input type="file" name="main_image">
                    </div>
                    <div class="form-group">
                        <label>Tags</label>
                        <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" name="tags[]" data-select2-id="1" tabindex="-1" aria-hidden="true" multiple>
                            @foreach($tags as $tag)
                                <option data-select2-id="{{ $tag->id }}" value="{{ $tag->id }}">{{ $tag->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Content</label>
                        <textarea name="content" rows="20" cols="20" class="form-control">

                        </textarea>
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>

            @if( session()->has('successful_message') )
                <div class="alert {{ (session('status') == 'OK') ? 'alert-success' : 'alert-danger' }} " role="alert">
                    {{ session('successful_message') }}
                </div>
            @endif
        </div>
    </div>
@endsection
