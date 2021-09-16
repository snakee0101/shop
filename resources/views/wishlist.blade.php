<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <title>Stroyka</title>
    <link rel="icon" type="image/png" href="images/favicon.png"><!-- fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i"><!-- css -->
    <link rel="stylesheet" href="vendor/bootstrap-4.2.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/owl-carousel-2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="css/style.css"><!-- js -->
    <script src="vendor/jquery-3.3.1/jquery.min.js"></script>
    <script src="vendor/bootstrap-4.2.1/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/owl-carousel-2.3.4/owl.carousel.min.js"></script>
    <script src="vendor/nouislider-12.1.0/nouislider.min.js"></script>
    <script src="js/number.js"></script>
    <script src="js/main.js"></script>
    <script src="vendor/svg4everybody-2.1.9/svg4everybody.min.js"></script>
    <script>svg4everybody();</script><!-- font - fontawesome -->
    <link rel="stylesheet" href="vendor/fontawesome-5.6.1/css/all.min.css"><!-- font - stroyka -->
    <link rel="stylesheet" href="fonts/stroyka/stroyka.css">
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-97489509-6"></script>
    <script>window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());
        gtag('config', 'UA-97489509-6');</script>
</head>
<body><!-- quickview-modal -->
<div id="quickview-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content"></div>
    </div>
