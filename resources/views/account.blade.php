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
                                    <use xlink:href="images/sprite.svg#arrow-rounded-right-6x9"></use>
                                </svg>
                            </li>
                            <li class="breadcrumb-item"><a href="#">Breadcrumb</a>
                                <svg class="breadcrumb-arrow" width="6px" height="9px">
                                    <use xlink:href="images/sprite.svg#arrow-rounded-right-6x9"></use>
                                </svg>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">My Account</li>
                        </ol>
                    </nav>
                </div>
                <div class="page-header__title"><h1>My Account</h1></div>
            </div>
        </div>
        <div class="block">
            <div class="container">
                @guest
                    <div class="row">
                        <div class="col-md-6 d-flex">
                            <div class="card flex-grow-1 mb-md-0">
                                <div class="card-body"><h3 class="card-title">Login</h3>
                                    <form action="{{ route('login-user') }}" method="post">
                                        @csrf
                                        <div class="form-group"><label>Email address</label> <input name="login_email"
                                                                                                    type="email"
                                                                                                    class="form-control"
                                                                                                    placeholder="Enter email"
                                                                                                    value="{{ old('login_email') }}">
                                            @if($errors->login->first('login_email'))
                                                <p class="tw-text-red-700">User with this email is not registered or empty email is entered</p>
                                            @endif
                                        </div>
                                        <div class="form-group"><label>Password</label> <input name="login_password"
                                                                                               type="password"
                                                                                               class="form-control"
                                                                                               placeholder="Password">
                                            <small class="form-text text-muted"><a href="#">Forgotten Password</a></small>
                                            @if($errors->login->first('login_password'))
                                                <p class="tw-text-red-700">User with this email-password combination is not registered</p>
                                            @endif
                                        </div>
                                        <button type="submit" class="btn btn-primary mt-4">Login</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 d-flex mt-4 mt-md-0">
                            <div class="card flex-grow-1 mb-0">
                                <div class="card-body"><h3 class="card-title">Register</h3>
                                    <form method="post" action="{{ route('register-user') }}">
                                        @csrf
                                        <div class="form-group"><label>First name</label> <input type="text"
                                                                                                 name="first_name"
                                                                                                 class="form-control"
                                                                                                 placeholder="Enter your first name"
                                                                                                 value="{{ old('first_name') }}">
                                            @if($errors->register->first('first_name'))
                                                <p class="text-danger">First name must contain only letters</p>
                                            @endif
                                        </div>
                                        <div class="form-group"><label>Last name</label> <input type="text"
                                                                                                name="last_name"
                                                                                                class="form-control"
                                                                                                placeholder="Enter your last name"
                                                                                                value="{{ old('last_name') }}">
                                            @if($errors->register->first('last_name'))
                                                <p class="text-danger">Last name must contain only letters</p>
                                            @endif
                                        </div>
                                        <div class="form-group"><label>Phone</label> <input type="tel"
                                                                                            name="phone"
                                                                                            class="form-control"
                                                                                            placeholder="Enter your phone"
                                                                                            value="{{ old('phone') }}">
                                            @if($errors->register->first('phone'))
                                                <p class="text-danger">Phone must be in international format</p>
                                            @endif
                                        </div>
                                        <div class="form-group"><label>Email address</label> <input type="email"
                                                                                                    name="email"
                                                                                                    class="form-control"
                                                                                                    placeholder="Enter email"
                                                                                                    value="{{ old('email') }}">
                                            @if($errors->register->first('email'))
                                                <p class="text-danger">Email is invalid</p>
                                            @endif
                                        </div>
                                        <div class="form-group"><label>Password</label> <input type="password"
                                                                                               name="password"
                                                                                               class="form-control"
                                                                                               placeholder="Password"
                                                                                               value="{{ old('password') }}"></div>
                                        <div class="form-group"><label>Repeat Password</label> <input type="password"
                                                                                                      name="password_confirmation"
                                                                                                      class="form-control"
                                                                                                      placeholder="Password"
                                                                                                      value="{{ old('password') }}">
                                            @if($errors->register->first('password'))
                                                <p class="text-danger">Passwords don't match</p>
                                            @endif
                                        </div>
                                        <button type="submit" class="btn btn-primary mt-4">Register</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="container-fluid h-100">
                        <div class="row h-100">
                            <aside class="col-auto">
                                <div class="card mb-3">
                                    <ul class="nav flex-sm-column justify-content-center">
                                        <a href="#" class="nav-link bg-warning">My Orders</a>
                                        <a href="#" class="nav-link">Viewed products</a>
                                        <a href="#" class="nav-link">Notifications</a>
                                        <a href="#" class="nav-link">My Reviews</a>
                                        <a href="#" class="nav-link">My Correspondence</a>
                                    </ul>
                                </div>
                            </aside>
                            <main class="col">
                                {{--@include(Illuminate\Support\Facades\Route::currentRouteName())--}}
                            </main>
                        </div>
                    </div>
                @endguest

            </div>
        </div>
    </div>
@endsection
