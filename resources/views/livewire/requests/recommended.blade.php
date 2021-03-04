<div class="row">
    @foreach($recommendedRequests as $request)
    <div class="col-xl-4 col-lg-4 col-md-6">
        <div class=" requests requests-02 white-bg mb-30 wow fadeInUp2  animated" data-wow-delay=".1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp2;">
            <div class=" projects__thumb pos-rel" style=" height: 200px; background: url(' {{ $request->getRequestMediaUrlAttribute() }} ');  background-repeat: no-repeat;
    background-size: cover;">
                <!-- <img src="{{ asset('storage/uploads/requests/01.jpg') }}" alt=""> -->
                <a href="#" class="new-tag">new</a>
            </div>

            <div class="projects__content">
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
    <!-- {{ $recommendedRequests->links('partials.pagination') }} -->
</div>