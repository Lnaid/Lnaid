<div class="">

    <style>
        .table p{
            margin: 0;
        }

        .filter-container{
            margin-bottom: 15px;
            padding: 25px;
            background: #979596;
            color: white;
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


    <div class="filter-container">
        <h2>Filter</h2>
        <div class="row">
            <div class="col-md-3">
                <label for="">Search Title</label>
                <input type="text" class="form-control" wire:model="filter.search"  >
            </div>

            <div class="col-md-2">
                <label for="">Status</label>
                <select wire:model="filter.status" class="form-control" >
                    <option value="">Choose One</option>
                    <option value="pending">Task Pending</option>
                    <option value="accomplished">Task Accomplished</option>
                </select>
            </div>

            <div class="col-md-3">
                <label for="">Order Field</label>
                <select wire:model="filter.order_field" class="form-control" >
                    <option value="">Choose One</option>
                    <option value="title">Task Title</option>
                    <option value="status">Task Status</option>
                </select>
            </div>

            <div class="col-md-2">
                <label for="">Order Type</label>
                <select wire:model="filter.order_type" class="form-control" >
                    <option value="">Choose One</option>
                    <option value="ASC">Ascending</option>
                    <option value="DESC">Descending</option>
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
            <div class="col-md-4 projects__thumb" style="background: url(' {{ $request->getRequestMediaUrlAttribute() }} ');  background-repeat: no-repeat;
    background-size: cover;">
                <!-- <img src="{{ asset('storage/uploads/requests/01.jpg') }}" alt=""> -->
            </div>
            <div class="col-md-8 projects__content">
            <h4 class="text-primary"><a href="{{ route('sponsor.request-single', ['id' => $request->id]) }}">{{ $request->title }}</a></h4>
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
        </div>
        </div>
    </div>
    @endforeach
  
    @endif
</div>




    <div class="pagination-container">
        <ul class="pagination">
            <li class="page-item 
                    @if($page == 1)
                        disabled
                    @endif
                ">
                <a class="page-link" href="javascript:void(0)" wire:click="applyPagination('previous_page', {{ $page-1 }})" >
                    Previous
                </a>
            </li>

            <li class="page-item
                    @if($page == $paginator['last_page']) 
                        disabled
                    @endif
            
                ">
                <a class="page-link" href="javascript:void(0)" 
                    @if($page <= $paginator['last_page']) 
                        wire:click="applyPagination('next_page', {{ $page+1 }})"
                    @endif    
                >
                Next
                </a>
            </li>

            <li class="page-item"  style="margin: 0 5px" >
                Jump to Page
            </li>

            <li class="page-item"  style="margin: 0 5px" >
                <select class="form-control" title="" style="width: 80px" wire:model="page" >
                    @for($i=1;$i<=$paginator['last_page'];$i++)
                        <option value="{{ $i }}">{{ $i }}</option>
                    @endfor
                </select>
            </li>

            <li class="page-item"  style="margin: 0 5px" >
                Items Per Page
            </li>

            <li class="page-item"  style="margin: 0 5px" >
                <select class="form-control" title="" style="width: 80px" wire:model="items_per_page" wire:change="loadList" >
                    <option value="5">05</option>
                    <option value="10">10</option>
                    <option value="20">20</option>
                    <option value="30">30</option>
                </select>
            </li>
        </ul>
    </div>
</div>