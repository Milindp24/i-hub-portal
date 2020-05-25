@extends('master')

@section('content')

<!-- Start Main Banner -->
<div id="home" class="main-banner item-bg-one">
    <div id="particles-js"></div>
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="main-banner-text">
                            <h1>Your wings to <span>Startup & Innovate</span></h1>
                            <!-- <a href="#welcome" class="btn btn-primary">Get Started</a> -->
                            <a href="{{ url('/contact') }}" class="btn btn-primary view-work">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Main Banner -->

<!-- Start About Area -->
<section id="about" class="about-area ptb-80 bg-f6f6f6">
    <div class="container">
        <div class="section-title">
            <h2>About <span>i-Hub</span></h2>
        </div>
        
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="about-addax">
                    <div class="section-title">
                        <!-- <h2>We Are Digital <span>Marketing & Branding</span></h2> -->
                        <p>Gujarat Student Startup and Innovation Hub, registered under Section 8 of the companies Act 2013, is envisioned to be a nexus for all Startup stakeholders to develop an end-to-end innovation and entrepreneurial ecosystem in the State of Gujarat by creating pathways from <span>“Mind-to-Market”</span>. i-hub is a vibrant incubation setup established under SSIP by the Education Department, Government of Gujarat.</p>
                    </div>

                    <a href="{{ url('/about') }}" class="btn btn-primary">Read More</a>
                </div>
            </div>
            
            <div class="col-lg-6 col-md-12">
                <div class="about-video">
                    <video width="100%" height="auto" controls="">
                        <source src="{{ URL::asset('assets/videos/i-HUB.mp4') }}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End About Area -->

<!-- Start Fun Fact Area -->
<section class="funFacts-area ptb-80">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center text-white">Our Innovation Impact</h1>
                <br>
            </div>
        </div>
        
        <div class="row">
            <div class="col-lg-2 col-md-6 text-center">
                <div class="counter-icon">
                    <img src="{{ URL::asset('assets/img/home-icon1.png') }}" style="width: 70px; height: 70px;">
                </div>
                <div class="funFact">
                    <!-- <i class="fa fa-smile-o"></i> -->
                    <h2 class="count">50</h2>
                    <p>Exclusive Programs</p>
                </div>
            </div>

            <div class="col-lg-2 col-md-6 text-center">
                <div class="counter-icon">
                    <img src="{{ URL::asset('assets/img/home-icon2.png') }}" style="width: 70px; height: 70px;">
                </div>
                <div class="funFact">
                    <!-- <i class="fa fa-shield"></i> -->
                    <h2 class="count">7</h2>
                    <p>Partner Events</p>
                </div>
            </div>

            <div class="col-lg-2 col-md-6 text-center">
                <div class="counter-icon">
                    <img src="{{ URL::asset('assets/img/home-icon3.png') }}" style="width: 70px; height: 70px;">
                </div>
                <div class="funFact">
                    <!-- <i class="fa fa-trophy"></i> -->
                    <h2 class="count">4000</h2>
                    <p>Student Sensitized</p>
                </div>
            </div>

            <div class="col-lg-2 col-md-6 text-center">
                <div class="counter-icon">
                    <img src="{{ URL::asset('assets/img/home-icon4.png') }}" style="width: 70px; height: 70px;">
                </div>
                <div class="funFact">
                    <!-- <i class="fa fa-users"></i> -->
                    <h2><span class="count">130</span></h2>
                    <p>Institutional Partners</p>
                </div>
            </div>

            <div class="col-lg-2 col-md-6 text-center">
                <div class="counter-icon">
                    <img src="{{ URL::asset('assets/img/home-icon5.png') }}" style="width: 70px; height: 70px;">
                </div>
                <div class="funFact">
                    <!-- <i class="fa fa-users"></i> -->
                    <h2><span class="count">2000</span></h2>
                    <p>i-Hub Visitors</p>
                </div>
            </div>

            <div class="col-lg-2 col-md-6 text-center">
                <div class="counter-icon">
                    <img src="{{ URL::asset('assets/img/home-icon6.png') }}" style="width: 70px; height: 70px;">
                </div>
                <div class="funFact">
                    <!-- <i class="fa fa-users"></i> -->
                    <h2><span class="count">900</span></h2>
                    <p>Mentors Onboarded</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Fun Fact Area -->

