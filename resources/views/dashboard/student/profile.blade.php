@extends('layouts.student')
    @push('css')
        <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" /> -->
    @endPush
   @section('content')

        <!-- ============ Body content start ============= -->
        <div class="main-content">
            @include('partials.breadcrumb')
            <div class="separator-breadcrumb border-top"></div>
            <div class="row mb-4">
                
                
                <div class="col-lg-4 col-md-6 mt-4">
                    <div class="card mb-4 h-100">
                        <div class="card-body">
                            <div class="card-title">Profile Picture</div>
                            <img src="http://127.0.0.1:8000/assets/dashboard/images/faces/1.jpg"alt="" style="display: block; border-radius: 50%; margin-left: 90px;">
                            <button class="btn btn-danger" style="position: absolute;margin-left: 110px;margin-top: 10px;" type="button">Change</button>
                        </div>
                    </div>
                </div>

                <!-- mask-form-->
                <div class="mt-4 col-lg-8 col-md-6">
                    <div class="card bg-defualt text-black">
                        <!-- -->
                        <!-- -->
                        <div class="card-body">
                            <!-- -->
                            <!-- -->
                            <div class="d-flex align-items-center mb-4"><i class="i-ID-Card text-22 mr-2"></i>
                                <h5 class="text-18 font-weight-700 card-title m-0">Edit Information</h5>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <p class="font-weight-400 mb-2">CPF</p>
                                    <input class="form-control" type="text" placeholder="999.999.999-99" />
                                </div>
                                <div class="mb-3 col-md-6">
                                    <p class="font-weight-400 mb-2">Zip Code</p>
                                    <input class="form-control" type="text" placeholder="99999-999" />
                                </div>
                                <div class="mb-3 col-md-6">
                                    <p class="font-weight-400 mb-2">Phone</p>
                                    <input class="form-control" type="text" placeholder="+9 (999) 999-9999" />
                                </div>
                                <div class="mb-3 col-md-6">
                                    <p class="font-weight-400 mb-2">Master Card</p>
                                    <input class="form-control" type="text" placeholder="9999 9999 9999 9999" />
                                </div>
                                <div class="mb-3 col-md-6">
                                    <p class="font-weight-400 mb-2">Date</p>
                                    <input class="form-control" type="text" placeholder="mm/dd/yy" />
                                </div>
                                <div class="mb-3 col-md-6">
                                    <p class="font-weight-400 mb-2">CPF/CNPJ</p>
                                    <input class="form-control" type="text" placeholder="99.999.999/9999-99" />
                                </div>
                            </div>
                            <button class="btn float-right btn-danger" type="button">Edit</button>
                        </div>
                        <!-- -->
                        <!-- -->
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

