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

        <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,400i,600,700,800,900" rel="stylesheet" />
        <link href="../../dist-assets/css/themes/lite-purple.min.css" rel="stylesheet" />
        <link href="../../dist-assets/css/plugins/perfect-scrollbar.min.css" rel="stylesheet" />

        @stack('css')

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

            <!-- Page Content -->
            @yield('content')

            @include('partials.sponsor-footer')

        </div>

        <!-- ########## All JS ########## -->
        <script src="../../dist-assets/js/plugins/jquery-3.3.1.min.js"></script>
        <script src="../../dist-assets/js/plugins/bootstrap.bundle.min.js"></script>
        <script src="../../dist-assets/js/plugins/perfect-scrollbar.min.js"></script>
        <script src="../../dist-assets/js/scripts/script.min.js"></script>
        <script src="../../dist-assets/js/scripts/sidebar-horizontal.script.js"></script>
        <script src="../../dist-assets/js/plugins/echarts.min.js"></script>
        <script src="../../dist-assets/js/scripts/echart.options.min.js"></script>
        <script src="../../dist-assets/js/plugins/datatables.min.js"></script>
        <script src="../../dist-assets/js/scripts/dashboard.v2.script.min.js"></script>


        @stack('modals')

        @stack('js')

        <!-- livewireScripts -->
    </body>
</html>