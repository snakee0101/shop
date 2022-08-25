@extends('admin.main')

@section('content')
    <p class="m-3 font-weight-bold"><a href="{{ route('badge_style.index') }}" class="text-danger">&lt; Back to all Badge styles</a></p>

    <div class="container row">
        <div class="card card-primary col-5 p-0 m-auto">
            <div class="card-header">
                <h3 class="card-title">Create Badge style</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{ route('badge_style.store') }}" method="post">
                @csrf
                <div class="card-body">
                    <badge-style-edit-component></badge-style-edit-component>
                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>

            @if( session()->has('successful_message') )
                <div class="alert alert-success" role="alert">
                    {{ session('successful_message') }}
                </div>
            @endif
        </div>
    </div>
@endsection
