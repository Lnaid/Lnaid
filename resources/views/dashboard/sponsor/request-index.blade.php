@extends('layouts.sponsor')
    @push('css')
        <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" /> -->
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
                                    <p class="text-muted mt-2 mb-2">Today&apos;s Upload</p>
                                    <p class="text-primary text-24 line-height-1 m-0">21</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="card card-icon mb-4">
                                <div class="card-body text-center"><i class="i-Add-User"></i>
                                    <p class="text-muted mt-2 mb-2">New Users</p>
                                    <p class="text-primary text-24 line-height-1 m-0">21</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="card card-icon mb-4">
                                <div class="card-body text-center"><i class="i-Money-2"></i>
                                    <p class="text-muted mt-2 mb-2">Total sales</p>
                                    <p class="text-primary text-24 line-height-1 m-0">4021</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="card card-icon-big mb-4">
                                <div class="card-body text-center"><i class="i-Money-2"></i>
                                    <p class="line-height-1 text-title text-18 mt-2 mb-0">4021</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="card card-icon-big mb-4">
                                <div class="card-body text-center"><i class="i-Gear"></i>
                                    <p class="line-height-1 text-title text-18 mt-2 mb-0">4021</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="card card-icon-big mb-4">
                                <div class="card-body text-center"><i class="i-Bell"></i>
                                    <p class="line-height-1 text-title text-18 mt-2 mb-0">4021</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="card-title">Top Schools</div>
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
                    </div>
                </div>
            </div>
            <!-- end of row-->
            <div class="row">

                <div class="col-md-12">
                    @include('partials.sponsor.request-grid3')
                </div>

                <div class="col-md-12">
                    @include('partials.sponsor.request-grid2')
                </div>

                <div class="col-md-12">
                    @include('partials.sponsor.request-grid')
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

