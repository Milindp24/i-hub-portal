<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Student_personal_detail;
use App\Student_education_detail;
use App\User;

use App\EventDetail;

use Hash;

use Illuminate\Support\Str;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('student.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('registration');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User;

        $user->name = $request->get('first_name').' '.$request->get('middle_name').' '.$request->get('last_name');
        $user->email = $request->get('email');
        $password = $request->get('password');
        $user->password = Hash::make($password);
        $user->token= Str::random(25);
        // $user->remember_token = '1234';

        $user->save();

        $user->sendVerificationEmail();

        // return $user;

        // $ip_address = $this->getIp();
        $student = new Student_personal_detail;
        $student->user_id = '10101';
        // $user_id = $student->user_id;
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
        // $student->father_num = $request->get('father_mobile');
        $student->gender = $request->get('gender');
        $student->password = $request->get('password');
        // $student->facebook_id = $request->get('facebook');
        // $student->insta_id = $request->get('instagram');
        // $student->linkedin_id = $request->get('linkedin');
        // $student->twitter_id = $request->get('twitter');
        $student->is_active = '1';
        $student->last_modify_at = date('Y-m-d h:i:s');
        $student->last_modify_ip = $request->ip();

        $student->save();

        $st_edu = new Student_education_detail;

        $st_edu->user_id = $student->id;
        $st_edu->univ_id = $request->get('university_name');
        $st_edu->inst_id = $request->get('institute_name');
        $st_edu->course_id = '1';
        $st_edu->course_type = '1';
        $st_edu->enrollment_number = $request->get('enrollment_number');
        $st_edu->enrolled_year = $request->get('join_year');
        $st_edu->is_passout = '1';
        $st_edu->is_active = '1';
        $st_edu->last_modify_at = date('Y-m-d h:i:s');
        $st_edu->last_modify_ip = $request->ip();
        

        $st_edu->save();

        /* Send Email for confirmation */

        return redirect()->route('student.index')->with('success','Registration Successful.');
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

    public function events(){
        // Route::view('events','events');
        $data['events'] = EventDetail::all();

        // $data['events'] = EventDetail::Join('event_type_master', function($join){
        //     $join->on('event_details.evnt_type_id','=','event_type_master.evnt_type_id');
        // });
        // dd($data['events']);
        if(count($data) > 0)
        {
            return view('events',$data);
        }
        else{
            return view('events');
        }
    }

    public function about(){
        return view('about');
    }

    public function internship(){
        return view('internship');
    }

    public function signup(){
        return view('registration');
    }

    public function incubated_startup(){
        return view('incubated_startup');
    }

    public function startup_sarthi(){
        return view('startup_sarthi');
    }

    public function startup_saksham(){
        return view('startup_saksham');
    }

    public function startup_manak(){
        return view('startup_manak');
    }

    public function ssip_prashansa(){
        return view('ssip_prashansa');
    }

    public function startup_mart(){
        return view('startup_mart');
    }

    public function startup_goonj(){
        return view('startup_goonj');
    }

    public function ssip_samajh(){
        return view('ssip_samajh');
    }

    public function ssip_samarth(){
        return view('ssip_samarth');
    }

    public function soic(){
        return view('soic');
    }
}
