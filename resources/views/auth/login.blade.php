<html lang="en" class="material-style layout-fixed">

<head>
    <title>Log In</title>
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

</head>
<style>
    .card {
        margin-top: 25%;
    }
</style>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 mt-5">
                <div class="card">
                    <div class="card-header">{{ __('Login') }}</div>

                    <div class="card-body">
                        <div class="authentication-wrapper authentication-1 px-4">
                            <div class="authentication-inner py-5">

                                <!-- [ Logo ] Start -->
                                <div class="d-flex justify-content-center align-items-center">
                                    <div class="ui-w-60">
                                        <div class="w-100 position-relative">
                                            <img src="assets/img/logo-dark.png" alt="Brand Logo" class="img-fluid">
                                        </div>
                                    </div>
                                </div>

                                <!-- [ Form ] Start -->
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="form-group">
                                        <label class="form-label">Email</label>
                                        <input type="text" name="email" class="form-control @error('email') is-invalid @enderror">
                                        @error('email')
                                            <div class="invalid-feedback error-message" style="color: red">
                                                <strong>{{ $message }}</strong>
                                            </div>
                                        @enderror
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label d-flex justify-content-between align-items-end">
                                            <span>Password</span>
                                            <a href="pages_authentication_password-reset.html"
                                                class="d-block small">Forgot password?</a>
                                        </label>
                                        <input type="password" name="password"
                                            class="form-control @error('password') is-invalid @enderror">
                                        @error('password')
                                            <div class="invalid-feedback error-message" style="color: red">
                                                <strong>{{ $message }}</strong>
                                            </div>
                                        @enderror
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center m-0">
                                        <label class="custom-control custom-checkbox m-0">
                                            <input type="checkbox" class="custom-control-input">
                                            <span class="custom-control-label">Remember me</span>
                                        </label>
                                        <button type="submit" class="btn btn-primary">Sign In</button>
                                    </div>
                                </form>
                                <!-- [ Form ] End -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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

</body>

</html>
