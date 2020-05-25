@extends('master')

@section('content')

<div class="page-title item-bg-two ripple-effect jquery-ripples">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <h1>COGENT Student Registration</h1>
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
        <div class="section-title">
            <h2><span>Sign</span> Up</h2>
        </div>

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
            <div class="col-lg-12 col-md-12">
                <div class="contact-form">
                    <div class="section-title" style="margin-bottom: 30px;">
                        <h4><b><span>Educational Details</span></b></h4>
                    </div>
                    <form role="form" class="intro-form" method="POST" action="{{url('student')}}" autocomplete="off">
                        {{csrf_field()}}
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>University Name<sup style='color: red'>*</sup></label>

                                    <select name="university_name" class="form-control form-control-sm" onchange="getInstitutes(this)" required id="university_name">
                                        <option value="" selected=""> -- Select University -- </option>
                                        <option value="1037">Gujarat Technical University</option>
                                        <option value="136">Gujarat University</option>
                                        <option value="152">Shree Somnath Sanskrit University</option>
                                        <option value="131">DR.BABASAHEB AMBEDKAR OPEN UNIVERSITY</option>
                                        <option value="143">Maharaja Sayajirao University of Vadodara</option>
                                        <option value="138">Hemchandracharya North Gujarat University</option>
                                        <option value="783">Bhakta Kavi Narsinh Mehta University</option>
                                        <option value="594">Children's University</option>
                                        <option value="664">Indian Institute of Teacher Education</option>
                                        <option value="142">Krantiguru shyamji krishn verma kachchh university</option>
                                        <option value="124">Maharaja Krishnakumarsinhji Bhavnagar University.</option>
                                        <option value="148">Sardar Patel University</option>
                                        <option value="151">Saurashtra University</option>
                                        <option value="782">Shri Govind Guru University</option>
                                        <option value="153">Veer Narmad South Gujarat University</option>
                                        <option value="122">Ahmedabad University</option>
                                        <option value="830">Anant National University</option>
                                        <option value="967">Atmiya University</option>
                                        <option value="794">AURO University of Hospitality and Management</option>
                                        <option value="1065">Bhaikaka University</option>
                                        <option value="966">Birsa Munda Tribal University</option>
                                        <option value="708">C. U. Shah University</option>
                                        <option value="125">Sabarmati University</option>
                                        <option value="127">CEPT UNIVERSITY</option>
                                        <option value="128">Charotar University of Science &amp; Technology</option>
                                        <option value="131">Dr. Babasaheb ambedkar open university</option>
                                        <option value="129">Dharmsinh Desai University</option>
                                        <option value="130">Dhirubhai Ambani Institute Of Information &amp; Communication Technology</option>
                                        <option value="132">GANPAT UNIVERSITY</option>
                                        <option value="775">GLS University</option>
                                        <option value="133">GUJARAT AYURVED UNIVERSITY</option>
                                        <option value="593">GUJARAT FORENSIC SCIENCES UNIVERSITY</option>
                                        <option value="134">GUJARAT NATIONAL LAW UNIVERSITY</option>
                                        <option value="137">GUJARAT VIDYAPITH</option>
                                        <option value="962">GOKUL GLOBAL UNIVERSITY</option>
                                        <option value="139">Indian Institute of Technology Gandhinagar</option>
                                        <option value="759">GSFC University</option>
                                        <option value="817">Gujarat University Of Transplantation Sciences</option>
                                        <option value="963">INDIAN INSTITUTE OF PUBLIC HEALTH GANDHINAGAR</option>
                                        <option value="765">Institute of Infrastructure Technology Research and Management</option>
                                        <option value="922">Indrashil University</option>
                                        <option value="140">Junagadh Agricultural University</option>
                                        <option value="663">Indus University</option>
                                        <option value="706">Kamdhenu University, Gandhinagar</option>
                                        <option value="771">Institute of Advanced Research, Gandhinagar</option>
                                        <option value="714">ITM VOCATINAL UNIVERSITY, VADODARA</option>
                                        <option value="141">KADI SARVA VISHWAVIDYALAYA</option>
                                        <option value="914">KARNAVATI UNIVERSITY</option>
                                        <option value="145">Navsari Agricultural University, Navsari</option>
                                        <option value="734">LAKULISH YOGA UNIVERSITY</option>
                                        <option value="825">MARWADI UNIVERSITY</option>
                                        <option value="144">Navrachana University</option>
                                        <option value="146">Nirma University, Ahmedabad</option>
                                        <option value="595">RAKSHA SHAKTI UNIVERSITY</option>
                                        <option value="873">P P Savani University</option>
                                        <option value="147">Pandit Deendayal Petroleum University</option>
                                        <option value="763">Parul University</option>
                                        <option value="670">SWARNIM GUJARAT SPORTS UNIVERSITY</option>
                                        <option value="843">Plastindia International University</option>
                                        <option value="790">Rai University Ahmedabad</option>
                                        <option value="143">The Maharaja Sayajirao University of Baroda</option>
                                        <option value="647">RK University</option>
                                        <option value="821">SANKALCHAND PATEL UNIVERSITY</option>
                                        <option value="126">Central Univeristy Of Gujarat, Gandhinagar</option>
                                        <option value="154">Sumandeep Vidyapeeth</option>
                                        <option value="893">Swarnim Startup &amp; Innovation University</option>
                                        <option value="149">Sardar Vallabhbhai National Institute Of Technology, Surat</option>
                                        <option value="150">Sardarkrushinagar Dantiwada Agricultural University, Banaskantha</option>
                                        <option value="798">Indian Institute Of Information Technology, Vadodara</option>
                                        <option value="781">TeamLease Skills University</option>
                                        <option value="668">Uka Tarsadia University</option>
                                        <option value="968">National Rail And Transportation Institute</option>
                                        <option value="1028">National Institute of Design</option>
                                        <option value="1036">GUJARAT MARITIME UNIVERSITY</option>
                                        <option value="1038">AUTONOMOUS </option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Institute Name<sup style='color: red'>*</sup></label>
                                    <select name="institute_name" class="form-control form-control-sm" id="institute_name" required>
                                        <option value="" selected=""> -- Select Institute -- </option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Course Name</label>
                                    <select name="course_name" class="form-control form-control-sm">
                                        <option value="" selected=""> -- Select Course Name -- </option>
                                        <option value="1">IT</option>
                                        <option value="2">EC</option>
                                        <option value="3">EE</option>
                                        <option value="4">ME</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Enrollment No.</label>
                                    <input type="text" name="enrollment_number" class="form-control form-control-sm" placeholder="Enter Enrollment No.">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Enrolled Year</label>
                                    <input type="text" name="join_year" class="form-control form-control-sm" placeholder="Enrolled Year">
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="section-title" style="margin-bottom: 30px;">
                            <h4><b><span>Personal Details</span></b></h4>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                <label>First Name<sup style='color: red'>*</sup></label>
                                
                                    <input type="text" name="first_name" class="form-control form-control-sm" placeholder="Enter First Name" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                <label>Middle Name<sup style='color: red'>*</sup></label>
                                    <input type="text" name="middle_name" class="form-control form-control-sm" placeholder="Enter Middle Name" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                <label>Last Name<sup style='color: red'>*</sup></label>
                                    <input type="text" name="last_name" class="form-control form-control-sm" placeholder="Enter Last Name" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                <label>Date of Birth<sup style='color: red'>*</sup></label>
                                    <input type="date" name="dob" class="form-control form-control-sm" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">

                                <label>Address<sup style='color: red'>*</sup></label>
                                    <textarea class="form-control" name="address" rows="2" placeholder="Enter your Address" required></textarea>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">

                                <label>Gender<sup style='color: red'>*</sup></label>
                                    <select class="form-control form-control-sm" name="gender" required>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-md-4">
                                <div class="form-group">

                                <label>State<sup style='color: red'>*</sup></label>
                                    <select name="state" class="form-control form-control-sm" required>
                                        <!-- <option value="" > -- Select State -- </option> -->
                                        <option value="1" selected>Gujarat</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">

                                <label>City<sup style='color: red'>*</sup></label>
                                    <select name="city" class="form-control form-control-sm" required>
                                        <option value="" selected> -- Select City -- </option>
                                        <option value="1">Ahmedabad</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">

                                <label>Pincode<sup style='color: red'>*</sup></label>
                                    <input type="number" name="pincode" class="form-control form-control-sm" placeholder="Enter Pincode" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">

                                <label>Email Id<sup style='color: red'>*</sup></label>
                                    <input type="email" name="email" id="email" class="form-control form-control-sm" placeholder="Enter Email" required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">

                                <label>Confirm Email Id<sup style='color: red'>*</sup></label>
                                    <input type="email" name="confirm_email" id="confirm_email" class="form-control form-control-sm" placeholder="Enter Email" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">

                                <label>Password<sup style='color: red'>*</sup></label>
                                    <input type="password" name="password" id="password" class="form-control form-control-sm" placeholder="Enter Password" required="">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">

                                <label>Confirm Password<sup style='color: red'>*</sup></label>
                                    <input type="password" name="confirmed_pssword" id="confirmed_pssword" class="form-control form-control-sm" placeholder="Confirm Password" required="">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">

                                <label>Mobile No.<sup style='color: red'>*</sup></label>
                                    <input type="number" name="mobile" class="form-control form-control-sm" placeholder="Enter Mobile No." required>
                                </div>
                            </div>
                        </div>

                        <div class="form-group text-center pt-2">
                            <button type="submit" class="filter btn btn-primary">Register</button>
                        </div>
                    </form>

                    <div class="row">
                        <div class="col-md-12 text-center">
                            <p class="text-muted pt-5">Already have an account?  <a href="{{ url('/') }}/login" class="text-dark ml-1"><b>Sign In</b></a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- login page end -->
@endsection