@extends('master')

@section('content')

<div class="page-title item-bg-two ripple-effect jquery-ripples">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <h1>COGENT Student Login</h1>
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

<section id="contact" class="contact-area ptb-80 bg-f6f6f6">
    <div class="container">
        @if(count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                <li>{{error}}</li>
                @endforeach
            </ul>
        </div>
        @endif

        @if(\Session::has('success'))
        <div class="alert alert-success">
            <p>{{\Session::get('success')}}</p>
        </div>
        @endif
        
        <div class="row">
            <div class="col-lg-6 col-md-6 offset-md-3">
                <div class="contact-form">
                    <div class="section-title" style="margin-bottom: 30px;">
                        <h4><b><span>Login</span></b></h4>
                    </div>
                    <form role="form" class="intro-form" method="POST" action="{{url('student')}}" autocomplete="off">
                        {{csrf_field()}}
                        <!-- <div class="ro"> -->
                        <div class="form-group">
                            <label>User Type</label>
                            <select class="form-control form-control-sm" name="user_type" id="user_type" style="margin-bottom: 26px;">
                                <option value="" selected> -- Select User Type -- </option>
                                <option></option>
                                <option></option>
                                <option></option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label>Email Address</label>
                            <input type="text" class="form-control form-control-sm" name="username" placeholder="Email Address" required="required">
                        </div>
                        
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control form-control-sm" name="password" placeholder="Password" required="required">
                        </div>

                        <div class="form-group">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customControlAutosizing">
                                <label class="custom-control-label" for="customControlAutosizing">Remember me</label>
                            </div>
                        </div>
                        

                        <div class="form-group text-center pt-2">
                            <button type="submit" class="filter btn btn-primary">Login</button>
                        </div>
                    </form>

                    <div class="row">
                        <div class="col-md-12 text-center">
                            <p class="text-muted pt-5">Don't have an account?  <a href="{{ url('/') }}/signup" class="text-dark ml-1"><b>Sign Up</b></a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- login page end -->
@endsection
