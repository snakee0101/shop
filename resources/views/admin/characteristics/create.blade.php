@extends('admin.main')

@section('content')
    <p class="m-3 font-weight-bold"><a href="{{ route('characteristic.index') }}" class="text-danger">&lt; Back to all characteristics</a></p>

    <div class="container row">
        <div class="card card-primary col-5 p-0 m-auto">
            <div class="card-header">
                <h3 class="card-title">Create characteristic</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{ route('characteristic.store') }}" method="post">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="characteristic_name">Characteristic name</label>
                        <input type="text" class="form-control" name="name" id="characteristic_name" placeholder="Enter characteristic name">
                        @error('name')
                            <p class="text-danger mt-1">Characteristic name is required</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Characteristic category</label>
                        <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" name="category_id" data-select2-id="1" tabindex="-1" aria-hidden="true">
                            @foreach($categories as $category)
                                <option data-select2-id="{{ $category->id }}" value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>

            @if( session()->has('message') )
                <div class="alert {{ (session('status') == 'OK') ? 'alert-success' : 'alert-danger' }} " role="alert">
                    {{ session()->pull('message') }}
                </div>
            @endif
        </div>
    </div>
@endsection
