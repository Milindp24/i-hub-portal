@extends('master')

@section('content')


<div class="page-title item-bg-two ripple-effect jquery-ripples">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <h1>Incubated Startup</h1>
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


<!-- Start Incubated Startup Area -->
<section id="about" class="about-area abt-page ptb-80 bg-f6f6f6">
    <div class="container pb-40">
        <div class="section-title">
            <h2>StartUp <span>Portfolio</span></h2>
        </div>

        <div class="row">
            <div class="col-lg-6 col-md-6 mix brand p-0">
                <a target="_blank" href="https://www.moodcafe.in/">
                    <div class="single-work">
                        <img src="{{ URL::asset('assets/img/portfolios/Moodcafe.png')}}" alt="work-img">

                        <div class="work-content">
                            <h4>Moodcafe</h4>
                            <a target="_blank" href="https://www.moodcafe.in/">https://www.moodcafe.in/</a>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-lg-6 col-md-6 mix brand p-0">
                <a target="_blank" href="http://www.wepaint.in/">
                    <div class="single-work">
                        <img src="{{ URL::asset('assets/img/portfolios/WEpaint.png')}}" alt="work-img">

                        <div class="work-content">
                            <h4>Wepaint</h4>
                            <a target="_blank" href="http://www.wepaint.in/">http://www.wepaint.in/</a>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6 col-md-6 mix brand p-0">
                <a target="_blank" href="https://www.artistsadda.com/">
                    <div class="single-work">
                        <img src="{{ URL::asset('assets/img/portfolios/Artists-Adda.png')}}" alt="work-img">

                        <div class="work-content">
                            <h4>Artist Adda</h4>
                            <a target="_blank" href="https://www.artistsadda.com/">https://www.artistsadda.com/</a>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-lg-6 col-md-6 mix brand p-0">
                <a target="_blank" href="http://www.indifoot.com/">
                    <div class="single-work">
                        <img src="{{ URL::asset('assets/img/portfolios/Indifoot.png')}}" alt="work-img">

                        <div class="work-content">
                            <h4>Indifoot</h4>
                            <a target="_blank" href="http://www.indifoot.com/">http://www.indifoot.com/</a>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6 col-md-6 mix brand p-0">
                <a target="_blank" href="http://www.aim-tech.net/">
                    <div class="single-work">
                        <img src="{{ URL::asset('assets/img/portfolios/AIM-Technologies-Targeted-Advertising-for-Ahmedabad-Home-1.png')}}" alt="work-img">

                        <div class="work-content">
                            <h4>AIM Technologies</h4>
                            <a target="_blank" href="http://www.aim-tech.net/">http://www.aim-tech.net/</a>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- End Incubated Startup Area -->

@endsection