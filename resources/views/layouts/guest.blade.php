<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('page_title') | {{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap"> -->

        <style type="text/css">
            .hero-section.ai1{
                background: url('{{ asset('assets/img/bg-img/ai1.png') }}') no-repeat top left;
                background-size: cover;
            }
            .hero-section.ai2{
                background: url('{{ asset('assets/img/bg-img/footer-back.png') }}') no-repeat top center;
                background-size: cover;
            }

            @media (max-width: 1200px){
                .hero-section.ai2{
                    background-position: top left
                }
            }
            .hero-section.ai3{
                background: url('{{ asset('assets/img/bg-img/bg1.png') }}') no-repeat center;
                background-size: cover;
            }
            
        </style>

        
        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
        <!-- Scripts -->
        <script src="{{ mix('assets/js/app.js') }}" defer></script>

    </head>
    <body>
        <div class="hero-section ai2">

            <!-- Page Content -->
            @yield('content')

            <!-- include('partials.main-footer') -->

        </div>
    </body>
</html>
