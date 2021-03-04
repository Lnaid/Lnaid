@extends('layouts.sponsor')
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
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <!-- CARD ICON-->
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="card card-icon mb-4">
                                <div class="card-body text-center"><i class="i-Data-Upload"></i>
                                    <p class="text-muted mt-2 mb-2">New Requests</p>
                                    <p class="text-primary text-24 line-height-1 m-0">221</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="card card-icon mb-4">
                                <div class="card-body text-center"><i class="i-Add-User"></i>
                                    <p class="text-muted mt-2 mb-2">Funded Request</p>
                                    <p class="text-primary text-24 line-height-1 m-0">51</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="card card-icon mb-4">
                                <div class="card-body text-center"><i class="i-Money-2"></i>
                                    <p class="text-muted mt-2 mb-2">Total Offers</p>
                                    <p class="text-primary text-24 line-height-1 m-0">4</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="card card-icon-big mb-4">
                                <div class="card-body text-center"><i class="i-Money-2"></i>
                                     <p class="text-muted mt-2 mb-2">Total Donations</p>
                                    <p class="line-height-1 text-title text-18 mt-2 mb-0">N17000</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="card card-icon-big mb-4">
                                <div class="card-body text-center"><i class="i-Gear"></i>
                                     <p class="text-muted mt-2 mb-2">Scholarships</p>
                                    <p class="line-height-1 text-title text-18 mt-2 mb-0">0</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="card card-icon-big mb-4">
                                <div class="card-body text-center"><i class="i-Bell"></i>
                                     <p class="text-muted mt-2 mb-2">Following</p>
                                    <p class="line-height-1 text-title text-18 mt-2 mb-0">2</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="white-bg pt-30 col-lg-6 col-md-12 feature-request-area" id="random-request-slide">
                    <!-- <div class="card mb-4">
                        <div class="card-body">
                            <div class="card-title">Lnaid Schools</div>
                            <div class="d-flex align-items-center border-bottom-dotted-dim pb-3 mb-3"><img class="avatar-md rounded mr-3" src="{{ asset('assets/img/logos/logo-unn.png') }}" alt="" />
                                <div class="flex-grow-1">
                                    <h6 class="m-0">University of Nigeria, Nsukka</h6>
                                    <p class="m-0 text-small text-muted">1200 Requests</p>
                                </div>
                                <div>
                                    <button class="btn btn-outline-primary btn-rounded btn-sm">Follow</button>
                                </div>
                            </div>
                            <div class="d-flex align-items-center border-bottom-dotted-dim pb-3 mb-3"><img class="avatar-md rounded mr-3" src="{{ asset('assets/img/logos/logo-uniabuja.png') }}" alt="" />
                                <div class="flex-grow-1">
                                    <h6 class="m-0">University of Abuja</h6>
                                    <p class="m-0 text-small text-muted">920 Request</p>
                                </div>
                                <div>
                                    <button class="btn btn-outline-primary btn-rounded btn-sm">Follow</button>
                                </div>
                            </div>
                            <div class="d-flex align-items-center border-bottom-dotted-dim pb-3 mb-3"><img class="avatar-md rounded mr-3" src=" {{ asset('assets/img/logos/logo-futo.png') }} " alt="" />
                                <div class="flex-grow-1">
                                    <h6 class="m-0">Federal University of Technology, Owerri</h6>
                                    <p class="m-0 text-small text-muted">412 Requests</p>
                                </div>
                                <div>
                                    <button class="btn btn-outline-primary btn-rounded btn-sm">Follow</button>
                                </div>
                            </div>
                        </div>
                    </div> -->

                    <!-- Random requests -->
                    <!-- include('partials.request.slide') -->
                    <livewire:requests.random />

                </div>

            </div>
            <!-- end of row-->
            <div class="row">

                <div class="col-md-12">
                    <!-- include('partials.request.grid3') -->

                     <div class="white-bg section-title text-center mt-60 wow fadeInUp2  animated" data-wow-delay=".1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp2;">
                       <h5 class="left-line pl-75 pr-75"><span class="title">Recent Requests</span></h5>
                        <h6 class="p-3">Most Recent Requests from all Universities</h6>
                    </div>
                     <livewire:requests.recent />
                </div>

                <div class="col-md-12">
                    <!-- featured request here -->
                    <!-- include('partials.request.grid2') -->

                    <div class="white-bg section-title text-center mb-20 mt-60 wow fadeInUp2  animated" data-wow-delay=".1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp2;">
                       <h5 class="left-line pl-75 pr-75"><span class="title">Featured Requests</span></h5>
                        <h6 class="p-3">Featured and high priority requests from all Universities</h6>
                    </div>

                    <livewire:requests.featured />
                </div>

                <div class="col-md-12">
                    <div class="white-bg section-title text-center mb-20 mt-60 wow fadeInUp2  animated" data-wow-delay=".1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp2;">
                       <h5 class="left-line pl-75 pr-75"><span class="title">Recommended Requests</span></h5>
                        <h6 class="p-3">Requests from the Universities you follow</h6>
                    </div>

                    <!-- include('partials.request.grid') -->
                    <livewire:requests.recommended />
                </div>
            </div>
            <!-- end of row-->
            <!-- end of main-content -->
        </div>

    @endSection
    @push('js')
        <!-- <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script> -->

        <!-- include('partials.error', ['position' => 'toast-bottom-left' ]) -->
        <!-- include('partials.flash', ['position' => 'toast-bottom-left', 'timeout' => 1000 ]) -->

    @endPush

