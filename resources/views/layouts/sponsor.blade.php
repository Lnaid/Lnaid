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

        <!-- Font Awesome -->
        <link rel="stylesheet" type="text/css" href=" {{asset('assets/dashboard/css/fa.min.css')}} ">
        <link rel="stylesheet" type="text/css" href=" {{asset('assets/dashboard/css/request_red.css')}} ">
        <!-- <link rel="stylesheet" type="text/css" href=" {{asset('assets/dashboard/css/plugins/slick-theme.css')}} "> -->
        

        @stack('css')
        @livewireStyles

    </head>

    <body class="text-left font-sans antialiased">
        <!-- Preloader -->
        <!-- <div id="preloader">
            <div class="preload-content">
                <div id="loader-load"></div>
            </div>
        </div> -->

      
        <div class="app-admin-wrap layout-horizontal-bar">
            <!-- Navigation -->
            @include('partials.sponsor.top-menu')
            @include('partials.sponsor.main-menu')

            <div class="main-content-wrap d-flex flex-column">
                <!-- Page Content -->
                @yield('content')
                @include('partials.dash-footer')
            </div>

        </div>

        <!-- ########## All JS ########## -->
        <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/dashboard/js/plugins/slider.js') }}"></script>

        <script src="{{ asset('assets/dashboard/js/plugins/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('assets/dashboard/js/plugins/perfect-scrollbar.min.js') }}"></script>
        <script src="{{ asset('assets/dashboard/js/scripts/script.min.js') }}"></script>
        <script src="{{ asset('assets/dashboard/js/scripts/sidebar-horizontal.script.js') }}"></script>
        <script src="{{ asset('assets/dashboard/js/plugins/echarts.min.js') }}"></script>
        <script src="{{ asset('assets/dashboard/js/scripts/echart.options.min.js') }}"></script>
        <script src="{{ asset('assets/dashboard/js/plugins/datatables.min.js') }}"></script>
        <script src="{{ asset('assets/dashboard/js/scripts/dashboard.v2.script.min.js') }}"></script>


        @stack('modals')
        @stack('js')


        <!-- livewireScripts -->
        @livewireScripts
    </body>
</html>
