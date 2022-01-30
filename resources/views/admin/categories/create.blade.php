@extends('admin.main')

@section('content')
    <div class="container row">
        <div class="card card-primary col-5 p-0 m-auto">
            <div class="card-header">
                <h3 class="card-title">Create category</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{ route('category.store') }}" method="post">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="category_name">Category name</label>
                        <input type="text" class="form-control" name="name" id="category_name" placeholder="Enter category name">
                    </div>
                    <div class="form-group">
                        <label>Parent category</label>
                        <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" name="parent_id" data-select2-id="1" tabindex="-1" aria-hidden="true">
                            <option selected="selected" data-select2-id="3" value="">None</option>
                            <option data-select2-id="34" value="Alaska">Alaska</option>
                            <option data-select2-id="35" value="California">California</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">File input</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="exampleInputFile">
                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                            </div>
                            <div class="input-group-append">
                                <span class="input-group-text">Upload</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
