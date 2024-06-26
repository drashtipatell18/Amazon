<!DOCTYPE html>

<html lang="en" class="material-style layout-fixed">

<head>
    <title>Amazone</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="description"
        content="Bhumlu Bootstrap admin template made using Bootstrap 4, it has tons of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
    <meta name="keywords"
        content="Bhumlu, bootstrap admin template, bootstrap admin panel, bootstrap 4 admin template, admin template">
    <meta name="author" content="Srthemesvilla" />
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico">

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Icon fonts -->
    <link href="{{ asset('assets/fonts/fontawesome.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/fonts/linearicons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/fonts/open-iconic.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/fonts/pe-icon-7-stroke.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/fonts/feather.css') }}" rel="stylesheet">

    <!-- Core stylesheets -->
    <link href="{{ asset('assets/css/bootstrap-material.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/shreerang-material.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/uikit.css') }}" rel="stylesheet">

    <!-- Libs -->
    <link href="{{ asset('assets/libs/perfect-scrollbar/perfect-scrollbar.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/libs/flot/flot.css') }}" rel="stylesheet">
    {{-- dataTables --}}
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
</head>

<body>
    <!-- [ Preloader ] Start -->
    <div class="page-loader">
        <div class="bg-primary"></div>
    </div>
    <!-- [ Preloader ] End -->

    <!-- [ Layout wrapper ] Start -->
    <div class="layout-wrapper layout-2">
        <div class="layout-inner">
            <!-- [ Layout sidenav ] Start -->
            <div id="layout-sidenav" class="layout-sidenav sidenav sidenav-vertical bg-dark">
                <!-- Brand demo (see assets/css/demo/demo.css) -->
                <div class="app-brand demo">
                    <span class="app-brand-logo demo">
                        {{-- <img src="assets/img/logo.png" alt="Brand Logo" class="img-fluid"> --}}
                        <img src="{{ asset('assets/img/logo.png')}}" alt="Brand Logo" class="img-fluid">

                    </span>
                    <a href="index.html" class="app-brand-text demo sidenav-text font-weight-normal ml-2">Amazon</a>
                    <a href="javascript:" class="layout-sidenav-toggle sidenav-link text-large ml-auto">
                        <i class="ion ion-md-menu align-middle"></i>
                    </a>
                </div>
                <div class="sidenav-divider mt-0"></div>

                <!-- Links -->
                <ul class="sidenav-inner py-1">

                    <!-- Dashboards -->
                    <li class="sidenav-item active">
                        <a href="{{ route('dashborad') }}" class="sidenav-link">
                            <i class="sidenav-icon feather icon-home"></i>
                            <div>Dashboard</div>
                        </a>
                    </li>
                    <li class="sidenav-item">
                        <a href="{{ route('category') }}" class="sidenav-link">
                            <i class="sidenav-icon feather icon-paperclip"></i>
                            <div>Category</div>
                        </a>
                    </li>
                    <li class="sidenav-item">
                        <a href="{{ route('subcategory') }}" class="sidenav-link">
                            <i class="sidenav-icon feather icon-paperclip"></i>
                            <div>Sub Category</div>
                        </a>
                    </li>
                    <li class="sidenav-item">
                        <a href="{{ route('brand') }}" class="sidenav-link">
                            <i class="sidenav-icon feather icon-save"></i>
                            <div>Brand</div>
                        </a>
                    </li>
                    <li class="sidenav-item">
                        <a href="{{ route('product') }}" class="sidenav-link">
                            <i class="sidenav-icon feather icon-tag"></i>
                            <div>Product</div>
                        </a>
                    </li>
                    <li class="sidenav-item">
                        <a href="{{ route('order') }}" class="sidenav-link">
                            <i class="sidenav-icon bi bi-bag-dash"></i>
                            <div>Orders</div>
                        </a>
                    </li>
                    <li class="sidenav-item">
                        <a href="{{ route('discount') }}" class="sidenav-link">
                            <i class="sidenav-icon bi bi-percent"></i>
                            <div>Discount</div>
                        </a>
                    </li>
                    <li class="sidenav-item">
                        <a href="{{ route('user') }}" class="sidenav-link">
                            <i class="sidenav-icon feather icon-users"></i>
                            <div>Users</div>
                        </a>
                    </li>
                    <li class="sidenav-divider mb-1"></li>
                </ul>
            </div>
            <!-- [ Layout sidenav ] End -->
            <!-- [ Layout container ] Start -->
            <div class="layout-container">
                <!-- [ Layout navbar ( Header ) ] Start -->
                <nav class="layout-navbar navbar navbar-expand-lg align-items-lg-center bg-white container-p-x"
                    id="layout-navbar">

                    <!-- Brand demo (see assets/css/demo/demo.css) -->
                    <a href="index.html" class="navbar-brand app-brand demo d-lg-none py-0 mr-4">
                        <span class="app-brand-logo demo">
                            <img src="assets/img/logo-dark.png" alt="Brand Logo" class="img-fluid">
                        </span>
                        <span class="app-brand-text demo font-weight-normal ml-2">Bhumlu</span>
                    </a>

                    <!-- Sidenav toggle (see assets/css/demo/demo.css) -->
                    <div class="layout-sidenav-toggle navbar-nav d-lg-none align-items-lg-center mr-auto">
                        <a class="nav-item nav-link px-0 mr-lg-4" href="javascript:">
                            <i class="ion ion-md-menu text-large align-middle"></i>
                        </a>
                    </div>

                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#layout-navbar-collapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="navbar-collapse collapse" id="layout-navbar-collapse">
                        <!-- Divider -->
                        <hr class="d-lg-none w-100 my-2">

                        <div class="navbar-nav align-items-lg-center">
                            <!-- Search -->
                            <label class="nav-item navbar-text navbar-search-box p-0 active">
                                <i class="feather icon-search navbar-icon align-middle"></i>
                                <span class="navbar-search-input pl-2">
                                    <input type="text" class="form-control navbar-text mx-2"
                                        placeholder="Search...">
                                </span>
                            </label>
                        </div>

                        <div class="navbar-nav align-items-lg-center ml-auto">
                            <div class="demo-navbar-notifications nav-item dropdown mr-lg-3">
                                <a class="nav-link dropdown-toggle hide-arrow" href="#" data-toggle="dropdown">
                                    <i class="feather icon-bell navbar-icon align-middle"></i>
                                    <span class="badge badge-danger badge-dot indicator"></span>
                                    <span class="d-lg-none align-middle">&nbsp; Notifications</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <div class="bg-primary text-center text-white font-weight-bold p-3">
                                        4 New Notifications
                                    </div>
                                    <div class="list-group list-group-flush">
                                        <a href="javascript:"
                                            class="list-group-item list-group-item-action media d-flex align-items-center">
                                            <div
                                                class="ui-icon ui-icon-sm feather icon-home bg-secondary border-0 text-white">
                                            </div>
                                            <div class="media-body line-height-condenced ml-3">
                                                <div class="text-dark">Login from 192.168.1.1</div>
                                                <div class="text-light small mt-1">
                                                    Aliquam ex eros, imperdiet vulputate hendrerit et.
                                                </div>
                                                <div class="text-light small mt-1">12h ago</div>
                                            </div>
                                        </a>

                                        <a href="javascript:"
                                            class="list-group-item list-group-item-action media d-flex align-items-center">
                                            <div
                                                class="ui-icon ui-icon-sm feather icon-user-plus bg-info border-0 text-white">
                                            </div>
                                            <div class="media-body line-height-condenced ml-3">
                                                <div class="text-dark">You have
                                                    <strong>4</strong> new followers
                                                </div>
                                                <div class="text-light small mt-1">
                                                    Phasellus nunc nisl, posuere cursus pretium nec, dictum vehicula
                                                    tellus.
                                                </div>
                                            </div>
                                        </a>

                                        <a href="javascript:"
                                            class="list-group-item list-group-item-action media d-flex align-items-center">
                                            <div
                                                class="ui-icon ui-icon-sm feather icon-power bg-danger border-0 text-white">
                                            </div>
                                            <div class="media-body line-height-condenced ml-3">
                                                <div class="text-dark">Server restarted</div>
                                                <div class="text-light small mt-1">
                                                    19h ago
                                                </div>
                                            </div>
                                        </a>

                                        <a href="javascript:"
                                            class="list-group-item list-group-item-action media d-flex align-items-center">
                                            <div
                                                class="ui-icon ui-icon-sm feather icon-alert-triangle bg-warning border-0 text-dark">
                                            </div>
                                            <div class="media-body line-height-condenced ml-3">
                                                <div class="text-dark">99% server load</div>
                                                <div class="text-light small mt-1">
                                                    Etiam nec fringilla magna. Donec mi metus.
                                                </div>
                                                <div class="text-light small mt-1">
                                                    20h ago
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <a href="javascript:" class="d-block text-center text-light small p-2 my-1">Show
                                        all notifications</a>
                                </div>
                            </div>

                            <div class="demo-navbar-messages nav-item dropdown mr-lg-3">
                                <a class="nav-link dropdown-toggle hide-arrow" href="#" data-toggle="dropdown">
                                    <i class="feather icon-mail navbar-icon align-middle"></i>
                                    <span class="badge badge-success badge-dot indicator"></span>
                                    <span class="d-lg-none align-middle">&nbsp; Messages</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <div class="bg-primary text-center text-white font-weight-bold p-3">
                                        4 New Messages
                                    </div>
                                    <div class="list-group list-group-flush">
                                        <a href="javascript:"
                                            class="list-group-item list-group-item-action media d-flex align-items-center">
                                            <img src="assets/img/avatars/6-small.png"
                                                class="d-block ui-w-40 rounded-circle" alt>
                                            <div class="media-body ml-3">
                                                <div class="text-dark line-height-condenced">Lorem ipsum dolor
                                                    consectetuer elit.</div>
                                                <div class="text-light small mt-1">
                                                    Josephin Doe &nbsp;·&nbsp; 58m ago
                                                </div>
                                            </div>
                                        </a>

                                        <a href="javascript:"
                                            class="list-group-item list-group-item-action media d-flex align-items-center">
                                            <img src="assets/img/avatars/4-small.png"
                                                class="d-block ui-w-40 rounded-circle" alt>
                                            <div class="media-body ml-3">
                                                <div class="text-dark line-height-condenced">Lorem ipsum dolor sit
                                                    amet, consectetuer.</div>
                                                <div class="text-light small mt-1">
                                                    Lary Doe &nbsp;·&nbsp; 1h ago
                                                </div>
                                            </div>
                                        </a>

                                        <a href="javascript:"
                                            class="list-group-item list-group-item-action media d-flex align-items-center">
                                            <img src="assets/img/avatars/5-small.png"
                                                class="d-block ui-w-40 rounded-circle" alt>
                                            <div class="media-body ml-3">
                                                <div class="text-dark line-height-condenced">Lorem ipsum dolor sit amet
                                                    elit.</div>
                                                <div class="text-light small mt-1">
                                                    Alice &nbsp;·&nbsp; 2h ago
                                                </div>
                                            </div>
                                        </a>

                                        <a href="javascript:"
                                            class="list-group-item list-group-item-action media d-flex align-items-center">
                                            <img src="assets/img/avatars/11-small.png"
                                                class="d-block ui-w-40 rounded-circle" alt>
                                            <div class="media-body ml-3">
                                                <div class="text-dark line-height-condenced">Lorem ipsum dolor sit amet
                                                    consectetuer amet elit dolor sit.</div>
                                                <div class="text-light small mt-1">
                                                    Suzen &nbsp;·&nbsp; 5h ago
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                    <a href="javascript:" class="d-block text-center text-light small p-2 my-1">Show
                                        all messages</a>
                                </div>
                            </div>

                            <!-- Divider -->
                            <div
                                class="nav-item d-none d-lg-block text-big font-weight-light line-height-1 opacity-25 mr-3 ml-1">
                                |</div>
                            <div class="demo-navbar-user nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
                                    <span class="d-inline-flex flex-lg-row-reverse align-items-center align-middle">
                                        <img src="assets/img/avatars/1.png" alt
                                            class="d-block ui-w-30 rounded-circle">
                                        <span class="px-1 mr-lg-2 ml-2 ml-lg-0">Cindy Deitch</span>
                                    </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <div class="dropdown-divider"></div>
                                    <a href="{{ route('logout') }}" class="dropdown-item">
                                        <i class="feather icon-power text-danger"></i> &nbsp; Log Out</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
                <!-- [ Layout navbar ( Header ) ] End -->

                <!-- [ Layout content ] Start -->
                <div class="layout-content">

                    <!-- [ content ] Start -->
                    @yield('content')
                    <!-- [ content ] End -->

                  
                </div>
                <!-- [ Layout content ] Start -->
            </div>
            <!-- [ Layout container ] End -->
        </div>
        <!-- [ Layout wrapper] End -->

        <!-- Core scripts -->
        <script src="{{ asset('assets/js/pace.js') }}"></script>
        <script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>
        <script src="{{ asset('assets/libs/popper/popper.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap.js') }}"></script>
        <script src="{{ asset('assets/js/sidenav.js') }}"></script>
        <script src="{{ asset('assets/js/layout-helpers.js') }}"></script>
        <script src="{{ asset('assets/js/material-ripple.js') }}"></script>

        <!-- Libs -->
        <script src="{{ asset('assets/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
        <script src="{{ asset('assets/libs/eve/eve.js') }}"></script>
        <script src="{{ asset('assets/libs/flot/flot.js') }}"></script>
        <script src="{{ asset('assets/libs/flot/curvedLines.js') }}"></script>
        <script src="{{ asset('assets/libs/chart-am4/core.js') }}"></script>
        <script src="{{ asset('assets/libs/chart-am4/charts.js') }}"></script>
        <script src="{{ asset('assets/libs/chart-am4/animated.js') }}"></script>

        <!-- Demo -->
        <script src="{{ asset('assets/js/demo.js') }}"></script>
        <script src="{{ asset('assets/js/analytics.js') }}"></script>
        <script src="{{ asset('assets/js/pages/dashboards_index.js') }}"></script>
        @stack('scripts')
</body>

</html>
