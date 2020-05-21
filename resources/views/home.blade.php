@extends('master')

@section('content')

<!-- Home -->
<section class="home-height-half bg-home" id="home">
    <!-- <div class="bg-overlay-gredient"></div> -->
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
                            <a href="contact.html" class="btn btn-custom btn-rounded"><span>Contact Us</span></a>
                            <a href="http://vimeo.com/99025203" class="video-play-icon-trigger text-white ml-2"><i class="mdi mdi-play"></i> <span> WATCH VIDEO</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Home end -->

<!-- How do work -->
<section class="section services-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h3 class="title">How it work ?</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="service-boxed">
                    <img src="images/icons/svg/Chart.svg" alt="service-icon-img" class="service-icon" />
                    <div class="service-body">
                        <h5>Pre-Planning</h5>
                        <p>
                            Lorem ipsum dolor sit amet consectetuer adipiscing elit, Aenean commodo ligula eget dolor Aenean elight massa.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="service-boxed">
                    <img src="images/icons/svg/Rainumbrella.svg" alt="service-icon-img" class="service-icon" />
                    <div class="service-body">
                        <h5>Perfect Design</h5>
                        <p>
                            Lorem ipsum dolor sit amet consectetuer adipiscing elit, Aenean commodo ligula eget dolor Aenean elight massa.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="service-boxed">
                    <img src="images/icons/svg/Dollarbag.svg" alt="service-icon-img" class="service-icon" />
                    <div class="service-body">
                        <h5>Communication</h5>
                        <p>
                            Lorem ipsum dolor sit amet consectetuer adipiscing elit, Aenean/ commodo ligula eget dolor Aenean elight massa.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- How do work end  -->

<!-- More Features -->
<section class="section bg-light" id="features">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h3 class="title">Awsome New Features</h3>
            </div>
        </div>
        <div class="row vertical-content justify-content-center pb-4">
            <div class="col-lg-6">
                <div>
                    <img src="images/icons/svg/Moviecam.svg" alt="" class="img-fluid mx-auto d-block">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="more-features">
                    <i class="mbri-idea"></i>
                    <h4 class="pt-4">Fully Responsive Bootstrap</h4>
                    <p class="text-muted preference-subtitle mt-3 mb-0">Lorem ipsum dolor sit amet consectetuer adipiscing elit. Aenean commodo ligula eget dolor Aenean massa Lorem ipsum dolor sit amet.</p>

                    <p class="text-muted preference-subtitle mt-3 mb-0">Lorem ipsum dolor sit amet consectetuer adipiscing elit. Aenean commodo ligula eget dolor Aenean massa Lorem ipsum dolor sit amet.</p>

                    <a href="#" class="text-custom preference-more">Learn More.....</a>
                </div>
            </div>
        </div>
        <div class="row vertical-content mt-4 justify-content-center">
            <div class="col-lg-6">
                <div class="more-features">
                    <i class="mbri-like"></i >
                    <h4 class="pt-4">Works on all platforms</h4>
                    <p class="text-muted preference-subtitle mt-3 mb-0">Lorem ipsum dolor sit amet consectetuer adipiscing elit. Aenean commodo ligula eget dolor Aenean massa Lorem ipsum dolor sit amet.</p>

                    <p class="text-muted preference-subtitle mt-3 mb-0">Lorem ipsum dolor sit amet consectetuer adipiscing elit. Aenean commodo ligula eget dolor Aenean massa Lorem ipsum dolor sit amet.</p>

                    <a href="#" class="text-custom preference-more">Learn More.....</a>
                </div>
            </div>
            <div class="col-lg-6">
                <div>
                    <img src="images/icons/svg/Paperdesk.svg" alt="" class="img-fluid mx-auto d-block">
                </div>
            </div>
        </div>    
    </div>
</section>
<!-- More Features end -->

<!-- video -->
<section class="section">
    <div class="container">
        <div class="row vertical-content ">
            <div class="col-lg-6 col-md-6 mr-auto">
                <div class="video-intro">
                    <article>
                        <h2 class="">Video For Landing Page</h2>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies  pellentesque pretium</p>
                        <a href="signup.html" class="btn btn-custom btn-rounded mt-3">Try it free</a>
                    </article>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="video-play-bar">
                    <a href="https://vimeo.com/109054393" class="video-play-icon-trigger"><i class="play-video-btn mdi mdi-play play-position"></i> </a>
                    <img src="images/Mac-Display-Mockup.jpg" alt="" class="img-fluid mx-auto d-block">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- video end -->

