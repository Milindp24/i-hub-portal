@extends('master')

@section('content')

<!-- Home -->
<section class="bg-home-img height-100" id="home">
    <div class="bg-overlay-gredient"></div>
    <div class="home-center">
        <div class="home-desc-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10 text-center">
                        <h6 class="home-title text-white">Your wings to
                        Startup & Innovate</h6>
                        <p class="pt-4 home-sub-title text-white mx-auto">
                            i-HUB – A Government of Gujarat Initiative
                        </p>
                        <div class="pt-4">
                            <a href="{{ url('/contact') }}" class="btn btn-custom btn-rounded"><span>Contact Us</span></a>
                            <!-- <a href="http://vimeo.com/99025203" class="video-play-icon-trigger text-white ml-2"><i class="mdi mdi-play"></i> <span> WATCH VIDEO</span></a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Home end -->

 <!-- video -->
 <section class="section">
    <div class="container">
        <div class="row vertical-content ">
            <div class="col-md-4 col-sm-5 mb-xs-24">
                <div class="" style="text-align: justify;">
                <div class="video-intro">
                    <article>
                        <h2 class="headline-border">About i-Hub</h2>
                        
                        <p>Gujarat Student Startup and Innovation Hub, registered under Section 8 of the companies Act 2013, is envisioned to be a nexus for all Startup stakeholders to develop an end-to-end innovation and entrepreneurial ecosystem in the State of Gujarat by creating pathways from “Mind-to-Market”.
                        i-hub is a vibrant incubation setup established under SSIP by the Education Department, Government of Gujarat.</p>
                        <a href="#" class="btn btn-custom btn-rounded mt-3">Read More</a>
                    </article>
                </div>
            </div>
            </div>
            <div class="col-md-7 col-md-offset-1 col-sm-6 col-sm-offset-1 text-center">
                <div class="video-play-bar">
                <video width="100%" height="auto" controls>
                    <source src="{{ URL::asset('videos/i-HUB.mp4') }}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- video end -->

<!--cta -->
<section class="section bg-cta">
    <div class="program-bg-overlay"></div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 text-white text-center">
                <h1 class="text-white headline-center-border">Our Innovation Imapct</h1><br>
                {{-- <div class="headline-border"></div> --}}
            </div>
        </div>

        <div class="row justify-content-center" id="counter">
            <div class="col-md-2 text-white text-center pt-3 pb-3">
                <div class="counter-icon">
                    <!-- <i class="mbri-timer"></i> -->
                    <img src="{{ URL::asset('images/home-icon1.png') }}" style="width: 70px; height: 70px;">
                </div>
                <h1 class="counter-value text-white" data-count="50">0</h1>
                <h4 class="counter-name text-white">Exclusive Programs</h4>
                
            </div>

            <div class="col-md-2 text-white text-center pt-3 pb-3">
                <div class="counter-icon">
                    <!-- <i class="mbri-bookmark"></i> -->
                    <img src="{{ URL::asset('images/home-icon2.png') }}" style="width: 70px; height: 70px;">
                </div>
                <h1 class="counter-value text-white" data-count="7">0+</h1>
                <h4 class="counter-name">Partner Events</h4>
            </div>

            <div class="col-md-2 text-white text-center pt-3 pb-3">
                <div class="counter-icon">
                    <!-- <i class="mbri-hot-cup"></i> -->
                    <img src="{{ URL::asset('images/home-icon3.png') }}" style="width: 70px; height: 70px;">
                </div>
                <h1 class="counter-value text-white" data-count="4000">100</h1>
                <h4 class="counter-name">Student Sensitized</h4>
            </div>
            <div class="col-md-2 text-white text-center pt-3 pb-3">
                <div class="counter-icon">
                    <!-- <i class="mbri-database"></i> -->
                    <img src="{{ URL::asset('images/home-icon4.png') }}" style="width: 70px; height: 70px;">
                </div>
                <h1 class="counter-value text-white" data-count="130">2</h1>
                <h4 class="counter-name">Institutional Partners</h4>
            </div>

            <div class="col-md-2 text-white text-center pt-3 pb-3">
                <div class="counter-icon">
                    <!-- <i class="mbri-hot-cup"></i> -->
                    <img src="{{ URL::asset('images/home-icon5.png') }}" style="width: 70px; height: 70px;">
                </div>
                <h1 class="counter-value text-white" data-count="2000">100</h1>
                <h4 class="counter-name">i-Hub Visitors</h4>
            </div>
            <div class="col-md-2 text-white text-center pt-3 pb-3">
                <div class="counter-icon">
                    <!-- <i class="mbri-database"></i> -->
                    <img src="{{ URL::asset('images/home-icon6.png') }}" style="width: 70px; height: 70px;">
                </div>
                <h1 class="counter-value text-white" data-count="900">2</h1>
                <h4 class="counter-name">Mentors Onboarded</h4>
            </div>
        </div>
    </div>
