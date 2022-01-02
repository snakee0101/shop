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
                    <form class="cart__coupon-form"><label for="input-coupon-code" class="sr-only">Password</label>
                        <input type="text" class="form-control" id="input-coupon-code" placeholder="Coupon Code">
                        <button type="submit" class="btn btn-primary">Apply Coupon</button>
                    </form>
                </div>
                <div class="row justify-content-end pt-5">
                    <div class="col-12 col-md-7 col-lg-6 col-xl-5">
                        <div class="card">
                            <div class="card-body"><h3 class="card-title">Cart Totals</h3>
                                <table class="cart__totals">
                                    <thead class="cart__totals-header">
                                    <tr>
                                        <th>Subtotal</th>
                                        <td>$0.00</td>
                                    </tr>
                                    </thead>
                                    <tbody class="cart__totals-body">
                                    <tr>
                                        <th>Shipping</th>
                                        <td>$0.00
                                            <div class="cart__calc-shipping"><a href="#">Calculate Shipping</a></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Tax</th>
                                        <td>$0.00</td>
                                    </tr>
                                    </tbody>
                                    <tfoot class="cart__totals-footer">
                                    <tr>
                                        <th>Total</th>
                                        <td>$0.00</td>
                                    </tr>
                                    </tfoot>
                                </table>
                                <a class="btn btn-primary btn-xl btn-block cart__checkout-button"
                                   href="{{ route('checkout') }}">Proceed
                                    to checkout</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
