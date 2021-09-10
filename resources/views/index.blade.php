<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width,initial-scale=1" name="viewport">
    <meta content="telephone=no" name="format-detection">
    <title>Stroyka</title>
    <link href="images/favicon.png" rel="icon" type="image/png"><!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i" rel="stylesheet"><!-- css -->
    <link href="vendor/bootstrap-4.2.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/owl-carousel-2.3.4/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet"><!-- js -->
    <script src="vendor/jquery-3.3.1/jquery.min.js"></script>
    <script src="vendor/bootstrap-4.2.1/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/owl-carousel-2.3.4/owl.carousel.min.js"></script>
    <script src="vendor/nouislider-12.1.0/nouislider.min.js"></script>
    <script src="js/number.js"></script>
    <script src="js/main.js"></script>
    <script src="vendor/svg4everybody-2.1.9/svg4everybody.min.js"></script>
    <script>svg4everybody();</script><!-- font - fontawesome -->
    <link href="vendor/fontawesome-5.6.1/css/all.min.css" rel="stylesheet"><!-- font - stroyka -->
    <link href="fonts/stroyka/stroyka.css" rel="stylesheet">
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-97489509-6"></script>
    <script>window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());
        gtag('config', 'UA-97489509-6');</script>
</head>
<body><!-- quickview-modal -->
<div aria-hidden="true" class="modal fade" id="quickview-modal" role="dialog" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content"></div>
    </div>
</div><!-- quickview-modal / end --><!-- mobilemenu -->
<div class="mobilemenu">
    <div class="mobilemenu__backdrop"></div>
    <div class="mobilemenu__body">
        <div class="mobilemenu__header">
            <div class="mobilemenu__title">Menu</div>
            <button class="mobilemenu__close" type="button">
                <svg height="20px" width="20px">
                    <use xlink:href="images/sprite.svg#cross-20"></use>
                </svg>
            </button>
        </div>
        <div class="mobilemenu__content">
            <ul class="mobile-links mobile-links--level--0" data-collapse
                data-collapse-opened-class="mobile-links__item--open">
                <li class="mobile-links__item" data-collapse-item>
                    <div class="mobile-links__item-title"><a class="mobile-links__item-link" href="{{ route('index-2') }}">Home</a>
                        <button class="mobile-links__item-toggle" data-collapse-trigger type="button">
                            <svg class="mobile-links__item-arrow" height="7px" width="12px">
                                <use xlink:href="images/sprite.svg#arrow-rounded-down-12x7"></use>
                            </svg>
                        </button>
                    </div>
                    <div class="mobile-links__item-sub-links" data-collapse-content>
                        <ul class="mobile-links mobile-links--level--1">
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title"><a class="mobile-links__item-link"
                                                                         href="{{ route('index-2') }}">Home 1</a>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title"><a class="mobile-links__item-link"
                                                                         href="index-2.html">Home 2</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="mobile-links__item" data-collapse-item>
                    <div class="mobile-links__item-title"><a class="mobile-links__item-link" href="#">Categories</a>
                        <button class="mobile-links__item-toggle" data-collapse-trigger type="button">
                            <svg class="mobile-links__item-arrow" height="7px" width="12px">
                                <use xlink:href="images/sprite.svg#arrow-rounded-down-12x7"></use>
                            </svg>
                        </button>
                    </div>
                    <div class="mobile-links__item-sub-links" data-collapse-content>
                        <ul class="mobile-links mobile-links--level--1">
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title"><a class="mobile-links__item-link" href="#">Power
                                        Tools</a>
                                    <button class="mobile-links__item-toggle" data-collapse-trigger type="button">
                                        <svg class="mobile-links__item-arrow" height="7px" width="12px">
                                            <use xlink:href="images/sprite.svg#arrow-rounded-down-12x7"></use>
                                        </svg>
                                    </button>
                                </div>
                                <div class="mobile-links__item-sub-links" data-collapse-content>
                                    <ul class="mobile-links mobile-links--level--2">
                                        <li class="mobile-links__item" data-collapse-item>
                                            <div class="mobile-links__item-title"><a class="mobile-links__item-link"
                                                                                     href="#">Engravers</a>
                                            </div>
                                        </li>
                                        <li class="mobile-links__item" data-collapse-item>
                                            <div class="mobile-links__item-title"><a class="mobile-links__item-link"
                                                                                     href="#">Wrenches</a>
                                            </div>
                                        </li>
                                        <li class="mobile-links__item" data-collapse-item>
                                            <div class="mobile-links__item-title"><a class="mobile-links__item-link"
                                                                                     href="#">Wall
                                                    Chaser</a></div>
                                        </li>
                                        <li class="mobile-links__item" data-collapse-item>
                                            <div class="mobile-links__item-title"><a class="mobile-links__item-link"
                                                                                     href="#">Pneumatic
                                                    Tools</a></div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title"><a class="mobile-links__item-link" href="#">Machine
                                        Tools</a>
                                    <button class="mobile-links__item-toggle" data-collapse-trigger type="button">
                                        <svg class="mobile-links__item-arrow" height="7px" width="12px">
                                            <use xlink:href="images/sprite.svg#arrow-rounded-down-12x7"></use>
                                        </svg>
                                    </button>
                                </div>
                                <div class="mobile-links__item-sub-links" data-collapse-content>
                                    <ul class="mobile-links mobile-links--level--2">
                                        <li class="mobile-links__item" data-collapse-item>
                                            <div class="mobile-links__item-title"><a class="mobile-links__item-link"
                                                                                     href="#">Thread
                                                    Cutting</a></div>
                                        </li>
                                        <li class="mobile-links__item" data-collapse-item>
                                            <div class="mobile-links__item-title"><a class="mobile-links__item-link"
                                                                                     href="#">Chip
                                                    Blowers</a></div>
                                        </li>
                                        <li class="mobile-links__item" data-collapse-item>
                                            <div class="mobile-links__item-title"><a class="mobile-links__item-link"
                                                                                     href="#">Sharpening
                                                    Machines</a></div>
                                        </li>
                                        <li class="mobile-links__item" data-collapse-item>
                                            <div class="mobile-links__item-title"><a class="mobile-links__item-link"
                                                                                     href="#">Pipe
                                                    Cutters</a></div>
                                        </li>
                                        <li class="mobile-links__item" data-collapse-item>
                                            <div class="mobile-links__item-title"><a class="mobile-links__item-link"
                                                                                     href="#">Slotting
                                                    machines</a></div>
                                        </li>
                                        <li class="mobile-links__item" data-collapse-item>
                                            <div class="mobile-links__item-title"><a class="mobile-links__item-link"
                                                                                     href="#">Lathes</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="mobile-links__item" data-collapse-item>
                    <div class="mobile-links__item-title"><a class="mobile-links__item-link"
                                                             href="shop-grid-3-columns-sidebar.html">Shop</a>
                        <button class="mobile-links__item-toggle" data-collapse-trigger type="button">
                            <svg class="mobile-links__item-arrow" height="7px" width="12px">
                                <use xlink:href="images/sprite.svg#arrow-rounded-down-12x7"></use>
                            </svg>
                        </button>
                    </div>
                    <div class="mobile-links__item-sub-links" data-collapse-content>
                        <ul class="mobile-links mobile-links--level--1">
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title"><a class="mobile-links__item-link"
                                                                         href="shop-grid-3-columns-sidebar.html">Shop
                                        Grid</a>
                                    <button class="mobile-links__item-toggle" data-collapse-trigger type="button">
                                        <svg class="mobile-links__item-arrow" height="7px" width="12px">
                                            <use xlink:href="images/sprite.svg#arrow-rounded-down-12x7"></use>
                                        </svg>
                                    </button>
                                </div>
                                <div class="mobile-links__item-sub-links" data-collapse-content>
                                    <ul class="mobile-links mobile-links--level--2">
                                        <li class="mobile-links__item" data-collapse-item>
                                            <div class="mobile-links__item-title"><a
                                                    class="mobile-links__item-link"
                                                    href="shop-grid-3-columns-sidebar.html">3 Columns Sidebar</a></div>
                                        </li>
                                        <li class="mobile-links__item" data-collapse-item>
                                            <div class="mobile-links__item-title"><a
                                                    class="mobile-links__item-link"
                                                    href="shop-grid-4-columns-full.html">4 Columns Full</a></div>
                                        </li>
                                        <li class="mobile-links__item" data-collapse-item>
                                            <div class="mobile-links__item-title"><a
                                                    class="mobile-links__item-link"
                                                    href="shop-grid-5-columns-full.html">5 Columns Full</a></div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title"><a class="mobile-links__item-link"
                                                                         href="shop-list.html">Shop List</a>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title"><a class="mobile-links__item-link"
                                                                         href="shop-right-sidebar.html">Shop Right
                                        Sidebar</a></div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title"><a class="mobile-links__item-link"
                                                                         href="product.html">Product</a>
                                    <button class="mobile-links__item-toggle" data-collapse-trigger type="button">
                                        <svg class="mobile-links__item-arrow" height="7px" width="12px">
                                            <use xlink:href="images/sprite.svg#arrow-rounded-down-12x7"></use>
                                        </svg>
                                    </button>
                                </div>
                                <div class="mobile-links__item-sub-links" data-collapse-content>
                                    <ul class="mobile-links mobile-links--level--2">
                                        <li class="mobile-links__item" data-collapse-item>
                                            <div class="mobile-links__item-title"><a class="mobile-links__item-link"
                                                                                     href="product.html">Product</a>
                                            </div>
                                        </li>
                                        <li class="mobile-links__item" data-collapse-item>
                                            <div class="mobile-links__item-title"><a class="mobile-links__item-link"
                                                                                     href="product-alt.html">Product
                                                    Alt</a></div>
                                        </li>
                                        <li class="mobile-links__item" data-collapse-item>
                                            <div class="mobile-links__item-title"><a class="mobile-links__item-link"
                                                                                     href="product-sidebar.html">Product
                                                    Sidebar</a></div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title"><a class="mobile-links__item-link"
                                                                         href="cart.html">Cart</a></div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title"><a class="mobile-links__item-link"
                                                                         href="checkout.html">Checkout</a>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title"><a class="mobile-links__item-link"
                                                                         href="{{ route('wishlist') }}">Wishlist</a>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title"><a class="mobile-links__item-link"
                                                                         href="compare.html">Compare</a>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title"><a class="mobile-links__item-link"
                                                                         href="account.html">My Account</a>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title"><a class="mobile-links__item-link"
                                                                         href="track-order.html">Track Order</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="mobile-links__item" data-collapse-item>
                    <div class="mobile-links__item-title"><a class="mobile-links__item-link" href="blog-classic.html">Blog</a>
                        <button class="mobile-links__item-toggle" data-collapse-trigger type="button">
                            <svg class="mobile-links__item-arrow" height="7px" width="12px">
                                <use xlink:href="images/sprite.svg#arrow-rounded-down-12x7"></use>
                            </svg>
                        </button>
                    </div>
                    <div class="mobile-links__item-sub-links" data-collapse-content>
                        <ul class="mobile-links mobile-links--level--1">
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title"><a class="mobile-links__item-link"
                                                                         href="blog-classic.html">Blog
                                        Classic</a></div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title"><a class="mobile-links__item-link"
                                                                         href="blog-grid.html">Blog Grid</a>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title"><a class="mobile-links__item-link"
                                                                         href="blog-list.html">Blog List</a>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title"><a class="mobile-links__item-link"
                                                                         href="blog-left-sidebar.html">Blog Left
                                        Sidebar</a></div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title"><a class="mobile-links__item-link"
                                                                         href="post.html">Post Page</a>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title"><a class="mobile-links__item-link"
                                                                         href="post-without-sidebar.html">Post Without
                                        Sidebar</a></div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="mobile-links__item" data-collapse-item>
                    <div class="mobile-links__item-title"><a class="mobile-links__item-link" href="#">Pages</a>
                        <button class="mobile-links__item-toggle" data-collapse-trigger type="button">
                            <svg class="mobile-links__item-arrow" height="7px" width="12px">
                                <use xlink:href="images/sprite.svg#arrow-rounded-down-12x7"></use>
                            </svg>
                        </button>
                    </div>
                    <div class="mobile-links__item-sub-links" data-collapse-content>
                        <ul class="mobile-links mobile-links--level--1">
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title"><a class="mobile-links__item-link"
                                                                         href="about-us.html">About Us</a>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title"><a class="mobile-links__item-link"
                                                                         href="contact-us.html">Contact Us</a>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title"><a class="mobile-links__item-link"
                                                                         href="contact-us-alt.html">Contact Us
                                        Alt</a></div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title"><a class="mobile-links__item-link"
                                                                         href="404.html">404</a></div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title"><a class="mobile-links__item-link"
                                                                         href="terms-and-conditions.html">Terms And
                                        Conditions</a></div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title"><a class="mobile-links__item-link"
                                                                         href="faq.html">FAQ</a></div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title"><a class="mobile-links__item-link"
                                                                         href="components.html">Components</a>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title"><a class="mobile-links__item-link"
                                                                         href="typography.html">Typography</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="mobile-links__item" data-collapse-item>
                    <div class="mobile-links__item-title"><a class="mobile-links__item-link" data-collapse-trigger>Currency</a>
                        <button class="mobile-links__item-toggle" data-collapse-trigger type="button">
                            <svg class="mobile-links__item-arrow" height="7px" width="12px">
                                <use xlink:href="images/sprite.svg#arrow-rounded-down-12x7"></use>
                            </svg>
                        </button>
                    </div>
                    <div class="mobile-links__item-sub-links" data-collapse-content>
                        <ul class="mobile-links mobile-links--level--1">
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title"><a class="mobile-links__item-link" href="#">€
                                        Euro</a></div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title"><a class="mobile-links__item-link" href="#">£
                                        Pound Sterling</a></div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title"><a class="mobile-links__item-link" href="#">$ US
                                        Dollar</a></div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title"><a class="mobile-links__item-link" href="#">₽
                                        Russian Ruble</a></div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="mobile-links__item" data-collapse-item>
                    <div class="mobile-links__item-title"><a class="mobile-links__item-link" data-collapse-trigger>Language</a>
                        <button class="mobile-links__item-toggle" data-collapse-trigger type="button">
                            <svg class="mobile-links__item-arrow" height="7px" width="12px">
                                <use xlink:href="images/sprite.svg#arrow-rounded-down-12x7"></use>
                            </svg>
                        </button>
                    </div>
                    <div class="mobile-links__item-sub-links" data-collapse-content>
                        <ul class="mobile-links mobile-links--level--1">
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title"><a class="mobile-links__item-link" href="#">English</a>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title"><a class="mobile-links__item-link"
                                                                         href="#">French</a>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title"><a class="mobile-links__item-link"
                                                                         href="#">German</a>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title"><a class="mobile-links__item-link" href="#">Russian</a>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title"><a class="mobile-links__item-link" href="#">Italian</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div><!-- mobilemenu / end --><!-- site -->
