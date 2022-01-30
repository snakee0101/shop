@extends('admin.main')

@section('content')
    <div class="container row">
        <div class="card card-primary col-5 p-0 m-auto">
            <div class="card-header">
                <h3 class="card-title">Edit category "{{ $category->name }}"</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->


            @if( session()->has('message') )
                <div class="alert alert-success" role="alert">
                    {{ session()->pull('message') }}
                </div>
            @endif
        </div>
    </div>
@endsection
