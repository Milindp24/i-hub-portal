<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Student_personal_detail;
use App\Student_education_detail;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('student.registration');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $ip_address = $this->getIp();
        $student = new Student_personal_detail;
        $student->std_id = '10101';
        $user_id = $student->std_id;
        $student->fname = $request->get('first_name');
        $student->lname = $request->get('last_name');
        $student->mname = $request->get('middle_name');
        $student->date_of_birth = $request->get('dob');
        $student->address = $request->get('address');
        $student->city_id = $request->get('city');
        $student->state_id = $request->get('state');
        $student->pincode = $request->get('pincode');
        $student->mobile_num = $request->get('mobile');
        $student->email = $request->get('email');
        $student->father_num = $request->get('father_mobile');
        $student->gender = $request->get('gender');
        $student->password = $request->get('password');
        $student->facebook_id = $request->get('facebook');
        $student->insta_id = $request->get('instagram');
        $student->linkedin_id = $request->get('linkedin');
        $student->twitter_id = $request->get('twitter');
        $student->is_active = '1';
        $student->last_modify_at = date('Y-m-d');
        $student->last_modify_ip = $request->ip();

        $student->save();

        $st_edu = new Student_education_detail;

        $st_edu->user_id = $student->id;
        $st_edu->university_id = $request->get('university_name');
        $st_edu->institute_id = $request->get('institute_name');
        $st_edu->course_id = $request->get('course_name');
        $st_edu->enrollment_no = $request->get('enrollment_number');
        $st_edu->enrolled_year = $request->get('join_year');
        $st_edu->is_passout = '1';
        $st_edu->is_active = '1';
        $st_edu->last_modify_at = date('Y-m-d');
        $st_edu->last_modify_ip = $request->ip();
        $st_edu->course_type = 'UG';

        $st_edu->save();

        return redirect()->route('student.create')->with('success','Registration Successful.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
