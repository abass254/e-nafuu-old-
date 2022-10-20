<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="apple-touch-icon" href="{{ asset('app-assets/images/ico/apple-icon-120.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

    <!--Layout Stylesheets-->
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/vendors.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/extensions/toastr.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/bootstrap-extended.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/colors.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/components.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/themes/dark-layout.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/themes/semi-dark-layout.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/core/menu/menu-types/vertical-menu.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/core/colors/palette-gradient.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/plugins/extensions/toastr.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/style.css') }}">
    <link rel="stylesheet newest" type="text/css" href="{{ asset('app-assets/css/style.custom.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    @yield('css')
</head>
@if(Auth::check())
    <body class="vertical-layout vertical-menu-modern 2-columns navbar-floating footer-static menu-collapsed @(action == "Login" ? "bg-full-screen-image" : "") " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">
        @include('backend.header')
        @include('backend.sidebar')
        <div class="app-content content">
            <div class="content-overlay"></div>
            <div class="header-navbar-shadow"></div>
            <div class="content-wrapper">
                <!--Layout Scripts-->
                <script src="{{ asset('app-assets/vendors/js/signalr/signalr.js') }}"></script>
                <script src="{{ asset('app-assets/js/wise-erp-core.js') }}"></script>

                <script src="{{ asset('app-assets/vendors/js/vendors.min.js') }}"></script>
                <script src="{{ asset('app-assets/vendors/js/extensions/toastr.min.js') }}"></script>
                <script src="{{ asset('app-assets/js/core/app-menu.js') }}"></script>
                <script src="{{ asset('app-assets/js/core/app.js') }}"></script>
                <script src="{{ asset('app-assets/js/scripts/components.js') }}"></script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


                <!--Render Body-->
                @yield('content')
            </div>
        </div>

        <div class="sidenav-overlay"></div>
        <div class="drag-target"></div>

        <!-- BEGIN: Footer-->
        <footer class="footer footer-static footer-light">
            <p class="clearfix blue-grey lighten-2 mb-0">
                <span class="float-md-left d-block d-md-inline-block mt-25">Copyright &copy; 2022 - {{ now()->year }}<a class="text-bold-800 grey darken-2" href="http://techverse.co.ke" target="_blank">E-PHARMACY Kenya, </a>All rights Reserved</span><span class="float-md-right d-none d-md-block">By <a href="http://www.techverse.co.ke" target="_blank" class="pink">Techverse Solutions</a> & Made with<i class="feather icon-heart pink"></i></span>
                <button class="btn btn-primary btn-icon scroll-top" type="button"><i class="feather icon-arrow-up"></i></button>
            </p>
        </footer>

        @yield('js')
    </body>

@else
@yield('content')
@endif

</html>