<!--cta -->
<section class="section bg-cta">
    <div class="program-bg-overlay"></div>
    <div class="container">
        <div class="row justify-content-center" id="counter">
            <div class="col-md-3 text-white text-center pt-3 pb-3">
                <div class="counter-icon">
                    <i class="mbri-timer"></i>
                </div>
                <h1 class="counter-value" data-count="1200">0</h1>
                <h4 class="counter-name">Working Hours</h4>
            </div>

            <div class="col-md-3 text-white text-center pt-3 pb-3">
                <div class="counter-icon">
                    <i class="mbri-bookmark"></i>
                </div>
                <h1 class="counter-value" data-count="5000">10</h1>
                <h4 class="counter-name">Reviewers</h4>
            </div>

            <div class="col-md-3 text-white text-center pt-3 pb-3">
                <div class="counter-icon">
                    <i class="mbri-hot-cup"></i>
                </div>
                <h1 class="counter-value" data-count="5645">608</h1>
                <h4 class="counter-name">Cups Of Coffee</h4>
            </div>
            <div class="col-md-3 text-white text-center pt-3 pb-3">
                <div class="counter-icon">
                    <i class="mbri-database"></i>
                </div>
                <h1 class="counter-value" data-count="800">2</h1>
                <h4 class="counter-name">App Download</h4>
            </div>
        </div>
    </div>
</section>
<!--funfact end-->

<!-- team -->
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="title text-center">We Are The Best Team</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div id="team">
                    <div class="item">
                        <div class="team-box">
                            <img src="images/team/team-1.jpg" alt="" class="img-fluid team-img">
                            <div class="team-info">
                                <div class="text-center">
                                    <h5 class="pt-3">James Nemeth</h5>
                                    <p class="text-uppercase text-muted"><small> Designer </small></p>
                                    <p class="team-desc">Lorem ipsum dolor sit amet rawt ut consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="team-box">
                            <img src="images/team/team-3.jpg" alt="" class="img-fluid team-img">
                            <div class="team-info">
                                <div class="text-center">
                                    <h5 class="pt-3">Terry Smith</h5>
                                    <p class="text-uppercase text-muted"><small>CEO / Founder </small></p>
                                    <p class="team-desc">Lorem ipsum dolor sit amet rawt ut consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="team-box">
                            <img src="images/team/team-5.jpg" alt="" class="img-fluid team-img">
                            <div class="team-info">
                                <div class="text-center">
                                    <h5 class="pt-3">Juliana Waddell</h5>
                                    <p class="text-uppercase text-muted"><small>Product </small></p>
                                    <p class="team-desc">Lorem ipsum dolor sit amet rawt ut consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="team-box">
                            <img src="images/team/team-2.jpg" alt="" class="img-fluid team-img">
                            <div class="team-info">
                                <div class="text-center">
                                    <h5 class="pt-3">Andrew Sparks</h5>
                                    <p class="text-uppercase text-muted"><small> Founder</small></p>
                                    <p class="team-desc">Lorem ipsum dolor sit amet rawt ut consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="team-box">
                            <img src="images/team/team-4.jpg" alt="" class="img-fluid team-img">
                            <div class="team-info">
                                <div class="text-center">
                                    <h5 class="pt-3">Jennifer Lawson</h5>
                                    <p class="text-uppercase text-muted"><small>Designer </small></p>
                                    <p class="team-desc">Lorem ipsum dolor sit amet rawt ut consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Team end -->

<!-- More features -->
<section class="section bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="title text-center">Amazing Features</h3>
            </div>
        </div>
        <div class="row vertical-content">
            <div class="col-lg-6 col-md-12 mr-auto">
                <div>
                    <div class="text-left feauters-box feauters-box-right mt-2">
                        <i class="mbri-wifi"></i>
                        <div class="feauters-content">
                            <h5 class="feauters-title">Easy & secure access</h5>
                            <p class="feauters-subtitle text-muted pt-2">Nam auctor porta metus ultricies pretium. Cras lacus erat, commodo nec finibus in, pulvinar sit amet nisi.</p>
                        </div>
                    </div>
                    <div class="text-left feauters-box feauters-box-right mt-2">
                        <i class="mbri-music"></i>
                        <div class="feauters-content">
                            <h5 class="feauters-title">Easy and free to paid</h5>
                            <p class="feauters-subtitle text-muted pt-2"> Nam auctor porta metus ultricies pretium. Cras lacus erat, commodo nec finibus in, pulvinar sit amet nisi. </p>
                        </div>
                    </div>
                    <div class="text-left feauters-box feauters-box-right mt-2">
                        <i class="mbri-share"></i>
                        <div class="feauters-content">
                            <h5 class="feauters-title"> Fast Easy and Secure</h5>
                            <p class="feauters-subtitle text-muted pt-2">Nam auctor porta metus ultricies pretium. Cras lacus erat, commodo nec finibus in, pulvinar sit amet nisi.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 pl-0 pr-0">
                <img src="images/macbook.png" alt="" class="img-fluid m-l-auto">
            </div>
        </div>
    </div>