</section>
<!--funfact end-->

<!-- Client Slider -->
<section class="section bg-light">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="title headline-center-border">Our Partners</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div id="partners" class="owl-carousel owl-theme">
                    <div class="item">
                        <div class="partner-icon">
                            <img src="{{ URL::asset('images/partners/Ahmedabad_University.jpg') }}" alt="logo-img" class="mx-auto img-fluid">
                        </div>
                    </div>
                    <div class="item">
                    <div class="partner-icon">
                        <img src="{{ URL::asset('images/partners/ciie_new_logo.png') }}" alt="logo-img" class="mx-auto img-fluid d-block">
                        </div>
                    </div>
                    <div class="item">
                    <div class="partner-icon">
                        <img src="{{ URL::asset('images/partners/iit_madras.png') }}" alt="logo-img" class="mx-auto img-fluid d-block">
                        </div>
                    </div>
                    <div class="item">
                    <div class="partner-icon">
                        <img src="{{ URL::asset('images/partners/kcg.jpg') }}" alt="logo-img" class="mx-auto img-fluid d-block">
                        </div>
                    </div>
                    <div class="item">
                    <div class="partner-icon">
                        <img src="{{ URL::asset('images/partners/NID.jpg') }}" alt="logo-img" class="mx-auto img-fluid d-block">
                        </div>
                    </div>

                    <div class="item">
                    <div class="partner-icon">
                    <img src="{{ URL::asset('images/partners/NIFT-logo.png') }}" alt="logo-img" class="mx-auto img-fluid d-block">
                        </div>
                    </div>
                        
                    </div>
                </div>
            </div>
            
                
        </div>
    </div>
</section>
<!-- Client Slider end-->



<!-- team -->
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="title text-center headline-center-border">Our Incubated Startup</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div id="team">
                    <div class="item">
                        <div class="team-box">
                            <a href="#">
                                <img src="{{ URL::asset('images/startup/AIM-Technologies.png') }}" alt="" class="img-fluid team-img">
                                <div class="team-info">
                                    <div class="text-center">
                                        <p class="text-uppercase text-muted"><small> AIM Technologies </small></p>
                                        <p class="team-desc">Lorem ipsum dolor sit amet rawt ut consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="item">
                        <div class="team-box">
                            <a href="#">
                                <img src="{{ URL::asset('images/startup/Indifoot.png') }}" alt="" class="img-fluid team-img">
                                <div class="team-info">
                                    <div class="text-center">
                                        <!-- <h5 class="pt-3">i-Hub</h5> -->
                                        <p class="text-uppercase text-muted"><small>Indifoot</small></p>
                                        <p class="team-desc">Lorem ipsum dolor sit amet rawt ut consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="item">
                        <div class="team-box">
                            <a href="#">
                                <img src="{{ URL::asset('images/startup/Artists-Adda.png') }}" alt="" class="img-fluid team-img">
                                <div class="team-info">
                                    <div class="text-center">
                                        <!-- <h5 class="pt-3">i-Hub</h5> -->
                                        <p class="text-uppercase text-muted"><small>Artists Adda </small></p>
                                        <p class="team-desc">Lorem ipsum dolor sit amet rawt ut consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="item">
                        <div class="team-box">
                            <a href="#">
                                <img src="{{ URL::asset('images/startup/WEpaint.png') }}" alt="" class="img-fluid team-img">
                                <div class="team-info">
                                    <div class="text-center">
                                        <!-- <h5 class="pt-3">i-Hub</h5> -->
                                        <p class="text-uppercase text-muted"><small> We Paint</small></p>
                                        <p class="team-desc">Lorem ipsum dolor sit amet rawt ut consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Team end -->