<!-- Start Partner Area -->
<div class="partner-area ptb-80">
    <div class="container">
        <div class="section-title">
            <h2><span>Our Partners</span></h2>
        </div>

        <div class="row">
            <div class="partner-slider">
                <div class="col-lg-12 col-md-12">
                    <div class="item">
                        <a href="#"><img src="{{ URL::asset('assets/img/partners/Ahmedabad_University.jpg') }}" alt="logo-img" class="mx-auto img-fluid"></a>
                    </div>
                </div>
                
                <div class="col-lg-12 col-md-12">
                    <div class="item">
                        <a href="#"><img src="{{ URL::asset('assets/img/partners/ciie_new_logo.png') }}" alt="logo-img" class="mx-auto img-fluid d-block"></a>
                    </div>
                </div>
                
                <div class="col-lg-12 col-md-12">
                    <div class="item">
                        <a href="#"><img src="{{ URL::asset('assets/img/partners/iit_madras.png') }}" alt="logo-img" class="mx-auto img-fluid d-block"></a>
                    </div>
                </div>
                
                <div class="col-lg-12 col-md-12">
                    <div class="item">
                        <a href="#"><img src="{{ URL::asset('assets/img/partners/kcg.jpg') }}" alt="logo-img" class="mx-auto img-fluid d-block"></a>
                    </div>
                </div>
                
                <div class="col-lg-12 col-md-12">
                    <div class="item">
                        <a href="#"><img src="{{ URL::asset('assets/img/partners/NIFT-logo.png') }}" alt="logo-img" class="mx-auto img-fluid d-block"></a>
                    </div>
                </div>
                
                <div class="col-lg-12 col-md-12">
                    <div class="item">
                        <a href="#"><img src="{{ URL::asset('assets/img/partners/Ahmedabad_University.jpg') }}" alt="logo-img" class="mx-auto img-fluid"></a>
                    </div>
                </div>
                
                <div class="col-lg-12 col-md-12">
                    <div class="item">
                        <a href="#"><img src="{{ URL::asset('assets/img/partners/ciie_new_logo.png') }}" alt="logo-img" class="mx-auto img-fluid d-block"></a>
                    </div>
                </div>
                
                <div class="col-lg-12 col-md-12">
                    <div class="item">
                        <a href="#"><img src="{{ URL::asset('assets/img/partners/iit_madras.png') }}" alt="logo-img" class="mx-auto img-fluid d-block"></a>
                    </div>
                </div>
                
                <div class="col-lg-12 col-md-12">
                    <div class="item">
                        <a href="#"><img src="{{ URL::asset('assets/img/partners/kcg.jpg') }}" alt="logo-img" class="mx-auto img-fluid d-block"></a>
                    </div>
                </div>
                
                <div class="col-lg-12 col-md-12">
                    <div class="item">
                        <a href="#"><img src="{{ URL::asset('assets/img/partners/NIFT-logo.png') }}" alt="logo-img" class="mx-auto img-fluid d-block"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Partner Area -->

