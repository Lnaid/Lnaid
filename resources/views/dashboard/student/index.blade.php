@extends('layouts.student')
    @push('css')
        <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" /> -->
    @endPush
   @section('content')

        <!-- ============ Body content start ============= -->
        <div class="main-content">
            <div class="breadcrumb">
                <h1 class="mr-2">Dashboard</h1>
                <ul>
                    <li><a href="#">Go back</a></li>
                    <li>Dashboard</li>
                </ul>
            </div>
            <div class="separator-breadcrumb border-top"></div>
            <div class="row mb-4">
                <div class="col-md-3 col-lg-3">
                    <div class="card mb-4 o-hidden">
                        <div class="card-body ul-card__widget-chart">
                            <div class="row">
                                <div class="col-md-3">
                                    <span class="badge badge-success">
                                        <i class="nav-icon i-Bar-Chart"></i>
                                    </span>
                                </div>
                                <div class="col-md-6">
                                   <div class="ul-widget__chart-info">
                                        <h5 class="heading">Amount Requested</h5>
                                        <div class="ul-widget__chart-number">
                                            <h2 class="t-font-boldest">$1000</h2>
                                        </div>
                                    </div> 
                                </div>          
                            </div>      
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3">
                    <div class="card mb-4 o-hidden">
                        <div class="card-body ul-card__widget-chart">
                            <div class="row">
                                <div class="col-md-3"></div>
                                <div class="col-md-6">
                                    <div class="ul-widget__chart-info">
                                        <h5 class="heading">Amount Received</h5>
                                        <div class="ul-widget__chart-number">
                                            <h2 class="t-font-boldest">$500</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3">
                    <div class="card mb-4 o-hidden">
                        <div class="card-body ul-card__widget-chart">
                            <div class="row">
                                <div class="col-md-3"></div>
                                <div class="col-md-6">
                                    <div class="ul-widget__chart-info">
                                        <h5 class="heading">Completed Request</h5>
                                        <div class="ul-widget__chart-number">
                                            <h2 class="t-font-boldest">$44,909</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3">
                    <div class="card mb-4 o-hidden">
                        <div class="card-body ul-card__widget-chart">
                            <div class="row">
                                <div class="col-md-3"></div>
                                <div class="col-md-6">
                                    <div class="ul-widget__chart-info">
                                        <h5 class="heading">Validation Score</h5>
                                        <div class="ul-widget__chart-number">
                                            <h2 class="t-font-boldest">$500</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3">
                    <div class="card mb-4 o-hidden">
                        <div class="card-body ul-card__widget-chart">
                            <div class="row">
                                <div class="col-md-3"></div>
                                <div class="col-md-6">
                                    <div class="ul-widget__chart-info">
                                        <h5 class="heading">Recommendation</h5>
                                        <div class="ul-widget__chart-number">
                                            <h2 class="t-font-boldest">$500</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3">
                    <div class="card mb-4 o-hidden">
                        <div class="card-body ul-card__widget-chart">
                            <div class="row">
                                <div class="col-md-3"></div>
                                <div class="col-md-6">
                                    <div class="ul-widget__chart-info">
                                        <h5 class="heading">Fund Requests</h5>
                                        <div class="ul-widget__chart-number">
                                            <h2 class="t-font-boldest">$500</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div><div class="col-md-3 col-lg-3">
                    <div class="card mb-4 o-hidden">
                        <div class="card-body ul-card__widget-chart">
                            <div class="row">
                                <div class="col-md-3"></div>
                                <div class="col-md-6">
                                    <div class="ul-widget__chart-info">
                                        <h5 class="heading">Funders</h5>
                                        <div class="ul-widget__chart-number">
                                            <h2 class="t-font-boldest">$500</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
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

