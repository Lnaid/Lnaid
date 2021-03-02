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
                <div class="col-md-12">
                    @if($request)
                    <!-- pass a single request object with subobject  included -->
                    @include('partials.request.single', ['request' => $request])

                    @endif
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

        <script type="text/javascript">
            document.getElementsByClassName("progress-bar")[0].setAttribute("style", "width:50%");
            document.getElementsByClassName("progress-bar")[0].style.width = "{{$request->getStats()->percentageRaised}}%";
        </script>

    @endPush

