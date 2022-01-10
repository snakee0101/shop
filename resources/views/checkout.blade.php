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
                            <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                        </ol>
                    </nav>
                </div>
                <div class="page-header__title"><h1>Checkout</h1></div>
            </div>
        </div>
        <div class="checkout block">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-6 col-xl-7">
                        @guest
                            <div class="card mb-lg-0">
                                <div class="card-body"><h3 class="card-title">Contact details</h3>
                                    <div class="form-row">
                                        <div class="form-group col-md-6"><label for="checkout-first-name">First Name</label>
                                            <input type="text" class="form-control" id="checkout-first-name"
                                                   placeholder="First Name"></div>
                                        <div class="form-group col-md-6"><label for="checkout-last-name">Last Name</label>
                                            <input type="text" class="form-control" id="checkout-last-name"
                                                   placeholder="Last Name"></div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6"><label for="checkout-phone">Phone</label> <input
                                                type="text" class="form-control" id="checkout-phone" placeholder="Phone">
                                        </div>
                                        <div class="form-group col-md-6"><label for="checkout-email">Email</label> <input
                                                type="text" class="form-control" id="checkout-email" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="w-100 mb-3">
                                        <div class="alert alert-lg alert-primary">Returning customer? <a href="{{ route('account') }}">Click here to
                                                login</a></div>
                                    </div>
                                </div>
                            </div>
                        @endguest

                        <div class="card mb-lg-0">
                            <div class="card-body"><h3 class="card-title">Shipping details</h3>
                                <div class="form-group"><label for="checkout-country">Country</label> <select
                                        id="checkout-country" class="form-control">
                                        <option>Select a country...</option>
                                        <option>United States</option>
                                        <option>Russia</option>
                                        <option>Italy</option>
                                        <option>France</option>
                                        <option>Ukraine</option>
                                        <option>Germany</option>
                                        <option>Australia</option>
                                    </select></div>

                                <div class="form-group border-top border-dark"><label for="checkout-street-address">Address</label>
                                    <input type="text" class="form-control" id="checkout-street-address"
                                           placeholder="Street Address"></div>
                                <div class="form-group"><label for="checkout-address">Apartment<span
                                            class="text-muted"> (Optional)</span></label> <input type="text"
                                                                                                 class="form-control"
                                                                                                 id="checkout-address">
                                </div>
                                <p class="text-center">OR</p>
                                <div class="form-group border-bottom border-dark"><label for="checkout-post-office-address">Post office address</label>
                                    <input type="text" class="form-control" id="checkout-post-office-address"
                                           placeholder="Post Office Address"></div>
                                <hr>

                                <div class="form-group"><label for="checkout-city">Town / City</label> <input
                                        type="text" class="form-control" id="checkout-city"></div>
                                <div class="form-group"><label for="checkout-state">State</label> <input
                                        type="text" class="form-control" id="checkout-state"></div>
                                <div class="form-group"><label for="checkout-postcode">Postcode / ZIP</label> <input
                                        type="text" class="form-control" id="checkout-postcode"></div>
                                <div class="form-group"><label for="shipping-date">Shipping date and time</label> <input
                                        type="text" class="form-control" id="shipping-date"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 col-xl-5 mt-4 mt-lg-0">
                        <div class="card mb-0">
                            <div class="card-body"><h3 class="card-title">Your Order</h3>
                                <table class="checkout__totals">
                                    <thead class="checkout__totals-header">
                                    <tr>
                                        <th>Product</th>
                                        <th>Total</th>
                                    </tr>
                                    </thead>
                                    <tbody class="checkout__totals-products">
                                    @foreach($cart_items as $item)
                                        <tr>
                                            <td>{{ $item->associatedModel->name }} × {{ $item->quantity }}</td>
                                            <td>${{ $item->associatedModel->price * $item->quantity }}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                    <tbody class="checkout__totals-subtotals">
                                    <tr>
                                        <th>Subtotal</th>
                                        <td>${{ \Cart::getSubTotal() }}</td>
                                    </tr>
                                    <tr>
                                        <th>Shipping</th>
                                        <td>$0</td>
                                    </tr>
                                    </tbody>
                                    <tfoot class="checkout__totals-footer">
                                    <tr>
                                        <th>Total</th>
                                        <td>${{ \Cart::getTotal() }}</td>
                                    </tr>
                                    </tfoot>
                                </table>
                                <div class="payment-methods">
                                    <h3 class="card-title">Billing details</h3>
                                    <ul class="payment-methods__list">
                                        <li class="payment-methods__item payment-methods__item--active"><label
                                                class="payment-methods__item-header"><span
                                                    class="payment-methods__item-radio input-radio"><span
                                                        class="input-radio__body"><input class="input-radio__input"
                                                                                         name="checkout_payment_method"
                                                                                         type="radio" checked="checked"> <span
                                                            class="input-radio__circle"></span> </span></span><span
                                                    class="payment-methods__item-title">Direct bank transfer using Stripe</span></label>
                                            <div class="payment-methods__item-container">
                                                <div class="payment-methods__item-description">
                                                    payment/card details form
                                                </div>
                                            </div>
                                        </li>
                                        <li class="payment-methods__item"><label
                                                class="payment-methods__item-header"><span
                                                    class="payment-methods__item-radio input-radio"><span
                                                        class="input-radio__body"><input class="input-radio__input"
                                                                                         name="checkout_payment_method"
                                                                                         type="radio"> <span
                                                            class="input-radio__circle"></span> </span></span><span
                                                    class="payment-methods__item-title">Cash on delivery</span></label>
                                            <div class="payment-methods__item-container">
                                                <div class="payment-methods__item-description text-muted">Pay with cash
                                                    upon delivery.
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
<!--                                <div class="checkout__agree form-group">
                                    <div class="form-check"><span class="form-check-input input-check"><span
                                                class="input-check__body"><input class="input-check__input"
                                                                                 type="checkbox"
                                                                                 id="checkout-terms"> <span
                                                    class="input-check__box"></span> <svg class="input-check__icon"
                                                                                          width="9px" height="7px"><use
                                                        xlink:href="/images/sprite.svg#check-9x7"></use></svg> </span></span><label
                                            class="form-check-label" for="checkout-terms">I have read and agree to the
                                            website <a target="_blank" href="terms-and-conditions.html">terms and
                                                conditions</a>*</label></div>
                                </div>-->
                                <button type="submit" class="btn btn-primary btn-xl btn-block">Place Order</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
