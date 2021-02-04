<x-main-layout>
   @section('content')

        <!-- ##### Welcome Area Start ##### -->
        <section class="hero-section ai1 relative" id="home">
           <div class="overlay"></div>
            <!-- Hero Content -->
            <div class="hero-section-content">
                
                <div class="container ">
                    <div class="row align-items-center">
                        <!-- Welcome Content -->
                        <div class="col-12 col-lg-6 col-md-12 col-sm-12 col-xs-12">
                            <h3 class="bold wow fadeInUp b-text" data-wow-delay="0.2s">Student Funding and Support Solution</h3>

                            @include('partials.main-intro')
                 
                        </div>
                        <div class="col-12 col-lg-6 col-md-12 col-sm-12 col-xs-12">
                            <div class="banner-video">
                                <div class="video-btn-container">
                                    <div class="video-icon">
                                        <a href="https://www.youtube.com/watch?v=gbXEPHsTkgU" class="btn info-btn video-btn" id="videobtn"><i class="fa fa-play"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ##### Welcome Area End ##### -->

        <section class="about-us-area section-padding-70-70">
            
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 col-lg-3 col-md-12 ">
                       
                        <div class="col-xs-12">
                            <div class="article special">
                                <img src="{{ asset('assets/img/icons/n3.png') }}" class="mb-10" alt="">
                                <h3 class="article__title">Tuition</h3> 
                                <p>Make donations towards a students tuition</p>               
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="article special">
                                <img src="{{ asset('assets/img/icons/n5.png') }}" class="mb-10" alt="">
                                <h3 class="article__title">Learning Resource</h3> 
                                <p>Help by providing learning resource</p>                
                            </div>
                        </div>
                        
                    </div>

                    <div class="col-12 col-lg-3 col-md-12">
                        
                        <div class="col-xs-12">
                            <div class="article special mts-50">
                                <img src="{{ asset('assets/img/icons/n6.png') }}" class="mb-10" alt="">
                                <h3 class="article__title">Accomodation</h3> 
                                <p>Solve accomodation problem faced by a student</p>                
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="article special">
                                <img src="{{ asset('assets/img/icons/n7.png') }}" class="mb-10" alt="">
                                <h3 class="article__title">Misc</h3> 
                                <p>Other challenges such as - Internet access, Electricity etc</p>               
                            </div>
                        </div>
                        
                    </div>
                    
                    <div class="col-12 col-lg-6 offset-lg-0 col-md-10 offset-md-1">
                        <div class="who-we-contant mt-s">
                            <div class="promo-section">
                                <h3 class="special-head ">Quick Overview</h3>
                            </div>
                            <h4 class="bl-text fadeInUp" data-wow-delay="0.3s">#Lnaid</h4>
                            <p class="fadeInUp" data-wow-delay="0.4s">Lnaid provides a robust system through which  students can reach out to Individuals, NGOs, Companies and Government Agencies for help on issues that borders on their education. We believe, there are kind hearted individuals who would love to give back to the society or more specifically their almamata by making contributions towards education. </p>
                            <p class="fadeInUp" data-wow-delay="0.5s">We ensure only geniune requests are published, every support offered goes directly to the beneficiary and we enforce transperancy via a #thankYou systeme</p>
                            <a class="btn info-btn green-btn mt-30 fadeInUp" data-wow-delay="0.6s" href="#">Read More</a>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- Creative Facts - Start -->
        <section class="creative-facts section-padding-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-sm-12">
                        <div class="who-we-contant">
                            <div class="promo-section">
                                <h3 class="special-head ">Our Core Features!</h3>
                            </div>
                            <h4 class="d-text bold fadeInUp" data-wow-delay="0.3s">Why Lnaid</h4>
                            <p class="fadeInUp" data-wow-delay="0.4s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis at dictum risus, non suscipit arcu. Quisque aliqua.</p>
                            <div class="services-block-four mt-30">
                                <div class="inner-box">
                                    <div class="icon-img-box">
                                        <img src="{{ asset('assets/img/icons/d1.png') }}" alt="">
                                    </div>
                                    <h3><a href="#">Request/Donations</a></h3>
                                    <div class="text">Direct request from students and donations from sponsors</div>
                                    
                                </div>
                            </div>
                            <div class="services-block-four">
                                <div class="inner-box">
                                    <div class="icon-img-box">
                                        <img src="{{ asset('assets/img/icons/d2.png') }}" alt="">
                                    </div>
                                    <h3><a href="#">Scholarship Schemes</a></h3>
                                    <div class="text">Corporate bodies can create and manage scholarship schemes</div>
                                    
                                </div>
                            </div>
                            <div class="services-block-four" style="margin-bottom:0">
                                <div class="inner-box">
                                    <div class="icon-img-box">
                                        <img src=" {{ asset('assets/img/icons/d3.png')}} " alt="">
                                    </div>
                                    <h3><a href="#">Awards</a></h3>
                                    <div class="text">Setup and manage one-time or re-occuring merit awards to deserving students</div>
                                    
                                </div>
                            </div>

                        </div>
                        

                    </div>
                </div>
                
            </div>
        </section>
        <!-- Creative Facts - End -->

    

        <!-- ##### Our Services Area Start ##### -->
        <hr />
        <section class="our_services_area section-padding-0-0 relative hex-pat-1  mt-30" id="services">
            <div class="container">
                
                <div class="section-heading text-center">
                    <span>Can you help with this ?</span>
                    <h2 class=" bold fadeInUp" data-wow-delay="0.3s">Top Request</h2>
                    <p class="fadeInUp" data-wow-delay="0.4s">Lets start with some top profilled request from students</p>
                </div>
                    

                <div class="row">
                    <div class="col-12 col-md-6 col-lg-4">
                        <!-- Content -->
                        <div class="service_single_content v2 text-center wow fadeInUp" data-wow-delay="0.2s">
                           
                            <div class="serv_icon">
                                <img src="{{ asset('assets/img/icons/s1.png') }}" alt="">
                            </div>
                            <div class="service-content">
                                <h6 class=" bold">Tuition</h6>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla neque quam, maxi ut accumsan ut, posuere sit Lorem ipsum</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <!-- Content -->
                        <div class="service_single_content v2 text-center wow fadeInUp" data-wow-delay="0.2s">
                           
                            <div class="serv_icon">
                                <img src="{{ asset('assets/img/icons/s2.png') }}" alt="">
                            </div>
                            <div class="service-content">
                                <h6 class="bold">Accomodation</h6>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla neque quam, maxi ut accumsan ut, posuere sit Lorem ipsum</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <!-- Content -->
                        <div class="service_single_content v2 text-center wow fadeInUp" data-wow-delay="0.2s">
                           
                            <div class="serv_icon">
                                <img src="{{ asset('assets/img/icons/s3.png') }}" alt="">
                            </div>
                            <div class="service-content">
                                <h6 class=" bold">Misc</h6>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla neque quam, maxi ut accumsan ut, posuere sit Lorem ipsum</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <!-- Content -->
                        <div class="service_single_content v2 text-center wow fadeInUp" data-wow-delay="0.4s">
                           
                            <div class="serv_icon">
                                <img src="{{ asset('assets/img/icons/s4.png') }}" alt="">
                            </div>
                            <div class="service-content">
                                <h6 class=" bold">Misc</h6>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla neque quam, maxi ut accumsan ut, posuere sit Lorem ipsum</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <!-- Content -->
                        <div class="service_single_content v2 text-center wow fadeInUp" data-wow-delay="0.4s">
                           
                            <div class="serv_icon">
                                <img src="{{ asset('assets/img/icons/s5.png') }}" alt="">
                            </div>
                            <div class="service-content">
                                <h6 class=" bold">Learning Resource</h6>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla neque quam, maxi ut accumsan ut, posuere sit Lorem ipsum</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <!-- Content -->
                        <div class="service_single_content v2 text-center wow fadeInUp" data-wow-delay="0.4s">
                           
                            <div class="serv_icon">
                                <img src="{{ asset('assets/img/icons/s6.png') }}" alt="">
                            </div>
                            <div class="service-content">
                                <h6 class=" bold">Tuition</h6>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla neque quam, maxi ut accumsan ut, posuere sit Lorem ipsum</p>
                            </div>
                        </div>
                    </div>
                    

                </div>
            </div>
        </section>


       

        <!-- Testimonial section -->
        <!-- include('partials.main-testimonial') -->
        <!-- Testimonial End -->

    @endSection
</x-main-layout>
