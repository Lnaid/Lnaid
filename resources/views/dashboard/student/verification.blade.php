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
        <div class="col-md-12 col-lg-12 col-sm-12">
            <div class="card text-left">
                <div class="card-body">
                    <h4 class="card-title mb-3">Verify your account</h4>
                    <ul class="nav nav-pills" id="myPillTab" role="tablist">
                        <li class="nav-item"><a class="nav-link" id="home-icon-pill" data-toggle="pill" href="#homePIll" role="tab" aria-controls="homePIll" aria-selected="false"><i class="nav-icon i-Computer-Secure mr-1"></i>Upload your credential</a></li>
                        <li class="nav-item"><a class="nav-link" id="profile-icon-pill" data-toggle="pill" href="#profilePIll" role="tab" aria-controls="profilePIll" aria-selected="false"><i class="nav-icon i-Computer-Secure mr-1"></i> Upload your school ID card</a></li>
                        <li class="nav-item"><a class="nav-link active show" id="contact-icon-pill" data-toggle="pill" href="#contactPIll" role="tab" aria-controls="contactPIll" aria-selected="true"><i class="nav-icon i-Computer-Secure mr-1"></i> Final submission</a></li>
                    </ul>
                    <div class="tab-content" id="myPillTabContent">
                        <div class="tab-pane fade" id="homePIll" role="tabpanel" aria-labelledby="home-icon-pill">
                            Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore.

                        </div>
                        <div class="tab-pane fade" id="profilePIll" role="tabpanel" aria-labelledby="profile-icon-pill">
                            Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore.

                        </div>
                        <div class="tab-pane fade active show" id="contactPIll" role="tabpanel" aria-labelledby="contact-icon-pill">Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore.</div>
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

