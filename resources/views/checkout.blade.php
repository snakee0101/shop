@extends('layouts.main')

@section('body')
    <div class="site__body">
        <form action="{{ route('order.store') }}" method="post">
            @csrf
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
                    <div class="page-header__title">
                        <h1>Checkout</h1>

                        @if( old('message') || $message)
                            <p class="alert alert-primary text-dark">{{ (old('message') == '') ? $message : old('message') }}</p>
                        @endif
                    </div>
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
                                                       placeholder="First Name" name="first_name" value="{{ old('first_name') }}">
                                                @error('first_name')
                                                    <p class="text-danger mt-1">First name must contain only letters</p>
                                                @enderror
                                            </div>
                                            <div class="form-group col-md-6"><label for="checkout-last-name">Last Name</label>
                                                <input type="text" class="form-control" id="checkout-last-name"
                                                       placeholder="Last Name" name="last_name" value="{{ old('last_name') }}">
                                                @error('last_name')
                                                    <p class="text-danger mt-1">Last name must contain only letters</p>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6"><label for="checkout-phone">Phone</label> <input
                                                    type="text" class="form-control" id="checkout-phone" placeholder="Phone"
                                                    name="phone" value="{{ old('phone') }}">
                                                @error('phone')
                                                    <p class="text-danger mt-1">Phone must be in international format +XXXAAAAAAAAA</p>
                                                @enderror
                                            </div>
                                            <div class="form-group col-md-6"><label for="checkout-email">Email</label> <input
                                                    type="text" class="form-control" id="checkout-email" placeholder="Email"
                                                    name="email" value="{{ old('email') }}">
                                                @error('email')
                                                     <p class="text-danger mt-1">Enter valid email</p>
                                                @enderror
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
                                            id="checkout-country" class="form-control" name="country">
                                            <option value="United States">United States</option>
                                            <option value="Russia">Russia</option>
                                            <option value="Italy">Italy</option>
                                            <option value="France">France</option>
                                            <option value="Ukraine">Ukraine</option>
                                            <option value="Germany">Germany</option>
                                            <option value="Australia">Australia</option>
                                        </select></div>

                                    <div class="form-group border-top border-dark"><label for="checkout-street-address">Address</label>
                                        <input type="text" class="form-control" id="checkout-street-address"
                                               name="address" placeholder="Street Address" value="{{ old('address') }}">
                                        @error('address')
                                            <p class="text-danger mt-1">If post office address is not stated - shipping address is required</p>
                                        @enderror
                                    </div>
                                    <div class="form-group"><label for="checkout-address">Apartment<span
                                                class="text-muted"> (Optional)</span></label> <input type="text"
                                                                                                     name="apartment"
                                                                                                     class="form-control"
                                                                                                     id="checkout-address"
                                                                                                     value="{{ old('apartment') }}">
                                        @error('apartment')
                                            <p class="text-danger mt-1">If apartment is stated - it must consist of numbers only</p>
                                        @enderror
                                    </div>
                                    <p class="text-center">OR</p>
                                    <div class="form-group border-bottom border-dark"><label for="checkout-post-office-address">Post office address</label>
                                        <input type="text" class="form-control" id="checkout-post-office-address"
                                               name="post_office_address" placeholder="Post Office Address" value="{{ old('post_office_address') }}">
                                        @error('post_office_address')
                                            <p class="text-danger mt-1">If post office address is stated - apartment and address must not be provided</p>
                                        @enderror
                                    </div>
                                    <hr>

                                    <div class="form-group"><label for="checkout-city">Town / City</label> <input
                                            type="text" name="city" class="form-control" id="checkout-city" value="{{ old('city') }}">
                                        @error('city')
                                            <p class="text-danger mt-1">Enter town/city name</p>
                                        @enderror
                                    </div>
                                    <div class="form-group"><label for="checkout-state">State</label> <input
                                            type="text" name="state" class="form-control" id="checkout-state" value="{{ old('state') }}">
                                        @error('state')
                                            <p class="text-danger mt-1">Enter state name</p>
                                        @enderror
                                    </div>
                                    <div class="form-group"><label for="checkout-postcode">Postcode / ZIP</label> <input
                                            type="text" name="postcode" class="form-control" id="checkout-postcode" value="{{ old('postcode') }}">
                                        @error('postcode')
                                            <p class="text-danger mt-1">Enter valid postcode (5 digits)</p>
                                        @enderror
                                    </div>
                                    <div class="form-group"><label for="shipping-date">Shipping date and time</label> <input
                                            type="text" name="shipping_date" class="form-control" id="shipping-date" value="{{ old('shipping_date') }}">
                                        @error('shipping_date')
                                            <p class="text-danger mt-1">Shipping date must be provided in format (example): 2020-10-25 10:10:10</p>
                                        @enderror
                                    </div>
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
                                                <td>
                                                    @if($item->associatedModel::class === \App\Models\Product::class)
                                                        @if($item->associatedModel->discount)
                                                            <small class="text-secondary"><s>${{ $item->associatedModel->price * $item->quantity }}</s></small>
                                                            <span class="text-danger">${{ $item->associatedModel->priceWithDiscount * $item->quantity }}</span>
                                                        @else
                                                            ${{ $item->associatedModel->price * $item->quantity }}
                                                        @endif
                                                    @else
                                                        product set processing
                                                    @endif
                                                </td>
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
                                            <td>${{ \Cart::getContent()->sum( fn($item) => $item->associatedModel->priceWithDiscount * $item->quantity ) }}</td>
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
                                                                                             type="radio" checked="checked" value="card"> <span
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
                                                                                             type="radio" value="on_delivery"> <span
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
        </form>
    </div>
@endsection
