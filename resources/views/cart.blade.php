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
                            <li class="breadcrumb-item active" aria-current="page">Shopping Cart</li>
                        </ol>
                    </nav>
                </div>
                <div class="page-header__title"><h1>Shopping Cart</h1></div>
            </div>
        </div>
        <div class="cart block">
            <div class="container">
                <product-cart-table-component :items="{{ $items }}">

                </product-cart-table-component>
                <div class="cart__actions">
                    <form class="cart__coupon-form" method="POST" action="{{ route('coupon.store') }}">
                        @csrf
                        <input type="text" class="form-control" id="input-coupon-code" name="code" placeholder="Coupon Code">
                        <button type="submit" class="btn btn-primary">Apply Coupon</button>
                    </form>
                </div>

                <p class="mt-1 text-success">You may apply only one coupon code per Cart</p>

                @if( session()->has('message') )
                    <div class="alert {{ session('status') == 'OK' ? 'alert-success' : 'alert-danger'}}" role="alert">
                        {{ session('message') }}
                    </div>
                @endif

                <div class="row justify-content-end pt-5">
                    <div class="col-12 col-md-7 col-lg-6 col-xl-5">
                        <div class="card">
                            <cart-totals-component checkout_route="{{ route('checkout') }}"
                                                   :initial_total="{{ \Cart::getContent()->sum( fn($item) => $item->associatedModel->priceWithDiscount * $item->quantity ) }}">

                            </cart-totals-component>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
