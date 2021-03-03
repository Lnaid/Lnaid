<div class="request-slide" style="overflow: hidden;">
	@foreach($randomRequests as $request)
    <div class="row card requests grey-bg d-sm-flex mb-30 wow fadeInUp2  animated" data-wow-delay=".1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp2;">
        <div  class="col-md-6 projects__thumb">
           <img style="height: 100%" src="{{ $request->getRequestMediaUrlAttribute() }}" alt="">
        </div>
        <div class="col-md-6 projects__content">
            <h4 class="text-primary"><a href="request-video.html">{{ $request->title }}</a></h4>
            <div class="skill mb-30">
                <p class="text-secondary" >Raised <span>{{ $request->currency->code }} {{ number_format($request->getStats()->amountRaised, 2) }} </span></p>
                <div style="width: {{$request->getStats()->percentageRaised}}%" class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                        <h5>{{$request->getStats()->percentageRaised}}%</h5>
                    </div>
                </div>
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
    @endforeach
</div>