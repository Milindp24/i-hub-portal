@extends('master')

@section('content')

<div class="page-title item-bg-two ripple-effect jquery-ripples">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <h1>Internship</h1>
                        <!-- <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><i class="fa fa-angle-right"></i></li>
                            <li class="active">Internship</li>
                        </ul> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
<canvas width="1349" height="250" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; z-index: -1;"></canvas>
</div>

<!-- Start Internship Area -->
<section id="about" class="about-area abt-page ptb-80 bg-f6f6f6">
    <div class="container pb-40">
        <div class="section-title">
            <h2>Internship @ <span>i-Hub Gujarat</span></h2>
        </div>
       
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <p>i-Hub, a catalyst in creating a stronger startup ecosystem across gujarat state with its cohesive approach in inculcating entrepreneurial spirit in the youth. We are offering multiple remote internship options, for a duration of three months, starting 25th May 2020, from the comfort of your home. Contribute towards Startup Ecosystem including Start-ups working on solutions for Covid-19. Join us to create tangible impact by adding value to #StartupEcosystem.</p>

                <div class="about-addax">
                    <ul class="pull-left">
                    	<h5 style="color:#ff2c57;">Roles</h5>
                    	<br>
                        <li><i class="fa fa-check"></i>Graphic Design</li>
                        <li><i class="fa fa-check"></i>Content Writing</li>
                        <li><i class="fa fa-check"></i>Digital Marketing</li>
                        <li><i class="fa fa-check"></i>Creating/Editing Videos</li>
                    </ul>

                    <ul>
                    	<h5 style="color:#ff2c57;">Perks</h5>
                    	<br>
                        <li><i class="fa fa-check"></i>Letter of Recommendation</li>
                        <li><i class="fa fa-check"></i>Certificate highlighting your contribution</li>
                        <li><i class="fa fa-check"></i>New value added skills & more…</li>
                    </ul>
                </div>
            </div>

            <div class="col-md-6 col-lg-6">
            	<img src="{{ URL::asset('assets/img/Internship-ihub.jpeg')}}" alt="Internship">
            </div>
        </div>

        <hr style="width: 20%; border-top: 2px solid rgb(255, 44, 87); ">

        <div class="row">
            <div class="col-lg-6 col-md-6">
				<h4>For more information:</h4><br>
				<p><i class="fa fa-envelope" style="color: #ff2c57"></i> <b>Email:</b> office-ihub@gujarat.gov.in</p>
				<p><i class="fa fa-phone" style="color: #ff2c57"></i> <b>Call/WhatsApp:</b> 9033569906</p>

				<a href="https://bit.ly/iHub-Internship" target="_blank"><button class="filter btn btn-primary">Register Now</button></a>
            </div>
        </div>
    </div>
</section>
<!-- End Internship Area -->

@endsection