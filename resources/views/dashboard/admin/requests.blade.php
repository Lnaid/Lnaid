@extends('layouts.admin')
   @push('css')
       
    @endPush
   @section('content')

        <!-- ============ Body content start ============= -->
        <div class="main-content">
            @include('partials.breadcrumb')
            <div class="separator-breadcrumb border-top"></div>
            <div class="">
                 <livewire:requests.index />
            </div>
        </div>

    @endSection
    @push('js')
        
    @endPush

