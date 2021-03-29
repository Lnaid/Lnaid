<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
        <meta name="description" content="">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- Title -->
        <title>{{ config('app.name', 'Lnaid - Student Aids') }}</title>
        <!-- Favicon -->
        <link rel="icon" href="{{ asset('assets/img/core-img/favicon.ico') }}">

        <link href="{{ asset('assets/dashboard/css/themes/e53935.css') }}" rel="stylesheet" />
        <link href="{{ asset('assets/css/plugins/perfect-scrollbar.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('assets/css/toastr.min.css') }}" rel="stylesheet">

        @stack('css')
        @livewireStyles

    </head>

    <body class="text-left ">
        <!-- dark-theme -->
        <!-- Preloader -->
        <!-- <div id="preloader">
            <div class="preload-content">
                <div id="loader-load"></div>
            </div>
        </div> -->

      
        <div class="app-admin-wrap layout-sidebar-large">
            <!-- Navigation -->
            @include('partials.admin.main-header')
            <!-- Sidebar -->
            @include('partials.admin.sidebar')

            <div class="main-content-wrap sidenav-open d-flex flex-column">
                <!-- Page Content -->

                @yield('content')
                @include('partials.dash-footer')
            </div>

        </div>

        <!-- ########## All JS ########## -->
        <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/dashboard/js/plugins/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('assets/dashboard/js/plugins/perfect-scrollbar.min.js') }}"></script>
        <script src="{{ asset('assets/dashboard/js/scripts/script.min.js') }}"></script>
        <script src="{{ asset('assets/dashboard/js/scripts/sidebar.large.script.min.js') }}"></script>

        @stack('modals')
        @livewireScripts
        @stack('js')
        <script src="{{ asset('assets/js/toastr.min.js') }}"></script>
        @include('partials.error', ['position' => 'toast-top-right' ])
        @include('partials.flash', ['position' => 'toast-top-right', 'timeout' => 10000 ])

        <!-- livewireScripts -->
    </body>
</html>
