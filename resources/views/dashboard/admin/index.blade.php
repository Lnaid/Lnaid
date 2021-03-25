@extends('layouts.admin')
    @push('css')
        <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" /> -->
        <!-- <link rel="stylesheet" type="text/css" href=" {{asset('assets/dashboard/css/main.css')}} "> -->
        <link rel="stylesheet" href=" {{ asset('assets/css/owl.carousel.min.css') }} ">
        <style type="text/css">
            
            .owl-carousel{
                overflow: hidden;
            }

            .owl-item{
               float: left;
            }

            .request-slide .owl-dot.active {
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
                background: #c31e39;
                color: #fff;
            }
            
            .request-slide .owl-dot {
                margin: 0 5px;
                line-height: 1;
                color: #607D8B;
                width: 30px;
                height: 30px;
                line-height: 30px;
                text-align: center;
                font-size: 12px;
                border-radius: 50%;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
                border: none;
            }

            .owl-nav{
                display: none
            }
        </style>
        
    @endPush
   @section('content')

        <!-- ============ Body content start ============= -->
        <div class="main-content">
            @include('partials.breadcrumb')
            <div class="separator-breadcrumb border-top"></div>
            <div class="row"></div>
        </div>

    @endSection
    @push('js')
        <!-- <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script> -->

        <!-- include('partials.error', ['position' => 'toast-bottom-left' ]) -->
        <!-- include('partials.flash', ['position' => 'toast-bottom-left', 'timeout' => 1000 ]) -->

    @endPush

