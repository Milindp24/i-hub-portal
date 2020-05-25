<!doctype html>
<html lang="en">
    
<head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">

        <!-- Bootstrap Min CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <!-- Font Awesome Min JS -->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <!-- Animate CSS -->
        <link rel="stylesheet" href="assets/css/animate.css">
        <!-- Magnific Popup CSS -->
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <!-- Owl Carousel CSS -->
        <link rel="stylesheet" href="assets/css/owl.carousel.css">
        <!-- Owl Theme Default CSS -->
        <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
        <!-- Style CSS -->
        <link rel="stylesheet" href="assets/css/style.css">
        <!-- Custom CSS -->
        <link rel="stylesheet" href="assets/css/custom.css">
        <!-- Mega Menu CSS -->
        <link rel="stylesheet" href="assets/css/mega-menu.css">
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="assets/css/responsive.css">

        <title>iHub - A Government of Gujarat Initiative</title>
    </head>
    <body data-spy="scroll" data-offset="70">
        <!-- Start Preloader Area -->
        <div class="preloader">
            <div class="folding-cube">
                <div class="cube1 cube"></div>
                <div class="cube2 cube"></div>
                <div class="cube4 cube"></div>
                <div class="cube3 cube"></div>
            </div>
        </div>
        <!-- End Preloader Area -->
        <div class="top-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <p><strong>Company CIN: U80100GJ2019NPL108202</strong></p>
                    </div>

                    <div class="col-md-6">
                        <p class="text-right"><strong>Email ID: office-ihub@gujarat.gov.in</strong></p>
                    </div>
                </div>
                
            </div>
        </div>
        <!-- Start Main Header Area -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light header-sticky">
            <div class="container">
                <a class="navbar-brand light-logo" href="{{ url('/') }}"><img src="{{ URL::asset('assets/img/i-hub-light.png') }}" width="110" height="48"></a>
                <a class="navbar-brand dark-logo" href="{{ url('/') }}"><img src="{{ URL::asset('assets/img/i-hub.png') }}" width="110" height="48"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('/about') }}">About</a></li>
                        <li class="nav-item mega has-children click">
                            <a class="nav-link" href="#">Programs</a>
                            <ul class="sub-menu">
                                <li class="mega-inner">
                                    <!-- <a href="#">Main-Head</a> -->
                                    <ul class="sub-menu">
                                        <li id="item1" onmouseover="showdesc(this.id)" class=" "><a href="{{url('/startup-sarthi')}}" data-ps2id-api="true">Startup Sarthi</a></li>
                                        <li id="item2" onmouseover="showdesc(this.id)" class=" "><a href="{{url('/startup-saksham')}}" data-ps2id-api="true">Startup Saksham</a></li>
                                        <li id="item3" onmouseover="showdesc(this.id)" class=" "><a href="{{url('/startup-manak')}}" data-ps2id-api="true">Startup Manak</a></li>
                                        <li id="item4" onmouseover="showdesc(this.id)" class=" "><a href="{{url('/ssip-prashansa')}}" data-ps2id-api="true">SSIP Parashana</a></li>
                                        <li id="item5" onmouseover="showdesc(this.id)" class=" "><a href="{{url('/startup-mart')}}" data-ps2id-api="true">Startup Mart</a></li>
                                        <li id="item6" onmouseover="showdesc(this.id)" class=" "><a href="{{url('/startup-goonj')}}" data-ps2id-api="true">Startup Goonj</a></li>
                                        <li id="item7" onmouseover="showdesc(this.id)" class=" "><a href="{{url('/ssip-samajh')}}" data-ps2id-api="true">SSIP Samajh</a></li>
                                        <li id="item8" onmouseover="showdesc(this.id)" class=" "><a href="{{url('/ssip-samarth')}}" data-ps2id-api="true">Startup/SSIP Samarth</a></li>
                                        <li id="item9" onmouseover="showdesc(this.id)" class=" "><a href="{{url('/soic')}}" data-ps2id-api="true">SOIC</a></li>
                                    </ul>
                                </li>

                                <li class="mega-inner">
                                    <!-- <a href="#">Main Head</a> -->
                                    <ul class="sub-menu">
                                        <div class="some_description">
                                            <div class="desc" id="desc1">
                                                <p>1. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                                            </div>
                                            <div class="desc" id="desc2" style="display: none;">
                                                <p>2. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                                            </div>
                                            <div class="desc" id="desc3" style="display: none;">
                                                <p>3. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                                            </div>
                                            <div class="desc" id="desc4" style="display: none;">
                                                <p>4. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                                            </div>
                                            <div class="desc" id="desc5" style="display: none;">
                                                <p>5. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                                            </div>
                                            <div class="desc" id="desc6" style="display: none;">
                                                <p>6. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                                            </div>
                                            <div class="desc" id="desc7" style="display: none;">
                                                <p>7. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                                            </div>
                                            <div class="desc" id="desc8" style="display: none;">
                                                <p>8. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                                            </div>
                                            <div class="desc" id="desc9" style="display: none;">
                                                <p>9. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                                            </div>
                                            
                                        </div>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('/incubated-startup') }}">Incubated Startup</a></li>
                        <li class="nav-item has-children click">
                            <a class="nav-link" href="{{ url('/') }}">Career</a>
                            <ul class="sub-menu">
                                <li class="no-child">
                                    <a href="{{url('/internship')}}">Internship</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('/events') }}">Event</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Tender</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('/contact') }}">Contact</a></li>
                        <li class="nav-item"><a href="{{ url('/signup') }}"><button class="pull-right filter btn btn-primary">For Grantee</button></a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Main Header Area -->

        @yield('content')

        <div id="st-2" class=" st-sticky-share-buttons st-right st-toggleable st-has-labels ">
            <div class="st-btn st-first" data-network="facebook" style="display: inline-block;">
                <img alt="facebook sharing button" src="https://platform-cdn.sharethis.com/img/facebook.svg">
                <span class="st-label">Share</span>
            </div>
            <div class="st-btn" data-network="twitter" style="display: inline-block;">
                <img alt="twitter sharing button" src="https://platform-cdn.sharethis.com/img/twitter.svg">
                <span class="st-label">Tweet</span>
            </div>
            <div class="st-btn" data-network="email" style="display: inline-block;">
                <img alt="email sharing button" src="https://platform-cdn.sharethis.com/img/email.svg">
                <span class="st-label">Email</span>
            </div>
            <div class="st-btn" data-network="linkedin" style="display: inline-block;">
                <img alt="linkedin sharing button" src="https://platform-cdn.sharethis.com/img/linkedin.svg">
                <span class="st-label">Share</span>
            </div>
            <div class="st-btn" data-network="pinterest" style="display: inline-block;">
                <img alt="pinterest sharing button" src="https://platform-cdn.sharethis.com/img/pinterest.svg">
                <span class="st-label">Pin</span>
            </div>
            <div class="st-btn" data-network="whatsapp" style="display: inline-block;">
                <img alt="whatsapp sharing button" src="https://platform-cdn.sharethis.com/img/whatsapp.svg">
                <span class="st-label">Share</span>
            </div>
            <div class="st-btn st-last" data-network="sharethis" style="display: inline-block;">
                <img alt="sharethis sharing button" src="https://platform-cdn.sharethis.com/img/sharethis.svg">
                <span class="st-label">Share</span>
            </div>
            <div class="st-toggle">
                <div class="st-left">
                    <img alt="arrow_left sharing button" src="https://platform-cdn.sharethis.com/img/arrow_left.svg">
                </div>
                <div class="st-right">
                    <img alt="arrow_right sharing button" src="https://platform-cdn.sharethis.com/img/arrow_right.svg">
                </div>
            </div>
        </div>
        
        <!-- Start Contact Area -->
        <!-- <section id="contact" class="contact-area ptb-80 bg-f6f6f6">
            <div class="container">
                <div class="section-title">
                    <h4>Get in Touch</h4>
                    <h2>Let's <span>Contact</span> Us</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
                
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div id="map"></div>
                        
                        <div class="contact-info">
                            <ul>
                                <li><i class="fa fa-map-marker"></i> Exercisplan 4, 111 49 Stockholm, Sweden</li>
                                <li><i class="fa fa-envelope"></i> <a href="#">addax@gmail.com</a></li>
                                <li><i class="fa fa-phone"></i> <a href="#">(+124)412-2445515</a></li>
                                <li><i class="fa fa-fax"></i> <a href="#">617-241-60055</a></li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="col-lg-6 col-md-12">
                        <div class="contact-form">
                            <h4>Stay Connected</h4>
                             <form id="contactForm">
                                <div class="row">
                                    <div class="col-lg-12 col-md-6">
                                        <div class="form-group">
                                            <label for="name">Name</label>
                                            <input type="text" class="form-control" name="name" id="name" required data-error="Please enter your name">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-6">
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="email" class="form-control" name="email" id="email" required data-error="Please enter your email">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <label for="number">Phone Number</label>
                                            <input type="text" class="form-control" name="number" id="number" required data-error="Please enter your number">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <label for="message">Message</label>
                                            <textarea name="message" class="form-control" id="message" cols="30" rows="4" required data-error="Write your message"></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <button type="submit" class="btn btn-primary">Send Message</button>
                                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- End Contact Area -->
        
        <!-- Start Footer Area -->
        <footer class="footer-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <h6 class="text-white">Supported by</h6>
                        <img src="assets/img/logo-ssip.png">
                    </div>

                    <div class="col-md-3">
                        <h6 class="text-white">Contact</h6>
                        <div class="foot-contact-info">
                            <div class="mail-box text-white">
                                 <p><a class="footmaplink" href="" target="_blank"><i class="fa fa-envelope"></i> office-ihub@gujarat.gov.in</a></p>
                                
                            </div>

                            <div class="call-box text-white">
                                <p><a class="footmaplink" href="" target="_blank"><i class="fa fa-phone"></i> 079-26308210</a></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <h6 class="text-white">Social Links</h6>
                        <ul class="foot-social">
                            <li><a href="#" class="fa fa-facebook"></a></li>
                            <li><a href="#" class="fa fa-twitter"></a></li>
                            <li><a href="#" class="fa fa-skype"></a></li>
                            <li><a href="#" class="fa fa-instagram"></a></li>
                            <li><a href="#" class="fa fa-linkedin"></a></li>
                        </ul>
                    </div>

                    <div class="col-md-3">
                        <h6 class="text-white">Address</h6>
                        <div class="address-box text-white">
                            <p><a class="footmaplink" href="" target="_blank"><i class="fa fa-map-marker"></i> Pragna Puram, KCG Campus, Opp. PRL, Nr. LD College of Engineering, Navrangpura, Ahmedabad - 380015</a></p>
                        </div>                        
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <p><a href="#" style="color: #fff;">Terms & Privacy Policy</a></p>
                    </div>
                    <div class="col-lg-6 col-md-6 text-right">
                        <p>i-Hub Copyright <i class="fa fa-copyright"></i> 2020 All Rights Reserved.</p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End Footer Area -->
        
        <div class="go-top"><i class="fa fa-angle-up"></i></div>
        
        <!-- JQuery Min JS -->
        <script src="assets/js/jquery.min.js"></script>
        <!-- Popper Min JS -->
        <script src="assets/js/popper.min.js"></script>
        <!-- Bootstrap Min JS -->
        <script src="assets/js/bootstrap.min.js"></script>
        <!-- Owl Carousel JS -->
        <script src="assets/js/owl.carousel.min.js"></script>
        <!-- Magnific Popup JS -->
        <script src="assets/js/jquery.magnific-popup.min.js"></script>
        <!-- WayPonits JS -->
        <script src="assets/js/waypoints.min.js"></script>
        <!-- CounterUp JS -->
        <script src="assets/js/jquery.counterup.min.js"></script>
        <!-- Mixitup min JS -->
        <script src="assets/js/jquery.mixitup.min.js"></script>
        <!-- Jquery Ripples Min JS -->
        <script src="assets/js/jquery.ripples-min.js"></script>
        <!-- Jquery Particles Min JS -->
        <script src="assets/js/particles.min.js"></script>
        <!-- Form Validator Min JS -->
        <script src="assets/js/form-validator.min.js"></script>
        <!-- Contact Form Min JS -->
        <script src="assets/js/contact-form-script.js"></script>
        <!-- ajaxChimp Min JS -->
        <script src="assets/js/jquery.ajaxchimp.min.js"></script>
        <!-- Map API JS FILES -->
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyApghCIIx9MpQhA768sKXxvR_Okg0SF2k4&amp;callback=initMap"></script>
        <!-- Addax Map JS FILE -->
        <script src="assets/js/addax-map.js"></script>
        <!-- WoW JS -->
        <script src="assets/js/wow.js"></script>
        <!-- Main JS -->
        <script src="assets/js/main.js"></script>
        <!-- Custom JS -->
        <script src="assets/js/custom.js"></script>
    </body>

</html>