</div><!-- quickview-modal / end --><!-- mobilemenu -->
@include('layouts.mobile.menu')<!-- mobilemenu / end --><!-- site -->
<div class="site"><!-- mobile site__header -->
    <header class="site__header d-lg-none">
        <div class="mobile-header mobile-header--sticky mobile-header--stuck">
            <div class="mobile-header__panel">
                <div class="container">
                    <div class="mobile-header__body">
                        <button class="mobile-header__menu-button">
                            <svg width="18px" height="14px">
                                <use xlink:href="images/sprite.svg#menu-18x14"></use>
                            </svg>
                        </button>
                        <a class="mobile-header__logo" href="{{ route('index-2') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="120px" height="20px">
                                <path d="M118.5,20h-1.1c-0.6,0-1.2-0.4-1.4-1l-1.5-4h-6.1l-1.5,4c-0.2,0.6-0.8,1-1.4,1h-1.1c-1,0-1.8-1-1.4-2l1.1-3
                                 l1.5-4l3.6-10c0.2-0.6,0.8-1,1.4-1h1.6c0.6,0,1.2,0.4,1.4,1l3.6,10l1.5,4l1.1,3C120.3,19,119.5,20,118.5,20z M111.5,6.6l-1.6,4.4
                                 h3.2L111.5,6.6z M99.5,20h-1.4c-0.4,0-0.7-0.2-0.9-0.5L94,14l-2,3.5v1c0,0.8-0.7,1.5-1.5,1.5h-1c-0.8,0-1.5-0.7-1.5-1.5v-17
                                 C88,0.7,88.7,0,89.5,0h1C91.3,0,92,0.7,92,1.5v8L94,6l3.2-5.5C97.4,0.2,97.7,0,98.1,0h1.4c1.2,0,1.9,1.3,1.3,2.3L96.3,10l4.5,7.8
                                 C101.4,18.8,100.7,20,99.5,20z M80.3,11.8L80,12.3v6.2c0,0.8-0.7,1.5-1.5,1.5h-1c-0.8,0-1.5-0.7-1.5-1.5v-6.2l-0.3-0.5l-5.5-9.5
                                 c-0.6-1,0.2-2.3,1.3-2.3h1.4c0.4,0,0.7,0.2,0.9,0.5L76,4.3l2,3.5l2-3.5l2.2-3.8C82.4,0.2,82.7,0,83.1,0h1.4c1.2,0,1.9,1.3,1.3,2.3
                                 L80.3,11.8z M60,20c-5.5,0-10-4.5-10-10S54.5,0,60,0s10,4.5,10,10S65.5,20,60,20z M60,4c-3.3,0-6,2.7-6,6s2.7,6,6,6s6-2.7,6-6
                                 S63.3,4,60,4z M47.8,17.8c0.6,1-0.2,2.3-1.3,2.3h-2L41,14h-4v4.5c0,0.8-0.7,1.5-1.5,1.5h-1c-0.8,0-1.5-0.7-1.5-1.5v-17
                                 C33,0.7,33.7,0,34.5,0H41c0.3,0,0.7,0,1,0.1c3.4,0.5,6,3.4,6,6.9c0,2.4-1.2,4.5-3.1,5.8L47.8,17.8z M42,4.2C41.7,4.1,41.3,4,41,4h-3
                                 c-0.6,0-1,0.4-1,1v4c0,0.6,0.4,1,1,1h3c0.3,0,0.7-0.1,1-0.2c0.3-0.1,0.6-0.3,0.9-0.5C43.6,8.8,44,7.9,44,7C44,5.7,43.2,4.6,42,4.2z
                                  M29.5,4H25v14.5c0,0.8-0.7,1.5-1.5,1.5h-1c-0.8,0-1.5-0.7-1.5-1.5V4h-4.5C15.7,4,15,3.3,15,2.5v-1C15,0.7,15.7,0,16.5,0h13
                                 C30.3,0,31,0.7,31,1.5v1C31,3.3,30.3,4,29.5,4z M6.5,20c-2.8,0-5.5-1.7-6.4-4c-0.4-1,0.3-2,1.3-2h1c0.5,0,0.9,0.3,1.2,0.7
                                 c0.2,0.3,0.4,0.6,0.8,0.8C4.9,15.8,5.8,16,6.5,16c1.5,0,2.8-0.9,2.8-2c0-0.7-0.5-1.3-1.2-1.6C7.4,12,7,11,7.4,10.3l0.4-0.9
                                 c0.4-0.7,1.2-1,1.8-0.6c0.6,0.3,1.2,0.7,1.6,1.2c1,1.1,1.7,2.5,1.7,4C13,17.3,10.1,20,6.5,20z M11.6,6h-1c-0.5,0-0.9-0.3-1.2-0.7
                                 C9.2,4.9,8.9,4.7,8.6,4.5C8.1,4.2,7.2,4,6.5,4C5,4,3.7,4.9,3.7,6c0,0.7,0.5,1.3,1.2,1.6C5.6,8,6,9,5.6,9.7l-0.4,0.9
                                 c-0.4,0.7-1.2,1-1.8,0.6c-0.6-0.3-1.2-0.7-1.6-1.2C0.6,8.9,0,7.5,0,6c0-3.3,2.9-6,6.5-6c2.8,0,5.5,1.7,6.4,4C13.3,4.9,12.6,6,11.6,6
                                 z"></path>
                            </svg>
                        </a>
                        <div class="mobile-header__search">
                            <form class="mobile-header__search-form" action="#"><input
                                    class="mobile-header__search-input" name="search"
                                    placeholder="Search over 10,000 products" aria-label="Site search" type="text"
                                    autocomplete="off">
                                <button class="mobile-header__search-button mobile-header__search-button--submit"
                                        type="submit">
                                    <svg width="20px" height="20px">
                                        <use xlink:href="images/sprite.svg#search-20"></use>
                                    </svg>
                                </button>
                                <button class="mobile-header__search-button mobile-header__search-button--close"
                                        type="button">
                                    <svg width="20px" height="20px">
                                        <use xlink:href="images/sprite.svg#cross-20"></use>
                                    </svg>
                                </button>
                                <div class="mobile-header__search-body"></div>
                            </form>
                        </div>
                        <div class="mobile-header__indicators">
                            <div class="indicator indicator--mobile-search indicator--mobile d-sm-none">
                                <button class="indicator__button"><span class="indicator__area"><svg width="20px"
                                                                                                     height="20px"><use
                                                xlink:href="images/sprite.svg#search-20"></use></svg></span></button>
                            </div>
                            <div class="indicator indicator--mobile d-sm-flex d-none"><a href="{{ route('wishlist') }}"
                                                                                         class="indicator__button"><span
                                        class="indicator__area"><svg width="20px" height="20px"><use
                                                xlink:href="images/sprite.svg#heart-20"></use></svg> <span
                                            class="indicator__value">0</span></span></a></div>
                            <div class="indicator indicator--mobile"><a href="{{ route('cart.index') }}" class="indicator__button"><span
                                        class="indicator__area"><svg width="20px" height="20px"><use
                                                xlink:href="images/sprite.svg#cart-20"></use></svg> <span
                                            class="indicator__value">3</span></span></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header><!-- mobile site__header / end --><!-- desktop site__header -->
    <header class="site__header d-lg-block d-none">
        <div class="site-header"><!-- .topbar -->
            <div class="site-header__topbar topbar">
                <div class="topbar__container container">
                    <div class="topbar__row">
                        <div class="topbar__item topbar__item--link"><a class="topbar-link" href="about-us.html">About
                                Us</a></div>
                        <div class="topbar__item topbar__item--link"><a class="topbar-link" href="{{ route('contacts') }}">Contacts</a>
                        </div>
                        <div class="topbar__item topbar__item--link"><a class="topbar-link" href="#">Store Location</a>
                        </div>
                        <div class="topbar__item topbar__item--link"><a class="topbar-link" href="track-order.html">Track
                                Order</a></div>
                        <div class="topbar__item topbar__item--link"><a class="topbar-link" href="blog-classic.html">Blog</a>
                        </div>
                        <div class="topbar__spring"></div>
                        <div class="topbar__item">
                            <div class="topbar-dropdown">
                                <button class="topbar-dropdown__btn" type="button">My Account
                                    <svg width="7px" height="5px">
                                        <use xlink:href="images/sprite.svg#arrow-rounded-down-7x5"></use>
                                    </svg>
                                </button>
                                <div class="topbar-dropdown__body"><!-- .menu -->
                                    <ul class="menu menu--layout--topbar">
                                        <li><a href="account.html">Login</a></li>
                                        <li><a href="account.html">Register</a></li>
                                        <li><a href="#">Orders</a></li>
                                        <li><a href="#">Addresses</a></li>
                                    </ul><!-- .menu / end --></div>
                            </div>
                        </div>
                        <div class="topbar__item">
                            <div class="topbar-dropdown">
                                <button class="topbar-dropdown__btn" type="button">Currency: <span
                                        class="topbar__item-value">USD</span>
                                    <svg width="7px" height="5px">
                                        <use xlink:href="images/sprite.svg#arrow-rounded-down-7x5"></use>
                                    </svg>
                                </button>
                                <div class="topbar-dropdown__body"><!-- .menu -->
                                    <ul class="menu menu--layout--topbar">
                                        <li><a href="#">€ Euro</a></li>
                                        <li><a href="#">£ Pound Sterling</a></li>
                                        <li><a href="#">$ US Dollar</a></li>
                                        <li><a href="#">₽ Russian Ruble</a></li>
                                    </ul><!-- .menu / end --></div>
                            </div>
                        </div>
                        <div class="topbar__item">
                            <div class="topbar-dropdown">
                                <button class="topbar-dropdown__btn" type="button">Language: <span
                                        class="topbar__item-value">EN</span>
                                    <svg width="7px" height="5px">
                                        <use xlink:href="images/sprite.svg#arrow-rounded-down-7x5"></use>
                                    </svg>
                                </button>
                                <div class="topbar-dropdown__body"><!-- .menu -->
                                    <ul class="menu menu--layout--topbar menu--with-icons">
                                        <li><a href="#">
                                                <div class="menu__icon"><img
                                                        srcset="images/languages/language-1.png, images/languages/language-1@2x.png 2x"
                                                        src="images/languages/language-1.png" alt=""></div>
                                                English</a></li>
                                        <li><a href="#">
                                                <div class="menu__icon"><img
                                                        srcset="images/languages/language-2.png, images/languages/language-2@2x.png 2x"
                                                        src="images/languages/language-2.png" alt=""></div>
                                                French</a></li>
                                        <li><a href="#">
                                                <div class="menu__icon"><img
                                                        srcset="images/languages/language-3.png, images/languages/language-3@2x.png 2x"
                                                        src="images/languages/language-3.png" alt=""></div>
                                                German</a></li>
                                        <li><a href="#">
                                                <div class="menu__icon"><img
                                                        srcset="images/languages/language-4.png, images/languages/language-4@2x.png 2x"
                                                        src="images/languages/language-4.png" alt=""></div>
                                                Russian</a></li>
                                        <li><a href="#">
                                                <div class="menu__icon"><img
                                                        srcset="images/languages/language-5.png, images/languages/language-5@2x.png 2x"
                                                        src="images/languages/language-5.png" alt=""></div>
                                                Italian</a></li>
                                    </ul><!-- .menu / end --></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- .topbar / end -->
            <div class="site-header__middle container">
                <div class="site-header__logo"><a href="{{ route('index-2') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="196px" height="26px">
                            <path
                                d="M194.797,18 L184,18 C184,18.552 183.552,19 183,19 L182,19 C181.448,19 181,18.552 181,18 L181,16 L178.377,16 C177.708,16 177.119,15.556 176.935,14.912 L173.246,2 L168,2 L168,4 L168.500,4 C169.328,4 170,4.672 170,5.500 L170,24.500 C170,25.328 169.328,26 168.500,26 L165.500,26 C164.672,26 164,25.328 164,24.500 L164,5.500 C164,4.672 164.672,4 165.500,4 L166,4 L166,1.500 C166,0.672 166.672,0 167.500,0 L173.622,0 C174.292,0 174.881,0.444 175.065,1.088 L178.754,14 L181,14 L181,13 C181,12.448 181.448,12 182,12 L183,12 C183.552,12 184,12.448 184,13 L194.797,13 C195.461,13 196,13.539 196,14.203 L196,16.797 C196,17.461 195.461,18 194.797,18 ZM156.783,26 L154.483,26 C153.767,26 153.129,25.552 152.884,24.878 L150.437,18.135 C150.407,18.054 150.331,18 150.245,18 L142.768,18 C142.682,18 142.606,18.054 142.576,18.135 L140.129,24.878 C139.884,25.552 139.245,26 138.530,26 L136.230,26 C135.395,26 134.815,25.169 135.100,24.383 L143.445,1.122 C143.690,0.448 144.328,0 145.044,0 L147.969,0 C148.685,0 149.323,0.448 149.568,1.122 L157.913,24.383 C158.198,25.169 157.618,26 156.783,26 ZM148.472,12.725 L146.698,7.848 C146.633,7.668 146.380,7.668 146.315,7.848 L144.541,12.725 C144.492,12.859 144.591,13 144.733,13 L148.280,13 C148.422,13 148.521,12.859 148.472,12.725 ZM130.493,26 L128.090,26 C127.555,26 127.060,25.714 126.792,25.250 L122.610,18 L120.003,22.520 L120.003,24.500 C120.003,25.328 119.333,26 118.505,26 L116.507,26 C115.680,26 115.009,25.328 115.009,24.500 L115.009,1.500 C115.009,0.672 115.680,0 116.507,0 L118.505,0 C119.333,0 120.003,0.672 120.003,1.500 L120.003,12.520 L126.792,0.750 C127.060,0.286 127.555,0 128.090,0 L130.493,0 C131.646,0 132.367,1.250 131.791,2.250 L125.487,13 L131.791,23.750 C132.367,24.750 131.646,26 130.493,26 ZM103.987,15.775 L103.987,24.500 C103.987,25.328 103.315,26 102.486,26 L100.485,26 C99.656,26 98.984,25.328 98.984,24.500 L98.984,15.775 L98.594,15.100 L91.180,2.250 C90.610,1.250 91.330,0 92.481,0 L94.792,0 C95.322,0 95.823,0.290 96.093,0.750 L101.486,10.090 L106.879,0.750 C107.149,0.290 107.649,0 108.179,0 L110.491,0 C111.641,0 112.362,1.250 111.791,2.250 L103.987,15.775 ZM79,26 C71.821,26 66,20.179 66,13 C66,5.820 71.821,-0.001 79,-0.001 C86.180,-0.001 92.001,5.820 92.001,13 C92.001,20.179 86.180,26 79,26 ZM79,5 C74.582,5 71,8.582 71,13 C71,17.418 74.582,21 79,21 C83.418,21 87,17.418 87,13 C87,8.582 83.418,5 79,5 ZM62.793,23.750 C63.362,24.750 62.643,26 61.494,26 L59.186,26 C58.656,26 58.157,25.710 57.887,25.250 L53.711,18 L49.005,18 L49.005,24.500 C49.005,25.330 48.335,26 47.506,26 L45.508,26 C44.679,26 44.009,25.330 44.009,24.500 L44.009,1.500 C44.009,0.670 44.679,0 45.508,0 L54,0 C58.966,0 62.992,4.030 62.992,9 C62.992,12.240 61.274,15.090 58.706,16.670 L62.793,23.750 ZM54,5 L50.004,5 C49.454,5 49.005,5.450 49.005,6 L49.005,12 C49.005,12.550 49.454,13 50.004,13 L54,13 C56.208,13 57.997,11.210 57.997,9 C57.997,6.790 56.208,5 54,5 ZM39.500,5 L33,5 L33,24.500 C33,25.328 32.328,26 31.500,26 L29.500,26 C28.672,26 28,25.328 28,24.500 L28,5 L21.500,5 C20.672,5 20,4.328 20,3.500 L20,1.500 C20,0.672 20.672,0 21.500,0 L39.500,0 C40.328,0 41,0.672 41,1.500 L41,3.500 C41,4.328 40.328,5 39.500,5 ZM16.487,8 L14.181,8 C13.565,8 13.040,7.611 12.790,7.048 C12.261,5.856 10.765,5 9,5 C6.793,5 5.005,6.340 5.005,8 C5.005,8.940 5.575,9.780 6.483,10.320 C6.706,10.455 6.948,10.574 7.206,10.673 C8.059,11 8.412,12.020 7.955,12.812 L6.948,14.558 C6.573,15.208 5.768,15.499 5.080,15.201 C3.872,14.679 2.815,13.924 1.989,13 C0.751,11.630 0.012,9.890 0.012,8 C0.012,3.580 4.037,0 9,0 C13.254,0 17.017,2.629 17.950,6.163 C18.196,7.095 17.450,8 16.487,8 ZM1.513,18 L3.820,18 C4.435,18 4.960,18.389 5.210,18.952 C5.739,20.144 7.236,21 9,21 C11.207,21 12.995,19.660 12.995,18 C12.995,17.060 12.426,16.220 11.517,15.680 C11.294,15.544 11.052,15.426 10.794,15.327 C9.941,14.999 9.588,13.980 10.045,13.188 L11.053,11.442 C11.427,10.792 12.233,10.501 12.920,10.799 C14.128,11.320 15.185,12.075 16.011,13 C17.249,14.370 17.988,16.110 17.988,18 C17.988,22.420 13.964,26 9,26 C4.747,26 0.983,23.371 0.050,19.837 C-0.196,18.905 0.550,18 1.513,18 Z"></path>
                        </svg>
                    </a></div>
                <div class="site-header__search">
                    <div class="search">
                        <form class="search__form" action="#"><input class="search__input" name="search"
                                                                     placeholder="Search over 10,000 products"
                                                                     aria-label="Site search" type="text"
                                                                     autocomplete="off">
                            <button class="search__button" type="submit">
                                <svg width="20px" height="20px">
                                    <use xlink:href="images/sprite.svg#search-20"></use>
                                </svg>
                            </button>
                            <div class="search__border"></div>
                        </form>
                    </div>
                </div>
                <div class="site-header__phone">
                    <div class="site-header__phone-title">Customer Service</div>
                    <div class="site-header__phone-number">(800) 060-0730</div>
                </div>
            </div>
            @include('layouts.desktop.menu')
        </div>
    </header><!-- desktop site__header / end --><!-- site__body -->
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
                            <li class="breadcrumb-item active" aria-current="page">Wish List</li>
                        </ol>
                    </nav>
                </div>
                <div class="page-header__title"><h1>Wish List</h1></div>
            </div>
        </div>
        <div class="block">
            <div class="container">
                <table class="wishlist">
                    <thead class="wishlist__head">
                    <tr class="wishlist__row">
                        <th class="wishlist__column wishlist__column--image">Image</th>
                        <th class="wishlist__column wishlist__column--product">Product</th>
                        <th class="wishlist__column wishlist__column--stock">Stock Status</th>
                        <th class="wishlist__column wishlist__column--price">Price</th>
                        <th class="wishlist__column wishlist__column--tocart"></th>
                        <th class="wishlist__column wishlist__column--remove"></th>
                    </tr>
                    </thead>
                    <tbody class="wishlist__body">
                    <tr class="wishlist__row">
                        <td class="wishlist__column wishlist__column--image"><a href="#"><img
                                    src="images/products/product-1.jpg" alt=""></a></td>
                        <td class="wishlist__column wishlist__column--product"><a href="#"
                                                                                  class="wishlist__product-name">Electric
                                Planer Brandix KL370090G 300 Watts</a>
                            <div class="wishlist__product-rating">
                                <div class="rating">
                                    <div class="rating__body">
                                        <svg class="rating__star rating__star--active" width="13px" height="12px">
                                            <g class="rating__fill">
                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                            </g>
                                            <g class="rating__stroke">
                                                <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                            </g>
                                        </svg>
                                        <div class="rating__star rating__star--only-edge rating__star--active">
                                            <div class="rating__fill">
                                                <div class="fake-svg-icon"></div>
                                            </div>
                                            <div class="rating__stroke">
                                                <div class="fake-svg-icon"></div>
                                            </div>
                                        </div>
                                        <svg class="rating__star rating__star--active" width="13px" height="12px">
                                            <g class="rating__fill">
                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                            </g>
                                            <g class="rating__stroke">
                                                <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                            </g>
                                        </svg>
                                        <div class="rating__star rating__star--only-edge rating__star--active">
                                            <div class="rating__fill">
                                                <div class="fake-svg-icon"></div>
                                            </div>
                                            <div class="rating__stroke">
                                                <div class="fake-svg-icon"></div>
                                            </div>
                                        </div>
                                        <svg class="rating__star rating__star--active" width="13px" height="12px">
                                            <g class="rating__fill">
                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                            </g>
                                            <g class="rating__stroke">
                                                <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                            </g>
                                        </svg>
                                        <div class="rating__star rating__star--only-edge rating__star--active">
                                            <div class="rating__fill">
                                                <div class="fake-svg-icon"></div>
                                            </div>
                                            <div class="rating__stroke">
                                                <div class="fake-svg-icon"></div>
                                            </div>
                                        </div>
                                        <svg class="rating__star rating__star--active" width="13px" height="12px">
                                            <g class="rating__fill">
                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                            </g>
                                            <g class="rating__stroke">
                                                <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                            </g>
                                        </svg>
                                        <div class="rating__star rating__star--only-edge rating__star--active">
                                            <div class="rating__fill">
                                                <div class="fake-svg-icon"></div>
                                            </div>
                                            <div class="rating__stroke">
                                                <div class="fake-svg-icon"></div>
                                            </div>
                                        </div>
                                        <svg class="rating__star" width="13px" height="12px">
                                            <g class="rating__fill">
                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                            </g>
                                            <g class="rating__stroke">
                                                <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                            </g>
                                        </svg>
                                        <div class="rating__star rating__star--only-edge">
                                            <div class="rating__fill">
                                                <div class="fake-svg-icon"></div>
                                            </div>
                                            <div class="rating__stroke">
                                                <div class="fake-svg-icon"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wishlist__product-rating-legend">9 Reviews</div>
                            </div>
                        </td>
                        <td class="wishlist__column wishlist__column--stock">
                            <div class="badge badge-success">In Stock</div>
                        </td>
                        <td class="wishlist__column wishlist__column--price">$699.00</td>
                        <td class="wishlist__column wishlist__column--tocart">
                            <button type="button" class="btn btn-primary btn-sm">Add To Cart</button>
                        </td>
                        <td class="wishlist__column wishlist__column--remove">
                            <button type="button" class="btn btn-light btn-sm btn-svg-icon">
                                <svg width="12px" height="12px">
                                    <use xlink:href="images/sprite.svg#cross-12"></use>
                                </svg>
                            </button>
                        </td>
                    </tr>
                    <tr class="wishlist__row">
                        <td class="wishlist__column wishlist__column--image"><a href="#"><img
                                    src="images/products/product-2.jpg" alt=""></a></td>
                        <td class="wishlist__column wishlist__column--product"><a href="#"
                                                                                  class="wishlist__product-name">Undefined
                                Tool IRadix DPS3000SY 2700 watts</a>
                            <div class="wishlist__product-rating">
                                <div class="rating">
                                    <div class="rating__body">
                                        <svg class="rating__star rating__star--active" width="13px" height="12px">
                                            <g class="rating__fill">
                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                            </g>
                                            <g class="rating__stroke">
                                                <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                            </g>
                                        </svg>
                                        <div class="rating__star rating__star--only-edge rating__star--active">
                                            <div class="rating__fill">
                                                <div class="fake-svg-icon"></div>
                                            </div>
                                            <div class="rating__stroke">
                                                <div class="fake-svg-icon"></div>
                                            </div>
                                        </div>
                                        <svg class="rating__star rating__star--active" width="13px" height="12px">
                                            <g class="rating__fill">
                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                            </g>
                                            <g class="rating__stroke">
                                                <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                            </g>
                                        </svg>
                                        <div class="rating__star rating__star--only-edge rating__star--active">
                                            <div class="rating__fill">
                                                <div class="fake-svg-icon"></div>
                                            </div>
                                            <div class="rating__stroke">
                                                <div class="fake-svg-icon"></div>
                                            </div>
                                        </div>
                                        <svg class="rating__star rating__star--active" width="13px" height="12px">
                                            <g class="rating__fill">
                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                            </g>
                                            <g class="rating__stroke">
                                                <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                            </g>
                                        </svg>
                                        <div class="rating__star rating__star--only-edge rating__star--active">
                                            <div class="rating__fill">
                                                <div class="fake-svg-icon"></div>
                                            </div>
                                            <div class="rating__stroke">
                                                <div class="fake-svg-icon"></div>
                                            </div>
                                        </div>
                                        <svg class="rating__star" width="13px" height="12px">
                                            <g class="rating__fill">
                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                            </g>
                                            <g class="rating__stroke">
                                                <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                            </g>
                                        </svg>
                                        <div class="rating__star rating__star--only-edge">
                                            <div class="rating__fill">
                                                <div class="fake-svg-icon"></div>
                                            </div>
                                            <div class="rating__stroke">
                                                <div class="fake-svg-icon"></div>
                                            </div>
                                        </div>
                                        <svg class="rating__star" width="13px" height="12px">
                                            <g class="rating__fill">
                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                            </g>
                                            <g class="rating__stroke">
                                                <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                            </g>
                                        </svg>
                                        <div class="rating__star rating__star--only-edge">
                                            <div class="rating__fill">
                                                <div class="fake-svg-icon"></div>
                                            </div>
                                            <div class="rating__stroke">
                                                <div class="fake-svg-icon"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wishlist__product-rating-legend">7 Reviews</div>
                            </div>
                        </td>
                        <td class="wishlist__column wishlist__column--stock">
                            <div class="badge badge-success">In Stock</div>
                        </td>
                        <td class="wishlist__column wishlist__column--price">$849.00</td>
                        <td class="wishlist__column wishlist__column--tocart">
                            <button type="button" class="btn btn-primary btn-sm">Add To Cart</button>
                        </td>
                        <td class="wishlist__column wishlist__column--remove">
                            <button type="button" class="btn btn-light btn-sm btn-svg-icon">
                                <svg width="12px" height="12px">
                                    <use xlink:href="images/sprite.svg#cross-12"></use>
                                </svg>
                            </button>
                        </td>
                    </tr>
                    <tr class="wishlist__row">
                        <td class="wishlist__column wishlist__column--image"><a href="#"><img
                                    src="images/products/product-5.jpg" alt=""></a></td>
                        <td class="wishlist__column wishlist__column--product"><a href="#"
                                                                                  class="wishlist__product-name">Brandix
                                Router Power Tool 2017ERXPK</a>
                            <div class="wishlist__product-rating">
                                <div class="rating">
                                    <div class="rating__body">
                                        <svg class="rating__star rating__star--active" width="13px" height="12px">
                                            <g class="rating__fill">
                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                            </g>
                                            <g class="rating__stroke">
                                                <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                            </g>
                                        </svg>
                                        <div class="rating__star rating__star--only-edge rating__star--active">
                                            <div class="rating__fill">
                                                <div class="fake-svg-icon"></div>
                                            </div>
                                            <div class="rating__stroke">
                                                <div class="fake-svg-icon"></div>
                                            </div>
                                        </div>
                                        <svg class="rating__star rating__star--active" width="13px" height="12px">
                                            <g class="rating__fill">
                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                            </g>
                                            <g class="rating__stroke">
                                                <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                            </g>
                                        </svg>
                                        <div class="rating__star rating__star--only-edge rating__star--active">
                                            <div class="rating__fill">
                                                <div class="fake-svg-icon"></div>
                                            </div>
                                            <div class="rating__stroke">
                                                <div class="fake-svg-icon"></div>
                                            </div>
                                        </div>
                                        <svg class="rating__star rating__star--active" width="13px" height="12px">
                                            <g class="rating__fill">
                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                            </g>
                                            <g class="rating__stroke">
                                                <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                            </g>
                                        </svg>
                                        <div class="rating__star rating__star--only-edge rating__star--active">
                                            <div class="rating__fill">
                                                <div class="fake-svg-icon"></div>
                                            </div>
                                            <div class="rating__stroke">
                                                <div class="fake-svg-icon"></div>
                                            </div>
                                        </div>
                                        <svg class="rating__star rating__star--active" width="13px" height="12px">
                                            <g class="rating__fill">
                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                            </g>
                                            <g class="rating__stroke">
                                                <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                            </g>
                                        </svg>
                                        <div class="rating__star rating__star--only-edge rating__star--active">
                                            <div class="rating__fill">
                                                <div class="fake-svg-icon"></div>
                                            </div>
                                            <div class="rating__stroke">
                                                <div class="fake-svg-icon"></div>
                                            </div>
                                        </div>
                                        <svg class="rating__star rating__star--active" width="13px" height="12px">
                                            <g class="rating__fill">
                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                            </g>
                                            <g class="rating__stroke">
                                                <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                            </g>
                                        </svg>
                                        <div class="rating__star rating__star--only-edge rating__star--active">
                                            <div class="rating__fill">
                                                <div class="fake-svg-icon"></div>
                                            </div>
                                            <div class="rating__stroke">
                                                <div class="fake-svg-icon"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wishlist__product-rating-legend">11 Reviews</div>
                            </div>
                        </td>
                        <td class="wishlist__column wishlist__column--stock">
                            <div class="badge badge-success">In Stock</div>
                        </td>
                        <td class="wishlist__column wishlist__column--price">$1,210.00</td>
                        <td class="wishlist__column wishlist__column--tocart">
                            <button type="button" class="btn btn-primary btn-sm">Add To Cart</button>
                        </td>
                        <td class="wishlist__column wishlist__column--remove">
                            <button type="button" class="btn btn-light btn-sm btn-svg-icon">
                                <svg width="12px" height="12px">
                                    <use xlink:href="images/sprite.svg#cross-12"></use>
                                </svg>
                            </button>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div><!-- site__body / end --><!-- site__footer -->
    @include('layouts.footer')
<!-- site__footer / end --></div><!-- site / end --></body>

</html>
