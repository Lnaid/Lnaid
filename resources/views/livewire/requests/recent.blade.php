@if($recentRequests)
<section class=" pt-10 pb-10" style="background-image:url(assets/img/shape/09.png);">
    <div class="">
        <div class="row ">
        @foreach($recentRequests as $request)
            <div class="col-xl-4  wow fadeInUp2 animated" data-wow-delay='.1s'>
                <div class="requests request-cart white-bg mb-30">
                    <div class="projects__content">
                        <a href="#" class="new-tag">Misc</a>
                        <h3><a href="{{ route('sponsor.request-single', ['id' => $request->id]) }}">{{ $request->title }}</a></h3>
                            <div class="projects__manager d-sm-flex align-items-center mb-40">
                                <div class="manager-img mr-20">
                                    <img src=" {{ $request->studentDetails()->photo }} " alt="">
                                </div>
                                <div class="name">
                                    <h5>{{ $request->studentDetails()->name }}</h5>
                                    <address>
                                        <a href="#">{{ $request->studentDetails()->totalRequest  }} requests</a>
                                        <a href="#"><i class="far fa-map-marker-alt"></i> {{ $request->studentDetails()->school }} </a>
                                    </address>
                                </div>
                            </div>
                        <div class="skill mb-20">
                            <p class="skill-para mb-5">
                                <p class="mb-2"> Requested: {{ $request->currency->code }} {{ number_format($request->amount, 2) }} </p> 
                                <p class="mb-0"> Raised: {{ $request->currency->code }} {{ number_format($request->getStats()->amountRaised, 2) }} </p> 
                            </p>
                            <div class="progress">
                                <div style="width: {{$request->getStats()->percentageRaised}}%" class="progress-bar" role="progressbar" aria-valuenow="{{$request->getStats()->percentageRaised}}%"
                                    aria-valuemin="0" aria-valuemax="100">
                                    <h5>{{$request->getStats()->percentageRaised}}%</h5>
                                </div>
                            </div>
                        </div>
                        <ul class="cart-list d-sm-flex align-items-center">
                            <li class="mx-auto">
                                <a class="theme_btn theme_btn_bg"
                                data-animation="fadeInLeft" data-delay=".5s" data-toggle="modal" data-target="#raveDonateModal">Donate now <i
                                    class="far fa-arrow-right"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        @endforeach
         {{ $recentRequests->links('partials.pagination') }}
        </div>
    </div>
</section>
@endif
<!--request-area end-->