<!-- Start Testimonials Area -->
<section class="testimonials-area ptb-80 bg-f6f6f6">
    <div class="container">
        <div class="section-title">
            <h2><span>Testimonials</span></h2>
        </div>
        
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="owl-carousel owl-theme">
                    <div class="item">
                        <div class="single-feedback">
                            <div class="client-info">
                                <div class="client-pic">
                                    <img src="assets/img/testimonials/345-150x150_vinay_mehta.jpg" alt="client-avatar">
                                </div>

                                <div class="client-title">
                                    <h4>Vinay Mehta</h4>
                                    <h5>FOUDER - EXPRESSO</h5>
                                </div>
                            </div>

                            <p>So initiatives like I-Hub, are surely some amazing opportunities for all the early-stage startups. The team is doing a great job of fostering a sense of camaraderie, mutual support, and friendship amongst it’s startup.  I would highly recommend that qualifying startups apply; it’s the best deal in town.</p>

                            <span><i class="fa fa-quote-left"></i></span>
                        </div>
                    </div>

                    <div class="item">
                        <div class="single-feedback">
                            <div class="client-info">
                                <div class="client-pic">
                                    <img src="assets/img/testimonials/234-150x150_sheyansh_oswal.jpg" alt="client-avatar">
                                </div>

                                <div class="client-title">
                                    <h4>Sheyansh Oswal </h4>
                                    <h5>FOUNDER - AIM TECHNOLOGIES</h5>
                                </div>
                            </div>

                            <p>I hub is an amazing coworking space with more amazing group of team working for it. The team is passionate about startups and keen to help the founders which connections and mentorship.</p>

                            <span><i class="fa fa-quote-left"></i></span>
                        </div>
                    </div>

                    <div class="item">
                        <div class="single-feedback">
                            <div class="client-info">
                                <div class="client-pic">
                                    <img src="assets/img/testimonials/123-150x150_Kushal_rathod.jpg" alt="client-avatar">
                                </div>

                                <div class="client-title">
                                    <h4>Kushal Rathod</h4>
                                    <h5>CO-FOUDER - INDIFOOT SPORTS</h5>
                                </div>
                            </div>

                            <p>I Hub has been of immense help towards fostering our growth as a startup. We have connected to a lot of other co-founders of other startups, helped us in knowledge sharing and brainstorming over key challenges that we face on a day to day basis. IHub management has also helped us in resolving certain issues where we found ourselves stuck and not able to move forward through their expert panel and mentorship.</p>

                            <span><i class="fa fa-quote-left"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Testimonials Area -->

<!-- Start Blog Area -->
<section id="blog" class="blog-area ptb-80">
    <div class="container">
        <div class="section-title">
            <h2>Our <span>Incubated StartUp</span></h2>
        </div>
        
        <div class="row">
            <div class="blog-slider">
                <div class="col-lg-12 col-md-12">
                    <div class="single-blog-item" style="background-image: url({{ URL::asset('assets/img/startup/AIM-Technologies.png') }})">
                        <h4><a href="{{url('/incubated-startup')}}">AIM Technologies</a></h4>
                        <p>We “Aim Technologies” are a leading Manufacturer, Trader, Retailer and Wholesaler of a wide range of RO Plant...</p>
                        
                        <a href="{{url('/incubated-startup')}}" title="Read More" class="link-btn"><i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
                
                <div class="col-lg-12 col-md-12">
                    <div class="single-blog-item" style="background-image: url({{ URL::asset('assets/img/startup/Indifoot.png') }})">
                        <h4><a href="{{url('/incubated-startup')}}">INDIFOOT</a></h4>
                        <p>Indifoot is the brainchild of your fellow football fanatics. We football fans are a closely knit community but a ...</p>
                        
                        <a href="{{url('/incubated-startup')}}" title="Read More" class="link-btn"><i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
                
                <div class="col-lg-12 col-md-12">
                    <div class="single-blog-item" style="background-image: url({{ URL::asset('assets/img/startup/Artists-Adda.png') }})">
                        <h4><a href="{{url('/incubated-startup')}}">ARTIST ADDA</a></h4>
                        <p>We all know, our social and professional commitments have trapped us all and in these crucial traps, some of us forget...</p>
                        
                        <a href="{{url('/incubated-startup')}}" title="Read More" class="link-btn"><i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Blog Area -->
@endsection