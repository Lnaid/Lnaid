<!-- request-area start-->
<section class="request-image-area  pt-0 pb-0" >
    <div class="">
        <div class="card row no-gutters" style="flex-direction: inherit;">

            <div class="col-xl-6">
                <div class="request-img mb-30 wow fadeInUp2 animated" data-wow-delay='.1s'>
                    <!-- <img src="{{ asset('storage/uploads/requests/07.jpg') }}" alt=""> -->
                    <img src="{{ $request->getRequestMediaUrlAttribute() }}" alt="">

                </div>
            </div>

            <div class="col-xl-6  wow fadeInUp2 animated" data-wow-delay='.1s'>
                <div class="requests request-cart white-bg mb-30">
                    <div class="projects__content">
                        <a href="#" class="new-tag">Misc</a>
                        <h3><a href="request-video.html">{{ $request->title }}</a></h3>
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
                                <span> Requested: {{ $request->currency()->code }} {{ number_format($request->amount, 2) }} </span> 
                                <span class="float-right"> Raised: {{ $request->currency()->code }} {{ number_format($request->getStats()->amountRaised, 2) }} </span> 
                            </p>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="95"
                                    aria-valuemin="0" aria-valuemax="95">
                                    <h5>52%</h5>
                                </div>
                            </div>
                        </div>
                        <ul class="cart-list d-sm-flex align-items-center">
                            <li class="mx-auto">
                                <a class="theme_btn theme_btn_bg" href="contact.html"
                                data-animation="fadeInLeft" data-delay=".5s">Donate now <i
                                    class="far fa-arrow-right"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>


            <div class=" our-overview-area pos-rel  wow fadeInUp2 animated" data-wow-delay='.1s'">
                <div class="col-xl-12">
                    <ul class="nav nav-tabs nav-tabs-02" id="myTab" role="tablist">
                        <li class="nav-item">
                          <a class="nav-link theme_btn active" id="home-tab" data-toggle="tab" href="#home-01" role="tab" aria-controls="home-01" aria-selected="true">Description</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link theme_btn" id="contact-tab" data-toggle="tab" href="#contact-02" role="tab" aria-controls="contact-02" aria-selected="false">Donations</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link theme_btn" id="contact2-tab" data-toggle="tab" href="#contact-03" role="tab" aria-controls="contact-03" aria-selected="false">Comments</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home-01" role="tabpanel" aria-labelledby="home-tab">
                            <section class="request-image-text-area pt-35 pb-90 wow fadeInUp animated" data-wow-delay='.3s'>
                                <div class="container">
                                    <div class="row">
                                        <!-- Description -->
                                        <div class="col-xl-8 col-lg-8 col-md-12">
                                            <div class="image-content-left">
                                                <div class="left-content-box mb-45">
                                                    <h3 class="img-title mb-10">Best Smart Headphone In 2020</h3>
                                                    <p class="mb-40">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatu</p>
                                                    <div class="image-content-thumb">
                                                        <img src="assets/img/request/20.jpg" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-4 col-lg-4 col-md-12">
                                            <div class="image-content-right">
                                                <div class="widget">
                                                    <div class=" widget-donate-box pos-rel text-center">
                                                        <i class="fa fa-quote-left" style="font-size: 80px; color: #fed857;"></i>
                                                        <h5 >Help</h5>
                                                        <h4>An investment in knpwledge pays the best</h4>
                                                            <a class="theme_btn theme_btn_bg" href="contact.html"
                                                            data-animation="fadeInLeft" data-delay=".5s">donate now <i
                                                                class="far fa-arrow-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>

                        <!-- DOnors Tab -->
                        <div class="tab-pane fade" id="contact-02" role="tabpanel" aria-labelledby="contact-tab">
                            <div class="backer-list-table pt-45 pb-130">
                                <table class="table">
                                    <thead>
                                      <tr>
                                        <th scope="col">Name</th>
                                        <th scope="col">Donate Amount</th>
                                        <th scope="col">Date</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <td>David Jhonshon</td>
                                        <td>$25630</td>
                                        <td>25 Dec 2020</td>
                                      </tr>
                                      <tr>
                                        <td>Somalia D Silva</td>
                                        <td>$26630</td>
                                        <td>26 Dec 2020</td>
                                      </tr>
                                      <tr>
                                        <td>Michel J Hasi</td>
                                        <td>$30630</td>
                                        <td>27 Dec 2020</td>
                                      </tr>
                                      <tr>
                                        <td>Radarfort D Oska</td>
                                        <td>$27630</td>
                                        <td>28 Dec 2020</td>
                                      </tr>
                                      <tr>
                                        <td>Walton Pothe</td>
                                        <td>$28630</td>
                                        <td>29 Dec 2020</td>
                                      </tr>
                                      <tr>
                                        <td>Maskuran Polder</td>
                                        <td>$29630</td>
                                        <td>30 Dec 2020</td>
                                      </tr>
                                    </tbody>
                                  </table>
                            </div>
                        </div>

                        <!-- Comments Tab -->
                        <div class="tab-pane fade" id="contact-03" role="tabpanel" aria-labelledby="contact2-tab">
                            <div class="row">
                                <div class="col-xl-10">
                                    <div class="review-box pt-50">
                                        <h5 class="mb-35">1 Review For Women Winter Dress</h5>
                                        <div class="reviewer d-sm-flex">
                                            <div class="reviewer__img">
                                                <img src=" {{ url('storage/files/avatars/01.png') }} " alt="">
                                            </div>
                                            <div class="reviewer__content">
                                                <p>Alexzender,<span>25 Janu 2019</span></p>
                                                <div class="review-icon">
                                                    <a href="#"><i class="fas fa-star"></i></a>
                                                    <a href="#"><i class="fas fa-star"></i></a>
                                                    <a href="#"><i class="fas fa-star"></i></a>
                                                    <a href="#"><i class="fas fa-star"></i></a>
                                                    <a href="#"><i class="fas fa-star"></i></a>
                                                </div>
                                                <span>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master.</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="post-form-area review-form pt-50 pb-120">
                                        <h5 class="review-title mb-15">Add a Review</h5>
                                        <div class="row">
                                            <div class="col-xl-6">
                                                <div class="input-box">
                                                    <div class="input-text mb-35">
                                                        <input type="text" class="form-control" placeholder="Your Name :">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="input-box mb-35">
                                                    <div class="input-text input-mail">
                                                        <input type="text" class="form-control" placeholder="Your Email :">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-12">
                                                <div class="input-box mb-25">
                                                    <div class="review-icon">
                                                        <span>Your Rating :</span>
                                                        <a href="#"><i class="fas fa-star"></i></a>
                                                        <a href="#"><i class="fas fa-star"></i></a>
                                                        <a href="#"><i class="fas fa-star"></i></a>
                                                        <a href="#"><i class="fas fa-star"></i></a>
                                                        <a href="#"><i class="fas fa-star"></i></a>
                                                    </div>
                                                    <div class="input-text input-message">
                                                        <textarea name="message" id="message" cols="30" rows="10" placeholder="Your Review"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-12">
                                                <div class="review-btn">
                                                    <a class="theme_btn theme_btn_bg" href="contact.html">send review <i
                                                            class="far fa-arrow-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!--request-area end-->



 <!--our-overview-area start-->

<!--our-overview-area end
