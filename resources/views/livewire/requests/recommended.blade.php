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
                <h4><a href="request-video.html">Gen3 Airoha Air Pro 3 TWS
                        Cancel Headphone</a></h4>
                <div class="skill mb-30">
                    <p>Raised <span>$2535</span></p>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="95">
                            <h5>95%</h5>
                        </div>
                    </div>
                </div>
                <div class="projects__content--manager">
                    <ul class="request-manager">
                        <li><a href="#"><img src=" {{ url('storage/files/avatars/01.png') }} " alt="">
                                <span>Somalia</span></a></li>
                        <li>
                            <p class="time"><i class="far fa-clock"></i> 7 Days Left</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>