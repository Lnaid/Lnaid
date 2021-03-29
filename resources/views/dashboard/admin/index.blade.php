@extends('layouts.admin')
    @push('css')
        
        
    @endPush
   @section('content')

        <!-- ============ Body content start ============= -->
        <div class="main-content">
            @include('partials.breadcrumb')
            <div class="separator-breadcrumb border-top"></div>
            <div class="row">
                @include('partials.admin.stats')
            </div>
        </div>

    @endSection
    @push('js')
        <script src="{{ asset('assets/dashboard/js/plugins/echarts.min.js') }}"></script>
        <script src="{{ asset('assets/dashboard/js/scripts/echart.options.min.js') }}"></script>
        <script src="{{ asset('assets/dashboard/js/plugins/datatables.min.js') }}"></script>
        <script src="{{ asset('assets/dashboard/js/scripts/dashboard.v4.script.min.js') }}"></script>
        <script src="{{ asset('assets/dashboard/js/scripts/widgets-statistics.min.js') }}"></script>
        <script src="{{ asset('assets/dashboard/js/plugins/apexcharts.min.js') }}"></script>
        <script src="{{ asset('assets/dashboard/js/scripts/apexSparklineChart.script.min.js') }}"></script>

    @endPush