<div class="site"><!-- mobile site__header -->
    <header class="site__header d-lg-none">
        <div class="mobile-header mobile-header--sticky mobile-header--stuck">
            <div class="mobile-header__panel">
                <div class="container">
                    <div class="mobile-header__body">
                        <button class="mobile-header__menu-button">
                            <svg height="14px" width="18px">
                                <use xlink:href="images/sprite.svg#menu-18x14"></use>
                            </svg>
                        </button>
                        <a class="mobile-header__logo" href="{{ route('index-2') }}">
                            <svg height="20px" width="120px" xmlns="http://www.w3.org/2000/svg">
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
                            <form action="#" class="mobile-header__search-form"><input
                                    aria-label="Site search" autocomplete="off"
                                    class="mobile-header__search-input" name="search"
                                    placeholder="Search over 10,000 products"
                                    type="text">
                                <button class="mobile-header__search-button mobile-header__search-button--submit"
                                        type="submit">
                                    <svg height="20px" width="20px">
                                        <use xlink:href="images/sprite.svg#search-20"></use>
                                    </svg>
                                </button>
                                <button class="mobile-header__search-button mobile-header__search-button--close"
                                        type="button">
                                    <svg height="20px" width="20px">
                                        <use xlink:href="images/sprite.svg#cross-20"></use>
                                    </svg>
                                </button>
                                <div class="mobile-header__search-body"></div>
                            </form>
                        </div>
                        <div class="mobile-header__indicators">
                            <div class="indicator indicator--mobile-search indicator--mobile d-sm-none">
                                <button class="indicator__button"><span class="indicator__area"><svg height="20px"
                                                                                                     width="20px"><use
                                                xlink:href="images/sprite.svg#search-20"></use></svg></span></button>
                            </div>
                            <div class="indicator indicator--mobile d-sm-flex d-none"><a class="indicator__button"
                                                                                         href="{{ route('wishlist') }}"><span
                                        class="indicator__area"><svg height="20px" width="20px"><use
                                                xlink:href="images/sprite.svg#heart-20"></use></svg> <span
                                            class="indicator__value">0</span></span></a>
                            </div>
                            <div class="indicator indicator--mobile"><a class="indicator__button" href="cart.html"><span
                                        class="indicator__area"><svg height="20px" width="20px"><use
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
                        <div class="topbar__item topbar__item--link"><a class="topbar-link" href="contact-us.html">Contacts</a>
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
                                    <svg height="5px" width="7px">
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
                                    <svg height="5px" width="7px">
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
                                    <svg height="5px" width="7px">
                                        <use xlink:href="images/sprite.svg#arrow-rounded-down-7x5"></use>
                                    </svg>
                                </button>
                                <div class="topbar-dropdown__body"><!-- .menu -->
                                    <ul class="menu menu--layout--topbar menu--with-icons">
                                        <li><a href="#">
                                                <div class="menu__icon"><img
                                                        alt=""
                                                        src="images/languages/language-1.png"
                                                        srcset="images/languages/language-1.png, images/languages/language-1@2x.png 2x">
                                                </div>
                                                English</a></li>
                                        <li><a href="#">
                                                <div class="menu__icon"><img
                                                        alt=""
                                                        src="images/languages/language-2.png"
                                                        srcset="images/languages/language-2.png, images/languages/language-2@2x.png 2x">
                                                </div>
                                                French</a></li>
                                        <li><a href="#">
                                                <div class="menu__icon"><img
                                                        alt=""
                                                        src="images/languages/language-3.png"
                                                        srcset="images/languages/language-3.png, images/languages/language-3@2x.png 2x">
                                                </div>
                                                German</a></li>
                                        <li><a href="#">
                                                <div class="menu__icon"><img
                                                        alt=""
                                                        src="images/languages/language-4.png"
                                                        srcset="images/languages/language-4.png, images/languages/language-4@2x.png 2x">
                                                </div>
                                                Russian</a></li>
                                        <li><a href="#">
                                                <div class="menu__icon"><img
                                                        alt=""
                                                        src="images/languages/language-5.png"
                                                        srcset="images/languages/language-5.png, images/languages/language-5@2x.png 2x">
                                                </div>
                                                Italian</a></li>
                                    </ul><!-- .menu / end --></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- .topbar / end -->
            <div class="site-header__middle container">
                <div class="site-header__logo"><a href="{{ route('index-2') }}">
                        <svg height="26px" width="196px" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M194.797,18 L184,18 C184,18.552 183.552,19 183,19 L182,19 C181.448,19 181,18.552 181,18 L181,16 L178.377,16 C177.708,16 177.119,15.556 176.935,14.912 L173.246,2 L168,2 L168,4 L168.500,4 C169.328,4 170,4.672 170,5.500 L170,24.500 C170,25.328 169.328,26 168.500,26 L165.500,26 C164.672,26 164,25.328 164,24.500 L164,5.500 C164,4.672 164.672,4 165.500,4 L166,4 L166,1.500 C166,0.672 166.672,0 167.500,0 L173.622,0 C174.292,0 174.881,0.444 175.065,1.088 L178.754,14 L181,14 L181,13 C181,12.448 181.448,12 182,12 L183,12 C183.552,12 184,12.448 184,13 L194.797,13 C195.461,13 196,13.539 196,14.203 L196,16.797 C196,17.461 195.461,18 194.797,18 ZM156.783,26 L154.483,26 C153.767,26 153.129,25.552 152.884,24.878 L150.437,18.135 C150.407,18.054 150.331,18 150.245,18 L142.768,18 C142.682,18 142.606,18.054 142.576,18.135 L140.129,24.878 C139.884,25.552 139.245,26 138.530,26 L136.230,26 C135.395,26 134.815,25.169 135.100,24.383 L143.445,1.122 C143.690,0.448 144.328,0 145.044,0 L147.969,0 C148.685,0 149.323,0.448 149.568,1.122 L157.913,24.383 C158.198,25.169 157.618,26 156.783,26 ZM148.472,12.725 L146.698,7.848 C146.633,7.668 146.380,7.668 146.315,7.848 L144.541,12.725 C144.492,12.859 144.591,13 144.733,13 L148.280,13 C148.422,13 148.521,12.859 148.472,12.725 ZM130.493,26 L128.090,26 C127.555,26 127.060,25.714 126.792,25.250 L122.610,18 L120.003,22.520 L120.003,24.500 C120.003,25.328 119.333,26 118.505,26 L116.507,26 C115.680,26 115.009,25.328 115.009,24.500 L115.009,1.500 C115.009,0.672 115.680,0 116.507,0 L118.505,0 C119.333,0 120.003,0.672 120.003,1.500 L120.003,12.520 L126.792,0.750 C127.060,0.286 127.555,0 128.090,0 L130.493,0 C131.646,0 132.367,1.250 131.791,2.250 L125.487,13 L131.791,23.750 C132.367,24.750 131.646,26 130.493,26 ZM103.987,15.775 L103.987,24.500 C103.987,25.328 103.315,26 102.486,26 L100.485,26 C99.656,26 98.984,25.328 98.984,24.500 L98.984,15.775 L98.594,15.100 L91.180,2.250 C90.610,1.250 91.330,0 92.481,0 L94.792,0 C95.322,0 95.823,0.290 96.093,0.750 L101.486,10.090 L106.879,0.750 C107.149,0.290 107.649,0 108.179,0 L110.491,0 C111.641,0 112.362,1.250 111.791,2.250 L103.987,15.775 ZM79,26 C71.821,26 66,20.179 66,13 C66,5.820 71.821,-0.001 79,-0.001 C86.180,-0.001 92.001,5.820 92.001,13 C92.001,20.179 86.180,26 79,26 ZM79,5 C74.582,5 71,8.582 71,13 C71,17.418 74.582,21 79,21 C83.418,21 87,17.418 87,13 C87,8.582 83.418,5 79,5 ZM62.793,23.750 C63.362,24.750 62.643,26 61.494,26 L59.186,26 C58.656,26 58.157,25.710 57.887,25.250 L53.711,18 L49.005,18 L49.005,24.500 C49.005,25.330 48.335,26 47.506,26 L45.508,26 C44.679,26 44.009,25.330 44.009,24.500 L44.009,1.500 C44.009,0.670 44.679,0 45.508,0 L54,0 C58.966,0 62.992,4.030 62.992,9 C62.992,12.240 61.274,15.090 58.706,16.670 L62.793,23.750 ZM54,5 L50.004,5 C49.454,5 49.005,5.450 49.005,6 L49.005,12 C49.005,12.550 49.454,13 50.004,13 L54,13 C56.208,13 57.997,11.210 57.997,9 C57.997,6.790 56.208,5 54,5 ZM39.500,5 L33,5 L33,24.500 C33,25.328 32.328,26 31.500,26 L29.500,26 C28.672,26 28,25.328 28,24.500 L28,5 L21.500,5 C20.672,5 20,4.328 20,3.500 L20,1.500 C20,0.672 20.672,0 21.500,0 L39.500,0 C40.328,0 41,0.672 41,1.500 L41,3.500 C41,4.328 40.328,5 39.500,5 ZM16.487,8 L14.181,8 C13.565,8 13.040,7.611 12.790,7.048 C12.261,5.856 10.765,5 9,5 C6.793,5 5.005,6.340 5.005,8 C5.005,8.940 5.575,9.780 6.483,10.320 C6.706,10.455 6.948,10.574 7.206,10.673 C8.059,11 8.412,12.020 7.955,12.812 L6.948,14.558 C6.573,15.208 5.768,15.499 5.080,15.201 C3.872,14.679 2.815,13.924 1.989,13 C0.751,11.630 0.012,9.890 0.012,8 C0.012,3.580 4.037,0 9,0 C13.254,0 17.017,2.629 17.950,6.163 C18.196,7.095 17.450,8 16.487,8 ZM1.513,18 L3.820,18 C4.435,18 4.960,18.389 5.210,18.952 C5.739,20.144 7.236,21 9,21 C11.207,21 12.995,19.660 12.995,18 C12.995,17.060 12.426,16.220 11.517,15.680 C11.294,15.544 11.052,15.426 10.794,15.327 C9.941,14.999 9.588,13.980 10.045,13.188 L11.053,11.442 C11.427,10.792 12.233,10.501 12.920,10.799 C14.128,11.320 15.185,12.075 16.011,13 C17.249,14.370 17.988,16.110 17.988,18 C17.988,22.420 13.964,26 9,26 C4.747,26 0.983,23.371 0.050,19.837 C-0.196,18.905 0.550,18 1.513,18 Z"></path>
                        </svg>
                    </a></div>
                <div class="site-header__search">
                    <div class="search">
                        <form action="#" class="search__form"><input aria-label="Site search" autocomplete="off"
                                                                     class="search__input"
                                                                     name="search"
                                                                     placeholder="Search over 10,000 products"
                                                                     type="text">
                            <button class="search__button" type="submit">
                                <svg height="20px" width="20px">
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
            <div class="site-header__nav-panel">
                <div class="nav-panel">
                    <div class="nav-panel__container container">
                        <div class="nav-panel__row">
                            <div class="nav-panel__departments"><!-- .departments -->
                                <div class="departments departments--opened departments--fixed"
                                     data-departments-fixed-by=".block-slideshow">
                                    <div class="departments__body">
                                        <div class="departments__links-wrapper">
                                            <ul class="departments__links">
                                                <li class="departments__item"><a href="#">Power Tools
                                                        <svg class="departments__link-arrow" height="9px" width="6px">
                                                            <use
                                                                xlink:href="images/sprite.svg#arrow-rounded-right-6x9"></use>
                                                        </svg>
                                                    </a>
                                                    <div class="departments__megamenu departments__megamenu--xl">
                                                        <!-- .megamenu -->
                                                        <div class="megamenu megamenu--departments"
                                                             style="background-image: url('images/megamenu/megamenu-1.jpg');">
                                                            <div class="row">
                                                                <div class="col-3">
                                                                    <ul class="megamenu__links megamenu__links--level--0">
                                                                        <li class="megamenu__item megamenu__item--with-submenu">
                                                                            <a href="#">Power Tools</a>
                                                                            <ul class="megamenu__links megamenu__links--level--1">
                                                                                <li class="megamenu__item"><a href="#">Engravers</a>
                                                                                </li>
                                                                                <li class="megamenu__item"><a href="#">Drills</a>
                                                                                </li>
                                                                                <li class="megamenu__item"><a href="#">Wrenches</a>
                                                                                </li>
                                                                                <li class="megamenu__item"><a href="#">Plumbing</a>
                                                                                </li>
                                                                                <li class="megamenu__item"><a href="#">Wall
                                                                                        Chaser</a></li>
                                                                                <li class="megamenu__item"><a href="#">Pneumatic
                                                                                        Tools</a></li>
                                                                                <li class="megamenu__item"><a href="#">Milling
                                                                                        Cutters</a></li>
                                                                            </ul>
                                                                        </li>
                                                                        <li class="megamenu__item"><a href="#">Workbenches</a>
                                                                        </li>
                                                                        <li class="megamenu__item"><a
                                                                                href="#">Presses</a></li>
                                                                        <li class="megamenu__item"><a href="#">Spray
                                                                                Guns</a></li>
                                                                        <li class="megamenu__item"><a
                                                                                href="#">Riveters</a></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="col-3">
                                                                    <ul class="megamenu__links megamenu__links--level--0">
                                                                        <li class="megamenu__item megamenu__item--with-submenu">
                                                                            <a href="#">Hand Tools</a>
                                                                            <ul class="megamenu__links megamenu__links--level--1">
                                                                                <li class="megamenu__item"><a href="#">Screwdrivers</a>
                                                                                </li>
                                                                                <li class="megamenu__item"><a href="#">Handsaws</a>
                                                                                </li>
                                                                                <li class="megamenu__item"><a href="#">Knives</a>
                                                                                </li>
                                                                                <li class="megamenu__item"><a href="#">Axes</a>
                                                                                </li>
                                                                                <li class="megamenu__item"><a href="#">Multitools</a>
                                                                                </li>
                                                                                <li class="megamenu__item"><a href="#">Paint
                                                                                        Tools</a></li>
                                                                            </ul>
                                                                        </li>
                                                                        <li class="megamenu__item megamenu__item--with-submenu">
                                                                            <a href="#">Garden Equipment</a>
                                                                            <ul class="megamenu__links megamenu__links--level--1">
                                                                                <li class="megamenu__item"><a href="#">Motor
                                                                                        Pumps</a></li>
                                                                                <li class="megamenu__item"><a href="#">Chainsaws</a>
                                                                                </li>
                                                                                <li class="megamenu__item"><a href="#">Electric
                                                                                        Saws</a></li>
                                                                                <li class="megamenu__item"><a href="#">Brush
                                                                                        Cutters</a></li>
                                                                            </ul>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="col-3">
                                                                    <ul class="megamenu__links megamenu__links--level--0">
                                                                        <li class="megamenu__item megamenu__item--with-submenu">
                                                                            <a href="#">Machine Tools</a>
                                                                            <ul class="megamenu__links megamenu__links--level--1">
                                                                                <li class="megamenu__item"><a href="#">Thread
                                                                                        Cutting</a></li>
                                                                                <li class="megamenu__item"><a href="#">Chip
                                                                                        Blowers</a></li>
                                                                                <li class="megamenu__item"><a href="#">Sharpening
                                                                                        Machines</a></li>
                                                                                <li class="megamenu__item"><a href="#">Pipe
                                                                                        Cutters</a></li>
                                                                                <li class="megamenu__item"><a href="#">Slotting
                                                                                        machines</a></li>
                                                                                <li class="megamenu__item"><a href="#">Lathes</a>
                                                                                </li>
                                                                            </ul>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="col-3">
                                                                    <ul class="megamenu__links megamenu__links--level--0">
                                                                        <li class="megamenu__item megamenu__item--with-submenu">
                                                                            <a href="#">Instruments</a>
                                                                            <ul class="megamenu__links megamenu__links--level--1">
                                                                                <li class="megamenu__item"><a href="#">Welding
                                                                                        Equipment</a></li>
                                                                                <li class="megamenu__item"><a href="#">Power
                                                                                        Tools</a></li>
                                                                                <li class="megamenu__item"><a href="#">Hand
                                                                                        Tools</a></li>
                                                                                <li class="megamenu__item"><a href="#">Measuring
                                                                                        Tool</a></li>
                                                                            </ul>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div><!-- .megamenu / end --></div>
                                                </li>
                                                <li class="departments__item"><a href="#">Hand Tools
                                                        <svg class="departments__link-arrow" height="9px" width="6px">
                                                            <use
                                                                xlink:href="images/sprite.svg#arrow-rounded-right-6x9"></use>
                                                        </svg>
                                                    </a>
                                                    <div class="departments__megamenu departments__megamenu--lg">
                                                        <!-- .megamenu -->
                                                        <div class="megamenu megamenu--departments"
                                                             style="background-image: url('images/megamenu/megamenu-2.jpg');">
                                                            <div class="row">
                                                                <div class="col-4">
                                                                    <ul class="megamenu__links megamenu__links--level--0">
                                                                        <li class="megamenu__item megamenu__item--with-submenu">
                                                                            <a href="#">Hand Tools</a>
                                                                            <ul class="megamenu__links megamenu__links--level--1">
                                                                                <li class="megamenu__item"><a href="#">Screwdrivers</a>
                                                                                </li>
                                                                                <li class="megamenu__item"><a href="#">Handsaws</a>
                                                                                </li>
                                                                                <li class="megamenu__item"><a href="#">Knives</a>
                                                                                </li>
                                                                                <li class="megamenu__item"><a href="#">Axes</a>
                                                                                </li>
                                                                                <li class="megamenu__item"><a href="#">Multitools</a>
                                                                                </li>
                                                                                <li class="megamenu__item"><a href="#">Paint
                                                                                        Tools</a></li>
                                                                            </ul>
                                                                        </li>
                                                                        <li class="megamenu__item megamenu__item--with-submenu">
                                                                            <a href="#">Garden Equipment</a>
                                                                            <ul class="megamenu__links megamenu__links--level--1">
                                                                                <li class="megamenu__item"><a href="#">Motor
                                                                                        Pumps</a></li>
                                                                                <li class="megamenu__item"><a href="#">Chainsaws</a>
                                                                                </li>
                                                                                <li class="megamenu__item"><a href="#">Electric
                                                                                        Saws</a></li>
                                                                                <li class="megamenu__item"><a href="#">Brush
                                                                                        Cutters</a></li>
                                                                            </ul>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="col-4">
                                                                    <ul class="megamenu__links megamenu__links--level--0">
                                                                        <li class="megamenu__item megamenu__item--with-submenu">
                                                                            <a href="#">Machine Tools</a>
                                                                            <ul class="megamenu__links megamenu__links--level--1">
                                                                                <li class="megamenu__item"><a href="#">Thread
                                                                                        Cutting</a></li>
                                                                                <li class="megamenu__item"><a href="#">Chip
                                                                                        Blowers</a></li>
                                                                                <li class="megamenu__item"><a href="#">Sharpening
                                                                                        Machines</a></li>
                                                                                <li class="megamenu__item"><a href="#">Pipe
                                                                                        Cutters</a></li>
                                                                                <li class="megamenu__item"><a href="#">Slotting
                                                                                        machines</a></li>
                                                                                <li class="megamenu__item"><a href="#">Lathes</a>
                                                                                </li>
                                                                            </ul>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="col-4">
                                                                    <ul class="megamenu__links megamenu__links--level--0">
                                                                        <li class="megamenu__item megamenu__item--with-submenu">
                                                                            <a href="#">Instruments</a>
                                                                            <ul class="megamenu__links megamenu__links--level--1">
                                                                                <li class="megamenu__item"><a href="#">Welding
                                                                                        Equipment</a></li>
                                                                                <li class="megamenu__item"><a href="#">Power
                                                                                        Tools</a></li>
                                                                                <li class="megamenu__item"><a href="#">Hand
                                                                                        Tools</a></li>
                                                                                <li class="megamenu__item"><a href="#">Measuring
                                                                                        Tool</a></li>
                                                                            </ul>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div><!-- .megamenu / end --></div>
                                                </li>
                                                <li class="departments__item"><a href="#">Machine Tools
                                                        <svg class="departments__link-arrow" height="9px" width="6px">
                                                            <use
                                                                xlink:href="images/sprite.svg#arrow-rounded-right-6x9"></use>
                                                        </svg>
                                                    </a>
                                                    <div class="departments__megamenu departments__megamenu--nl">
                                                        <!-- .megamenu -->
                                                        <div class="megamenu megamenu--departments"
                                                             style="background-image: url('images/megamenu/megamenu-3.jpg');">
                                                            <div class="row">
                                                                <div class="col-6">
                                                                    <ul class="megamenu__links megamenu__links--level--0">
                                                                        <li class="megamenu__item megamenu__item--with-submenu">
                                                                            <a href="#">Hand Tools</a>
                                                                            <ul class="megamenu__links megamenu__links--level--1">
                                                                                <li class="megamenu__item"><a href="#">Screwdrivers</a>
                                                                                </li>
                                                                                <li class="megamenu__item"><a href="#">Handsaws</a>
                                                                                </li>
                                                                                <li class="megamenu__item"><a href="#">Knives</a>
                                                                                </li>
                                                                                <li class="megamenu__item"><a href="#">Axes</a>
                                                                                </li>
                                                                                <li class="megamenu__item"><a href="#">Multitools</a>
                                                                                </li>
                                                                                <li class="megamenu__item"><a href="#">Paint
                                                                                        Tools</a></li>
                                                                            </ul>
                                                                        </li>
                                                                        <li class="megamenu__item megamenu__item--with-submenu">
                                                                            <a href="#">Garden Equipment</a>
                                                                            <ul class="megamenu__links megamenu__links--level--1">
                                                                                <li class="megamenu__item"><a href="#">Motor
                                                                                        Pumps</a></li>
                                                                                <li class="megamenu__item"><a href="#">Chainsaws</a>
                                                                                </li>
                                                                                <li class="megamenu__item"><a href="#">Electric
                                                                                        Saws</a></li>
                                                                                <li class="megamenu__item"><a href="#">Brush
                                                                                        Cutters</a></li>
                                                                            </ul>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="col-6">
                                                                    <ul class="megamenu__links megamenu__links--level--0">
                                                                        <li class="megamenu__item megamenu__item--with-submenu">
                                                                            <a href="#">Instruments</a>
                                                                            <ul class="megamenu__links megamenu__links--level--1">
                                                                                <li class="megamenu__item"><a href="#">Welding
                                                                                        Equipment</a></li>
                                                                                <li class="megamenu__item"><a href="#">Power
                                                                                        Tools</a></li>
                                                                                <li class="megamenu__item"><a href="#">Hand
                                                                                        Tools</a></li>
                                                                                <li class="megamenu__item"><a href="#">Measuring
                                                                                        Tool</a></li>
                                                                            </ul>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div><!-- .megamenu / end --></div>
                                                </li>
                                                <li class="departments__item"><a href="#">Building Supplies
                                                        <svg class="departments__link-arrow" height="9px" width="6px">
                                                            <use
                                                                xlink:href="images/sprite.svg#arrow-rounded-right-6x9"></use>
                                                        </svg>
                                                    </a>
                                                    <div class="departments__megamenu departments__megamenu--sm">
                                                        <!-- .megamenu -->
                                                        <div class="megamenu megamenu--departments">
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <ul class="megamenu__links megamenu__links--level--0">
                                                                        <li class="megamenu__item megamenu__item--with-submenu">
                                                                            <a href="#">Hand Tools</a>
                                                                            <ul class="megamenu__links megamenu__links--level--1">
                                                                                <li class="megamenu__item"><a href="#">Screwdrivers</a>
                                                                                </li>
                                                                                <li class="megamenu__item"><a href="#">Handsaws</a>
                                                                                </li>
                                                                                <li class="megamenu__item"><a href="#">Knives</a>
                                                                                </li>
                                                                                <li class="megamenu__item"><a href="#">Axes</a>
                                                                                </li>
                                                                                <li class="megamenu__item"><a href="#">Multitools</a>
                                                                                </li>
                                                                                <li class="megamenu__item"><a href="#">Paint
                                                                                        Tools</a></li>
                                                                            </ul>
                                                                        </li>
                                                                        <li class="megamenu__item megamenu__item--with-submenu">
                                                                            <a href="#">Garden Equipment</a>
                                                                            <ul class="megamenu__links megamenu__links--level--1">
                                                                                <li class="megamenu__item"><a href="#">Motor
                                                                                        Pumps</a></li>
                                                                                <li class="megamenu__item"><a href="#">Chainsaws</a>
                                                                                </li>
                                                                                <li class="megamenu__item"><a href="#">Electric
                                                                                        Saws</a></li>
                                                                                <li class="megamenu__item"><a href="#">Brush
                                                                                        Cutters</a></li>
                                                                            </ul>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div><!-- .megamenu / end --></div>
                                                </li>
                                                <li class="departments__item departments__item--menu"><a href="#">Electrical
                                                        <svg class="departments__link-arrow" height="9px" width="6px">
                                                            <use
                                                                xlink:href="images/sprite.svg#arrow-rounded-right-6x9"></use>
                                                        </svg>
                                                    </a>
                                                    <div class="departments__menu"><!-- .menu -->
                                                        <ul class="menu menu--layout--classic">
                                                            <li><a href="#">Soldering Equipment
                                                                    <svg class="menu__arrow" height="9px" width="6px">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#arrow-rounded-right-6x9"></use>
                                                                    </svg>
                                                                </a>
                                                                <div class="menu__submenu"><!-- .menu -->
                                                                    <ul class="menu menu--layout--classic">
                                                                        <li><a href="#">Soldering Station</a></li>
                                                                        <li><a href="#">Soldering Dryers</a></li>
                                                                        <li><a href="#">Gas Soldering Iron</a></li>
                                                                        <li><a href="#">Electric Soldering Iron</a></li>
                                                                    </ul><!-- .menu / end --></div>
                                                            </li>
                                                            <li><a href="#">Light Bulbs</a></li>
                                                            <li><a href="#">Batteries</a></li>
                                                            <li><a href="#">Light Fixtures</a></li>
                                                            <li><a href="#">Warm Floor</a></li>
                                                            <li><a href="#">Generators</a></li>
                                                            <li><a href="#">UPS</a></li>
                                                        </ul><!-- .menu / end --></div>
                                                </li>
                                                <li class="departments__item"><a href="#">Power Machinery</a></li>
                                                <li class="departments__item"><a href="#">Measurement</a></li>
                                                <li class="departments__item"><a href="#">Clothes & PPE</a></li>
                                                <li class="departments__item"><a href="#">Plumbing</a></li>
                                                <li class="departments__item"><a href="#">Storage & Organization</a>
                                                </li>
                                                <li class="departments__item"><a href="#">Welding & Soldering</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <button class="departments__button">
                                        <svg class="departments__button-icon" height="14px" width="18px">
                                            <use xlink:href="images/sprite.svg#menu-18x14"></use>
                                        </svg>
                                        Shop By Category
                                        <svg class="departments__button-arrow" height="6px" width="9px">
                                            <use xlink:href="images/sprite.svg#arrow-rounded-down-9x6"></use>
                                        </svg>
                                    </button>
                                </div><!-- .departments / end --></div><!-- .nav-links -->
                            <div class="nav-panel__nav-links nav-links">
                                <ul class="nav-links__list">
                                    <li class="nav-links__item nav-links__item--with-submenu"><a
                                            href="{{ route('index-2') }}"><span>Home <svg class="nav-links__arrow" height="6px"
                                                                              width="9px"><use
                                                        xlink:href="images/sprite.svg#arrow-rounded-down-9x6"></use></svg></span></a>
                                        <div class="nav-links__menu"><!-- .menu -->
                                            <ul class="menu menu--layout--classic">
                                                <li><a href="{{ route('index-2') }}">Home 1</a></li>
                                                <li><a href="index-2.html">Home 2</a></li>
                                            </ul><!-- .menu / end --></div>
                                    </li>
                                    <li class="nav-links__item nav-links__item--with-submenu"><a href="#"><span>Megamenu <svg
                                                    class="nav-links__arrow" height="6px" width="9px"><use
                                                        xlink:href="images/sprite.svg#arrow-rounded-down-9x6"></use></svg></span></a>
                                        <div class="nav-links__megamenu nav-links__megamenu--size--nl">
                                            <!-- .megamenu -->
                                            <div class="megamenu">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <ul class="megamenu__links megamenu__links--level--0">
                                                            <li class="megamenu__item megamenu__item--with-submenu"><a
                                                                    href="#">Power Tools</a>
                                                                <ul class="megamenu__links megamenu__links--level--1">
                                                                    <li class="megamenu__item"><a href="#">Engravers</a>
                                                                    </li>
                                                                    <li class="megamenu__item"><a href="#">Wrenches</a>
                                                                    </li>
                                                                    <li class="megamenu__item"><a href="#">Wall
                                                                            Chaser</a></li>
                                                                    <li class="megamenu__item"><a href="#">Pneumatic
                                                                            Tools</a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="megamenu__item megamenu__item--with-submenu"><a
                                                                    href="#">Machine Tools</a>
                                                                <ul class="megamenu__links megamenu__links--level--1">
                                                                    <li class="megamenu__item"><a href="#">Thread
                                                                            Cutting</a></li>
                                                                    <li class="megamenu__item"><a href="#">Chip
                                                                            Blowers</a></li>
                                                                    <li class="megamenu__item"><a href="#">Sharpening
                                                                            Machines</a></li>
                                                                    <li class="megamenu__item"><a href="#">Pipe
                                                                            Cutters</a></li>
                                                                    <li class="megamenu__item"><a href="#">Slotting
                                                                            machines</a></li>
                                                                    <li class="megamenu__item"><a href="#">Lathes</a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-6">
                                                        <ul class="megamenu__links megamenu__links--level--0">
                                                            <li class="megamenu__item megamenu__item--with-submenu"><a
                                                                    href="#">Hand Tools</a>
                                                                <ul class="megamenu__links megamenu__links--level--1">
                                                                    <li class="megamenu__item"><a
                                                                            href="#">Screwdrivers</a></li>
                                                                    <li class="megamenu__item"><a href="#">Handsaws</a>
                                                                    </li>
                                                                    <li class="megamenu__item"><a href="#">Knives</a>
                                                                    </li>
                                                                    <li class="megamenu__item"><a href="#">Axes</a></li>
                                                                    <li class="megamenu__item"><a
                                                                            href="#">Multitools</a></li>
                                                                    <li class="megamenu__item"><a href="#">Paint
                                                                            Tools</a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="megamenu__item megamenu__item--with-submenu"><a
                                                                    href="#">Garden Equipment</a>
                                                                <ul class="megamenu__links megamenu__links--level--1">
                                                                    <li class="megamenu__item"><a href="#">Motor
                                                                            Pumps</a></li>
                                                                    <li class="megamenu__item"><a href="#">Chainsaws</a>
                                                                    </li>
                                                                    <li class="megamenu__item"><a href="#">Electric
                                                                            Saws</a></li>
                                                                    <li class="megamenu__item"><a href="#">Brush
                                                                            Cutters</a></li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div><!-- .megamenu / end --></div>
                                    </li>
                                    <li class="nav-links__item nav-links__item--with-submenu"><a
                                            href="shop-grid-3-columns-sidebar.html"><span>Shop <svg
                                                    class="nav-links__arrow" height="6px" width="9px"><use
                                                        xlink:href="images/sprite.svg#arrow-rounded-down-9x6"></use></svg></span></a>
                                        <div class="nav-links__menu"><!-- .menu -->
                                            <ul class="menu menu--layout--classic">
                                                <li><a href="shop-grid-3-columns-sidebar.html">Shop Grid
                                                        <svg class="menu__arrow" height="9px" width="6px">
                                                            <use
                                                                xlink:href="images/sprite.svg#arrow-rounded-right-6x9"></use>
                                                        </svg>
                                                    </a>
                                                    <div class="menu__submenu"><!-- .menu -->
                                                        <ul class="menu menu--layout--classic">
                                                            <li><a href="shop-grid-3-columns-sidebar.html">3 Columns
                                                                    Sidebar</a></li>
                                                            <li><a href="shop-grid-4-columns-full.html">4 Columns
                                                                    Full</a></li>
                                                            <li><a href="shop-grid-5-columns-full.html">5 Columns
                                                                    Full</a></li>
                                                        </ul><!-- .menu / end --></div>
                                                </li>
                                                <li><a href="shop-list.html">Shop List</a></li>
                                                <li><a href="shop-right-sidebar.html">Shop Right Sidebar</a></li>
                                                <li><a href="product.html">Product
                                                        <svg class="menu__arrow" height="9px" width="6px">
                                                            <use
                                                                xlink:href="images/sprite.svg#arrow-rounded-right-6x9"></use>
                                                        </svg>
                                                    </a>
                                                    <div class="menu__submenu"><!-- .menu -->
                                                        <ul class="menu menu--layout--classic">
                                                            <li><a href="product.html">Product</a></li>
                                                            <li><a href="product-alt.html">Product Alt</a></li>
                                                            <li><a href="product-sidebar.html">Product Sidebar</a></li>
                                                        </ul><!-- .menu / end --></div>
                                                </li>
                                                <li><a href="cart.html">Cart</a></li>
                                                <li><a href="checkout.html">Checkout</a></li>
                                                <li><a href="{{ route('wishlist') }}">Wishlist</a></li>
                                                <li><a href="compare.html">Compare</a></li>
                                                <li><a href="account.html">My Account</a></li>
                                                <li><a href="track-order.html">Track Order</a></li>
                                            </ul><!-- .menu / end --></div>
                                    </li>
                                    <li class="nav-links__item nav-links__item--with-submenu"><a
                                            href="blog-classic.html"><span>Blog <svg class="nav-links__arrow"
                                                                                     height="6px" width="9px"><use
                                                        xlink:href="images/sprite.svg#arrow-rounded-down-9x6"></use></svg></span></a>
                                        <div class="nav-links__menu"><!-- .menu -->
                                            <ul class="menu menu--layout--classic">
                                                <li><a href="blog-classic.html">Blog Classic</a></li>
                                                <li><a href="blog-grid.html">Blog Grid</a></li>
                                                <li><a href="blog-list.html">Blog List</a></li>
                                                <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                                                <li><a href="post.html">Post Page</a></li>
                                                <li><a href="post-without-sidebar.html">Post Without Sidebar</a></li>
                                            </ul><!-- .menu / end --></div>
                                    </li>
                                    <li class="nav-links__item nav-links__item--with-submenu"><a href="#"><span>Pages <svg
                                                    class="nav-links__arrow" height="6px" width="9px"><use
                                                        xlink:href="images/sprite.svg#arrow-rounded-down-9x6"></use></svg></span></a>
                                        <div class="nav-links__menu"><!-- .menu -->
                                            <ul class="menu menu--layout--classic">
                                                <li><a href="about-us.html">About Us</a></li>
                                                <li><a href="contact-us.html">Contact Us</a></li>
                                                <li><a href="contact-us-alt.html">Contact Us Alt</a></li>
                                                <li><a href="404.html">404</a></li>
                                                <li><a href="terms-and-conditions.html">Terms And Conditions</a></li>
                                                <li><a href="faq.html">FAQ</a></li>
                                                <li><a href="components.html">Components</a></li>
                                                <li><a href="typography.html">Typography</a></li>
                                            </ul><!-- .menu / end --></div>
                                    </li>
                                    <li class="nav-links__item"><a href="contact-us.html"><span>Contact Us</span></a>
                                    </li>
                                    <li class="nav-links__item"><a
                                            href="https://themeforest.net/user/kos9/portfolio"><span>Buy Theme</span></a>
                                    </li>
                                </ul>
                            </div><!-- .nav-links / end -->
                            <div class="nav-panel__indicators">
                                <div class="indicator"><a class="indicator__button" href="{{ route('wishlist') }}"><span
                                            class="indicator__area"><svg height="20px" width="20px"><use
                                                    xlink:href="images/sprite.svg#heart-20"></use></svg> <span
                                                class="indicator__value">0</span></span></a></div>
                                <div class="indicator indicator--trigger--click"><a class="indicator__button"
                                                                                    href="cart.html"><span
                                            class="indicator__area"><svg height="20px" width="20px"><use
                                                    xlink:href="images/sprite.svg#cart-20"></use></svg> <span
                                                class="indicator__value">3</span></span></a>
                                    <div class="indicator__dropdown"><!-- .dropcart -->
                                        <div class="dropcart">
                                            <div class="dropcart__products-list">
                                                <div class="dropcart__product">
                                                    <div class="dropcart__product-image"><a href="product.html"><img
                                                                alt="" src="images/products/product-1.jpg"></a></div>
                                                    <div class="dropcart__product-info">
                                                        <div class="dropcart__product-name"><a href="product.html">Electric
                                                                Planer Brandix KL370090G 300 Watts</a></div>
                                                        <ul class="dropcart__product-options">
                                                            <li>Color: Yellow</li>
                                                            <li>Material: Aluminium</li>
                                                        </ul>
                                                        <div class="dropcart__product-meta"><span
                                                                class="dropcart__product-quantity">2</span> x <span
                                                                class="dropcart__product-price">$699.00</span></div>
                                                    </div>
                                                    <button
                                                        class="dropcart__product-remove btn btn-light btn-sm btn-svg-icon"
                                                        type="button">
                                                        <svg height="10px" width="10px">
                                                            <use xlink:href="images/sprite.svg#cross-10"></use>
                                                        </svg>
                                                    </button>
                                                </div>
                                                <div class="dropcart__product">
                                                    <div class="dropcart__product-image"><a href="product.html"><img
                                                                alt="" src="images/products/product-2.jpg"></a></div>
                                                    <div class="dropcart__product-info">
                                                        <div class="dropcart__product-name"><a href="product.html">Undefined
                                                                Tool IRadix DPS3000SY 2700 watts</a></div>
                                                        <div class="dropcart__product-meta"><span
                                                                class="dropcart__product-quantity">1</span> x <span
                                                                class="dropcart__product-price">$849.00</span></div>
                                                    </div>
                                                    <button
                                                        class="dropcart__product-remove btn btn-light btn-sm btn-svg-icon"
                                                        type="button">
                                                        <svg height="10px" width="10px">
                                                            <use xlink:href="images/sprite.svg#cross-10"></use>
                                                        </svg>
                                                    </button>
                                                </div>
                                                <div class="dropcart__product">
                                                    <div class="dropcart__product-image"><a href="product.html"><img
                                                                alt="" src="images/products/product-5.jpg"></a></div>
                                                    <div class="dropcart__product-info">
                                                        <div class="dropcart__product-name"><a href="product.html">Brandix
                                                                Router Power Tool 2017ERXPK</a></div>
                                                        <ul class="dropcart__product-options">
                                                            <li>Color: True Red</li>
                                                        </ul>
                                                        <div class="dropcart__product-meta"><span
                                                                class="dropcart__product-quantity">3</span> x <span
                                                                class="dropcart__product-price">$1,210.00</span></div>
                                                    </div>
                                                    <button
                                                        class="dropcart__product-remove btn btn-light btn-sm btn-svg-icon"
                                                        type="button">
                                                        <svg height="10px" width="10px">
                                                            <use xlink:href="images/sprite.svg#cross-10"></use>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="dropcart__totals">
                                                <table>
                                                    <tr>
                                                        <th>Subtotal</th>
                                                        <td>$5,877.00</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Shipping</th>
                                                        <td>$25.00</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Tax</th>
                                                        <td>$0.00</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Total</th>
                                                        <td>$5,902.00</td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <div class="dropcart__buttons"><a class="btn btn-secondary"
                                                                              href="cart.html">View Cart</a> <a
                                                    class="btn btn-primary" href="checkout.html">Checkout</a></div>
                                        </div><!-- .dropcart / end --></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header><!-- desktop site__header / end --><!-- site__body -->
    <div class="site__body"><!-- .block-slideshow -->
        <div class="block-slideshow block-slideshow--layout--with-departments block">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-9 offset-lg-3">
                        <div class="block-slideshow__body">
                            <div class="owl-carousel"><a class="block-slideshow__slide" href="#">
                                    <div class="block-slideshow__slide-image block-slideshow__slide-image--desktop"
                                         style="background-image: url('images/slides/slide-1.jpg')"></div>
                                    <div class="block-slideshow__slide-image block-slideshow__slide-image--mobile"
                                         style="background-image: url('images/slides/slide-1-mobile.jpg')"></div>
                                    <div class="block-slideshow__slide-content">
                                        <div class="block-slideshow__slide-title">Big choice of<br>Plumbing products
                                        </div>
                                        <div class="block-slideshow__slide-text">Lorem ipsum dolor sit amet, consectetur
                                            adipiscing elit.<br>Etiam pharetra laoreet dui quis molestie.
                                        </div>
                                        <div class="block-slideshow__slide-button"><span class="btn btn-primary btn-lg">Shop Now</span>
                                        </div>
                                    </div>
                                </a><a class="block-slideshow__slide" href="#">
                                    <div class="block-slideshow__slide-image block-slideshow__slide-image--desktop"
                                         style="background-image: url('images/slides/slide-2.jpg')"></div>
                                    <div class="block-slideshow__slide-image block-slideshow__slide-image--mobile"
                                         style="background-image: url('images/slides/slide-2-mobile.jpg')"></div>
                                    <div class="block-slideshow__slide-content">
                                        <div class="block-slideshow__slide-title">Screwdrivers<br>Professional Tools
                                        </div>
                                        <div class="block-slideshow__slide-text">Lorem ipsum dolor sit amet, consectetur
                                            adipiscing elit.<br>Etiam pharetra laoreet dui quis molestie.
                                        </div>
                                        <div class="block-slideshow__slide-button"><span class="btn btn-primary btn-lg">Shop Now</span>
                                        </div>
                                    </div>
                                </a><a class="block-slideshow__slide" href="#">
                                    <div class="block-slideshow__slide-image block-slideshow__slide-image--desktop"
                                         style="background-image: url('images/slides/slide-3.jpg')"></div>
                                    <div class="block-slideshow__slide-image block-slideshow__slide-image--mobile"
                                         style="background-image: url('images/slides/slide-3-mobile.jpg')"></div>
                                    <div class="block-slideshow__slide-content">
                                        <div class="block-slideshow__slide-title">One more<br>Unique header</div>
                                        <div class="block-slideshow__slide-text">Lorem ipsum dolor sit amet, consectetur
                                            adipiscing elit.<br>Etiam pharetra laoreet dui quis molestie.
                                        </div>
                                        <div class="block-slideshow__slide-button"><span class="btn btn-primary btn-lg">Shop Now</span>
                                        </div>
                                    </div>
                                </a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- .block-slideshow / end --><!-- .block-features -->
        <div class="block block-features block-features--layout--classic">
            <div class="container">
                <div class="block-features__list">
                    <div class="block-features__item">
                        <div class="block-features__icon">
                            <svg height="48px" width="48px">
                                <use xlink:href="images/sprite.svg#fi-free-delivery-48"></use>
                            </svg>
                        </div>
                        <div class="block-features__content">
                            <div class="block-features__title">Free Shipping</div>
                            <div class="block-features__subtitle">For orders from $50</div>
                        </div>
                    </div>
                    <div class="block-features__divider"></div>
                    <div class="block-features__item">
                        <div class="block-features__icon">
                            <svg height="48px" width="48px">
                                <use xlink:href="images/sprite.svg#fi-24-hours-48"></use>
                            </svg>
                        </div>
                        <div class="block-features__content">
                            <div class="block-features__title">Support 24/7</div>
                            <div class="block-features__subtitle">Call us anytime</div>
                        </div>
                    </div>
                    <div class="block-features__divider"></div>
                    <div class="block-features__item">
                        <div class="block-features__icon">
                            <svg height="48px" width="48px">
                                <use xlink:href="images/sprite.svg#fi-payment-security-48"></use>
                            </svg>
                        </div>
                        <div class="block-features__content">
                            <div class="block-features__title">100% Safety</div>
                            <div class="block-features__subtitle">Only secure payments</div>
                        </div>
                    </div>
                    <div class="block-features__divider"></div>
                    <div class="block-features__item">
                        <div class="block-features__icon">
                            <svg height="48px" width="48px">
                                <use xlink:href="images/sprite.svg#fi-tag-48"></use>
                            </svg>
                        </div>
                        <div class="block-features__content">
                            <div class="block-features__title">Hot Offers</div>
                            <div class="block-features__subtitle">Discounts up to 90%</div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- .block-features / end --><!-- .block-products-carousel -->
        <div class="block block-products-carousel" data-layout="grid-4">
            <div class="container">
                <div class="block-header"><h3 class="block-header__title">Featured Products</h3>
                    <div class="block-header__divider"></div>
                    <ul class="block-header__groups-list">
                        <li>
                            <button class="block-header__group block-header__group--active" type="button">All</button>
                        </li>
                        <li>
                            <button class="block-header__group" type="button">Power Tools</button>
                        </li>
                        <li>
                            <button class="block-header__group" type="button">Hand Tools</button>
                        </li>
                        <li>
                            <button class="block-header__group" type="button">Plumbing</button>
                        </li>
                    </ul>
                    <div class="block-header__arrows-list">
                        <button class="block-header__arrow block-header__arrow--left" type="button">
                            <svg height="11px" width="7px">
                                <use xlink:href="images/sprite.svg#arrow-rounded-left-7x11"></use>
                            </svg>
                        </button>
                        <button class="block-header__arrow block-header__arrow--right" type="button">
                            <svg height="11px" width="7px">
                                <use xlink:href="images/sprite.svg#arrow-rounded-right-7x11"></use>
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="block-products-carousel__slider">
                    <div class="block-products-carousel__preloader"></div>
                    <div class="owl-carousel">
                        <div class="block-products-carousel__column">
                            <div class="block-products-carousel__cell">
                                <div class="product-card">
                                    <button class="product-card__quickview" type="button">
                                        <svg height="16px" width="16px">
                                            <use xlink:href="images/sprite.svg#quickview-16"></use>
                                        </svg>
                                        <span class="fake-svg-icon"></span></button>
                                    <div class="product-card__badges-list">
                                        <div class="product-card__badge product-card__badge--new">New</div>
                                    </div>
                                    <div class="product-card__image"><a href="product.html"><img
                                                alt="" src="images/products/product-1.jpg"></a></div>
                                    <div class="product-card__info">
                                        <div class="product-card__name"><a href="product.html">Electric Planer Brandix
                                                KL370090G 300 Watts</a></div>
                                        <div class="product-card__rating">
                                            <div class="rating">
                                                <div class="rating__body">
                                                    <svg class="rating__star rating__star--active" height="12px"
                                                         width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star rating__star--active" height="12px"
                                                         width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star rating__star--active" height="12px"
                                                         width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star rating__star--active" height="12px"
                                                         width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star" height="12px" width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
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
                                            <div class="product-card__rating-legend">9 Reviews</div>
                                        </div>
                                        <ul class="product-card__features-list">
                                            <li>Speed: 750 RPM</li>
                                            <li>Power Source: Cordless-Electric</li>
                                            <li>Battery Cell Type: Lithium</li>
                                            <li>Voltage: 20 Volts</li>
                                            <li>Battery Capacity: 2 Ah</li>
                                        </ul>
                                    </div>
                                    <div class="product-card__actions">
                                        <div class="product-card__availability">Availability: <span
                                                class="text-success">In Stock</span></div>
                                        <div class="product-card__prices">$749.00</div>
                                        <div class="product-card__buttons">
                                            <button class="btn btn-primary product-card__addtocart" type="button">Add To
                                                Cart
                                            </button>
                                            <button
                                                class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                                                type="button">Add To Cart
                                            </button>
                                            <button
                                                class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist"
                                                type="button">
                                                <svg height="16px" width="16px">
                                                    <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                </svg>
                                                <span class="fake-svg-icon fake-svg-icon--wishlist-16"></span></button>
                                            <button
                                                class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare"
                                                type="button">
                                                <svg height="16px" width="16px">
                                                    <use xlink:href="images/sprite.svg#compare-16"></use>
                                                </svg>
                                                <span class="fake-svg-icon fake-svg-icon--compare-16"></span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="block-products-carousel__column">
                            <div class="block-products-carousel__cell">
                                <div class="product-card">
                                    <button class="product-card__quickview" type="button">
                                        <svg height="16px" width="16px">
                                            <use xlink:href="images/sprite.svg#quickview-16"></use>
                                        </svg>
                                        <span class="fake-svg-icon"></span></button>
                                    <div class="product-card__badges-list">
                                        <div class="product-card__badge product-card__badge--hot">Hot</div>
                                    </div>
                                    <div class="product-card__image"><a href="product.html"><img
                                                alt="" src="images/products/product-2.jpg"></a></div>
                                    <div class="product-card__info">
                                        <div class="product-card__name"><a href="product.html">Undefined Tool IRadix
                                                DPS3000SY 2700 Watts</a></div>
                                        <div class="product-card__rating">
                                            <div class="rating">
                                                <div class="rating__body">
                                                    <svg class="rating__star rating__star--active" height="12px"
                                                         width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star rating__star--active" height="12px"
                                                         width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star rating__star--active" height="12px"
                                                         width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star rating__star--active" height="12px"
                                                         width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star rating__star--active" height="12px"
                                                         width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-card__rating-legend">11 Reviews</div>
                                        </div>
                                        <ul class="product-card__features-list">
                                            <li>Speed: 750 RPM</li>
                                            <li>Power Source: Cordless-Electric</li>
                                            <li>Battery Cell Type: Lithium</li>
                                            <li>Voltage: 20 Volts</li>
                                            <li>Battery Capacity: 2 Ah</li>
                                        </ul>
                                    </div>
                                    <div class="product-card__actions">
                                        <div class="product-card__availability">Availability: <span
                                                class="text-success">In Stock</span></div>
                                        <div class="product-card__prices">$1,019.00</div>
                                        <div class="product-card__buttons">
                                            <button class="btn btn-primary product-card__addtocart" type="button">Add To
                                                Cart
                                            </button>
                                            <button
                                                class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                                                type="button">Add To Cart
                                            </button>
                                            <button
                                                class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist"
                                                type="button">
                                                <svg height="16px" width="16px">
                                                    <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                </svg>
                                                <span class="fake-svg-icon fake-svg-icon--wishlist-16"></span></button>
                                            <button
                                                class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare"
                                                type="button">
                                                <svg height="16px" width="16px">
                                                    <use xlink:href="images/sprite.svg#compare-16"></use>
                                                </svg>
                                                <span class="fake-svg-icon fake-svg-icon--compare-16"></span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="block-products-carousel__column">
                            <div class="block-products-carousel__cell">
                                <div class="product-card">
                                    <button class="product-card__quickview" type="button">
                                        <svg height="16px" width="16px">
                                            <use xlink:href="images/sprite.svg#quickview-16"></use>
                                        </svg>
                                        <span class="fake-svg-icon"></span></button>
                                    <div class="product-card__image"><a href="product.html"><img
                                                alt="" src="images/products/product-3.jpg"></a></div>
                                    <div class="product-card__info">
                                        <div class="product-card__name"><a href="product.html">Drill Screwdriver Brandix
                                                ALX7054 200 Watts</a></div>
                                        <div class="product-card__rating">
                                            <div class="rating">
                                                <div class="rating__body">
                                                    <svg class="rating__star rating__star--active" height="12px"
                                                         width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star rating__star--active" height="12px"
                                                         width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star rating__star--active" height="12px"
                                                         width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star rating__star--active" height="12px"
                                                         width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star" height="12px" width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
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
                                            <div class="product-card__rating-legend">9 Reviews</div>
                                        </div>
                                        <ul class="product-card__features-list">
                                            <li>Speed: 750 RPM</li>
                                            <li>Power Source: Cordless-Electric</li>
                                            <li>Battery Cell Type: Lithium</li>
                                            <li>Voltage: 20 Volts</li>
                                            <li>Battery Capacity: 2 Ah</li>
                                        </ul>
                                    </div>
                                    <div class="product-card__actions">
                                        <div class="product-card__availability">Availability: <span
                                                class="text-success">In Stock</span></div>
                                        <div class="product-card__prices">$850.00</div>
                                        <div class="product-card__buttons">
                                            <button class="btn btn-primary product-card__addtocart" type="button">Add To
                                                Cart
                                            </button>
                                            <button
                                                class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                                                type="button">Add To Cart
                                            </button>
                                            <button
                                                class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist"
                                                type="button">
                                                <svg height="16px" width="16px">
                                                    <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                </svg>
                                                <span class="fake-svg-icon fake-svg-icon--wishlist-16"></span></button>
                                            <button
                                                class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare"
                                                type="button">
                                                <svg height="16px" width="16px">
                                                    <use xlink:href="images/sprite.svg#compare-16"></use>
                                                </svg>
                                                <span class="fake-svg-icon fake-svg-icon--compare-16"></span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="block-products-carousel__column">
                            <div class="block-products-carousel__cell">
                                <div class="product-card">
                                    <button class="product-card__quickview" type="button">
                                        <svg height="16px" width="16px">
                                            <use xlink:href="images/sprite.svg#quickview-16"></use>
                                        </svg>
                                        <span class="fake-svg-icon"></span></button>
                                    <div class="product-card__badges-list">
                                        <div class="product-card__badge product-card__badge--sale">Sale</div>
                                    </div>
                                    <div class="product-card__image"><a href="product.html"><img
                                                alt="" src="images/products/product-4.jpg"></a></div>
                                    <div class="product-card__info">
                                        <div class="product-card__name"><a href="product.html">Drill Series 3 Brandix
                                                KSR4590PQS 1500 Watts</a></div>
                                        <div class="product-card__rating">
                                            <div class="rating">
                                                <div class="rating__body">
                                                    <svg class="rating__star rating__star--active" height="12px"
                                                         width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star rating__star--active" height="12px"
                                                         width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star rating__star--active" height="12px"
                                                         width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star" height="12px" width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
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
                                                    <svg class="rating__star" height="12px" width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
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
                                            <div class="product-card__rating-legend">7 Reviews</div>
                                        </div>
                                        <ul class="product-card__features-list">
                                            <li>Speed: 750 RPM</li>
                                            <li>Power Source: Cordless-Electric</li>
                                            <li>Battery Cell Type: Lithium</li>
                                            <li>Voltage: 20 Volts</li>
                                            <li>Battery Capacity: 2 Ah</li>
                                        </ul>
                                    </div>
                                    <div class="product-card__actions">
                                        <div class="product-card__availability">Availability: <span
                                                class="text-success">In Stock</span></div>
                                        <div class="product-card__prices"><span
                                                class="product-card__new-price">$949.00</span> <span
                                                class="product-card__old-price">$1189.00</span></div>
                                        <div class="product-card__buttons">
                                            <button class="btn btn-primary product-card__addtocart" type="button">Add To
                                                Cart
                                            </button>
                                            <button
                                                class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                                                type="button">Add To Cart
                                            </button>
                                            <button
                                                class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist"
                                                type="button">
                                                <svg height="16px" width="16px">
                                                    <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                </svg>
                                                <span class="fake-svg-icon fake-svg-icon--wishlist-16"></span></button>
                                            <button
                                                class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare"
                                                type="button">
                                                <svg height="16px" width="16px">
                                                    <use xlink:href="images/sprite.svg#compare-16"></use>
                                                </svg>
                                                <span class="fake-svg-icon fake-svg-icon--compare-16"></span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="block-products-carousel__column">
                            <div class="block-products-carousel__cell">
                                <div class="product-card">
                                    <button class="product-card__quickview" type="button">
                                        <svg height="16px" width="16px">
                                            <use xlink:href="images/sprite.svg#quickview-16"></use>
                                        </svg>
                                        <span class="fake-svg-icon"></span></button>
                                    <div class="product-card__image"><a href="product.html"><img
                                                alt="" src="images/products/product-5.jpg"></a></div>
                                    <div class="product-card__info">
                                        <div class="product-card__name"><a href="product.html">Brandix Router Power Tool
                                                2017ERXPK</a></div>
                                        <div class="product-card__rating">
                                            <div class="rating">
                                                <div class="rating__body">
                                                    <svg class="rating__star rating__star--active" height="12px"
                                                         width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star rating__star--active" height="12px"
                                                         width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star rating__star--active" height="12px"
                                                         width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star rating__star--active" height="12px"
                                                         width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star" height="12px" width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
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
                                            <div class="product-card__rating-legend">9 Reviews</div>
                                        </div>
                                        <ul class="product-card__features-list">
                                            <li>Speed: 750 RPM</li>
                                            <li>Power Source: Cordless-Electric</li>
                                            <li>Battery Cell Type: Lithium</li>
                                            <li>Voltage: 20 Volts</li>
                                            <li>Battery Capacity: 2 Ah</li>
                                        </ul>
                                    </div>
                                    <div class="product-card__actions">
                                        <div class="product-card__availability">Availability: <span
                                                class="text-success">In Stock</span></div>
                                        <div class="product-card__prices">$1,700.00</div>
                                        <div class="product-card__buttons">
                                            <button class="btn btn-primary product-card__addtocart" type="button">Add To
                                                Cart
                                            </button>
                                            <button
                                                class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                                                type="button">Add To Cart
                                            </button>
                                            <button
                                                class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist"
                                                type="button">
                                                <svg height="16px" width="16px">
                                                    <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                </svg>
                                                <span class="fake-svg-icon fake-svg-icon--wishlist-16"></span></button>
                                            <button
                                                class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare"
                                                type="button">
                                                <svg height="16px" width="16px">
                                                    <use xlink:href="images/sprite.svg#compare-16"></use>
                                                </svg>
                                                <span class="fake-svg-icon fake-svg-icon--compare-16"></span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="block-products-carousel__column">
                            <div class="block-products-carousel__cell">
                                <div class="product-card">
                                    <button class="product-card__quickview" type="button">
                                        <svg height="16px" width="16px">
                                            <use xlink:href="images/sprite.svg#quickview-16"></use>
                                        </svg>
                                        <span class="fake-svg-icon"></span></button>
                                    <div class="product-card__image"><a href="product.html"><img
                                                alt="" src="images/products/product-6.jpg"></a></div>
                                    <div class="product-card__info">
                                        <div class="product-card__name"><a href="product.html">Brandix Drilling Machine
                                                DM2019KW4 4kW</a></div>
                                        <div class="product-card__rating">
                                            <div class="rating">
                                                <div class="rating__body">
                                                    <svg class="rating__star rating__star--active" height="12px"
                                                         width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star rating__star--active" height="12px"
                                                         width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star rating__star--active" height="12px"
                                                         width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star" height="12px" width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
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
                                                    <svg class="rating__star" height="12px" width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
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
                                            <div class="product-card__rating-legend">7 Reviews</div>
                                        </div>
                                        <ul class="product-card__features-list">
                                            <li>Speed: 750 RPM</li>
                                            <li>Power Source: Cordless-Electric</li>
                                            <li>Battery Cell Type: Lithium</li>
                                            <li>Voltage: 20 Volts</li>
                                            <li>Battery Capacity: 2 Ah</li>
                                        </ul>
                                    </div>
                                    <div class="product-card__actions">
                                        <div class="product-card__availability">Availability: <span
                                                class="text-success">In Stock</span></div>
                                        <div class="product-card__prices">$3,199.00</div>
                                        <div class="product-card__buttons">
                                            <button class="btn btn-primary product-card__addtocart" type="button">Add To
                                                Cart
                                            </button>
                                            <button
                                                class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                                                type="button">Add To Cart
                                            </button>
                                            <button
                                                class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist"
                                                type="button">
                                                <svg height="16px" width="16px">
                                                    <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                </svg>
                                                <span class="fake-svg-icon fake-svg-icon--wishlist-16"></span></button>
                                            <button
                                                class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare"
                                                type="button">
                                                <svg height="16px" width="16px">
                                                    <use xlink:href="images/sprite.svg#compare-16"></use>
                                                </svg>
                                                <span class="fake-svg-icon fake-svg-icon--compare-16"></span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="block-products-carousel__column">
                            <div class="block-products-carousel__cell">
                                <div class="product-card">
                                    <button class="product-card__quickview" type="button">
                                        <svg height="16px" width="16px">
                                            <use xlink:href="images/sprite.svg#quickview-16"></use>
                                        </svg>
                                        <span class="fake-svg-icon"></span></button>
                                    <div class="product-card__image"><a href="product.html"><img
                                                alt="" src="images/products/product-7.jpg"></a></div>
                                    <div class="product-card__info">
                                        <div class="product-card__name"><a href="product.html">Brandix Pliers</a></div>
                                        <div class="product-card__rating">
                                            <div class="rating">
                                                <div class="rating__body">
                                                    <svg class="rating__star rating__star--active" height="12px"
                                                         width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star rating__star--active" height="12px"
                                                         width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star" height="12px" width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
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
                                                    <svg class="rating__star" height="12px" width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
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
                                                    <svg class="rating__star" height="12px" width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
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
                                            <div class="product-card__rating-legend">4 Reviews</div>
                                        </div>
                                        <ul class="product-card__features-list">
                                            <li>Speed: 750 RPM</li>
                                            <li>Power Source: Cordless-Electric</li>
                                            <li>Battery Cell Type: Lithium</li>
                                            <li>Voltage: 20 Volts</li>
                                            <li>Battery Capacity: 2 Ah</li>
                                        </ul>
                                    </div>
                                    <div class="product-card__actions">
                                        <div class="product-card__availability">Availability: <span
                                                class="text-success">In Stock</span></div>
                                        <div class="product-card__prices">$24.00</div>
                                        <div class="product-card__buttons">
                                            <button class="btn btn-primary product-card__addtocart" type="button">Add To
                                                Cart
                                            </button>
                                            <button
                                                class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                                                type="button">Add To Cart
                                            </button>
                                            <button
                                                class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist"
                                                type="button">
                                                <svg height="16px" width="16px">
                                                    <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                </svg>
                                                <span class="fake-svg-icon fake-svg-icon--wishlist-16"></span></button>
                                            <button
                                                class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare"
                                                type="button">
                                                <svg height="16px" width="16px">
                                                    <use xlink:href="images/sprite.svg#compare-16"></use>
                                                </svg>
                                                <span class="fake-svg-icon fake-svg-icon--compare-16"></span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="block-products-carousel__column">
                            <div class="block-products-carousel__cell">
                                <div class="product-card">
                                    <button class="product-card__quickview" type="button">
                                        <svg height="16px" width="16px">
                                            <use xlink:href="images/sprite.svg#quickview-16"></use>
                                        </svg>
                                        <span class="fake-svg-icon"></span></button>
                                    <div class="product-card__image"><a href="product.html"><img
                                                alt="" src="images/products/product-8.jpg"></a></div>
                                    <div class="product-card__info">
                                        <div class="product-card__name"><a href="product.html">Water Hose 40cm</a></div>
                                        <div class="product-card__rating">
                                            <div class="rating">
                                                <div class="rating__body">
                                                    <svg class="rating__star rating__star--active" height="12px"
                                                         width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star rating__star--active" height="12px"
                                                         width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star" height="12px" width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
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
                                                    <svg class="rating__star" height="12px" width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
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
                                                    <svg class="rating__star" height="12px" width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
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
                                            <div class="product-card__rating-legend">4 Reviews</div>
                                        </div>
                                        <ul class="product-card__features-list">
                                            <li>Speed: 750 RPM</li>
                                            <li>Power Source: Cordless-Electric</li>
                                            <li>Battery Cell Type: Lithium</li>
                                            <li>Voltage: 20 Volts</li>
                                            <li>Battery Capacity: 2 Ah</li>
                                        </ul>
                                    </div>
                                    <div class="product-card__actions">
                                        <div class="product-card__availability">Availability: <span
                                                class="text-success">In Stock</span></div>
                                        <div class="product-card__prices">$15.00</div>
                                        <div class="product-card__buttons">
                                            <button class="btn btn-primary product-card__addtocart" type="button">Add To
                                                Cart
                                            </button>
                                            <button
                                                class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                                                type="button">Add To Cart
                                            </button>
                                            <button
                                                class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist"
                                                type="button">
                                                <svg height="16px" width="16px">
                                                    <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                </svg>
                                                <span class="fake-svg-icon fake-svg-icon--wishlist-16"></span></button>
                                            <button
                                                class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare"
                                                type="button">
                                                <svg height="16px" width="16px">
                                                    <use xlink:href="images/sprite.svg#compare-16"></use>
                                                </svg>
                                                <span class="fake-svg-icon fake-svg-icon--compare-16"></span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="block-products-carousel__column">
                            <div class="block-products-carousel__cell">
                                <div class="product-card">
                                    <button class="product-card__quickview" type="button">
                                        <svg height="16px" width="16px">
                                            <use xlink:href="images/sprite.svg#quickview-16"></use>
                                        </svg>
                                        <span class="fake-svg-icon"></span></button>
                                    <div class="product-card__image"><a href="product.html"><img
                                                alt="" src="images/products/product-9.jpg"></a></div>
                                    <div class="product-card__info">
                                        <div class="product-card__name"><a href="product.html">Spanner Wrench</a></div>
                                        <div class="product-card__rating">
                                            <div class="rating">
                                                <div class="rating__body">
                                                    <svg class="rating__star rating__star--active" height="12px"
                                                         width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star rating__star--active" height="12px"
                                                         width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star rating__star--active" height="12px"
                                                         width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star rating__star--active" height="12px"
                                                         width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star" height="12px" width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
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
                                            <div class="product-card__rating-legend">9 Reviews</div>
                                        </div>
                                        <ul class="product-card__features-list">
                                            <li>Speed: 750 RPM</li>
                                            <li>Power Source: Cordless-Electric</li>
                                            <li>Battery Cell Type: Lithium</li>
                                            <li>Voltage: 20 Volts</li>
                                            <li>Battery Capacity: 2 Ah</li>
                                        </ul>
                                    </div>
                                    <div class="product-card__actions">
                                        <div class="product-card__availability">Availability: <span
                                                class="text-success">In Stock</span></div>
                                        <div class="product-card__prices">$19.00</div>
                                        <div class="product-card__buttons">
                                            <button class="btn btn-primary product-card__addtocart" type="button">Add To
                                                Cart
                                            </button>
                                            <button
                                                class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                                                type="button">Add To Cart
                                            </button>
                                            <button
                                                class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist"
                                                type="button">
                                                <svg height="16px" width="16px">
                                                    <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                </svg>
                                                <span class="fake-svg-icon fake-svg-icon--wishlist-16"></span></button>
                                            <button
                                                class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare"
                                                type="button">
                                                <svg height="16px" width="16px">
                                                    <use xlink:href="images/sprite.svg#compare-16"></use>
                                                </svg>
                                                <span class="fake-svg-icon fake-svg-icon--compare-16"></span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="block-products-carousel__column">
                            <div class="block-products-carousel__cell">
                                <div class="product-card">
                                    <button class="product-card__quickview" type="button">
                                        <svg height="16px" width="16px">
                                            <use xlink:href="images/sprite.svg#quickview-16"></use>
                                        </svg>
                                        <span class="fake-svg-icon"></span></button>
                                    <div class="product-card__image"><a href="product.html"><img
                                                alt="" src="images/products/product-10.jpg"></a></div>
                                    <div class="product-card__info">
                                        <div class="product-card__name"><a href="product.html">Water Tap</a></div>
                                        <div class="product-card__rating">
                                            <div class="rating">
                                                <div class="rating__body">
                                                    <svg class="rating__star rating__star--active" height="12px"
                                                         width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star rating__star--active" height="12px"
                                                         width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star rating__star--active" height="12px"
                                                         width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star rating__star--active" height="12px"
                                                         width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star rating__star--active" height="12px"
                                                         width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-card__rating-legend">11 Reviews</div>
                                        </div>
                                        <ul class="product-card__features-list">
                                            <li>Speed: 750 RPM</li>
                                            <li>Power Source: Cordless-Electric</li>
                                            <li>Battery Cell Type: Lithium</li>
                                            <li>Voltage: 20 Volts</li>
                                            <li>Battery Capacity: 2 Ah</li>
                                        </ul>
                                    </div>
                                    <div class="product-card__actions">
                                        <div class="product-card__availability">Availability: <span
                                                class="text-success">In Stock</span></div>
                                        <div class="product-card__prices">$15.00</div>
                                        <div class="product-card__buttons">
                                            <button class="btn btn-primary product-card__addtocart" type="button">Add To
                                                Cart
                                            </button>
                                            <button
                                                class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                                                type="button">Add To Cart
                                            </button>
                                            <button
                                                class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist"
                                                type="button">
                                                <svg height="16px" width="16px">
                                                    <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                </svg>
                                                <span class="fake-svg-icon fake-svg-icon--wishlist-16"></span></button>
                                            <button
                                                class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare"
                                                type="button">
                                                <svg height="16px" width="16px">
                                                    <use xlink:href="images/sprite.svg#compare-16"></use>
                                                </svg>
                                                <span class="fake-svg-icon fake-svg-icon--compare-16"></span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="block-products-carousel__column">
                            <div class="block-products-carousel__cell">
                                <div class="product-card">
                                    <button class="product-card__quickview" type="button">
                                        <svg height="16px" width="16px">
                                            <use xlink:href="images/sprite.svg#quickview-16"></use>
                                        </svg>
                                        <span class="fake-svg-icon"></span></button>
                                    <div class="product-card__image"><a href="product.html"><img
                                                alt="" src="images/products/product-11.jpg"></a></div>
                                    <div class="product-card__info">
                                        <div class="product-card__name"><a href="product.html">Hand Tool Kit</a></div>
                                        <div class="product-card__rating">
                                            <div class="rating">
                                                <div class="rating__body">
                                                    <svg class="rating__star rating__star--active" height="12px"
                                                         width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star rating__star--active" height="12px"
                                                         width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star rating__star--active" height="12px"
                                                         width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star rating__star--active" height="12px"
                                                         width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star" height="12px" width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
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
                                            <div class="product-card__rating-legend">9 Reviews</div>
                                        </div>
                                        <ul class="product-card__features-list">
                                            <li>Speed: 750 RPM</li>
                                            <li>Power Source: Cordless-Electric</li>
                                            <li>Battery Cell Type: Lithium</li>
                                            <li>Voltage: 20 Volts</li>
                                            <li>Battery Capacity: 2 Ah</li>
                                        </ul>
                                    </div>
                                    <div class="product-card__actions">
                                        <div class="product-card__availability">Availability: <span
                                                class="text-success">In Stock</span></div>
                                        <div class="product-card__prices">$149.00</div>
                                        <div class="product-card__buttons">
                                            <button class="btn btn-primary product-card__addtocart" type="button">Add To
                                                Cart
                                            </button>
                                            <button
                                                class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                                                type="button">Add To Cart
                                            </button>
                                            <button
                                                class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist"
                                                type="button">
                                                <svg height="16px" width="16px">
                                                    <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                </svg>
                                                <span class="fake-svg-icon fake-svg-icon--wishlist-16"></span></button>
                                            <button
                                                class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare"
                                                type="button">
                                                <svg height="16px" width="16px">
                                                    <use xlink:href="images/sprite.svg#compare-16"></use>
                                                </svg>
                                                <span class="fake-svg-icon fake-svg-icon--compare-16"></span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="block-products-carousel__column">
                            <div class="block-products-carousel__cell">
                                <div class="product-card">
                                    <button class="product-card__quickview" type="button">
                                        <svg height="16px" width="16px">
                                            <use xlink:href="images/sprite.svg#quickview-16"></use>
                                        </svg>
                                        <span class="fake-svg-icon"></span></button>
                                    <div class="product-card__image"><a href="product.html"><img
                                                alt="" src="images/products/product-12.jpg"></a></div>
                                    <div class="product-card__info">
                                        <div class="product-card__name"><a href="product.html">Ash's Chainsaw 3.5kW</a>
                                        </div>
                                        <div class="product-card__rating">
                                            <div class="rating">
                                                <div class="rating__body">
                                                    <svg class="rating__star rating__star--active" height="12px"
                                                         width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star rating__star--active" height="12px"
                                                         width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star rating__star--active" height="12px"
                                                         width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star rating__star--active" height="12px"
                                                         width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star rating__star--active" height="12px"
                                                         width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-card__rating-legend">11 Reviews</div>
                                        </div>
                                        <ul class="product-card__features-list">
                                            <li>Speed: 750 RPM</li>
                                            <li>Power Source: Cordless-Electric</li>
                                            <li>Battery Cell Type: Lithium</li>
                                            <li>Voltage: 20 Volts</li>
                                            <li>Battery Capacity: 2 Ah</li>
                                        </ul>
                                    </div>
                                    <div class="product-card__actions">
                                        <div class="product-card__availability">Availability: <span
                                                class="text-success">In Stock</span></div>
                                        <div class="product-card__prices">$666.99</div>
                                        <div class="product-card__buttons">
                                            <button class="btn btn-primary product-card__addtocart" type="button">Add To
                                                Cart
                                            </button>
                                            <button
                                                class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                                                type="button">Add To Cart
                                            </button>
                                            <button
                                                class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist"
                                                type="button">
                                                <svg height="16px" width="16px">
                                                    <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                </svg>
                                                <span class="fake-svg-icon fake-svg-icon--wishlist-16"></span></button>
                                            <button
                                                class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare"
                                                type="button">
                                                <svg height="16px" width="16px">
                                                    <use xlink:href="images/sprite.svg#compare-16"></use>
                                                </svg>
                                                <span class="fake-svg-icon fake-svg-icon--compare-16"></span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="block-products-carousel__column">
                            <div class="block-products-carousel__cell">
                                <div class="product-card">
                                    <button class="product-card__quickview" type="button">
                                        <svg height="16px" width="16px">
                                            <use xlink:href="images/sprite.svg#quickview-16"></use>
                                        </svg>
                                        <span class="fake-svg-icon"></span></button>
                                    <div class="product-card__image"><a href="product.html"><img
                                                alt="" src="images/products/product-13.jpg"></a></div>
                                    <div class="product-card__info">
                                        <div class="product-card__name"><a href="product.html">Brandix Angle Grinder
                                                KZX3890PQW</a></div>
                                        <div class="product-card__rating">
                                            <div class="rating">
                                                <div class="rating__body">
                                                    <svg class="rating__star rating__star--active" height="12px"
                                                         width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star rating__star--active" height="12px"
                                                         width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star" height="12px" width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
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
                                                    <svg class="rating__star" height="12px" width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
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
                                                    <svg class="rating__star" height="12px" width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
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
                                            <div class="product-card__rating-legend">4 Reviews</div>
                                        </div>
                                        <ul class="product-card__features-list">
                                            <li>Speed: 750 RPM</li>
                                            <li>Power Source: Cordless-Electric</li>
                                            <li>Battery Cell Type: Lithium</li>
                                            <li>Voltage: 20 Volts</li>
                                            <li>Battery Capacity: 2 Ah</li>
                                        </ul>
                                    </div>
                                    <div class="product-card__actions">
                                        <div class="product-card__availability">Availability: <span
                                                class="text-success">In Stock</span></div>
                                        <div class="product-card__prices">$649.00</div>
                                        <div class="product-card__buttons">
                                            <button class="btn btn-primary product-card__addtocart" type="button">Add To
                                                Cart
                                            </button>
                                            <button
                                                class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                                                type="button">Add To Cart
                                            </button>
                                            <button
                                                class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist"
                                                type="button">
                                                <svg height="16px" width="16px">
                                                    <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                </svg>
                                                <span class="fake-svg-icon fake-svg-icon--wishlist-16"></span></button>
                                            <button
                                                class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare"
                                                type="button">
                                                <svg height="16px" width="16px">
                                                    <use xlink:href="images/sprite.svg#compare-16"></use>
                                                </svg>
                                                <span class="fake-svg-icon fake-svg-icon--compare-16"></span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="block-products-carousel__column">
                            <div class="block-products-carousel__cell">
                                <div class="product-card">
                                    <button class="product-card__quickview" type="button">
                                        <svg height="16px" width="16px">
                                            <use xlink:href="images/sprite.svg#quickview-16"></use>
                                        </svg>
                                        <span class="fake-svg-icon"></span></button>
                                    <div class="product-card__image"><a href="product.html"><img
                                                alt="" src="images/products/product-14.jpg"></a></div>
                                    <div class="product-card__info">
                                        <div class="product-card__name"><a href="product.html">Brandix Air Compressor
                                                DELTAKX500</a></div>
                                        <div class="product-card__rating">
                                            <div class="rating">
                                                <div class="rating__body">
                                                    <svg class="rating__star rating__star--active" height="12px"
                                                         width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star rating__star--active" height="12px"
                                                         width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star rating__star--active" height="12px"
                                                         width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star" height="12px" width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
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
                                                    <svg class="rating__star" height="12px" width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
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
                                            <div class="product-card__rating-legend">7 Reviews</div>
                                        </div>
                                        <ul class="product-card__features-list">
                                            <li>Speed: 750 RPM</li>
                                            <li>Power Source: Cordless-Electric</li>
                                            <li>Battery Cell Type: Lithium</li>
                                            <li>Voltage: 20 Volts</li>
                                            <li>Battery Capacity: 2 Ah</li>
                                        </ul>
                                    </div>
                                    <div class="product-card__actions">
                                        <div class="product-card__availability">Availability: <span
                                                class="text-success">In Stock</span></div>
                                        <div class="product-card__prices">$1,800.00</div>
                                        <div class="product-card__buttons">
                                            <button class="btn btn-primary product-card__addtocart" type="button">Add To
                                                Cart
                                            </button>
                                            <button
                                                class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                                                type="button">Add To Cart
                                            </button>
                                            <button
                                                class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist"
                                                type="button">
                                                <svg height="16px" width="16px">
                                                    <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                </svg>
                                                <span class="fake-svg-icon fake-svg-icon--wishlist-16"></span></button>
                                            <button
                                                class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare"
                                                type="button">
                                                <svg height="16px" width="16px">
                                                    <use xlink:href="images/sprite.svg#compare-16"></use>
                                                </svg>
                                                <span class="fake-svg-icon fake-svg-icon--compare-16"></span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="block-products-carousel__column">
                            <div class="block-products-carousel__cell">
                                <div class="product-card">
                                    <button class="product-card__quickview" type="button">
                                        <svg height="16px" width="16px">
                                            <use xlink:href="images/sprite.svg#quickview-16"></use>
                                        </svg>
                                        <span class="fake-svg-icon"></span></button>
                                    <div class="product-card__image"><a href="product.html"><img
                                                alt="" src="images/products/product-15.jpg"></a></div>
                                    <div class="product-card__info">
                                        <div class="product-card__name"><a href="product.html">Brandix Electric Jigsaw
                                                JIG7000BQ</a></div>
                                        <div class="product-card__rating">
                                            <div class="rating">
                                                <div class="rating__body">
                                                    <svg class="rating__star rating__star--active" height="12px"
                                                         width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star rating__star--active" height="12px"
                                                         width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star" height="12px" width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
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
                                                    <svg class="rating__star" height="12px" width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
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
                                                    <svg class="rating__star" height="12px" width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
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
                                            <div class="product-card__rating-legend">4 Reviews</div>
                                        </div>
                                        <ul class="product-card__features-list">
                                            <li>Speed: 750 RPM</li>
                                            <li>Power Source: Cordless-Electric</li>
                                            <li>Battery Cell Type: Lithium</li>
                                            <li>Voltage: 20 Volts</li>
                                            <li>Battery Capacity: 2 Ah</li>
                                        </ul>
                                    </div>
                                    <div class="product-card__actions">
                                        <div class="product-card__availability">Availability: <span
                                                class="text-success">In Stock</span></div>
                                        <div class="product-card__prices">$290.00</div>
                                        <div class="product-card__buttons">
                                            <button class="btn btn-primary product-card__addtocart" type="button">Add To
                                                Cart
                                            </button>
                                            <button
                                                class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                                                type="button">Add To Cart
                                            </button>
                                            <button
                                                class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist"
                                                type="button">
                                                <svg height="16px" width="16px">
                                                    <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                </svg>
                                                <span class="fake-svg-icon fake-svg-icon--wishlist-16"></span></button>
                                            <button
                                                class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare"
                                                type="button">
                                                <svg height="16px" width="16px">
                                                    <use xlink:href="images/sprite.svg#compare-16"></use>
                                                </svg>
                                                <span class="fake-svg-icon fake-svg-icon--compare-16"></span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="block-products-carousel__column">
                            <div class="block-products-carousel__cell">
                                <div class="product-card">
                                    <button class="product-card__quickview" type="button">
                                        <svg height="16px" width="16px">
                                            <use xlink:href="images/sprite.svg#quickview-16"></use>
                                        </svg>
                                        <span class="fake-svg-icon"></span></button>
                                    <div class="product-card__image"><a href="product.html"><img
                                                alt="" src="images/products/product-16.jpg"></a></div>
                                    <div class="product-card__info">
                                        <div class="product-card__name"><a href="product.html">Brandix Screwdriver
                                                SCREW1500ACC</a></div>
                                        <div class="product-card__rating">
                                            <div class="rating">
                                                <div class="rating__body">
                                                    <svg class="rating__star rating__star--active" height="12px"
                                                         width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star rating__star--active" height="12px"
                                                         width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star rating__star--active" height="12px"
                                                         width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star rating__star--active" height="12px"
                                                         width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star rating__star--active" height="12px"
                                                         width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-card__rating-legend">11 Reviews</div>
                                        </div>
                                        <ul class="product-card__features-list">
                                            <li>Speed: 750 RPM</li>
                                            <li>Power Source: Cordless-Electric</li>
                                            <li>Battery Cell Type: Lithium</li>
                                            <li>Voltage: 20 Volts</li>
                                            <li>Battery Capacity: 2 Ah</li>
                                        </ul>
                                    </div>
                                    <div class="product-card__actions">
                                        <div class="product-card__availability">Availability: <span
                                                class="text-success">In Stock</span></div>
                                        <div class="product-card__prices">$1,499.00</div>
                                        <div class="product-card__buttons">
                                            <button class="btn btn-primary product-card__addtocart" type="button">Add To
                                                Cart
                                            </button>
                                            <button
                                                class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                                                type="button">Add To Cart
                                            </button>
                                            <button
                                                class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist"
                                                type="button">
                                                <svg height="16px" width="16px">
                                                    <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                </svg>
                                                <span class="fake-svg-icon fake-svg-icon--wishlist-16"></span></button>
                                            <button
                                                class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare"
                                                type="button">
                                                <svg height="16px" width="16px">
                                                    <use xlink:href="images/sprite.svg#compare-16"></use>
                                                </svg>
                                                <span class="fake-svg-icon fake-svg-icon--compare-16"></span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- .block-products-carousel / end --><!-- .block-banner -->
        <div class="block block-banner">
            <div class="container"><a class="block-banner__body" href="#">
                    <div class="block-banner__image block-banner__image--desktop"
                         style="background-image: url('images/banners/banner-1.jpg')"></div>
                    <div class="block-banner__image block-banner__image--mobile"
                         style="background-image: url('images/banners/banner-1-mobile.jpg')"></div>
                    <div class="block-banner__title">Hundreds<br class="block-banner__mobile-br">Hand Tools</div>
                    <div class="block-banner__text">Hammers, Chisels, Universal Pliers, Nippers, Jigsaws, Saws</div>
                    <div class="block-banner__button"><span class="btn btn-sm btn-primary">Shop Now</span></div>
                </a></div>
        </div><!-- .block-banner / end --><!-- .block-products -->
        <div class="block block-products block-products--layout--large-first">
            <div class="container">
                <div class="block-header"><h3 class="block-header__title">Bestsellers</h3>
                    <div class="block-header__divider"></div>
                </div>
                <div class="block-products__body">
                    <div class="block-products__featured">
                        <div class="block-products__featured-item">
                            <div class="product-card">
                                <button class="product-card__quickview" type="button">
                                    <svg height="16px" width="16px">
                                        <use xlink:href="images/sprite.svg#quickview-16"></use>
                                    </svg>
                                    <span class="fake-svg-icon"></span></button>
                                <div class="product-card__badges-list">
                                    <div class="product-card__badge product-card__badge--new">New</div>
                                </div>
                                <div class="product-card__image"><a href="product.html"><img
                                            alt="" src="images/products/product-1.jpg"></a></div>
                                <div class="product-card__info">
                                    <div class="product-card__name"><a href="product.html">Electric Planer Brandix
                                            KL370090G 300 Watts</a></div>
                                    <div class="product-card__rating">
                                        <div class="rating">
                                            <div class="rating__body">
                                                <svg class="rating__star rating__star--active" height="12px"
                                                     width="13px">
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
                                                <svg class="rating__star rating__star--active" height="12px"
                                                     width="13px">
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
                                                <svg class="rating__star rating__star--active" height="12px"
                                                     width="13px">
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
                                                <svg class="rating__star rating__star--active" height="12px"
                                                     width="13px">
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
                                                <svg class="rating__star" height="12px" width="13px">
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
                                        <div class="product-card__rating-legend">9 Reviews</div>
                                    </div>
                                    <ul class="product-card__features-list">
                                        <li>Speed: 750 RPM</li>
                                        <li>Power Source: Cordless-Electric</li>
                                        <li>Battery Cell Type: Lithium</li>
                                        <li>Voltage: 20 Volts</li>
                                        <li>Battery Capacity: 2 Ah</li>
                                    </ul>
                                </div>
                                <div class="product-card__actions">
                                    <div class="product-card__availability">Availability: <span class="text-success">In Stock</span>
                                    </div>
                                    <div class="product-card__prices">$749.00</div>
                                    <div class="product-card__buttons">
                                        <button class="btn btn-primary product-card__addtocart" type="button">Add To
                                            Cart
                                        </button>
                                        <button
                                            class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                                            type="button">Add To Cart
                                        </button>
                                        <button
                                            class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist"
                                            type="button">
                                            <svg height="16px" width="16px">
                                                <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                            </svg>
                                            <span class="fake-svg-icon fake-svg-icon--wishlist-16"></span></button>
                                        <button
                                            class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare"
                                            type="button">
                                            <svg height="16px" width="16px">
                                                <use xlink:href="images/sprite.svg#compare-16"></use>
                                            </svg>
                                            <span class="fake-svg-icon fake-svg-icon--compare-16"></span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="block-products__list">
                        <div class="block-products__list-item">
                            <div class="product-card">
                                <button class="product-card__quickview" type="button">
                                    <svg height="16px" width="16px">
                                        <use xlink:href="images/sprite.svg#quickview-16"></use>
                                    </svg>
                                    <span class="fake-svg-icon"></span></button>
                                <div class="product-card__badges-list">
                                    <div class="product-card__badge product-card__badge--hot">Hot</div>
                                </div>
                                <div class="product-card__image"><a href="product.html"><img
                                            alt="" src="images/products/product-2.jpg"></a></div>
                                <div class="product-card__info">
                                    <div class="product-card__name"><a href="product.html">Undefined Tool IRadix
                                            DPS3000SY 2700 Watts</a></div>
                                    <div class="product-card__rating">
                                        <div class="rating">
                                            <div class="rating__body">
                                                <svg class="rating__star rating__star--active" height="12px"
                                                     width="13px">
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
                                                <svg class="rating__star rating__star--active" height="12px"
                                                     width="13px">
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
                                                <svg class="rating__star rating__star--active" height="12px"
                                                     width="13px">
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
                                                <svg class="rating__star rating__star--active" height="12px"
                                                     width="13px">
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
                                                <svg class="rating__star rating__star--active" height="12px"
                                                     width="13px">
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
                                        <div class="product-card__rating-legend">11 Reviews</div>
                                    </div>
                                    <ul class="product-card__features-list">
                                        <li>Speed: 750 RPM</li>
                                        <li>Power Source: Cordless-Electric</li>
                                        <li>Battery Cell Type: Lithium</li>
                                        <li>Voltage: 20 Volts</li>
                                        <li>Battery Capacity: 2 Ah</li>
                                    </ul>
                                </div>
                                <div class="product-card__actions">
                                    <div class="product-card__availability">Availability: <span class="text-success">In Stock</span>
                                    </div>
                                    <div class="product-card__prices">$1,019.00</div>
                                    <div class="product-card__buttons">
                                        <button class="btn btn-primary product-card__addtocart" type="button">Add To
                                            Cart
                                        </button>
                                        <button
                                            class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                                            type="button">Add To Cart
                                        </button>
                                        <button
                                            class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist"
                                            type="button">
                                            <svg height="16px" width="16px">
                                                <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                            </svg>
                                            <span class="fake-svg-icon fake-svg-icon--wishlist-16"></span></button>
                                        <button
                                            class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare"
                                            type="button">
                                            <svg height="16px" width="16px">
                                                <use xlink:href="images/sprite.svg#compare-16"></use>
                                            </svg>
                                            <span class="fake-svg-icon fake-svg-icon--compare-16"></span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="block-products__list-item">
                            <div class="product-card">
                                <button class="product-card__quickview" type="button">
                                    <svg height="16px" width="16px">
                                        <use xlink:href="images/sprite.svg#quickview-16"></use>
                                    </svg>
                                    <span class="fake-svg-icon"></span></button>
                                <div class="product-card__image"><a href="product.html"><img
                                            alt="" src="images/products/product-3.jpg"></a></div>
                                <div class="product-card__info">
                                    <div class="product-card__name"><a href="product.html">Drill Screwdriver Brandix
                                            ALX7054 200 Watts</a></div>
                                    <div class="product-card__rating">
                                        <div class="rating">
                                            <div class="rating__body">
                                                <svg class="rating__star rating__star--active" height="12px"
                                                     width="13px">
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
                                                <svg class="rating__star rating__star--active" height="12px"
                                                     width="13px">
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
                                                <svg class="rating__star rating__star--active" height="12px"
                                                     width="13px">
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
                                                <svg class="rating__star rating__star--active" height="12px"
                                                     width="13px">
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
                                                <svg class="rating__star" height="12px" width="13px">
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
                                        <div class="product-card__rating-legend">9 Reviews</div>
                                    </div>
                                    <ul class="product-card__features-list">
                                        <li>Speed: 750 RPM</li>
                                        <li>Power Source: Cordless-Electric</li>
                                        <li>Battery Cell Type: Lithium</li>
                                        <li>Voltage: 20 Volts</li>
                                        <li>Battery Capacity: 2 Ah</li>
                                    </ul>
                                </div>
                                <div class="product-card__actions">
                                    <div class="product-card__availability">Availability: <span class="text-success">In Stock</span>
                                    </div>
                                    <div class="product-card__prices">$850.00</div>
                                    <div class="product-card__buttons">
                                        <button class="btn btn-primary product-card__addtocart" type="button">Add To
                                            Cart
                                        </button>
                                        <button
                                            class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                                            type="button">Add To Cart
                                        </button>
                                        <button
                                            class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist"
                                            type="button">
                                            <svg height="16px" width="16px">
                                                <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                            </svg>
                                            <span class="fake-svg-icon fake-svg-icon--wishlist-16"></span></button>
                                        <button
                                            class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare"
                                            type="button">
                                            <svg height="16px" width="16px">
                                                <use xlink:href="images/sprite.svg#compare-16"></use>
                                            </svg>
                                            <span class="fake-svg-icon fake-svg-icon--compare-16"></span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="block-products__list-item">
                            <div class="product-card">
                                <button class="product-card__quickview" type="button">
                                    <svg height="16px" width="16px">
                                        <use xlink:href="images/sprite.svg#quickview-16"></use>
                                    </svg>
                                    <span class="fake-svg-icon"></span></button>
                                <div class="product-card__badges-list">
                                    <div class="product-card__badge product-card__badge--sale">Sale</div>
                                </div>
                                <div class="product-card__image"><a href="product.html"><img
                                            alt="" src="images/products/product-4.jpg"></a></div>
                                <div class="product-card__info">
                                    <div class="product-card__name"><a href="product.html">Drill Series 3 Brandix
                                            KSR4590PQS 1500 Watts</a></div>
                                    <div class="product-card__rating">
                                        <div class="rating">
                                            <div class="rating__body">
                                                <svg class="rating__star rating__star--active" height="12px"
                                                     width="13px">
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
                                                <svg class="rating__star rating__star--active" height="12px"
                                                     width="13px">
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
                                                <svg class="rating__star rating__star--active" height="12px"
                                                     width="13px">
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
                                                <svg class="rating__star" height="12px" width="13px">
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
                                                <svg class="rating__star" height="12px" width="13px">
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
                                        <div class="product-card__rating-legend">7 Reviews</div>
                                    </div>
                                    <ul class="product-card__features-list">
                                        <li>Speed: 750 RPM</li>
                                        <li>Power Source: Cordless-Electric</li>
                                        <li>Battery Cell Type: Lithium</li>
                                        <li>Voltage: 20 Volts</li>
                                        <li>Battery Capacity: 2 Ah</li>
                                    </ul>
                                </div>
                                <div class="product-card__actions">
                                    <div class="product-card__availability">Availability: <span class="text-success">In Stock</span>
                                    </div>
                                    <div class="product-card__prices"><span
                                            class="product-card__new-price">$949.00</span> <span
                                            class="product-card__old-price">$1189.00</span></div>
                                    <div class="product-card__buttons">
                                        <button class="btn btn-primary product-card__addtocart" type="button">Add To
                                            Cart
                                        </button>
                                        <button
                                            class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                                            type="button">Add To Cart
                                        </button>
                                        <button
                                            class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist"
                                            type="button">
                                            <svg height="16px" width="16px">
                                                <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                            </svg>
                                            <span class="fake-svg-icon fake-svg-icon--wishlist-16"></span></button>
                                        <button
                                            class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare"
                                            type="button">
                                            <svg height="16px" width="16px">
                                                <use xlink:href="images/sprite.svg#compare-16"></use>
                                            </svg>
                                            <span class="fake-svg-icon fake-svg-icon--compare-16"></span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="block-products__list-item">
                            <div class="product-card">
                                <button class="product-card__quickview" type="button">
                                    <svg height="16px" width="16px">
                                        <use xlink:href="images/sprite.svg#quickview-16"></use>
                                    </svg>
                                    <span class="fake-svg-icon"></span></button>
                                <div class="product-card__image"><a href="product.html"><img
                                            alt="" src="images/products/product-5.jpg"></a></div>
                                <div class="product-card__info">
                                    <div class="product-card__name"><a href="product.html">Brandix Router Power Tool
                                            2017ERXPK</a></div>
                                    <div class="product-card__rating">
                                        <div class="rating">
                                            <div class="rating__body">
                                                <svg class="rating__star rating__star--active" height="12px"
                                                     width="13px">
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
                                                <svg class="rating__star rating__star--active" height="12px"
                                                     width="13px">
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
                                                <svg class="rating__star rating__star--active" height="12px"
                                                     width="13px">
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
                                                <svg class="rating__star rating__star--active" height="12px"
                                                     width="13px">
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
                                                <svg class="rating__star" height="12px" width="13px">
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
                                        <div class="product-card__rating-legend">9 Reviews</div>
                                    </div>
                                    <ul class="product-card__features-list">
                                        <li>Speed: 750 RPM</li>
                                        <li>Power Source: Cordless-Electric</li>
                                        <li>Battery Cell Type: Lithium</li>
                                        <li>Voltage: 20 Volts</li>
                                        <li>Battery Capacity: 2 Ah</li>
                                    </ul>
                                </div>
                                <div class="product-card__actions">
                                    <div class="product-card__availability">Availability: <span class="text-success">In Stock</span>
                                    </div>
                                    <div class="product-card__prices">$1,700.00</div>
                                    <div class="product-card__buttons">
                                        <button class="btn btn-primary product-card__addtocart" type="button">Add To
                                            Cart
                                        </button>
                                        <button
                                            class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                                            type="button">Add To Cart
                                        </button>
                                        <button
                                            class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist"
                                            type="button">
                                            <svg height="16px" width="16px">
                                                <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                            </svg>
                                            <span class="fake-svg-icon fake-svg-icon--wishlist-16"></span></button>
                                        <button
                                            class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare"
                                            type="button">
                                            <svg height="16px" width="16px">
                                                <use xlink:href="images/sprite.svg#compare-16"></use>
                                            </svg>
                                            <span class="fake-svg-icon fake-svg-icon--compare-16"></span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="block-products__list-item">
                            <div class="product-card">
                                <button class="product-card__quickview" type="button">
                                    <svg height="16px" width="16px">
                                        <use xlink:href="images/sprite.svg#quickview-16"></use>
                                    </svg>
                                    <span class="fake-svg-icon"></span></button>
                                <div class="product-card__image"><a href="product.html"><img
                                            alt="" src="images/products/product-6.jpg"></a></div>
                                <div class="product-card__info">
                                    <div class="product-card__name"><a href="product.html">Brandix Drilling Machine
                                            DM2019KW4 4kW</a></div>
                                    <div class="product-card__rating">
                                        <div class="rating">
                                            <div class="rating__body">
                                                <svg class="rating__star rating__star--active" height="12px"
                                                     width="13px">
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
                                                <svg class="rating__star rating__star--active" height="12px"
                                                     width="13px">
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
                                                <svg class="rating__star rating__star--active" height="12px"
                                                     width="13px">
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
                                                <svg class="rating__star" height="12px" width="13px">
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
                                                <svg class="rating__star" height="12px" width="13px">
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
                                        <div class="product-card__rating-legend">7 Reviews</div>
                                    </div>
                                    <ul class="product-card__features-list">
                                        <li>Speed: 750 RPM</li>
                                        <li>Power Source: Cordless-Electric</li>
                                        <li>Battery Cell Type: Lithium</li>
                                        <li>Voltage: 20 Volts</li>
                                        <li>Battery Capacity: 2 Ah</li>
                                    </ul>
                                </div>
                                <div class="product-card__actions">
                                    <div class="product-card__availability">Availability: <span class="text-success">In Stock</span>
                                    </div>
                                    <div class="product-card__prices">$3,199.00</div>
                                    <div class="product-card__buttons">
                                        <button class="btn btn-primary product-card__addtocart" type="button">Add To
                                            Cart
                                        </button>
                                        <button
                                            class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                                            type="button">Add To Cart
                                        </button>
                                        <button
                                            class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist"
                                            type="button">
                                            <svg height="16px" width="16px">
                                                <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                            </svg>
                                            <span class="fake-svg-icon fake-svg-icon--wishlist-16"></span></button>
                                        <button
                                            class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare"
                                            type="button">
                                            <svg height="16px" width="16px">
                                                <use xlink:href="images/sprite.svg#compare-16"></use>
                                            </svg>
                                            <span class="fake-svg-icon fake-svg-icon--compare-16"></span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="block-products__list-item">
                            <div class="product-card">
                                <button class="product-card__quickview" type="button">
                                    <svg height="16px" width="16px">
                                        <use xlink:href="images/sprite.svg#quickview-16"></use>
                                    </svg>
                                    <span class="fake-svg-icon"></span></button>
                                <div class="product-card__image"><a href="product.html"><img
                                            alt="" src="images/products/product-7.jpg"></a></div>
                                <div class="product-card__info">
                                    <div class="product-card__name"><a href="product.html">Brandix Pliers</a></div>
                                    <div class="product-card__rating">
                                        <div class="rating">
                                            <div class="rating__body">
                                                <svg class="rating__star rating__star--active" height="12px"
                                                     width="13px">
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
                                                <svg class="rating__star rating__star--active" height="12px"
                                                     width="13px">
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
                                                <svg class="rating__star" height="12px" width="13px">
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
                                                <svg class="rating__star" height="12px" width="13px">
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
                                                <svg class="rating__star" height="12px" width="13px">
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
                                        <div class="product-card__rating-legend">4 Reviews</div>
                                    </div>
                                    <ul class="product-card__features-list">
                                        <li>Speed: 750 RPM</li>
                                        <li>Power Source: Cordless-Electric</li>
                                        <li>Battery Cell Type: Lithium</li>
                                        <li>Voltage: 20 Volts</li>
                                        <li>Battery Capacity: 2 Ah</li>
                                    </ul>
                                </div>
                                <div class="product-card__actions">
                                    <div class="product-card__availability">Availability: <span class="text-success">In Stock</span>
                                    </div>
                                    <div class="product-card__prices">$24.00</div>
                                    <div class="product-card__buttons">
                                        <button class="btn btn-primary product-card__addtocart" type="button">Add To
                                            Cart
                                        </button>
                                        <button
                                            class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                                            type="button">Add To Cart
                                        </button>
                                        <button
                                            class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist"
                                            type="button">
                                            <svg height="16px" width="16px">
                                                <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                            </svg>
                                            <span class="fake-svg-icon fake-svg-icon--wishlist-16"></span></button>
                                        <button
                                            class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare"
                                            type="button">
                                            <svg height="16px" width="16px">
                                                <use xlink:href="images/sprite.svg#compare-16"></use>
                                            </svg>
                                            <span class="fake-svg-icon fake-svg-icon--compare-16"></span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- .block-products / end --><!-- .block-categories -->
        <div class="block block--highlighted block-categories block-categories--layout--classic">
            <div class="container">
                <div class="block-header"><h3 class="block-header__title">Popular Categories</h3>
                    <div class="block-header__divider"></div>
                </div>
                <div class="block-categories__list">
                    <div class="block-categories__item category-card category-card--layout--classic">
                        <div class="category-card__body">
                            <div class="category-card__image"><a href="#"><img alt=""
                                                                               src="images/categories/category-1.jpg"></a>
                            </div>
                            <div class="category-card__content">
                                <div class="category-card__name"><a href="#">Power Tools</a></div>
                                <ul class="category-card__links">
                                    <li><a href="#">Screwdrivers</a></li>
                                    <li><a href="#">Milling Cutters</a></li>
                                    <li><a href="#">Sanding Machines</a></li>
                                    <li><a href="#">Wrenches</a></li>
                                    <li><a href="#">Drills</a></li>
                                </ul>
                                <div class="category-card__all"><a href="#">Show All</a></div>
                                <div class="category-card__products">572 Products</div>
                            </div>
                        </div>
                    </div>
                    <div class="block-categories__item category-card category-card--layout--classic">
                        <div class="category-card__body">
                            <div class="category-card__image"><a href="#"><img alt=""
                                                                               src="images/categories/category-2.jpg"></a>
                            </div>
                            <div class="category-card__content">
                                <div class="category-card__name"><a href="#">Hand Tools</a></div>
                                <ul class="category-card__links">
                                    <li><a href="#">Screwdrivers</a></li>
                                    <li><a href="#">Hammers</a></li>
                                    <li><a href="#">Spanners</a></li>
                                    <li><a href="#">Handsaws</a></li>
                                    <li><a href="#">Paint Tools</a></li>
                                </ul>
                                <div class="category-card__all"><a href="#">Show All</a></div>
                                <div class="category-card__products">134 Products</div>
                            </div>
                        </div>
                    </div>
                    <div class="block-categories__item category-card category-card--layout--classic">
                        <div class="category-card__body">
                            <div class="category-card__image"><a href="#"><img alt=""
                                                                               src="images/categories/category-4.jpg"></a>
                            </div>
                            <div class="category-card__content">
                                <div class="category-card__name"><a href="#">Machine Tools</a></div>
                                <ul class="category-card__links">
                                    <li><a href="#">Lathes</a></li>
                                    <li><a href="#">Milling Machines</a></li>
                                    <li><a href="#">Grinding Machines</a></li>
                                    <li><a href="#">CNC Machines</a></li>
                                    <li><a href="#">Sharpening Machines</a></li>
                                </ul>
                                <div class="category-card__all"><a href="#">Show All</a></div>
                                <div class="category-card__products">301 Products</div>
                            </div>
                        </div>
                    </div>
                    <div class="block-categories__item category-card category-card--layout--classic">
                        <div class="category-card__body">
                            <div class="category-card__image"><a href="#"><img alt=""
                                                                               src="images/categories/category-3.jpg"></a>
                            </div>
                            <div class="category-card__content">
                                <div class="category-card__name"><a href="#">Power Machinery</a></div>
                                <ul class="category-card__links">
                                    <li><a href="#">Generators</a></li>
                                    <li><a href="#">Compressors</a></li>
                                    <li><a href="#">Winches</a></li>
                                    <li><a href="#">Plasma Cutting</a></li>
                                    <li><a href="#">Electric Motors</a></li>
                                </ul>
                                <div class="category-card__all"><a href="#">Show All</a></div>
                                <div class="category-card__products">79 Products</div>
                            </div>
                        </div>
                    </div>
                    <div class="block-categories__item category-card category-card--layout--classic">
                        <div class="category-card__body">
                            <div class="category-card__image"><a href="#"><img alt=""
                                                                               src="images/categories/category-5.jpg"></a>
                            </div>
                            <div class="category-card__content">
                                <div class="category-card__name"><a href="#">Measurement</a></div>
                                <ul class="category-card__links">
                                    <li><a href="#">Tape Measure</a></li>
                                    <li><a href="#">Theodolites</a></li>
                                    <li><a href="#">Thermal Imagers</a></li>
                                    <li><a href="#">Calipers</a></li>
                                    <li><a href="#">Levels</a></li>
                                </ul>
                                <div class="category-card__all"><a href="#">Show All</a></div>
                                <div class="category-card__products">366 Products</div>
                            </div>
                        </div>
                    </div>
                    <div class="block-categories__item category-card category-card--layout--classic">
                        <div class="category-card__body">
                            <div class="category-card__image"><a href="#"><img alt=""
                                                                               src="images/categories/category-6.jpg"></a>
                            </div>
                            <div class="category-card__content">
                                <div class="category-card__name"><a href="#">Clothes and PPE</a></div>
                                <ul class="category-card__links">
                                    <li><a href="#">Winter Workwear</a></li>
                                    <li><a href="#">Summer Workwear</a></li>
                                    <li><a href="#">Helmets</a></li>
                                    <li><a href="#">Belts and Bags</a></li>
                                    <li><a href="#">Work Shoes</a></li>
                                </ul>
                                <div class="category-card__all"><a href="#">Show All</a></div>
                                <div class="category-card__products">81 Products</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- .block-categories / end --><!-- .block-products-carousel -->
        <div class="block block-products-carousel" data-layout="horizontal">
            <div class="container">
                <div class="block-header"><h3 class="block-header__title">New Arrivals</h3>
                    <div class="block-header__divider"></div>
                    <ul class="block-header__groups-list">
                        <li>
                            <button class="block-header__group block-header__group--active" type="button">All</button>
                        </li>
                        <li>
                            <button class="block-header__group" type="button">Power Tools</button>
                        </li>
                        <li>
                            <button class="block-header__group" type="button">Hand Tools</button>
                        </li>
                        <li>
                            <button class="block-header__group" type="button">Plumbing</button>
                        </li>
                    </ul>
                    <div class="block-header__arrows-list">
                        <button class="block-header__arrow block-header__arrow--left" type="button">
                            <svg height="11px" width="7px">
                                <use xlink:href="images/sprite.svg#arrow-rounded-left-7x11"></use>
                            </svg>
                        </button>
                        <button class="block-header__arrow block-header__arrow--right" type="button">
                            <svg height="11px" width="7px">
                                <use xlink:href="images/sprite.svg#arrow-rounded-right-7x11"></use>
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="block-products-carousel__slider">
                    <div class="block-products-carousel__preloader"></div>
                    <div class="owl-carousel">
                        <div class="block-products-carousel__column">
                            <div class="block-products-carousel__cell">
                                <div class="product-card">
                                    <button class="product-card__quickview" type="button">
                                        <svg height="16px" width="16px">
                                            <use xlink:href="images/sprite.svg#quickview-16"></use>
                                        </svg>
                                        <span class="fake-svg-icon"></span></button>
                                    <div class="product-card__badges-list">
                                        <div class="product-card__badge product-card__badge--new">New</div>
                                    </div>
                                    <div class="product-card__image"><a href="product.html"><img
                                                alt="" src="images/products/product-1.jpg"></a></div>
                                    <div class="product-card__info">
                                        <div class="product-card__name"><a href="product.html">Electric Planer Brandix
                                                KL370090G 300 Watts</a></div>
                                        <div class="product-card__rating">
                                            <div class="rating">
                                                <div class="rating__body">
                                                    <svg class="rating__star rating__star--active" height="12px"
                                                         width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star rating__star--active" height="12px"
                                                         width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star rating__star--active" height="12px"
                                                         width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star rating__star--active" height="12px"
                                                         width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star" height="12px" width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
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
                                            <div class="product-card__rating-legend">9 Reviews</div>
                                        </div>
                                        <ul class="product-card__features-list">
                                            <li>Speed: 750 RPM</li>
                                            <li>Power Source: Cordless-Electric</li>
                                            <li>Battery Cell Type: Lithium</li>
                                            <li>Voltage: 20 Volts</li>
                                            <li>Battery Capacity: 2 Ah</li>
                                        </ul>
                                    </div>
                                    <div class="product-card__actions">
                                        <div class="product-card__availability">Availability: <span
                                                class="text-success">In Stock</span></div>
                                        <div class="product-card__prices">$749.00</div>
                                        <div class="product-card__buttons">
                                            <button class="btn btn-primary product-card__addtocart" type="button">Add To
                                                Cart
                                            </button>
                                            <button
                                                class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                                                type="button">Add To Cart
                                            </button>
                                            <button
                                                class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist"
                                                type="button">
                                                <svg height="16px" width="16px">
                                                    <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                </svg>
                                                <span class="fake-svg-icon fake-svg-icon--wishlist-16"></span></button>
                                            <button
                                                class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare"
                                                type="button">
                                                <svg height="16px" width="16px">
                                                    <use xlink:href="images/sprite.svg#compare-16"></use>
                                                </svg>
                                                <span class="fake-svg-icon fake-svg-icon--compare-16"></span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="block-products-carousel__cell">
                                <div class="product-card">
                                    <button class="product-card__quickview" type="button">
                                        <svg height="16px" width="16px">
                                            <use xlink:href="images/sprite.svg#quickview-16"></use>
                                        </svg>
                                        <span class="fake-svg-icon"></span></button>
                                    <div class="product-card__badges-list">
                                        <div class="product-card__badge product-card__badge--hot">Hot</div>
                                    </div>
                                    <div class="product-card__image"><a href="product.html"><img
                                                alt="" src="images/products/product-2.jpg"></a></div>
                                    <div class="product-card__info">
                                        <div class="product-card__name"><a href="product.html">Undefined Tool IRadix
                                                DPS3000SY 2700 Watts</a></div>
                                        <div class="product-card__rating">
                                            <div class="rating">
                                                <div class="rating__body">
                                                    <svg class="rating__star rating__star--active" height="12px"
                                                         width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star rating__star--active" height="12px"
                                                         width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star rating__star--active" height="12px"
                                                         width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star rating__star--active" height="12px"
                                                         width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star rating__star--active" height="12px"
                                                         width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-card__rating-legend">11 Reviews</div>
                                        </div>
                                        <ul class="product-card__features-list">
                                            <li>Speed: 750 RPM</li>
                                            <li>Power Source: Cordless-Electric</li>
                                            <li>Battery Cell Type: Lithium</li>
                                            <li>Voltage: 20 Volts</li>
                                            <li>Battery Capacity: 2 Ah</li>
                                        </ul>
                                    </div>
                                    <div class="product-card__actions">
                                        <div class="product-card__availability">Availability: <span
                                                class="text-success">In Stock</span></div>
                                        <div class="product-card__prices">$1,019.00</div>
                                        <div class="product-card__buttons">
                                            <button class="btn btn-primary product-card__addtocart" type="button">Add To
                                                Cart
                                            </button>
                                            <button
                                                class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                                                type="button">Add To Cart
                                            </button>
                                            <button
                                                class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist"
                                                type="button">
                                                <svg height="16px" width="16px">
                                                    <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                </svg>
                                                <span class="fake-svg-icon fake-svg-icon--wishlist-16"></span></button>
                                            <button
                                                class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare"
                                                type="button">
                                                <svg height="16px" width="16px">
                                                    <use xlink:href="images/sprite.svg#compare-16"></use>
                                                </svg>
                                                <span class="fake-svg-icon fake-svg-icon--compare-16"></span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="block-products-carousel__column">
                            <div class="block-products-carousel__cell">
                                <div class="product-card">
                                    <button class="product-card__quickview" type="button">
                                        <svg height="16px" width="16px">
                                            <use xlink:href="images/sprite.svg#quickview-16"></use>
                                        </svg>
                                        <span class="fake-svg-icon"></span></button>
                                    <div class="product-card__image"><a href="product.html"><img
                                                alt="" src="images/products/product-3.jpg"></a></div>
                                    <div class="product-card__info">
                                        <div class="product-card__name"><a href="product.html">Drill Screwdriver Brandix
                                                ALX7054 200 Watts</a></div>
                                        <div class="product-card__rating">
                                            <div class="rating">
                                                <div class="rating__body">
                                                    <svg class="rating__star rating__star--active" height="12px"
                                                         width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star rating__star--active" height="12px"
                                                         width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star rating__star--active" height="12px"
                                                         width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star rating__star--active" height="12px"
                                                         width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star" height="12px" width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
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
                                            <div class="product-card__rating-legend">9 Reviews</div>
                                        </div>
                                        <ul class="product-card__features-list">
                                            <li>Speed: 750 RPM</li>
                                            <li>Power Source: Cordless-Electric</li>
                                            <li>Battery Cell Type: Lithium</li>
                                            <li>Voltage: 20 Volts</li>
                                            <li>Battery Capacity: 2 Ah</li>
                                        </ul>
                                    </div>
                                    <div class="product-card__actions">
                                        <div class="product-card__availability">Availability: <span
                                                class="text-success">In Stock</span></div>
                                        <div class="product-card__prices">$850.00</div>
                                        <div class="product-card__buttons">
                                            <button class="btn btn-primary product-card__addtocart" type="button">Add To
                                                Cart
                                            </button>
                                            <button
                                                class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                                                type="button">Add To Cart
                                            </button>
                                            <button
                                                class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist"
                                                type="button">
                                                <svg height="16px" width="16px">
                                                    <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                </svg>
                                                <span class="fake-svg-icon fake-svg-icon--wishlist-16"></span></button>
                                            <button
                                                class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare"
                                                type="button">
                                                <svg height="16px" width="16px">
                                                    <use xlink:href="images/sprite.svg#compare-16"></use>
                                                </svg>
                                                <span class="fake-svg-icon fake-svg-icon--compare-16"></span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="block-products-carousel__cell">
                                <div class="product-card">
                                    <button class="product-card__quickview" type="button">
                                        <svg height="16px" width="16px">
                                            <use xlink:href="images/sprite.svg#quickview-16"></use>
                                        </svg>
                                        <span class="fake-svg-icon"></span></button>
                                    <div class="product-card__badges-list">
                                        <div class="product-card__badge product-card__badge--sale">Sale</div>
                                    </div>
                                    <div class="product-card__image"><a href="product.html"><img
                                                alt="" src="images/products/product-4.jpg"></a></div>
                                    <div class="product-card__info">
                                        <div class="product-card__name"><a href="product.html">Drill Series 3 Brandix
                                                KSR4590PQS 1500 Watts</a></div>
                                        <div class="product-card__rating">
                                            <div class="rating">
                                                <div class="rating__body">
                                                    <svg class="rating__star rating__star--active" height="12px"
                                                         width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star rating__star--active" height="12px"
                                                         width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star rating__star--active" height="12px"
                                                         width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star" height="12px" width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
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
                                                    <svg class="rating__star" height="12px" width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
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
                                            <div class="product-card__rating-legend">7 Reviews</div>
                                        </div>
                                        <ul class="product-card__features-list">
                                            <li>Speed: 750 RPM</li>
                                            <li>Power Source: Cordless-Electric</li>
                                            <li>Battery Cell Type: Lithium</li>
                                            <li>Voltage: 20 Volts</li>
                                            <li>Battery Capacity: 2 Ah</li>
                                        </ul>
                                    </div>
                                    <div class="product-card__actions">
                                        <div class="product-card__availability">Availability: <span
                                                class="text-success">In Stock</span></div>
                                        <div class="product-card__prices"><span
                                                class="product-card__new-price">$949.00</span> <span
                                                class="product-card__old-price">$1189.00</span></div>
                                        <div class="product-card__buttons">
                                            <button class="btn btn-primary product-card__addtocart" type="button">Add To
                                                Cart
                                            </button>
                                            <button
                                                class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                                                type="button">Add To Cart
                                            </button>
                                            <button
                                                class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist"
                                                type="button">
                                                <svg height="16px" width="16px">
                                                    <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                </svg>
                                                <span class="fake-svg-icon fake-svg-icon--wishlist-16"></span></button>
                                            <button
                                                class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare"
                                                type="button">
                                                <svg height="16px" width="16px">
                                                    <use xlink:href="images/sprite.svg#compare-16"></use>
                                                </svg>
                                                <span class="fake-svg-icon fake-svg-icon--compare-16"></span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="block-products-carousel__column">
                            <div class="block-products-carousel__cell">
                                <div class="product-card">
                                    <button class="product-card__quickview" type="button">
                                        <svg height="16px" width="16px">
                                            <use xlink:href="images/sprite.svg#quickview-16"></use>
                                        </svg>
                                        <span class="fake-svg-icon"></span></button>
                                    <div class="product-card__image"><a href="product.html"><img
                                                alt="" src="images/products/product-5.jpg"></a></div>
                                    <div class="product-card__info">
                                        <div class="product-card__name"><a href="product.html">Brandix Router Power Tool
                                                2017ERXPK</a></div>
                                        <div class="product-card__rating">
                                            <div class="rating">
                                                <div class="rating__body">
                                                    <svg class="rating__star rating__star--active" height="12px"
                                                         width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star rating__star--active" height="12px"
                                                         width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star rating__star--active" height="12px"
                                                         width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star rating__star--active" height="12px"
                                                         width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star" height="12px" width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
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
                                            <div class="product-card__rating-legend">9 Reviews</div>
                                        </div>
                                        <ul class="product-card__features-list">
                                            <li>Speed: 750 RPM</li>
                                            <li>Power Source: Cordless-Electric</li>
                                            <li>Battery Cell Type: Lithium</li>
                                            <li>Voltage: 20 Volts</li>
                                            <li>Battery Capacity: 2 Ah</li>
                                        </ul>
                                    </div>
                                    <div class="product-card__actions">
                                        <div class="product-card__availability">Availability: <span
                                                class="text-success">In Stock</span></div>
                                        <div class="product-card__prices">$1,700.00</div>
                                        <div class="product-card__buttons">
                                            <button class="btn btn-primary product-card__addtocart" type="button">Add To
                                                Cart
                                            </button>
                                            <button
                                                class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                                                type="button">Add To Cart
                                            </button>
                                            <button
                                                class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist"
                                                type="button">
                                                <svg height="16px" width="16px">
                                                    <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                </svg>
                                                <span class="fake-svg-icon fake-svg-icon--wishlist-16"></span></button>
                                            <button
                                                class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare"
                                                type="button">
                                                <svg height="16px" width="16px">
                                                    <use xlink:href="images/sprite.svg#compare-16"></use>
                                                </svg>
                                                <span class="fake-svg-icon fake-svg-icon--compare-16"></span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="block-products-carousel__cell">
                                <div class="product-card">
                                    <button class="product-card__quickview" type="button">
                                        <svg height="16px" width="16px">
                                            <use xlink:href="images/sprite.svg#quickview-16"></use>
                                        </svg>
                                        <span class="fake-svg-icon"></span></button>
                                    <div class="product-card__image"><a href="product.html"><img
                                                alt="" src="images/products/product-6.jpg"></a></div>
                                    <div class="product-card__info">
                                        <div class="product-card__name"><a href="product.html">Brandix Drilling Machine
                                                DM2019KW4 4kW</a></div>
                                        <div class="product-card__rating">
                                            <div class="rating">
                                                <div class="rating__body">
                                                    <svg class="rating__star rating__star--active" height="12px"
                                                         width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star rating__star--active" height="12px"
                                                         width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star rating__star--active" height="12px"
                                                         width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star" height="12px" width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
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
                                                    <svg class="rating__star" height="12px" width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
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
                                            <div class="product-card__rating-legend">7 Reviews</div>
                                        </div>
                                        <ul class="product-card__features-list">
                                            <li>Speed: 750 RPM</li>
                                            <li>Power Source: Cordless-Electric</li>
                                            <li>Battery Cell Type: Lithium</li>
                                            <li>Voltage: 20 Volts</li>
                                            <li>Battery Capacity: 2 Ah</li>
                                        </ul>
                                    </div>
                                    <div class="product-card__actions">
                                        <div class="product-card__availability">Availability: <span
                                                class="text-success">In Stock</span></div>
                                        <div class="product-card__prices">$3,199.00</div>
                                        <div class="product-card__buttons">
                                            <button class="btn btn-primary product-card__addtocart" type="button">Add To
                                                Cart
                                            </button>
                                            <button
                                                class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                                                type="button">Add To Cart
                                            </button>
                                            <button
                                                class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist"
                                                type="button">
                                                <svg height="16px" width="16px">
                                                    <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                </svg>
                                                <span class="fake-svg-icon fake-svg-icon--wishlist-16"></span></button>
                                            <button
                                                class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare"
                                                type="button">
                                                <svg height="16px" width="16px">
                                                    <use xlink:href="images/sprite.svg#compare-16"></use>
                                                </svg>
                                                <span class="fake-svg-icon fake-svg-icon--compare-16"></span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="block-products-carousel__column">
                            <div class="block-products-carousel__cell">
                                <div class="product-card">
                                    <button class="product-card__quickview" type="button">
                                        <svg height="16px" width="16px">
                                            <use xlink:href="images/sprite.svg#quickview-16"></use>
                                        </svg>
                                        <span class="fake-svg-icon"></span></button>
                                    <div class="product-card__image"><a href="product.html"><img
                                                alt="" src="images/products/product-7.jpg"></a></div>
                                    <div class="product-card__info">
                                        <div class="product-card__name"><a href="product.html">Brandix Pliers</a></div>
                                        <div class="product-card__rating">
                                            <div class="rating">
                                                <div class="rating__body">
                                                    <svg class="rating__star rating__star--active" height="12px"
                                                         width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star rating__star--active" height="12px"
                                                         width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star" height="12px" width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
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
                                                    <svg class="rating__star" height="12px" width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
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
                                                    <svg class="rating__star" height="12px" width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
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
                                            <div class="product-card__rating-legend">4 Reviews</div>
                                        </div>
                                        <ul class="product-card__features-list">
                                            <li>Speed: 750 RPM</li>
                                            <li>Power Source: Cordless-Electric</li>
                                            <li>Battery Cell Type: Lithium</li>
                                            <li>Voltage: 20 Volts</li>
                                            <li>Battery Capacity: 2 Ah</li>
                                        </ul>
                                    </div>
                                    <div class="product-card__actions">
                                        <div class="product-card__availability">Availability: <span
                                                class="text-success">In Stock</span></div>
                                        <div class="product-card__prices">$24.00</div>
                                        <div class="product-card__buttons">
                                            <button class="btn btn-primary product-card__addtocart" type="button">Add To
                                                Cart
                                            </button>
                                            <button
                                                class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                                                type="button">Add To Cart
                                            </button>
                                            <button
                                                class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist"
                                                type="button">
                                                <svg height="16px" width="16px">
                                                    <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                </svg>
                                                <span class="fake-svg-icon fake-svg-icon--wishlist-16"></span></button>
                                            <button
                                                class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare"
                                                type="button">
                                                <svg height="16px" width="16px">
                                                    <use xlink:href="images/sprite.svg#compare-16"></use>
                                                </svg>
                                                <span class="fake-svg-icon fake-svg-icon--compare-16"></span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="block-products-carousel__cell">
                                <div class="product-card">
                                    <button class="product-card__quickview" type="button">
                                        <svg height="16px" width="16px">
                                            <use xlink:href="images/sprite.svg#quickview-16"></use>
                                        </svg>
                                        <span class="fake-svg-icon"></span></button>
                                    <div class="product-card__image"><a href="product.html"><img
                                                alt="" src="images/products/product-8.jpg"></a></div>
                                    <div class="product-card__info">
                                        <div class="product-card__name"><a href="product.html">Water Hose 40cm</a></div>
                                        <div class="product-card__rating">
                                            <div class="rating">
                                                <div class="rating__body">
                                                    <svg class="rating__star rating__star--active" height="12px"
                                                         width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star rating__star--active" height="12px"
                                                         width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star" height="12px" width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
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
                                                    <svg class="rating__star" height="12px" width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
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
                                                    <svg class="rating__star" height="12px" width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
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
                                            <div class="product-card__rating-legend">4 Reviews</div>
                                        </div>
                                        <ul class="product-card__features-list">
                                            <li>Speed: 750 RPM</li>
                                            <li>Power Source: Cordless-Electric</li>
                                            <li>Battery Cell Type: Lithium</li>
                                            <li>Voltage: 20 Volts</li>
                                            <li>Battery Capacity: 2 Ah</li>
                                        </ul>
                                    </div>
                                    <div class="product-card__actions">
                                        <div class="product-card__availability">Availability: <span
                                                class="text-success">In Stock</span></div>
                                        <div class="product-card__prices">$15.00</div>
                                        <div class="product-card__buttons">
                                            <button class="btn btn-primary product-card__addtocart" type="button">Add To
                                                Cart
                                            </button>
                                            <button
                                                class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                                                type="button">Add To Cart
                                            </button>
                                            <button
                                                class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist"
                                                type="button">
                                                <svg height="16px" width="16px">
                                                    <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                </svg>
                                                <span class="fake-svg-icon fake-svg-icon--wishlist-16"></span></button>
                                            <button
                                                class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare"
                                                type="button">
                                                <svg height="16px" width="16px">
                                                    <use xlink:href="images/sprite.svg#compare-16"></use>
                                                </svg>
                                                <span class="fake-svg-icon fake-svg-icon--compare-16"></span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="block-products-carousel__column">
                            <div class="block-products-carousel__cell">
                                <div class="product-card">
                                    <button class="product-card__quickview" type="button">
                                        <svg height="16px" width="16px">
                                            <use xlink:href="images/sprite.svg#quickview-16"></use>
                                        </svg>
                                        <span class="fake-svg-icon"></span></button>
                                    <div class="product-card__image"><a href="product.html"><img
                                                alt="" src="images/products/product-9.jpg"></a></div>
                                    <div class="product-card__info">
                                        <div class="product-card__name"><a href="product.html">Spanner Wrench</a></div>
                                        <div class="product-card__rating">
                                            <div class="rating">
                                                <div class="rating__body">
                                                    <svg class="rating__star rating__star--active" height="12px"
                                                         width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star rating__star--active" height="12px"
                                                         width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star rating__star--active" height="12px"
                                                         width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star rating__star--active" height="12px"
                                                         width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star" height="12px" width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
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
                                            <div class="product-card__rating-legend">9 Reviews</div>
                                        </div>
                                        <ul class="product-card__features-list">
                                            <li>Speed: 750 RPM</li>
                                            <li>Power Source: Cordless-Electric</li>
                                            <li>Battery Cell Type: Lithium</li>
                                            <li>Voltage: 20 Volts</li>
                                            <li>Battery Capacity: 2 Ah</li>
                                        </ul>
                                    </div>
                                    <div class="product-card__actions">
                                        <div class="product-card__availability">Availability: <span
                                                class="text-success">In Stock</span></div>
                                        <div class="product-card__prices">$19.00</div>
                                        <div class="product-card__buttons">
                                            <button class="btn btn-primary product-card__addtocart" type="button">Add To
                                                Cart
                                            </button>
                                            <button
                                                class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                                                type="button">Add To Cart
                                            </button>
                                            <button
                                                class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist"
                                                type="button">
                                                <svg height="16px" width="16px">
                                                    <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                </svg>
                                                <span class="fake-svg-icon fake-svg-icon--wishlist-16"></span></button>
                                            <button
                                                class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare"
                                                type="button">
                                                <svg height="16px" width="16px">
                                                    <use xlink:href="images/sprite.svg#compare-16"></use>
                                                </svg>
                                                <span class="fake-svg-icon fake-svg-icon--compare-16"></span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="block-products-carousel__cell">
                                <div class="product-card">
                                    <button class="product-card__quickview" type="button">
                                        <svg height="16px" width="16px">
                                            <use xlink:href="images/sprite.svg#quickview-16"></use>
                                        </svg>
                                        <span class="fake-svg-icon"></span></button>
                                    <div class="product-card__image"><a href="product.html"><img
                                                alt="" src="images/products/product-10.jpg"></a></div>
                                    <div class="product-card__info">
                                        <div class="product-card__name"><a href="product.html">Water Tap</a></div>
                                        <div class="product-card__rating">
                                            <div class="rating">
                                                <div class="rating__body">
                                                    <svg class="rating__star rating__star--active" height="12px"
                                                         width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star rating__star--active" height="12px"
                                                         width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star rating__star--active" height="12px"
                                                         width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star rating__star--active" height="12px"
                                                         width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star rating__star--active" height="12px"
                                                         width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-card__rating-legend">11 Reviews</div>
                                        </div>
                                        <ul class="product-card__features-list">
                                            <li>Speed: 750 RPM</li>
                                            <li>Power Source: Cordless-Electric</li>
                                            <li>Battery Cell Type: Lithium</li>
                                            <li>Voltage: 20 Volts</li>
                                            <li>Battery Capacity: 2 Ah</li>
                                        </ul>
                                    </div>
                                    <div class="product-card__actions">
                                        <div class="product-card__availability">Availability: <span
                                                class="text-success">In Stock</span></div>
                                        <div class="product-card__prices">$15.00</div>
                                        <div class="product-card__buttons">
                                            <button class="btn btn-primary product-card__addtocart" type="button">Add To
                                                Cart
                                            </button>
                                            <button
                                                class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                                                type="button">Add To Cart
                                            </button>
                                            <button
                                                class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist"
                                                type="button">
                                                <svg height="16px" width="16px">
                                                    <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                </svg>
                                                <span class="fake-svg-icon fake-svg-icon--wishlist-16"></span></button>
                                            <button
                                                class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare"
                                                type="button">
                                                <svg height="16px" width="16px">
                                                    <use xlink:href="images/sprite.svg#compare-16"></use>
                                                </svg>
                                                <span class="fake-svg-icon fake-svg-icon--compare-16"></span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="block-products-carousel__column">
                            <div class="block-products-carousel__cell">
                                <div class="product-card">
                                    <button class="product-card__quickview" type="button">
                                        <svg height="16px" width="16px">
                                            <use xlink:href="images/sprite.svg#quickview-16"></use>
                                        </svg>
                                        <span class="fake-svg-icon"></span></button>
                                    <div class="product-card__image"><a href="product.html"><img
                                                alt="" src="images/products/product-11.jpg"></a></div>
                                    <div class="product-card__info">
                                        <div class="product-card__name"><a href="product.html">Hand Tool Kit</a></div>
                                        <div class="product-card__rating">
                                            <div class="rating">
                                                <div class="rating__body">
                                                    <svg class="rating__star rating__star--active" height="12px"
                                                         width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star rating__star--active" height="12px"
                                                         width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star rating__star--active" height="12px"
                                                         width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star rating__star--active" height="12px"
                                                         width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star" height="12px" width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
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
                                            <div class="product-card__rating-legend">9 Reviews</div>
                                        </div>
                                        <ul class="product-card__features-list">
                                            <li>Speed: 750 RPM</li>
                                            <li>Power Source: Cordless-Electric</li>
                                            <li>Battery Cell Type: Lithium</li>
                                            <li>Voltage: 20 Volts</li>
                                            <li>Battery Capacity: 2 Ah</li>
                                        </ul>
                                    </div>
                                    <div class="product-card__actions">
                                        <div class="product-card__availability">Availability: <span
                                                class="text-success">In Stock</span></div>
                                        <div class="product-card__prices">$149.00</div>
                                        <div class="product-card__buttons">
                                            <button class="btn btn-primary product-card__addtocart" type="button">Add To
                                                Cart
                                            </button>
                                            <button
                                                class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                                                type="button">Add To Cart
                                            </button>
                                            <button
                                                class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist"
                                                type="button">
                                                <svg height="16px" width="16px">
                                                    <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                </svg>
                                                <span class="fake-svg-icon fake-svg-icon--wishlist-16"></span></button>
                                            <button
                                                class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare"
                                                type="button">
                                                <svg height="16px" width="16px">
                                                    <use xlink:href="images/sprite.svg#compare-16"></use>
                                                </svg>
                                                <span class="fake-svg-icon fake-svg-icon--compare-16"></span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="block-products-carousel__cell">
                                <div class="product-card">
                                    <button class="product-card__quickview" type="button">
                                        <svg height="16px" width="16px">
                                            <use xlink:href="images/sprite.svg#quickview-16"></use>
                                        </svg>
                                        <span class="fake-svg-icon"></span></button>
                                    <div class="product-card__image"><a href="product.html"><img
                                                alt="" src="images/products/product-12.jpg"></a></div>
                                    <div class="product-card__info">
                                        <div class="product-card__name"><a href="product.html">Ash's Chainsaw 3.5kW</a>
                                        </div>
                                        <div class="product-card__rating">
                                            <div class="rating">
                                                <div class="rating__body">
                                                    <svg class="rating__star rating__star--active" height="12px"
                                                         width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star rating__star--active" height="12px"
                                                         width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star rating__star--active" height="12px"
                                                         width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star rating__star--active" height="12px"
                                                         width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star rating__star--active" height="12px"
                                                         width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-card__rating-legend">11 Reviews</div>
                                        </div>
                                        <ul class="product-card__features-list">
                                            <li>Speed: 750 RPM</li>
                                            <li>Power Source: Cordless-Electric</li>
                                            <li>Battery Cell Type: Lithium</li>
                                            <li>Voltage: 20 Volts</li>
                                            <li>Battery Capacity: 2 Ah</li>
                                        </ul>
                                    </div>
                                    <div class="product-card__actions">
                                        <div class="product-card__availability">Availability: <span
                                                class="text-success">In Stock</span></div>
                                        <div class="product-card__prices">$666.99</div>
                                        <div class="product-card__buttons">
                                            <button class="btn btn-primary product-card__addtocart" type="button">Add To
                                                Cart
                                            </button>
                                            <button
                                                class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                                                type="button">Add To Cart
                                            </button>
                                            <button
                                                class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist"
                                                type="button">
                                                <svg height="16px" width="16px">
                                                    <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                </svg>
                                                <span class="fake-svg-icon fake-svg-icon--wishlist-16"></span></button>
                                            <button
                                                class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare"
                                                type="button">
                                                <svg height="16px" width="16px">
                                                    <use xlink:href="images/sprite.svg#compare-16"></use>
                                                </svg>
                                                <span class="fake-svg-icon fake-svg-icon--compare-16"></span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="block-products-carousel__column">
                            <div class="block-products-carousel__cell">
                                <div class="product-card">
                                    <button class="product-card__quickview" type="button">
                                        <svg height="16px" width="16px">
                                            <use xlink:href="images/sprite.svg#quickview-16"></use>
                                        </svg>
                                        <span class="fake-svg-icon"></span></button>
                                    <div class="product-card__image"><a href="product.html"><img
                                                alt="" src="images/products/product-13.jpg"></a></div>
                                    <div class="product-card__info">
                                        <div class="product-card__name"><a href="product.html">Brandix Angle Grinder
                                                KZX3890PQW</a></div>
                                        <div class="product-card__rating">
                                            <div class="rating">
                                                <div class="rating__body">
                                                    <svg class="rating__star rating__star--active" height="12px"
                                                         width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star rating__star--active" height="12px"
                                                         width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star" height="12px" width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
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
                                                    <svg class="rating__star" height="12px" width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
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
                                                    <svg class="rating__star" height="12px" width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
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
                                            <div class="product-card__rating-legend">4 Reviews</div>
                                        </div>
                                        <ul class="product-card__features-list">
                                            <li>Speed: 750 RPM</li>
                                            <li>Power Source: Cordless-Electric</li>
                                            <li>Battery Cell Type: Lithium</li>
                                            <li>Voltage: 20 Volts</li>
                                            <li>Battery Capacity: 2 Ah</li>
                                        </ul>
                                    </div>
                                    <div class="product-card__actions">
                                        <div class="product-card__availability">Availability: <span
                                                class="text-success">In Stock</span></div>
                                        <div class="product-card__prices">$649.00</div>
                                        <div class="product-card__buttons">
                                            <button class="btn btn-primary product-card__addtocart" type="button">Add To
                                                Cart
                                            </button>
                                            <button
                                                class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                                                type="button">Add To Cart
                                            </button>
                                            <button
                                                class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist"
                                                type="button">
                                                <svg height="16px" width="16px">
                                                    <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                </svg>
                                                <span class="fake-svg-icon fake-svg-icon--wishlist-16"></span></button>
                                            <button
                                                class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare"
                                                type="button">
                                                <svg height="16px" width="16px">
                                                    <use xlink:href="images/sprite.svg#compare-16"></use>
                                                </svg>
                                                <span class="fake-svg-icon fake-svg-icon--compare-16"></span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="block-products-carousel__cell">
                                <div class="product-card">
                                    <button class="product-card__quickview" type="button">
                                        <svg height="16px" width="16px">
                                            <use xlink:href="images/sprite.svg#quickview-16"></use>
                                        </svg>
                                        <span class="fake-svg-icon"></span></button>
                                    <div class="product-card__image"><a href="product.html"><img
                                                alt="" src="images/products/product-14.jpg"></a></div>
                                    <div class="product-card__info">
                                        <div class="product-card__name"><a href="product.html">Brandix Air Compressor
                                                DELTAKX500</a></div>
                                        <div class="product-card__rating">
                                            <div class="rating">
                                                <div class="rating__body">
                                                    <svg class="rating__star rating__star--active" height="12px"
                                                         width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star rating__star--active" height="12px"
                                                         width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star rating__star--active" height="12px"
                                                         width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star" height="12px" width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
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
                                                    <svg class="rating__star" height="12px" width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
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
                                            <div class="product-card__rating-legend">7 Reviews</div>
                                        </div>
                                        <ul class="product-card__features-list">
                                            <li>Speed: 750 RPM</li>
                                            <li>Power Source: Cordless-Electric</li>
                                            <li>Battery Cell Type: Lithium</li>
                                            <li>Voltage: 20 Volts</li>
                                            <li>Battery Capacity: 2 Ah</li>
                                        </ul>
                                    </div>
                                    <div class="product-card__actions">
                                        <div class="product-card__availability">Availability: <span
                                                class="text-success">In Stock</span></div>
                                        <div class="product-card__prices">$1,800.00</div>
                                        <div class="product-card__buttons">
                                            <button class="btn btn-primary product-card__addtocart" type="button">Add To
                                                Cart
                                            </button>
                                            <button
                                                class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                                                type="button">Add To Cart
                                            </button>
                                            <button
                                                class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist"
                                                type="button">
                                                <svg height="16px" width="16px">
                                                    <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                </svg>
                                                <span class="fake-svg-icon fake-svg-icon--wishlist-16"></span></button>
                                            <button
                                                class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare"
                                                type="button">
                                                <svg height="16px" width="16px">
                                                    <use xlink:href="images/sprite.svg#compare-16"></use>
                                                </svg>
                                                <span class="fake-svg-icon fake-svg-icon--compare-16"></span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="block-products-carousel__column">
                            <div class="block-products-carousel__cell">
                                <div class="product-card">
                                    <button class="product-card__quickview" type="button">
                                        <svg height="16px" width="16px">
                                            <use xlink:href="images/sprite.svg#quickview-16"></use>
                                        </svg>
                                        <span class="fake-svg-icon"></span></button>
                                    <div class="product-card__image"><a href="product.html"><img
                                                alt="" src="images/products/product-15.jpg"></a></div>
                                    <div class="product-card__info">
                                        <div class="product-card__name"><a href="product.html">Brandix Electric Jigsaw
                                                JIG7000BQ</a></div>
                                        <div class="product-card__rating">
                                            <div class="rating">
                                                <div class="rating__body">
                                                    <svg class="rating__star rating__star--active" height="12px"
                                                         width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star rating__star--active" height="12px"
                                                         width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star" height="12px" width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
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
                                                    <svg class="rating__star" height="12px" width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
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
                                                    <svg class="rating__star" height="12px" width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
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
                                            <div class="product-card__rating-legend">4 Reviews</div>
                                        </div>
                                        <ul class="product-card__features-list">
                                            <li>Speed: 750 RPM</li>
                                            <li>Power Source: Cordless-Electric</li>
                                            <li>Battery Cell Type: Lithium</li>
                                            <li>Voltage: 20 Volts</li>
                                            <li>Battery Capacity: 2 Ah</li>
                                        </ul>
                                    </div>
                                    <div class="product-card__actions">
                                        <div class="product-card__availability">Availability: <span
                                                class="text-success">In Stock</span></div>
                                        <div class="product-card__prices">$290.00</div>
                                        <div class="product-card__buttons">
                                            <button class="btn btn-primary product-card__addtocart" type="button">Add To
                                                Cart
                                            </button>
                                            <button
                                                class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                                                type="button">Add To Cart
                                            </button>
                                            <button
                                                class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist"
                                                type="button">
                                                <svg height="16px" width="16px">
                                                    <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                </svg>
                                                <span class="fake-svg-icon fake-svg-icon--wishlist-16"></span></button>
                                            <button
                                                class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare"
                                                type="button">
                                                <svg height="16px" width="16px">
                                                    <use xlink:href="images/sprite.svg#compare-16"></use>
                                                </svg>
                                                <span class="fake-svg-icon fake-svg-icon--compare-16"></span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="block-products-carousel__cell">
                                <div class="product-card">
                                    <button class="product-card__quickview" type="button">
                                        <svg height="16px" width="16px">
                                            <use xlink:href="images/sprite.svg#quickview-16"></use>
                                        </svg>
                                        <span class="fake-svg-icon"></span></button>
                                    <div class="product-card__image"><a href="product.html"><img
                                                alt="" src="images/products/product-16.jpg"></a></div>
                                    <div class="product-card__info">
                                        <div class="product-card__name"><a href="product.html">Brandix Screwdriver
                                                SCREW1500ACC</a></div>
                                        <div class="product-card__rating">
                                            <div class="rating">
                                                <div class="rating__body">
                                                    <svg class="rating__star rating__star--active" height="12px"
                                                         width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star rating__star--active" height="12px"
                                                         width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star rating__star--active" height="12px"
                                                         width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star rating__star--active" height="12px"
                                                         width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star rating__star--active" height="12px"
                                                         width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-card__rating-legend">11 Reviews</div>
                                        </div>
                                        <ul class="product-card__features-list">
                                            <li>Speed: 750 RPM</li>
                                            <li>Power Source: Cordless-Electric</li>
                                            <li>Battery Cell Type: Lithium</li>
                                            <li>Voltage: 20 Volts</li>
                                            <li>Battery Capacity: 2 Ah</li>
                                        </ul>
                                    </div>
                                    <div class="product-card__actions">
                                        <div class="product-card__availability">Availability: <span
                                                class="text-success">In Stock</span></div>
                                        <div class="product-card__prices">$1,499.00</div>
                                        <div class="product-card__buttons">
                                            <button class="btn btn-primary product-card__addtocart" type="button">Add To
                                                Cart
                                            </button>
                                            <button
                                                class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                                                type="button">Add To Cart
                                            </button>
                                            <button
                                                class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist"
                                                type="button">
                                                <svg height="16px" width="16px">
                                                    <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                </svg>
                                                <span class="fake-svg-icon fake-svg-icon--wishlist-16"></span></button>
                                            <button
                                                class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare"
                                                type="button">
                                                <svg height="16px" width="16px">
                                                    <use xlink:href="images/sprite.svg#compare-16"></use>
                                                </svg>
                                                <span class="fake-svg-icon fake-svg-icon--compare-16"></span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- .block-products-carousel / end --><!-- .block-posts -->
        <div class="block block-posts block-posts--layout--list-sm" data-layout="list-sm">
            <div class="container">
                <div class="block-header"><h3 class="block-header__title">Latest News</h3>
                    <div class="block-header__divider"></div>
                    <div class="block-header__arrows-list">
                        <button class="block-header__arrow block-header__arrow--left" type="button">
                            <svg height="11px" width="7px">
                                <use xlink:href="images/sprite.svg#arrow-rounded-left-7x11"></use>
                            </svg>
                        </button>
                        <button class="block-header__arrow block-header__arrow--right" type="button">
                            <svg height="11px" width="7px">
                                <use xlink:href="images/sprite.svg#arrow-rounded-right-7x11"></use>
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="block-posts__slider">
                    <div class="owl-carousel">
                        <div class="post-card">
                            <div class="post-card__image"><a href="#"><img alt="" src="images/posts/post-1.jpg"></a>
                            </div>
                            <div class="post-card__info">
                                <div class="post-card__category"><a href="#">Special Offers</a></div>
                                <div class="post-card__name"><a href="#">Philosophy That Addresses Topics Such As
                                        Goodness</a></div>
                                <div class="post-card__date">October 19, 2019</div>
                                <div class="post-card__content">In one general sense, philosophy is associated with
                                    wisdom, intellectual culture and a search for knowledge. In that sense, all
                                    cultures...
                                </div>
                                <div class="post-card__read-more"><a class="btn btn-secondary btn-sm" href="#">Read
                                        More</a></div>
                            </div>
                        </div>
                        <div class="post-card">
                            <div class="post-card__image"><a href="#"><img alt="" src="images/posts/post-2.jpg"></a>
                            </div>
                            <div class="post-card__info">
                                <div class="post-card__category"><a href="#">Latest News</a></div>
                                <div class="post-card__name"><a href="#">Logic Is The Study Of Reasoning And Argument
                                        Part 2</a></div>
                                <div class="post-card__date">September 5, 2019</div>
                                <div class="post-card__content">In one general sense, philosophy is associated with
                                    wisdom, intellectual culture and a search for knowledge. In that sense, all
                                    cultures...
                                </div>
                                <div class="post-card__read-more"><a class="btn btn-secondary btn-sm" href="#">Read
                                        More</a></div>
                            </div>
                        </div>
                        <div class="post-card">
                            <div class="post-card__image"><a href="#"><img alt="" src="images/posts/post-3.jpg"></a>
                            </div>
                            <div class="post-card__info">
                                <div class="post-card__category"><a href="#">New Arrivals</a></div>
                                <div class="post-card__name"><a href="#">Some Philosophers Specialize In One Or More
                                        Historical Periods</a></div>
                                <div class="post-card__date">August 12, 2019</div>
                                <div class="post-card__content">In one general sense, philosophy is associated with
                                    wisdom, intellectual culture and a search for knowledge. In that sense, all
                                    cultures...
                                </div>
                                <div class="post-card__read-more"><a class="btn btn-secondary btn-sm" href="#">Read
                                        More</a></div>
                            </div>
                        </div>
                        <div class="post-card">
                            <div class="post-card__image"><a href="#"><img alt="" src="images/posts/post-4.jpg"></a>
                            </div>
                            <div class="post-card__info">
                                <div class="post-card__category"><a href="#">Special Offers</a></div>
                                <div class="post-card__name"><a href="#">A Variety Of Other Academic And Non-Academic
                                        Approaches Have Been Explored</a></div>
                                <div class="post-card__date">Jule 30, 2019</div>
                                <div class="post-card__content">In one general sense, philosophy is associated with
                                    wisdom, intellectual culture and a search for knowledge. In that sense, all
                                    cultures...
                                </div>
                                <div class="post-card__read-more"><a class="btn btn-secondary btn-sm" href="#">Read
                                        More</a></div>
                            </div>
                        </div>
                        <div class="post-card">
                            <div class="post-card__image"><a href="#"><img alt="" src="images/posts/post-5.jpg"></a>
                            </div>
                            <div class="post-card__info">
                                <div class="post-card__category"><a href="#">New Arrivals</a></div>
                                <div class="post-card__name"><a href="#">Germany Was The First Country To
                                        Professionalize Philosophy</a></div>
                                <div class="post-card__date">June 12, 2019</div>
                                <div class="post-card__content">In one general sense, philosophy is associated with
                                    wisdom, intellectual culture and a search for knowledge. In that sense, all
                                    cultures...
                                </div>
                                <div class="post-card__read-more"><a class="btn btn-secondary btn-sm" href="#">Read
                                        More</a></div>
                            </div>
                        </div>
                        <div class="post-card">
                            <div class="post-card__image"><a href="#"><img alt="" src="images/posts/post-6.jpg"></a>
                            </div>
                            <div class="post-card__info">
                                <div class="post-card__category"><a href="#">Special Offers</a></div>
                                <div class="post-card__name"><a href="#">Logic Is The Study Of Reasoning And Argument
                                        Part 1</a></div>
                                <div class="post-card__date">May 21, 2019</div>
                                <div class="post-card__content">In one general sense, philosophy is associated with
                                    wisdom, intellectual culture and a search for knowledge. In that sense, all
                                    cultures...
                                </div>
                                <div class="post-card__read-more"><a class="btn btn-secondary btn-sm" href="#">Read
                                        More</a></div>
                            </div>
                        </div>
                        <div class="post-card">
                            <div class="post-card__image"><a href="#"><img alt="" src="images/posts/post-7.jpg"></a>
                            </div>
                            <div class="post-card__info">
                                <div class="post-card__category"><a href="#">Special Offers</a></div>
                                <div class="post-card__name"><a href="#">Many Inquiries Outside Of Academia Are
                                        Philosophical In The Broad Sense</a></div>
                                <div class="post-card__date">April 3, 2019</div>
                                <div class="post-card__content">In one general sense, philosophy is associated with
                                    wisdom, intellectual culture and a search for knowledge. In that sense, all
                                    cultures...
                                </div>
                                <div class="post-card__read-more"><a class="btn btn-secondary btn-sm" href="#">Read
                                        More</a></div>
                            </div>
                        </div>
                        <div class="post-card">
                            <div class="post-card__image"><a href="#"><img alt="" src="images/posts/post-8.jpg"></a>
                            </div>
                            <div class="post-card__info">
                                <div class="post-card__category"><a href="#">Latest News</a></div>
                                <div class="post-card__name"><a href="#">An Advantage Of Digital Circuits When Compared
                                        To Analog Circuits</a></div>
                                <div class="post-card__date">Mart 29, 2019</div>
                                <div class="post-card__content">In one general sense, philosophy is associated with
                                    wisdom, intellectual culture and a search for knowledge. In that sense, all
                                    cultures...
                                </div>
                                <div class="post-card__read-more"><a class="btn btn-secondary btn-sm" href="#">Read
                                        More</a></div>
                            </div>
                        </div>
                        <div class="post-card">
                            <div class="post-card__image"><a href="#"><img alt="" src="images/posts/post-9.jpg"></a>
                            </div>
                            <div class="post-card__info">
                                <div class="post-card__category"><a href="#">New Arrivals</a></div>
                                <div class="post-card__name"><a href="#">A Digital Circuit Is Typically Constructed From
                                        Small Electronic Circuits</a></div>
                                <div class="post-card__date">February 10, 2019</div>
                                <div class="post-card__content">In one general sense, philosophy is associated with
                                    wisdom, intellectual culture and a search for knowledge. In that sense, all
                                    cultures...
                                </div>
                                <div class="post-card__read-more"><a class="btn btn-secondary btn-sm" href="#">Read
                                        More</a></div>
                            </div>
                        </div>
                        <div class="post-card">
                            <div class="post-card__image"><a href="#"><img alt="" src="images/posts/post-10.jpg"></a>
                            </div>
                            <div class="post-card__info">
                                <div class="post-card__category"><a href="#">Special Offers</a></div>
                                <div class="post-card__name"><a href="#">Engineers Use Many Methods To Minimize Logic
                                        Functions</a></div>
                                <div class="post-card__date">January 1, 2019</div>
                                <div class="post-card__content">In one general sense, philosophy is associated with
                                    wisdom, intellectual culture and a search for knowledge. In that sense, all
                                    cultures...
                                </div>
                                <div class="post-card__read-more"><a class="btn btn-secondary btn-sm" href="#">Read
                                        More</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- .block-posts / end --><!-- .block-brands -->
        <div class="block block-brands">
            <div class="container">
                <div class="block-brands__slider">
                    <div class="owl-carousel">
                        <div class="block-brands__item"><a href="#"><img alt="" src="images/logos/logo-1.png"></a></div>
                        <div class="block-brands__item"><a href="#"><img alt="" src="images/logos/logo-2.png"></a></div>
                        <div class="block-brands__item"><a href="#"><img alt="" src="images/logos/logo-3.png"></a></div>
                        <div class="block-brands__item"><a href="#"><img alt="" src="images/logos/logo-4.png"></a></div>
                        <div class="block-brands__item"><a href="#"><img alt="" src="images/logos/logo-5.png"></a></div>
                        <div class="block-brands__item"><a href="#"><img alt="" src="images/logos/logo-6.png"></a></div>
                        <div class="block-brands__item"><a href="#"><img alt="" src="images/logos/logo-7.png"></a></div>
                    </div>
                </div>
            </div>
        </div><!-- .block-brands / end --><!-- .block-product-columns -->
        <div class="block block-product-columns d-lg-block d-none">
            <div class="container">
                <div class="row">
                    <div class="col-4">
                        <div class="block-header"><h3 class="block-header__title">Top Rated Products</h3>
                            <div class="block-header__divider"></div>
                        </div>
                        <div class="block-product-columns__column">
                            <div class="block-product-columns__item">
                                <div class="product-card product-card--layout--horizontal">
                                    <button class="product-card__quickview" type="button">
                                        <svg height="16px" width="16px">
                                            <use xlink:href="images/sprite.svg#quickview-16"></use>
                                        </svg>
                                        <span class="fake-svg-icon"></span></button>
                                    <div class="product-card__badges-list">
                                        <div class="product-card__badge product-card__badge--new">New</div>
                                    </div>
                                    <div class="product-card__image"><a href="product.html"><img
                                                alt="" src="images/products/product-1.jpg"></a></div>
                                    <div class="product-card__info">
                                        <div class="product-card__name"><a href="product.html">Electric Planer Brandix
                                                KL370090G 300 Watts</a></div>
                                        <div class="product-card__rating">
                                            <div class="rating">
                                                <div class="rating__body">
                                                    <svg class="rating__star rating__star--active" height="12px"
                                                         width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star rating__star--active" height="12px"
                                                         width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star rating__star--active" height="12px"
                                                         width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star rating__star--active" height="12px"
                                                         width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star" height="12px" width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
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
                                            <div class="product-card__rating-legend">9 Reviews</div>
                                        </div>
                                        <ul class="product-card__features-list">
                                            <li>Speed: 750 RPM</li>
                                            <li>Power Source: Cordless-Electric</li>
                                            <li>Battery Cell Type: Lithium</li>
                                            <li>Voltage: 20 Volts</li>
                                            <li>Battery Capacity: 2 Ah</li>
                                        </ul>
                                    </div>
                                    <div class="product-card__actions">
                                        <div class="product-card__availability">Availability: <span
                                                class="text-success">In Stock</span></div>
                                        <div class="product-card__prices">$749.00</div>
                                        <div class="product-card__buttons">
                                            <button class="btn btn-primary product-card__addtocart" type="button">Add To
                                                Cart
                                            </button>
                                            <button
                                                class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                                                type="button">Add To Cart
                                            </button>
                                            <button
                                                class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist"
                                                type="button">
                                                <svg height="16px" width="16px">
                                                    <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                </svg>
                                                <span class="fake-svg-icon fake-svg-icon--wishlist-16"></span></button>
                                            <button
                                                class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare"
                                                type="button">
                                                <svg height="16px" width="16px">
                                                    <use xlink:href="images/sprite.svg#compare-16"></use>
                                                </svg>
                                                <span class="fake-svg-icon fake-svg-icon--compare-16"></span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="block-product-columns__item">
                                <div class="product-card product-card--layout--horizontal">
                                    <button class="product-card__quickview" type="button">
                                        <svg height="16px" width="16px">
                                            <use xlink:href="images/sprite.svg#quickview-16"></use>
                                        </svg>
                                        <span class="fake-svg-icon"></span></button>
                                    <div class="product-card__badges-list">
                                        <div class="product-card__badge product-card__badge--hot">Hot</div>
                                    </div>
                                    <div class="product-card__image"><a href="product.html"><img
                                                alt="" src="images/products/product-2.jpg"></a></div>
                                    <div class="product-card__info">
                                        <div class="product-card__name"><a href="product.html">Undefined Tool IRadix
                                                DPS3000SY 2700 Watts</a></div>
                                        <div class="product-card__rating">
                                            <div class="rating">
                                                <div class="rating__body">
                                                    <svg class="rating__star rating__star--active" height="12px"
                                                         width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star rating__star--active" height="12px"
                                                         width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star rating__star--active" height="12px"
                                                         width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star rating__star--active" height="12px"
                                                         width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star rating__star--active" height="12px"
                                                         width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-card__rating-legend">11 Reviews</div>
                                        </div>
                                        <ul class="product-card__features-list">
                                            <li>Speed: 750 RPM</li>
                                            <li>Power Source: Cordless-Electric</li>
                                            <li>Battery Cell Type: Lithium</li>
                                            <li>Voltage: 20 Volts</li>
                                            <li>Battery Capacity: 2 Ah</li>
                                        </ul>
                                    </div>
                                    <div class="product-card__actions">
                                        <div class="product-card__availability">Availability: <span
                                                class="text-success">In Stock</span></div>
                                        <div class="product-card__prices">$1,019.00</div>
                                        <div class="product-card__buttons">
                                            <button class="btn btn-primary product-card__addtocart" type="button">Add To
                                                Cart
                                            </button>
                                            <button
                                                class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                                                type="button">Add To Cart
                                            </button>
                                            <button
                                                class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist"
                                                type="button">
                                                <svg height="16px" width="16px">
                                                    <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                </svg>
                                                <span class="fake-svg-icon fake-svg-icon--wishlist-16"></span></button>
                                            <button
                                                class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare"
                                                type="button">
                                                <svg height="16px" width="16px">
                                                    <use xlink:href="images/sprite.svg#compare-16"></use>
                                                </svg>
                                                <span class="fake-svg-icon fake-svg-icon--compare-16"></span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="block-product-columns__item">
                                <div class="product-card product-card--layout--horizontal">
                                    <button class="product-card__quickview" type="button">
                                        <svg height="16px" width="16px">
                                            <use xlink:href="images/sprite.svg#quickview-16"></use>
                                        </svg>
                                        <span class="fake-svg-icon"></span></button>
                                    <div class="product-card__image"><a href="product.html"><img
                                                alt="" src="images/products/product-3.jpg"></a></div>
                                    <div class="product-card__info">
                                        <div class="product-card__name"><a href="product.html">Drill Screwdriver Brandix
                                                ALX7054 200 Watts</a></div>
                                        <div class="product-card__rating">
                                            <div class="rating">
                                                <div class="rating__body">
                                                    <svg class="rating__star rating__star--active" height="12px"
                                                         width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star rating__star--active" height="12px"
                                                         width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star rating__star--active" height="12px"
                                                         width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star rating__star--active" height="12px"
                                                         width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star" height="12px" width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
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
                                            <div class="product-card__rating-legend">9 Reviews</div>
                                        </div>
                                        <ul class="product-card__features-list">
                                            <li>Speed: 750 RPM</li>
                                            <li>Power Source: Cordless-Electric</li>
                                            <li>Battery Cell Type: Lithium</li>
                                            <li>Voltage: 20 Volts</li>
                                            <li>Battery Capacity: 2 Ah</li>
                                        </ul>
                                    </div>
                                    <div class="product-card__actions">
                                        <div class="product-card__availability">Availability: <span
                                                class="text-success">In Stock</span></div>
                                        <div class="product-card__prices">$850.00</div>
                                        <div class="product-card__buttons">
                                            <button class="btn btn-primary product-card__addtocart" type="button">Add To
                                                Cart
                                            </button>
                                            <button
                                                class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                                                type="button">Add To Cart
                                            </button>
                                            <button
                                                class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist"
                                                type="button">
                                                <svg height="16px" width="16px">
                                                    <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                </svg>
                                                <span class="fake-svg-icon fake-svg-icon--wishlist-16"></span></button>
                                            <button
                                                class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare"
                                                type="button">
                                                <svg height="16px" width="16px">
                                                    <use xlink:href="images/sprite.svg#compare-16"></use>
                                                </svg>
                                                <span class="fake-svg-icon fake-svg-icon--compare-16"></span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="block-header"><h3 class="block-header__title">Special Offers</h3>
                            <div class="block-header__divider"></div>
                        </div>
                        <div class="block-product-columns__column">
                            <div class="block-product-columns__item">
                                <div class="product-card product-card--layout--horizontal">
                                    <button class="product-card__quickview" type="button">
                                        <svg height="16px" width="16px">
                                            <use xlink:href="images/sprite.svg#quickview-16"></use>
                                        </svg>
                                        <span class="fake-svg-icon"></span></button>
                                    <div class="product-card__badges-list">
                                        <div class="product-card__badge product-card__badge--sale">Sale</div>
                                    </div>
                                    <div class="product-card__image"><a href="product.html"><img
                                                alt="" src="images/products/product-4.jpg"></a></div>
                                    <div class="product-card__info">
                                        <div class="product-card__name"><a href="product.html">Drill Series 3 Brandix
                                                KSR4590PQS 1500 Watts</a></div>
                                        <div class="product-card__rating">
                                            <div class="rating">
                                                <div class="rating__body">
                                                    <svg class="rating__star rating__star--active" height="12px"
                                                         width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star rating__star--active" height="12px"
                                                         width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star rating__star--active" height="12px"
                                                         width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star" height="12px" width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
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
                                                    <svg class="rating__star" height="12px" width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
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
                                            <div class="product-card__rating-legend">7 Reviews</div>
                                        </div>
                                        <ul class="product-card__features-list">
                                            <li>Speed: 750 RPM</li>
                                            <li>Power Source: Cordless-Electric</li>
                                            <li>Battery Cell Type: Lithium</li>
                                            <li>Voltage: 20 Volts</li>
                                            <li>Battery Capacity: 2 Ah</li>
                                        </ul>
                                    </div>
                                    <div class="product-card__actions">
                                        <div class="product-card__availability">Availability: <span
                                                class="text-success">In Stock</span></div>
                                        <div class="product-card__prices"><span
                                                class="product-card__new-price">$949.00</span> <span
                                                class="product-card__old-price">$1189.00</span></div>
                                        <div class="product-card__buttons">
                                            <button class="btn btn-primary product-card__addtocart" type="button">Add To
                                                Cart
                                            </button>
                                            <button
                                                class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                                                type="button">Add To Cart
                                            </button>
                                            <button
                                                class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist"
                                                type="button">
                                                <svg height="16px" width="16px">
                                                    <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                </svg>
                                                <span class="fake-svg-icon fake-svg-icon--wishlist-16"></span></button>
                                            <button
                                                class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare"
                                                type="button">
                                                <svg height="16px" width="16px">
                                                    <use xlink:href="images/sprite.svg#compare-16"></use>
                                                </svg>
                                                <span class="fake-svg-icon fake-svg-icon--compare-16"></span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="block-product-columns__item">
                                <div class="product-card product-card--layout--horizontal">
                                    <button class="product-card__quickview" type="button">
                                        <svg height="16px" width="16px">
                                            <use xlink:href="images/sprite.svg#quickview-16"></use>
                                        </svg>
                                        <span class="fake-svg-icon"></span></button>
                                    <div class="product-card__image"><a href="product.html"><img
                                                alt="" src="images/products/product-5.jpg"></a></div>
                                    <div class="product-card__info">
                                        <div class="product-card__name"><a href="product.html">Brandix Router Power Tool
                                                2017ERXPK</a></div>
                                        <div class="product-card__rating">
                                            <div class="rating">
                                                <div class="rating__body">
                                                    <svg class="rating__star rating__star--active" height="12px"
                                                         width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star rating__star--active" height="12px"
                                                         width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star rating__star--active" height="12px"
                                                         width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star rating__star--active" height="12px"
                                                         width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star" height="12px" width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
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
                                            <div class="product-card__rating-legend">9 Reviews</div>
                                        </div>
                                        <ul class="product-card__features-list">
                                            <li>Speed: 750 RPM</li>
                                            <li>Power Source: Cordless-Electric</li>
                                            <li>Battery Cell Type: Lithium</li>
                                            <li>Voltage: 20 Volts</li>
                                            <li>Battery Capacity: 2 Ah</li>
                                        </ul>
                                    </div>
                                    <div class="product-card__actions">
                                        <div class="product-card__availability">Availability: <span
                                                class="text-success">In Stock</span></div>
                                        <div class="product-card__prices">$1,700.00</div>
                                        <div class="product-card__buttons">
                                            <button class="btn btn-primary product-card__addtocart" type="button">Add To
                                                Cart
                                            </button>
                                            <button
                                                class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                                                type="button">Add To Cart
                                            </button>
                                            <button
                                                class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist"
                                                type="button">
                                                <svg height="16px" width="16px">
                                                    <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                </svg>
                                                <span class="fake-svg-icon fake-svg-icon--wishlist-16"></span></button>
                                            <button
                                                class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare"
                                                type="button">
                                                <svg height="16px" width="16px">
                                                    <use xlink:href="images/sprite.svg#compare-16"></use>
                                                </svg>
                                                <span class="fake-svg-icon fake-svg-icon--compare-16"></span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="block-product-columns__item">
                                <div class="product-card product-card--layout--horizontal">
                                    <button class="product-card__quickview" type="button">
                                        <svg height="16px" width="16px">
                                            <use xlink:href="images/sprite.svg#quickview-16"></use>
                                        </svg>
                                        <span class="fake-svg-icon"></span></button>
                                    <div class="product-card__image"><a href="product.html"><img
                                                alt="" src="images/products/product-6.jpg"></a></div>
                                    <div class="product-card__info">
                                        <div class="product-card__name"><a href="product.html">Brandix Drilling Machine
                                                DM2019KW4 4kW</a></div>
                                        <div class="product-card__rating">
                                            <div class="rating">
                                                <div class="rating__body">
                                                    <svg class="rating__star rating__star--active" height="12px"
                                                         width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star rating__star--active" height="12px"
                                                         width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star rating__star--active" height="12px"
                                                         width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star" height="12px" width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
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
                                                    <svg class="rating__star" height="12px" width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
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
                                            <div class="product-card__rating-legend">7 Reviews</div>
                                        </div>
                                        <ul class="product-card__features-list">
                                            <li>Speed: 750 RPM</li>
                                            <li>Power Source: Cordless-Electric</li>
                                            <li>Battery Cell Type: Lithium</li>
                                            <li>Voltage: 20 Volts</li>
                                            <li>Battery Capacity: 2 Ah</li>
                                        </ul>
                                    </div>
                                    <div class="product-card__actions">
                                        <div class="product-card__availability">Availability: <span
                                                class="text-success">In Stock</span></div>
                                        <div class="product-card__prices">$3,199.00</div>
                                        <div class="product-card__buttons">
                                            <button class="btn btn-primary product-card__addtocart" type="button">Add To
                                                Cart
                                            </button>
                                            <button
                                                class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                                                type="button">Add To Cart
                                            </button>
                                            <button
                                                class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist"
                                                type="button">
                                                <svg height="16px" width="16px">
                                                    <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                </svg>
                                                <span class="fake-svg-icon fake-svg-icon--wishlist-16"></span></button>
                                            <button
                                                class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare"
                                                type="button">
                                                <svg height="16px" width="16px">
                                                    <use xlink:href="images/sprite.svg#compare-16"></use>
                                                </svg>
                                                <span class="fake-svg-icon fake-svg-icon--compare-16"></span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="block-header"><h3 class="block-header__title">Bestsellers</h3>
                            <div class="block-header__divider"></div>
                        </div>
                        <div class="block-product-columns__column">
                            <div class="block-product-columns__item">
                                <div class="product-card product-card--layout--horizontal">
                                    <button class="product-card__quickview" type="button">
                                        <svg height="16px" width="16px">
                                            <use xlink:href="images/sprite.svg#quickview-16"></use>
                                        </svg>
                                        <span class="fake-svg-icon"></span></button>
                                    <div class="product-card__image"><a href="product.html"><img
                                                alt="" src="images/products/product-7.jpg"></a></div>
                                    <div class="product-card__info">
                                        <div class="product-card__name"><a href="product.html">Brandix Pliers</a></div>
                                        <div class="product-card__rating">
                                            <div class="rating">
                                                <div class="rating__body">
                                                    <svg class="rating__star rating__star--active" height="12px"
                                                         width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star rating__star--active" height="12px"
                                                         width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star" height="12px" width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
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
                                                    <svg class="rating__star" height="12px" width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
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
                                                    <svg class="rating__star" height="12px" width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
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
                                            <div class="product-card__rating-legend">4 Reviews</div>
                                        </div>
                                        <ul class="product-card__features-list">
                                            <li>Speed: 750 RPM</li>
                                            <li>Power Source: Cordless-Electric</li>
                                            <li>Battery Cell Type: Lithium</li>
                                            <li>Voltage: 20 Volts</li>
                                            <li>Battery Capacity: 2 Ah</li>
                                        </ul>
                                    </div>
                                    <div class="product-card__actions">
                                        <div class="product-card__availability">Availability: <span
                                                class="text-success">In Stock</span></div>
                                        <div class="product-card__prices">$24.00</div>
                                        <div class="product-card__buttons">
                                            <button class="btn btn-primary product-card__addtocart" type="button">Add To
                                                Cart
                                            </button>
                                            <button
                                                class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                                                type="button">Add To Cart
                                            </button>
                                            <button
                                                class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist"
                                                type="button">
                                                <svg height="16px" width="16px">
                                                    <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                </svg>
                                                <span class="fake-svg-icon fake-svg-icon--wishlist-16"></span></button>
                                            <button
                                                class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare"
                                                type="button">
                                                <svg height="16px" width="16px">
                                                    <use xlink:href="images/sprite.svg#compare-16"></use>
                                                </svg>
                                                <span class="fake-svg-icon fake-svg-icon--compare-16"></span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="block-product-columns__item">
                                <div class="product-card product-card--layout--horizontal">
                                    <button class="product-card__quickview" type="button">
                                        <svg height="16px" width="16px">
                                            <use xlink:href="images/sprite.svg#quickview-16"></use>
                                        </svg>
                                        <span class="fake-svg-icon"></span></button>
                                    <div class="product-card__image"><a href="product.html"><img
                                                alt="" src="images/products/product-8.jpg"></a></div>
                                    <div class="product-card__info">
                                        <div class="product-card__name"><a href="product.html">Water Hose 40cm</a></div>
                                        <div class="product-card__rating">
                                            <div class="rating">
                                                <div class="rating__body">
                                                    <svg class="rating__star rating__star--active" height="12px"
                                                         width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star rating__star--active" height="12px"
                                                         width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star" height="12px" width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
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
                                                    <svg class="rating__star" height="12px" width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
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
                                                    <svg class="rating__star" height="12px" width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
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
                                            <div class="product-card__rating-legend">4 Reviews</div>
                                        </div>
                                        <ul class="product-card__features-list">
                                            <li>Speed: 750 RPM</li>
                                            <li>Power Source: Cordless-Electric</li>
                                            <li>Battery Cell Type: Lithium</li>
                                            <li>Voltage: 20 Volts</li>
                                            <li>Battery Capacity: 2 Ah</li>
                                        </ul>
                                    </div>
                                    <div class="product-card__actions">
                                        <div class="product-card__availability">Availability: <span
                                                class="text-success">In Stock</span></div>
                                        <div class="product-card__prices">$15.00</div>
                                        <div class="product-card__buttons">
                                            <button class="btn btn-primary product-card__addtocart" type="button">Add To
                                                Cart
                                            </button>
                                            <button
                                                class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                                                type="button">Add To Cart
                                            </button>
                                            <button
                                                class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist"
                                                type="button">
                                                <svg height="16px" width="16px">
                                                    <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                </svg>
                                                <span class="fake-svg-icon fake-svg-icon--wishlist-16"></span></button>
                                            <button
                                                class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare"
                                                type="button">
                                                <svg height="16px" width="16px">
                                                    <use xlink:href="images/sprite.svg#compare-16"></use>
                                                </svg>
                                                <span class="fake-svg-icon fake-svg-icon--compare-16"></span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="block-product-columns__item">
                                <div class="product-card product-card--layout--horizontal">
                                    <button class="product-card__quickview" type="button">
                                        <svg height="16px" width="16px">
                                            <use xlink:href="images/sprite.svg#quickview-16"></use>
                                        </svg>
                                        <span class="fake-svg-icon"></span></button>
                                    <div class="product-card__image"><a href="product.html"><img
                                                alt="" src="images/products/product-9.jpg"></a></div>
                                    <div class="product-card__info">
                                        <div class="product-card__name"><a href="product.html">Spanner Wrench</a></div>
                                        <div class="product-card__rating">
                                            <div class="rating">
                                                <div class="rating__body">
                                                    <svg class="rating__star rating__star--active" height="12px"
                                                         width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star rating__star--active" height="12px"
                                                         width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star rating__star--active" height="12px"
                                                         width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star rating__star--active" height="12px"
                                                         width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star" height="12px" width="13px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke"></use>
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
                                            <div class="product-card__rating-legend">9 Reviews</div>
                                        </div>
                                        <ul class="product-card__features-list">
                                            <li>Speed: 750 RPM</li>
                                            <li>Power Source: Cordless-Electric</li>
                                            <li>Battery Cell Type: Lithium</li>
                                            <li>Voltage: 20 Volts</li>
                                            <li>Battery Capacity: 2 Ah</li>
                                        </ul>
                                    </div>
                                    <div class="product-card__actions">
                                        <div class="product-card__availability">Availability: <span
                                                class="text-success">In Stock</span></div>
                                        <div class="product-card__prices">$19.00</div>
                                        <div class="product-card__buttons">
                                            <button class="btn btn-primary product-card__addtocart" type="button">Add To
                                                Cart
                                            </button>
                                            <button
                                                class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                                                type="button">Add To Cart
                                            </button>
                                            <button
                                                class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist"
                                                type="button">
                                                <svg height="16px" width="16px">
                                                    <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                </svg>
                                                <span class="fake-svg-icon fake-svg-icon--wishlist-16"></span></button>
                                            <button
                                                class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare"
                                                type="button">
                                                <svg height="16px" width="16px">
                                                    <use xlink:href="images/sprite.svg#compare-16"></use>
                                                </svg>
                                                <span class="fake-svg-icon fake-svg-icon--compare-16"></span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- .block-product-columns / end --></div><!-- site__body / end --><!-- site__footer -->
    <footer class="site__footer">
        <div class="site-footer">
            <div class="container">
                <div class="site-footer__widgets">
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="site-footer__widget footer-contacts"><h5 class="footer-contacts__title">Contact
                                    Us</h5>
                                <div class="footer-contacts__text">Lorem ipsum dolor sit amet, consectetur adipiscing
                                    elit. Integer in feugiat lorem. Pellentque ac placerat tellus.
                                </div>
                                <ul class="footer-contacts__contacts">
                                    <li><i class="footer-contacts__icon fas fa-globe-americas"></i> 715 Fake Street, New
                                        York 10021 USA
                                    </li>
                                    <li><i class="footer-contacts__icon far fa-envelope"></i> stroyka@example.com</li>
                                    <li><i class="footer-contacts__icon fas fa-mobile-alt"></i> (800) 060-0730, (800)
                                        060-0730
                                    </li>
                                    <li><i class="footer-contacts__icon far fa-clock"></i> Mon-Sat 10:00pm - 7:00pm</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6 col-md-3 col-lg-2">
                            <div class="site-footer__widget footer-links"><h5 class="footer-links__title">
                                    Information</h5>
                                <ul class="footer-links__list">
                                    <li class="footer-links__item"><a class="footer-links__link" href="#">About Us</a>
                                    </li>
                                    <li class="footer-links__item"><a class="footer-links__link" href="#">Delivery
                                            Information</a></li>
                                    <li class="footer-links__item"><a class="footer-links__link" href="#">Privacy
                                            Policy</a></li>
                                    <li class="footer-links__item"><a class="footer-links__link" href="#">Brands</a>
                                    </li>
                                    <li class="footer-links__item"><a class="footer-links__link" href="#">Contact Us</a>
                                    </li>
                                    <li class="footer-links__item"><a class="footer-links__link" href="#">Returns</a>
                                    </li>
                                    <li class="footer-links__item"><a class="footer-links__link" href="#">Site Map</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6 col-md-3 col-lg-2">
                            <div class="site-footer__widget footer-links"><h5 class="footer-links__title">My
                                    Account</h5>
                                <ul class="footer-links__list">
                                    <li class="footer-links__item"><a class="footer-links__link" href="#">Store
                                            Location</a></li>
                                    <li class="footer-links__item"><a class="footer-links__link" href="#">Order
                                            History</a></li>
                                    <li class="footer-links__item"><a class="footer-links__link" href="#">Wish List</a>
                                    </li>
                                    <li class="footer-links__item"><a class="footer-links__link" href="#">Newsletter</a>
                                    </li>
                                    <li class="footer-links__item"><a class="footer-links__link" href="#">Specials</a>
                                    </li>
                                    <li class="footer-links__item"><a class="footer-links__link" href="#">Gift
                                            Certificates</a></li>
                                    <li class="footer-links__item"><a class="footer-links__link" href="#">Affiliate</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-12 col-md-12 col-lg-4">
                            <div class="site-footer__widget footer-newsletter"><h5 class="footer-newsletter__title">
                                    Newsletter</h5>
                                <div class="footer-newsletter__text">Praesent pellentesque volutpat ex, vitae auctor
                                    lorem pulvinar mollis felis at lacinia.
                                </div>
                                <form action="#" class="footer-newsletter__form"><label class="sr-only"
                                                                                        for="footer-newsletter-address">Email
                                        Address</label> <input class="footer-newsletter__form-input form-control"
                                                               id="footer-newsletter-address"
                                                               placeholder="Email Address..."
                                                               type="text">
                                    <button class="footer-newsletter__form-button btn btn-primary">Subscribe</button>
                                </form>
                                <div class="footer-newsletter__text footer-newsletter__text--social">Follow us on social
                                    networks
                                </div>
                                <ul class="footer-newsletter__social-links">
                                    <li class="footer-newsletter__social-link footer-newsletter__social-link--facebook">
                                        <a href="https://themeforest.net/user/kos9" target="_blank"><i
                                                class="fab fa-facebook-f"></i></a></li>
                                    <li class="footer-newsletter__social-link footer-newsletter__social-link--twitter">
                                        <a href="https://themeforest.net/user/kos9" target="_blank"><i
                                                class="fab fa-twitter"></i></a></li>
                                    <li class="footer-newsletter__social-link footer-newsletter__social-link--youtube">
                                        <a href="https://themeforest.net/user/kos9" target="_blank"><i
                                                class="fab fa-youtube"></i></a></li>
                                    <li class="footer-newsletter__social-link footer-newsletter__social-link--instagram">
                                        <a href="https://themeforest.net/user/kos9" target="_blank"><i
                                                class="fab fa-instagram"></i></a></li>
                                    <li class="footer-newsletter__social-link footer-newsletter__social-link--rss"><a
                                            href="https://themeforest.net/user/kos9" target="_blank"><i
                                                class="fas fa-rss"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="site-footer__bottom">
                    <div class="site-footer__copyright"><a href="https://www.templateshub.net" target="_blank">Templates
                            Hub</a></div>
                    <div class="site-footer__payments"><img alt="" src="images/payments.png"></div>
                </div>
            </div>
        </div>
    </footer><!-- site__footer / end --></div><!-- site / end --></body>

</html>
