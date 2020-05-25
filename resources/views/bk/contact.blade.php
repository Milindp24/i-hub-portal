@extends('master')

@section('content')

<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="contact-info text-center">
                    <i class="mbri-pin"></i>
                    <h5 class="pt-2">Office Address</h5>
                    <p>Pragna Puram, KCG Campus, Opp. PRL, 
                        Nr. L.D College of Engineering,
                        Navrangpura, Ahmedabad - 380015.
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="contact-info text-center">
                    <i class="mbri-letter"></i>
                    <h5 class="pt-2">E-mail Address</h5>
                    <p>office-ihub@gujarat.gov.in<br><br><br></p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="contact-info text-center">
                    <i class="mbri-mobile2"></i>
                    <h5 class="pt-2">Contact Us</h5>
                    <p> Tel : - 079-26308210 <br><br><br></p>
                </div>
            </div>
        </div>
    </div>
</section>        

<section class="section pt-0" id="contact">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h4 class="title text-center">Get In Touch</h4>
            </div>
        </div>

        <div class="custom-form mt-1">
            <form method="" action="#">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Name</label>
                            <input name="name" type="text" class="form-control" placeholder="your name..." >
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Email address</label>
                            <input name="email" type="email" class="form-control" placeholder="your email..." >
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Subject</label>
                            <input type="text" class="form-control" placeholder="your Subject.." />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Message</label>
                            <textarea  rows="5" class="form-control" placeholder="your message..."></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-left">
                        <input type="submit" class="btn btn-custom text-uppercase" value="Send Message">
                    </div>
                </div>
            </form>
            <!-- /form -->
        </div>  
    </div>
</section>

@endsection