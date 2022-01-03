@extends('layouts.main')

@section('body')
    <div class="site__body">
        <div class="page-header">
            <div class="page-header__container container">
                <div class="page-header__breadcrumb">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('index-2') }}">Home</a>
                                <svg class="breadcrumb-arrow" width="6px" height="9px">
                                    <use xlink:href="/images/sprite.svg#arrow-rounded-right-6x9"></use>
                                </svg>
                            </li>
                            <li class="breadcrumb-item"><a href="#">Breadcrumb</a>
                                <svg class="breadcrumb-arrow" width="6px" height="9px">
                                    <use xlink:href="/images/sprite.svg#arrow-rounded-right-6x9"></use>
                                </svg>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Wish List</li>
                        </ol>
                    </nav>
                </div>
                <div class="page-header__title d-flex flex-col">
                    <h1 class="flex-grow-1">Wish List</h1>
                    <new-wishlist-component :user="{{ auth()->user() ?: '{}' }}"></new-wishlist-component>
                </div>
            </div>
        </div>
        <div class="block">
            <div class="container">
                @foreach($wishlists as $wishlist)
                    <wishlist-component :wishlist="{{ $wishlist }}"
                                        :wishlists="{{ $wishlists }}"
                                        :user="{{ auth()->user() ?: '{}' }}"
                                        url="{{ route('wishlist.show_guest', $wishlist->access_token)  }}">

                    </wishlist-component>
                @endforeach
            </div>
        </div>
    </div>
@endsection
