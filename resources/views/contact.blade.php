@extends('master')

@section('content')

<div class="page-title item-bg-two ripple-effect jquery-ripples">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <h1>Contact</h1>
                        <!-- <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><i class="fa fa-angle-right"></i></li>
                            <li class="active">Event</li>
                        </ul> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
<canvas width="1349" height="250" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; z-index: -1;"></canvas>
</div>

<!-- Start Contact Area -->
<section id="contact" class="contact-area ptb-80 bg-f6f6f6">
    <div class="container">
        <div class="section-title">
            <h4>Get in Touch</h4>
            <h2><span>Contact</span> Us</h2>
        </div>
        
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div id="map"></div>
                
                <div class="contact-info">
                    <ul>
                        <li><i class="fa fa-map-marker"></i> Pragna Puram, KCG Campus, Opp. PRL, Nr. LD College of Engineering, Navrangpura, Ahmedabad - 380015</li>
                        <li><i class="fa fa-envelope"></i> <a href="mailto:office-ihub@gujarat.gov.in">office-ihub@gujarat.gov.in</a></li>
                        <li><i class="fa fa-phone"></i> <a href="079-26308210">079-26308210</a></li>
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
</section>
<!-- End Contact Area -->

@endsection