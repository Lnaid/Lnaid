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

        <!-- Fonts -->
        <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap"> -->

        <!-- Styles -->
        <!-- <link rel="stylesheet" href="{{ mix('assets/css/app.css') }}"> -->

        <!-- Core Stylesheet -->
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

        <!-- Responsive Stylesheet -->
        <link rel="stylesheet" href=" {{ asset('assets/css/responsive.css') }} ">

        @stack('css')

    </head>

    <body class="font-sans antialiased">
        <!-- Preloader -->
        <!-- <div id="preloader">
            <div class="preload-content">
                <div id="loader-load"></div>
            </div>
        </div> -->

      

        <div class="min-h-screen bg-gray-100">
            <!-- Navigation -->
            @include('partials.main-nav')

            <!-- Page Content -->
            @yield('content')

            <!-- include('partials.main-footer') -->

        </div>

        <!-- ########## All JS ########## -->
        <!-- jQuery js -->
        <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
        <!-- Popper js -->
        <script src="{{ asset('assets/js/popper.min.js') }}"></script>
        <!-- Bootstrap js -->
        <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
        <!-- All Plugins js -->
        <script src="{{ asset('assets/js/plugins.js') }}"></script>
        <!-- script js -->
        <script src="{{ asset('assets/js/script.js') }}"></script>

        @stack('modals')

        @stack('js')

        <!-- livewireScripts -->
    </body>
</html>
