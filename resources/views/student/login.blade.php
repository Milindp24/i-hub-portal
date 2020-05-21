@extends('master')

@section('content')

<section class="section bg-sub-page-home">
    <div class="bg-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 pt-5 page-next-level text-center">
                <h4 class="pt-3">Cognet Student Login</h4>
                <div class="page-next text-light"> <a href="index.html">Home</a>/<span>Login</span> </div>
            </div>                    
        </div>
    </div>
</section>

<section class="section">
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
        <div class="row justify-content-center">
            <div class="col-md-8">
                <form role="form" class="intro-form">
                {{csrf_field()}}
                    <h2 class="text-center"> Cognet Student Login </h2>
                    
                    <div class="form-group">
                        <label>Email Address</label>
                        <input type="text" class="form-control form-control-sm" placeholder="Email Address" required="required">
                    </div>
                    
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control form-control-sm" placeholder="Password" required="required">
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
                <p class="text-muted pt-5">Don't have an account?  <a href="signup.php" class="text-dark ml-1"><b>Sign Up</b></a></p>
            </div>
        </div>
    </div>
</section>

@endsection