</section>
<!-- More features end -->

<!-- Testimonial -->
<section class="section bg-gradient">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h3 class="title text-white mb-5">What Users Say </h3>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-8 owl-carousel owl-theme" id="owl-demo">
                <div class="item">
                    <div class="p-3 text-center testimonial-box">
                        <div class="testi-img">
                            <img src="images/users/user-1.jpg" alt="" class="img-fluid mx-auto d-block rounded-circle">
                        </div>
                        <p class="testi-rate mt-2 mb-1">
                            <i class="mdi mdi-star text-warning"></i>
                            <i class="mdi mdi-star text-warning"></i>
                            <i class="mdi mdi-star text-warning"></i>
                            <i class="mdi mdi-star text-warning"></i>
                            <i class="mdi mdi-star text-warning"></i>
                        </p>
                        <div class="testi-desc text-white">
                            <h5 class="font-weight-bold">Steven Dugas</h5>
                            <p class="text-white mt-3">"Lorem ipsum dolor sit amet, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet."</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="p-3 text-center testimonial-box">
                        <div class="testi-img">
                            <img src="images/users/user-2.jpg" alt="" class="img-fluid mx-auto d-block rounded-circle">
                        </div>
                        <p class="testi-rate mt-2 mb-1">
                            <i class="mdi mdi-star text-warning"></i>
                            <i class="mdi mdi-star text-warning"></i>
                            <i class="mdi mdi-star text-warning"></i>
                            <i class="mdi mdi-star text-warning"></i>
                            <i class="mdi mdi-star text-warning"></i>
                        </p>
                        <div class="testi-desc">
                            <h5 class="font-weight-bold text-white">Lioyd Brewer</h5>
                            <p class="text-white mt-3">"Lorem ipsum dolor sit amet, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet."</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="p-3 text-center testimonial-box">
                        <div class="testi-img">
                            <img src="images/users/user-3.jpg" alt="" class="img-fluid mx-auto d-block rounded-circle">
                        </div>
                        <p class="testi-rate mt-2 mb-1">
                            <i class="mdi mdi-star text-warning"></i>
                            <i class="mdi mdi-star text-warning"></i>
                            <i class="mdi mdi-star text-warning"></i>
                            <i class="mdi mdi-star text-warning"></i>
                            <i class="mdi mdi-star text-warning"></i>
                        </p>
                        <div class="testi-desc">
                            <h5 class="font-weight-bold text-white">Johnie Reveles</h5>
                            <p class="text-white mt-3">"Lorem ipsum dolor sit amet, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet."</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Testimonial -->
<!-- Client Slider -->
<section class="section bg-light">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h3 class="title">Trusted by Thousands</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-2">
                <div class="client-images">
                    <img src="images/clients/1.png" alt="logo-img" class="mx-auto img-fluid d-block">
                </div>
            </div>
            <!-- slider item -->
            <div class="col-lg-2">
                <div class="client-images">
                    <img src="images/clients/2.png" alt="logo-img" class="mx-auto img-fluid d-block">
                </div>
            </div>
            <!-- slider item -->
            <div class="col-lg-2">
                <div class="client-images">
                    <img src="images/clients/3.png" alt="logo-img" class="mx-auto img-fluid d-block">
                </div>
            </div>
            <!-- slider item -->
            <div class="col-lg-2">
                <div class="client-images">
                    <img src="images/clients/4.png" alt="logo-img" class="mx-auto img-fluid d-block">
                </div>
            </div>
            <!-- slider item -->
            <div class="col-lg-2">
                <div class="client-images">
                    <img src="images/clients/5.png" alt="logo-img" class="mx-auto img-fluid d-block">
                </div>
            </div>
            <!-- slider item -->
            <div class="col-lg-2">
                <div class="client-images">
                    <img src="images/clients/6.png" alt="logo-img" class="mx-auto img-fluid d-block">
                </div>
            </div>
            <!-- slider item -->
        </div>
    </div>
</section>
<!-- Client Slider end-->

@endsection