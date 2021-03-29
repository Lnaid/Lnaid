@extends('layouts.sponsor')
    @push('css')
        <link href="{{ asset('assets/css/toastr.min.css') }}" rel="stylesheet">
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
        <script src="{{ asset('assets/js/toastr.min.js') }}"></script>

        @include('partials.error', ['position' => 'toast-top-right' ])
        @include('partials.flash', ['position' => 'toast-top-right', 'timeout' => 10000 ])



    @endPush

