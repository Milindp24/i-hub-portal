@extends('master')

@section('content')

<section class="section bg-sub-page-home">
    <div class="bg-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 pt-5 page-next-level text-center">
                <h4 class="pt-3">Cogent Student Login</h4>
                <div class="page-next text-light"> <a href="index.html">Home</a>/<span>Login</span> </div>
            </div>                    
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        @if($message = Session::get('error'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

        @if(count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
            @foreach($errors->all() as $error)
            <li>{{error}}</li>
            @endforeach
            </ul>
        </div>
        @endif
        <div class="row justify-content-center">
            <div class="col-md-8">
                <form role="form" class="intro-form" method="POST" action="{{ url('login/checklogin')}}">
                {{csrf_field()}}
                    <h2 class="text-center"> Cogent Student Login </h2>
                    
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

                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-custom text-uppercase">Log in Now</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 text-center">
                <p class="text-muted pt-5">Don't have an account?  <a href="{{ url('/') }}/student_registrations" class="text-dark ml-1"><b>Sign Up</b></a></p>
            </div>
        </div>
    </div>
</section>

@endsection