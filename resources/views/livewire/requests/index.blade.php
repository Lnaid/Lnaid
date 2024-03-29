<div class="">

    <style>
        .table p{
            margin: 0;
        }

        .filter-container{
            margin-bottom: 15px;
            padding: 25px;
            background: white;
            color: black;
            font-size: 16px;
        }

        .filter-container > .row{
            margin: 0;
        }

        .filter-container > .row > div{
            padding: 0 5px;
        }
    </style>

    <div wire:loading wire:init="loadList" >
        {{ $loading_message }}
    </div>
    @if (session()->has('success'))
    <div class="alert alert-card alert-success" role="alert"><strong class="text-capitalize">{{ session('success') }}!</strong>
        <button class="close" type="button" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
    </div>
    @endif
    @if (session()->has('error'))
    <div class="alert alert-card alert-success" role="alert"><strong class="text-capitalize">{{ session('error') }}!</strong>
        <button class="close" type="button" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
    </div>
    @endif


    <div class="filter-container">
        <h2>Filter</h2>
        <div class="row">
            <div class="col-md-3">
                <label for="">Search Title</label>
                <input type="text" class="form-control" wire:model="filter.search"   >
            </div>

            <div class="col-md-2">
                <label for="">School</label>
                <select wire:model="filter.school" class="form-control" >
                    <option value="">All Schools</option>
                    <option value="pending">Federal University of Technology - Minna</option>
                    <option value="accomplished">University of Abuja</option>
                </select>
            </div>

            <div class="col-md-3">
                <label for="">Category</label>
                <select wire:model="filter.category" class="form-control" >
                    <option value="">Choose One</option>
                    <option value="title">Top Requests</option>
                    <option value="status">Featured Requests</option>
                    <option value="status">Recent Requests</option>
                </select>
            </div>

            <div class="col-md-2">
                <label for="">Items perpage</label>
                <select wire:model="items_per_page" class="form-control" >
                    <option value="">5</option>
                    <option value="10">10</option>
                    <option value="20">20</option>
                </select>
            </div>

            <div class="col-md-2" style="display: flex;align-items: flex-end;" >
                <div>
                    <button type="button" wire:click="loadList" class="btn btn-default" >Filter</button>
                </div>
            </div>
        </div>
    </div>


    <div class="row gx-3 p-3">
        @if(!empty($objects))
        @foreach($objects as $request)
        <div class="card mb-3 col-xl-6 col-lg-6 col-md-6">
            <div class="row requests white-bg  wow fadeInUp2  animated" data-wow-delay=".1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp2;">
                <div class="col-md-4 projects__thumb" style="background: url(' {{ $request->getRequestMediaUrlAttribute() }} ');  background-repeat: no-repeat; background-size: cover;">
                </div>
                <div class="col-md-8 projects__content">
                    <h4 class="text-primary"><a href="{{ route('sponsor.request-single', ['slug' => $request->slug]) }}">{{ $request->title }}</a></h4>
                    <div class="skill mb-30">
                       @if($request->isFundRequest() ) 
                       <p class="text-secondary" >Requested: <span>: {{ $request->currency->code }} {{ number_format($request->amount, 2) }}</span></p>

                       <p class="text-secondary" >Raised: <span>{{ $request->currency->code }} {{ number_format($request->getStats()->amountRaised, 2) }} </span></p>
                       <div class="progress">
                        <div class="progress-bar" style="width: {{$request->getStats()->percentageRaised}}% " role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                            <h5> {{$request->getStats()->percentageRaised}}% </h5>
                        </div>
                    </div>
                    @endif
                </div>
                <div class="projects__content--manager">
                    <ul class="request-manager">
                        <li><a href="#">
                            <img src=" {{ $request->studentDetails()->photo }} " alt="">
                            <span>{{ $request->studentDetails()->name }}</span></a></li>
                            <li>
                                <p class="time"><i class="far fa-clock"></i>{{ $request->created_at->diffForHumans() }}</p>
                            </li>
                        </ul>
                    </div>
                    @if(Auth::user()->account_type == "admin")
                    <button class="btn bg-white _r_btn border-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="_dot _inline-dot bg-primary"></span><span class="_dot _inline-dot bg-primary"></span><span class="_dot _inline-dot bg-primary"></span></button>
                    <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 33px, 0px); top: 0px; left: 0px; will-change: transform;"><a class="dropdown-item ul-widget__link--font" wire:click="approve({{ $request->id }})"><i class="i-Bar-Chart-4"> </i> Approve</a><a class="dropdown-item ul-widget__link--font" href="#"wire:click="reject({{ $request->id }})"><i class="i-Data-Save"> </i> Reject</a>
                    </div>
                    @endif
                </div>
            </div>
        </div>
        @endforeach

        @endif


    </div>

</div>