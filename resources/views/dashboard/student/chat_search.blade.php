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
            <div class="card chat-sidebar-container sidebar-container" data-sidebar-container="chat">
                <div class="chat-sidebar-wrap sidebar" data-sidebar="chat" style="left: 0px;">
                    <div class="border-right">
                        <div class="pt-2 pb-2 pl-3 pr-3 d-flex align-items-center o-hidden box-shadow-1 chat-topbar"><a class="link-icon d-md-none" data-sidebar-toggle="chat"><i class="icon-regular ml-0 mr-3 i-Left"></i></a>
                            <div class="form-group m-0 flex-grow-1">
                                <form method="GET" action="{{ route('student.chat.search') }}">
                                    <input class="form-control form-control-rounded" id="search" name="s" type="text" placeholder="Search..." value="{{ $query }}">
                                </form>
                            </div>
                        </div>
                        <div class="contacts-scrollable perfect-scrollbar ps">
                            <div class="mt-3 pb-2 pl-3 pr-3 font-weight-bold text-muted border-bottom">Recent Chat</div>
                            @if(isset($user) && count($user) > 0)
                                @foreach($user as $u)
                                    <a href="{{ route('student.chat.create', ['id' => $u->id]) }}">
                                        <div class="p-3 d-flex border-bottom align-items-center contact online">
                                                <img class="avatar-sm rounded-circle mr-3" src="{{ asset('assets/uploads/profile/'.$u->profile_photo_path) }}" alt="alt">
                                            <h6>
                                                {{$u->name}}
                                            </h6>
                                        </div>
                                    </a>
                                @endforeach
                            @else
                            <span style="text-align: center; margin: 10px">No result found</span>
                            @endif
                            <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
                        </div>
                    </div>
                    <div class="chat-content-wrap sidebar-content" data-sidebar-content="chat" style="margin-left: 260px;">
                        <div class="d-flex pl-3 pr-3 pt-2 pb-2 o-hidden box-shadow-1 chat-topbar"><a class="link-icon d-md-none" data-sidebar-toggle="chat"><i class="icon-regular i-Right ml-0 mr-3"></i></a>
                            @if(isset($singleChat))
                            <div class="d-flex align-items-center"><img class="avatar-sm rounded-circle mr-2" src="{{ asset('assets/dashboard/images/faces/1.jpg') }}" alt="alt">
                                <p class="m-0 text-title text-16 flex-grow-1">Frank Powell</p>
                            </div>
                            @endif
                        </div>
                        <div class="chat-content perfect-scrollbar ps ps--active-y" data-suppress-scroll-x="true">
                            @if(isset($singleChat))
                            @foreach($singleChat as $chat)
                            @if($chat->sender_id == Auth::user()->id)
                            <div class="d-flex mb-4">
                                <div class="message flex-grow-1">
                                    <div class="d-flex">
                                        <p class="mb-1 text-title text-16 flex-grow-1">{{$chat->receiver->name}}</p><span class="text-small text-muted">25 min ago</span>
                                    </div>
                                    <p class="m-0">{{$chat->content}}</p>
                                </div><img class="avatar-sm rounded-circle ml-3" src="{{ asset('assets/dashboard/images/faces/1.jpg') }}" alt="alt">
                            </div>
                            @else
                            <div class="d-flex mb-4 user"><img class="avatar-sm rounded-circle mr-3" src="{{ asset('assets/dashboard/images/faces/1.jpg') }}" alt="alt">
                                <div class="message flex-grow-1">
                                    <div class="d-flex">
                                        <p class="mb-1 text-title text-16 flex-grow-1">{{$chat->sender->name}}</p><span class="text-small text-muted">24 min ago</span>
                                    </div>
                                    <p class="m-0">{{$chat->content}}</p>
                                </div>
                            </div>
                            @endif
                            @endforeach
                            <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; height: 290px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 189px;"></div></div></div>
                            <div class="pl-3 pr-3 pt-3 pb-3 box-shadow-1 chat-input-area">
                                <form class="inputForm" method="POST" action="{{route('student.chat.thread.reply', ['id' => 1])}}">
                                    <div class="form-group">
                                        <textarea class="form-control form-control-rounded" id="message" placeholder="Type your message" name="message" cols="30" rows="3"></textarea>
                                    </div>
                                    <div class="d-flex">
                                        <div class="flex-grow-1"></div>
                                        <button class="btn btn-icon btn-rounded btn-primary mr-2"><i class="i-Paper-Plane"></i></button>
                                        <button class="btn btn-icon btn-rounded btn-outline-primary" type="submit"><i class="i-Add-File"></i></button>
                                    </div>
                                </form>
                                @endif
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

        @push('modals')

        @endPush

