<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Starter</title>

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('admin/plugins/fontawesome-free/css/all.min.css') }} ">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('admin/dist/css/adminlte.min.css') }}">

    <!-- Data tables -->
    <link href="http://cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css" rel="stylesheet" />

    <!-- Trix editor -->

    <script src="{{ asset('js/app.js') }}"></script>
    <link href="/css/app.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.1/trix.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.1/trix.js"></script>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper" id="app">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="index3.html" class="nav-link">Home</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="#" class="nav-link">Contact</a>
            </li>
        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            <!-- Navbar Search -->
            <li class="nav-item">
                <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                    <i class="fas fa-search"></i>
                </a>
                <div class="navbar-search-block">
                    <form class="form-inline">
                        <div class="input-group input-group-sm">
                            <input class="form-control form-control-navbar" type="search" placeholder="Search"
                                   aria-label="Search">
                            <div class="input-group-append">
                                <button class="btn btn-navbar" type="submit">
                                    <i class="fas fa-search"></i>
                                </button>
                                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </li>

            <!-- Messages Dropdown Menu -->
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="far fa-comments"></i>
                    <span class="badge badge-danger navbar-badge">3</span>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <a href="#" class="dropdown-item">
                        <!-- Message Start -->
                        <div class="media">
                            <img src="{{ asset('admin/dist/img/user1-128x128.jpg') }}" alt="User Avatar"
                                 class="img-size-50 mr-3 img-circle">
                            <div class="media-body">
                                <h3 class="dropdown-item-title">
                                    Brad Diesel
                                    <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                                </h3>
                                <p class="text-sm">Call me whenever you can...</p>
                                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                            </div>
                        </div>
                        <!-- Message End -->
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <!-- Message Start -->
                        <div class="media">
                            <img src="{{ asset('admin/dist/img/user8-128x128.jpg') }}" alt="User Avatar"
                                 class="img-size-50 img-circle mr-3">
                            <div class="media-body">
                                <h3 class="dropdown-item-title">
                                    John Pierce
                                    <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                                </h3>
                                <p class="text-sm">I got your message bro</p>
                                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                            </div>
                        </div>
                        <!-- Message End -->
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <!-- Message Start -->
                        <div class="media">
                            <img src="{{ asset('admin/dist/img/user3-128x128.jpg') }}" alt="User Avatar"
                                 class="img-size-50 img-circle mr-3">
                            <div class="media-body">
                                <h3 class="dropdown-item-title">
                                    Nora Silvester
                                    <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                                </h3>
                                <p class="text-sm">The subject goes here</p>
                                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                            </div>
                        </div>
                        <!-- Message End -->
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                </div>
            </li>
            <!-- Notifications Dropdown Menu -->
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="far fa-bell"></i>
                    <span class="badge badge-warning navbar-badge">15</span>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <span class="dropdown-header">15 Notifications</span>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-envelope mr-2"></i> 4 new messages
                        <span class="float-right text-muted text-sm">3 mins</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-users mr-2"></i> 8 friend requests
                        <span class="float-right text-muted text-sm">12 hours</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-file mr-2"></i> 3 new reports
                        <span class="float-right text-muted text-sm">2 days</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                    <i class="fas fa-expand-arrows-alt"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                    <i class="fas fa-th-large"></i>
                </a>
            </li>
        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="index3.html" class="brand-link">
            <img src="{{ asset('admin/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
                 class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light">AdminLTE 3</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="{{ asset('admin/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2"
                         alt="User Image">
                </div>
                <div class="info">
                    <a href="#" class="d-block">Alexander Pierce</a>
                </div>
            </div>

            <!-- SidebarSearch Form -->
            <div class="form-inline">
                <div class="input-group" data-widget="sidebar-search">
                    <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                           aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-sidebar">
                            <i class="fas fa-search fa-fw"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                    <li class="nav-item {{ Route::currentRouteName() == 'admin.products.index' || Route::currentRouteName() == 'product.create' ? 'menu-open' : '' }}">
                        <a href="{{ route('admin.products.index') }}"
                           class="nav-link {{ Route::currentRouteName() == 'admin.products.index' || Route::currentRouteName() == 'product.create' ? 'active' : '' }}">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Products
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('admin.products.index') }}"
                                   class="nav-link {{ Route::currentRouteName() == 'admin.products.index' ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>All products</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('product.create') }}"
                                   class="nav-link {{ Route::currentRouteName() == 'product.create' ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Create product</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item {{ Route::currentRouteName() == 'product_set.index' || Route::currentRouteName() == 'product_set.create' ? 'menu-open' : '' }}">
                        <a href="{{ route('product_set.index') }}"
                           class="nav-link {{ Route::currentRouteName() == 'product_set.index' || Route::currentRouteName() == 'product_set.create' ? 'active' : '' }}">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Product Sets
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('product_set.index') }}"
                                   class="nav-link {{ Route::currentRouteName() == 'product_set.index' ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>All product sets</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('product_set.create') }}"
                                   class="nav-link {{ Route::currentRouteName() == 'product_set.create' ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Create product set</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.users.index') }}"
                           class="nav-link  {{ Route::currentRouteName() == 'admin.users.index' ? 'active' : '' }}">
                            <i class="nav-icon fas fa-th"></i>
                            <p>
                                Users
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('order.index') }}"
                           class="nav-link  {{ Route::currentRouteName() == 'order.index' ? 'active' : '' }}">
                            <i class="nav-icon fas fa-th"></i>
                            <p>
                                Orders
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('report.index') }}"
                           class="nav-link  {{ Route::currentRouteName() == 'report.index' ? 'active' : '' }}">
                            <i class="nav-icon fas fa-th"></i>
                            <p>
                                Reports
                            </p>
                        </a>
                    </li>
                    <li class="nav-item {{ Route::currentRouteName() == 'admin.categories.index' || Route::currentRouteName() == 'category.create' ? 'menu-open' : '' }}">
                        <a href="{{ route('admin.categories.index') }}"
                           class="nav-link {{ Route::currentRouteName() == 'admin.categories.index' || Route::currentRouteName() == 'category.create' ? 'active' : '' }}">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Categories
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('admin.categories.index') }}"
                                   class="nav-link {{ Route::currentRouteName() == 'admin.categories.index' ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>All categories</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('category.create') }}"
                                   class="nav-link {{ Route::currentRouteName() == 'category.create' ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Create category</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item {{ Route::currentRouteName() == 'characteristic.index' || Route::currentRouteName() == 'characteristic.create' ? 'menu-open' : '' }}">
                        <a href="{{ route('characteristic.index') }}"
                           class="nav-link {{ Route::currentRouteName() == 'characteristic.index' || Route::currentRouteName() == 'characteristic.create' ? 'active' : '' }}">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Characteristics
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('characteristic.index') }}"
                                   class="nav-link {{ Route::currentRouteName() == 'characteristic.index' ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>All Characteristics</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('characteristic.create') }}"
                                   class="nav-link {{ Route::currentRouteName() == 'characteristic.create' ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Create Characteristic</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.statistics') }}"
                           class="nav-link  {{ Route::currentRouteName() == 'admin.statistics' ? 'active' : '' }}">
                            <i class="nav-icon fas fa-th"></i>
                            <p>
                                Statistics
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.contacts.index') }}"
                           class="nav-link  {{ (Route::currentRouteName() == 'admin.contacts.index') || (Route::currentRouteName() == 'contacts.edit') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-th"></i>
                            <p>
                                Contact Form Messages
                            </p>
                        </a>
                    </li>
                    <li class="nav-item {{ Route::currentRouteName() == 'badge_style.index' || Route::currentRouteName() == 'badge_style.create' ? 'menu-open' : '' }}">
                        <a href="{{ route('badge_style.index') }}"
                           class="nav-link {{ Route::currentRouteName() == 'badge_style.index' || Route::currentRouteName() == 'badge_style.create' ? 'active' : '' }}">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Badge styles
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('badge_style.index') }}"
                                   class="nav-link {{ Route::currentRouteName() == 'badge_style.index' ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>All Badge styles</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('badge_style.create') }}"
                                   class="nav-link {{ Route::currentRouteName() == 'badge_style.create' ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Create Badge style</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item {{ Route::currentRouteName() == 'admin.news.index' || Route::currentRouteName() == 'news.create' ? 'menu-open' : '' }}">
                        <a href="{{ route('admin.news.index') }}"
                           class="nav-link {{ Route::currentRouteName() == 'admin.news.index' || Route::currentRouteName() == 'news.create' ? 'active' : '' }}">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                News
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('admin.news.index') }}"
                                   class="nav-link {{ Route::currentRouteName() == 'admin.news.index' ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>All News</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('news.create') }}"
                                   class="nav-link {{ Route::currentRouteName() == 'news.create' ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Create News</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item {{ Route::currentRouteName() == 'admin.advertisements.index' || Route::currentRouteName() == 'advertisement.create' ? 'menu-open' : '' }}">
                        <a href="{{ route('admin.advertisements.index') }}"
                           class="nav-link {{ Route::currentRouteName() == 'admin.advertisements.index' || Route::currentRouteName() == 'advertisement.create' ? 'active' : '' }}">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Advertisements
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('admin.advertisements.index') }}"
                                   class="nav-link {{ Route::currentRouteName() == 'admin.advertisements.index' ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>All Advertisements</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('advertisement.create') }}"
                                   class="nav-link {{ Route::currentRouteName() == 'advertisement.create' ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Create Advertisement</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper container">
        @yield('content')
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
        <div class="p-3">
            <h5>Title</h5>
            <p>Sidebar content</p>
        </div>
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    <footer class="main-footer">
        <!-- To the right -->
        <div class="float-right d-none d-sm-inline">
            Anything you want
        </div>
        <!-- Default to the left -->
        <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
    </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{ asset('admin/plugins/jquery/jquery.min.js')  }} "></script>

<!-- Select2 -->
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }} "></script>

<!-- Data Tables -->
<script src="http://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>

<!-- AdminLTE App -->
<script src="{{ asset('admin/dist/js/adminlte.min.js') }} "></script>
<script>
    $(document).ready(function() {
        $('.form-control.select2').select2();
        $('.dataTable').DataTable();
    });
</script>
</body>
</html>