<!-- Pricing -->
{{-- <section class="section" id="pricing">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="title">Our Testimonials</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="program-box mt-3">
                    <div class="program-image">
                        <div class="program-bg-overlay program-bgoverlay-1"></div>
                        <h4 class="text-white text-center heading-price">Vinay Mehta</h4>
                    </div>
                    <div class="process-icon text-center">
                        <img src="{{ URL::asset('images/testimonials/345-150x150_vinay_mehta.jpg') }}" alt="" class="img-fluid mx-auto d-block">
                        <!-- <p class="price-tag-size"><sup>$</sup>29<span>/mo </span></p> -->
                    </div>
                    <div class="p-3 text-center">
                        <h5 class="text-uppercase font-weight-bold pt-3">Fouder - Expresso</h5>

                        <p class="text-muted preference-subtitle mt-3 mb-0" style="text-align: justify; margin-left: 10px; margin-right: 10px;">So initiatives like I-Hub, are surely some amazing opportunities for all the early-stage startups. </p>

                        <p class="text-muted preference-subtitle mt-3 mb-0" style="text-align: justify; margin-left: 10px; margin-right: 10px;">The team is doing a great job of fostering a sense of camaraderie, mutual support, and friendship amongst it’s startup.  I would highly recommend that qualifying startups apply; it’s the best deal in town.</p>
                        
                    </div>
                    <!-- <div class="text-center">
                        <a href="#" class="btn btn-custom btn-rounded text-uppercase mt-4">Join Now</a>
                    </div> -->
                </div>
            </div>
            <div class="col-lg-4">
                <div class="program-box mt-3">
                    <div class="program-image">
                        <div class="program-bg-overlay program-bgoverlay-2"></div>
                        <h4 class="text-white text-center heading-price">Sheyansh Oswal</h4>
                    </div>
                    <div class="process-icon text-center">
                        <img src="{{ URL::asset('images/testimonials/234-150x150_sheyansh_oswal.jpg') }}" alt="" class="img-fluid mx-auto d-block">
                        <!-- <p class="price-tag-size"><sup>$</sup>89<span>/mo </span></p> -->
                    </div>
                    <div class="p-3 text-center">
                        <h5 class="text-uppercase font-weight-bold pt-3">Founder - AIM Technologies</h5>
                        <p class="text-muted preference-subtitle mt-3 mb-0" style="text-align: justify; margin-left: 10px; margin-right: 10px;">I hub is an amazing coworking space with more amazing group of team working for it.</p>

                        <p class="text-muted preference-subtitle mt-3 mb-0" style="text-align: justify; margin-left: 10px; margin-right: 10px;">The team is passionate about startups and keen to help the founders which connections and mentorship.</p>
                    </div>
                    <!-- <div class="text-center pt-4">
                        <a href="#" class="btn btn-custom btn-rounded text-uppercase">Join Now</a>
                    </div> -->
                </div>
            </div>
            <div class="col-lg-4">
                <div class="program-box mt-3">
                    <div class="program-image">
                        <div class="program-bg-overlay program-bgoverlay-3"></div>
                        <h4 class="text-white text-center heading-price">Kushal Rathod</h4>
                    </div>
                    <div class="process-icon text-center">
                        
                        <img src="{{ URL::asset('images/testimonials/123-150x150_Kushal_rathod.jpg') }}" alt="" class="img-fluid mx-auto d-block">
                        <!-- <p class="price-tag-size"><sup>$</sup>99<span>/mo </span></p> -->
                    </div>
                    <div class="p-3 text-center">
                        <h5 class="text-uppercase font-weight-bold pt-3">Co-Fouder - Indifoot Sports</h5>
                        <p class="text-muted preference-subtitle mt-3 mb-0" style="text-align: justify; margin-left: 10px; margin-right: 10px;">I Hub has been of immense help towards fostering our growth as a startup. We have connected to a lot of other co-founders of other startups, helped us in knowledge sharing and brainstorming over key challenges that we face on a day to day basis.</p>

                        <p class="text-muted preference-subtitle mt-3 mb-0" style="text-align: justify; margin-left: 10px; margin-right: 10px;">IHub management has also helped us in resolving certain issues where we found ourselves stuck and not able to move forward through their expert panel and mentorship.</p>
                    </div>
                    <!-- <div class="text-center pt-4">
                        <a href="#" class="btn btn-custom btn-rounded text-uppercase">Join Now</a>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</section> --}}
