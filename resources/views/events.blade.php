@extends('master')

@section('content')

<div class="page-title item-bg-two ripple-effect jquery-ripples">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <h1>Events</h1>
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

<!-- Start Events Area -->
<section class="faq-area ptb-80">
    <div class="container">
        <div class="section-title">
            <h2><span>Current Events</span></h2>
        </div>
       
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="accordion" id="accordionEx" role="tablist" aria-multiselectable="true">
                	<?php $i = 'show'; $k = ''; $j ='1';?>
                	@foreach($events as $evnt)
					
						<div class="card">
	                        <div class="card-header" role="tab" id="heading{{$j}}">
	                            <a class="{{$k}}" data-toggle="collapse" data-parent="#accordionEx" href="#collapse{{$j}}" aria-expanded="true" aria-controls="collapse{{$j}}">
	                                <h5 class="mb-0">
	                                {{$evnt->event_name}} ({{date('m-d-Y',strtotime($evnt->evnt_date))}})<i class="fa fa-plus"></i>
	                                </h5>
	                            </a>
	                        </div>

	                        <div id="collapse{{$j}}" class="collapse {{$i}}" role="tabpanel" aria-labelledby="heading{{$j}}" data-parent="#accordionEx">
	                            <div class="card-body">
	                            	<div class="row">
	                            		<div class="col-md-12">
	                            			<p><span class="e-title">Name: </span>{{$evnt->event_name}}</p>
	                            		</div>
	                            	</div>

	                            	<div class="row">
	                            		<div class="col-md-6">
	                            			<p><span class="e-title">Venue: </span>{{$evnt->event_venue}}</p>
	                            		</div>

	                            		<div class="col-md-6">
	                            			<p><span class="e-title">Co-Ordinator Name: </span>{{$evnt->admin_id}}</p>
	                            		</div>
	                            	</div>

	                            	<div class="row">
	                            		<div class="col-md-6">
	                            			<p><span class="e-title">Date: </span>{{date('m-d-Y',strtotime($evnt->evnt_date))}}</p>
	                            		</div>

	                            		<div class="col-md-6">
	                            			<p><span class="e-title">Designation: </span></p>
	                            		</div>
	                            	</div>

	                            	<div class="row">
	                            		<div class="col-md-6">
	                            			<p><span class="e-title">Time: </span>{{date('h:i:sa',strtotime($evnt->evnt_from))}} - {{date('h:i:sa',strtotime($evnt->evnt_to))}}</p>
	                            		</div>

	                            		<div class="col-md-6">
	                            			<p><span class="e-title">Email: </span></p>
	                            		</div>
	                            	</div>
	                            	<br>
	                            	<div class="row">
	                            		<div class="col-md-12 text-center">
	                            			<button class="filter btn btn-primary">Click to Register</button>
	                            		</div>

	                            		
	                            	</div>
	                                
	                            </div>
	                        </div>
	                    </div>
					<?php $i = ''; $k = 'collapsed'; $j++;?>
                	@endforeach
                    
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Events Area -->

@endsection