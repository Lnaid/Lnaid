@extends('layouts.main')
    @push('css')
       
        <style type="text/css">
            
            .owl-carousel{
                overflow: hidden;
                max-width: 320px
            }

            @media (max-width: 575.98px) {
              .owl-carousel{
                    overflow: hidden;
                    max-width: 320px;
                }
            }

            @media (max-width: 375.98px) {
              .owl-carousel{
                    overflow: hidden;
                    max-width: 300px;
                }
            }

            .owl-item{
               float: left;
            }

        </style>
        
    @endPush
   @section('content')

        <!-- ##### Welcome Area Start ##### -->
        <section class="p-5 hero-section ai1 relative" id="home">
           <div class="overlay"></div>
            <!-- Hero Content -->
            <div class="hero-section-content">
                
                <div class="container ">
                    <div class="row align-items-center">
                        <!-- Welcome Content -->
                        <div class="col-12 col-lg-6 col-md-12 col-sm-12 col-xs-12">
                            <h3 class="bold wow fadeInUp b-text" data-wow-delay="0.2s">Acadamic Crowdfunding and Student Support Solution</h3>

                            @include('partials.main-intro')
                 
                        </div>
                        <div class="col-12 col-lg-6 col-md-12 col-sm-12 col-xs-12">
                            <div class="banner-video">
                                <div class="video-btn-container">
                                    <div class="video-icon">
                                        <a href="{{ route('dashboard') }}" class="btn info-btn video-btn" id="videobtn"><i class="fa fa-play"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ##### Welcome Area End ##### -->

        <section class="p-5  d-md-block about-us-area section-padding-70-70">
            
            <div class="container">
                <div class="row align-items-center">


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
                        <hr>
                    </div>

                    

                    <div class="col-12 col-lg-3 col-md-12 ">
                       
                        <div class="">
                            <div class="article special">
                                <img src="{{ asset('assets/img/icons/n3.png') }}" class="mb-10" alt="">
                                <h3 class="article__title">Donations</h3> 
                                <p>
                                    Individuals and Corporate bodies can make donations on verified request from students.

                                </p>               
                            </div>
                        </div>
                        <div class="">
                            <div class="article special">
                                <img src="{{ asset('assets/img/icons/n5.png') }}" class="mb-10" alt="">
                                <h3 class="article__title">Offers</h3> 
                                <p>
                                    One-time  or recurrent offers  can be created for students and learners.
                                </p>                
                            </div>
                        </div>
                        
                    </div>

                    <div class="col-12 col-lg-3 col-md-12">
                        
                        <div class="">
                            <div class="article special mts-50">
                                <img src="{{ asset('assets/img/icons/n6.png') }}" class="mb-10" alt="">
                                <h3 class="article__title">Scholarships</h3> 
                                <p>
                                    Corporate bodies are provided with all the tools necessary for managing scholarship programs.
                                </p>                
                            </div>
                        </div>
                        <div class="">
                            <div class="article special">
                                <img src="{{ asset('assets/img/icons/n7.png') }}" class="mb-10" alt="">
                                <h3 class="article__title">Campaigns</h3> 
                                <p>
                                   Educatotionists  can raise funds for a campaign to solve identified problems.
                                </p>               
                            </div>
                        </div>
                        
                    </div>
                    
                    
                </div>
            </div>
        </section>

        <!-- Creative Facts - Start -->
        <section class="p-5 section-padding">
            <hr>    
        </section>
        <!-- Creative Facts - End -->

    
        <!-- Testimonial section -->
        <!-- include('partials.main-testimonial') -->
        <!-- Testimonial End -->

    @endSection
    @push('js')
       

    @endPush