<!-- Pricing end -->

<!-- Testimonial -->
<section class="section bg-gradient">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="title headline-center-border text-white mb-5">Our Testimonials</h1>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-8 owl-carousel owl-theme" id="owl-demo">
                <div class="item">
                    <div class="p-3 text-center testimonial-box">
                        <div class="testi-img">
                        <img src="{{ URL::asset('images/testimonials/345-150x150_vinay_mehta.jpg') }}" alt="" class="img-fluid mx-auto d-block">
                        </div>
                        <p class="testi-rate mt-2 mb-1">
                            <i class="mdi mdi-star text-warning"></i>
                            <i class="mdi mdi-star text-warning"></i>
                            <i class="mdi mdi-star text-warning"></i>
                            <i class="mdi mdi-star text-warning"></i>
                            <i class="mdi mdi-star text-warning"></i>
                        </p>
                        <div class="testi-desc text-white">
                            <h3 class="font-weight-bold">Vinay Mehta <br> (FOUDER - EXPRESSO)</h3>
                            <p class="text-white preference-subtitle mt-3 mb-0" style="margin-left: 10px; margin-right: 10px;">So initiatives like I-Hub, are surely some amazing opportunities for all the early-stage startups. </p>

                            <p class="text-white preference-subtitle mt-3 mb-0" style="margin-left: 10px; margin-right: 10px;">The team is doing a great job of fostering a sense of camaraderie, mutual support, and friendship amongst it’s startup.  I would highly recommend that qualifying startups apply; it’s the best deal in town.</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="p-3 text-center testimonial-box">
                        <div class="testi-img">
                        <img src="{{ URL::asset('images/testimonials/234-150x150_sheyansh_oswal.jpg') }}" alt="" class="img-fluid mx-auto d-block">
                        </div>
                        <p class="testi-rate mt-2 mb-1">
                            <i class="mdi mdi-star text-warning"></i>
                            <i class="mdi mdi-star text-warning"></i>
                            <i class="mdi mdi-star text-warning"></i>
                            <i class="mdi mdi-star text-warning"></i>
                            <i class="mdi mdi-star text-warning"></i>
                        </p>
                        <div class="testi-desc">
                            <h3 class="font-weight-bold text-white">Sheyansh Oswal <br> (FOUNDER - AIM TECHNOLOGIES)</h3>
                            <p class="text-white preference-subtitle mt-3 mb-0" style="margin-left: 10px; margin-right: 10px;">I hub is an amazing coworking space with more amazing group of team working for it.</p>

                            <p class="text-white preference-subtitle mt-3 mb-0" style="margin-left: 10px; margin-right: 10px;">The team is passionate about startups and keen to help the founders which connections and mentorship.</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="p-3 text-center testimonial-box">
                        <div class="testi-img">
                        <img src="{{ URL::asset('images/testimonials/123-150x150_Kushal_rathod.jpg') }}" alt="" class="img-fluid mx-auto d-block">
                        </div>
                        <p class="testi-rate mt-2 mb-1">
                            <i class="mdi mdi-star text-warning"></i>
                            <i class="mdi mdi-star text-warning"></i>
                            <i class="mdi mdi-star text-warning"></i>
                            <i class="mdi mdi-star text-warning"></i>
                            <i class="mdi mdi-star text-warning"></i>
                        </p>
                        <div class="testi-desc">
                        <h3 class="font-weight-bold text-white">Kushal Rathod <br> (CO-FOUDER - INDIFOOT SPORTS)</h3>
                        <p class="text-white preference-subtitle mt-3 mb-0" style="margin-left: 10px; margin-right: 10px;">I Hub has been of immense help towards fostering our growth as a startup. We have connected to a lot of other co-founders of other startups, helped us in knowledge sharing and brainstorming over key challenges that we face on a day to day basis.</p>

                        <p class="text-white preference-subtitle mt-3 mb-0" style="margin-left: 10px; margin-right: 10px;">IHub management has also helped us in resolving certain issues where we found ourselves stuck and not able to move forward through their expert panel and mentorship.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Testimonial -->
<!-- Client Slider end-->

@endsection