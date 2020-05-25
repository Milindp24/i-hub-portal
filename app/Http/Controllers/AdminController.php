<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\EventDetail;

use App\NoticeDetail;

use Auth;

use DB;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.login');
    }

    public function checkadminlogin(Request $req){
        $user_data = array(
            'email' => $req->get('username'),
            'password' => $req->get('userpassword')
        );

        $username = $req->get('username');
        $password = $req->get('password');

        // echo 'h';

        
        //$user = DB::table('admin_login')->where(['email'=>$username,'password'=>$password])->get();

            // session(['verified' => $status]);
            // session(['token' => $token]);
        // if(count($user) > 0){
        //     return redirect('login/successlogin');
        //     // echo 'success';
        // }
        // else{
        //     return back()->with('error','Wrong Login Details');
        // }
        return redirect('admin/dashboard');
    }

    public function dashboard(){
        return view('admin.index');
    }

    public function add_events()
    {
        return view('admin.add_events');
    }

    public function event_list(){
        // $data['events'] = DB::table('event_details')->get();
        $data['events'] = EventDetail::all();

        // $data['events'] = EventDetail::Join('event_type_master', function($join){
        //     $join->on('event_details.evnt_type_id','=','event_type_master.evnt_type_id');
        // });
        // dd($data['events']);
        if(count($data) > 0)
        {
            return view('admin.event_list',$data);
        }
        else{
            return view('admin.event_list');
        }
        
    }

    public function insert_events(Request $req){

        $event_detail = new EventDetail;

        // $event_detail = $req->all();
        $event_detail->admin_id = $req->get('admin_id');
        $event_detail->evnt_type_id = $req->get('evnt_type_id');
        $event_detail->event_name = $req->get('event_name');
        $event_detail->event_desc = $req->get('event_desc');
        $event_detail->evnt_venue = $req->get('evnt_venue');
        $event_detail->evnt_date = $req->get('evnt_date');
        $event_detail->evnt_from = $req->get('evnt_from');
        $event_detail->evnt_to = $req->get('evnt_to');
        $event_detail->facebook_url = $req->get('facebook_url');
        $event_detail->web_url = $req->get('web_url');
        $event_detail->std_img_url = $req->get('std_img_url');
        $event_detail->banner_img_url = $req->get('banner_img_url');
        $event_detail->last_ip = $req->ip();
        
        // dd($event_detail);
        // exit();

        // $event_data->save();

        if($event_detail->save()){
            return redirect('admin/event_list')->with('success','Event Added Successfully.');
        }
        
        
    }

    public function add_notice()
    {
        return view('admin.add_notice');
    }

    public function insert_notice(Request $req){

        $notice = new NoticeDetail;

        // $notice = $req->all();
        $notice->admin_id = $req->get('admin_id');
        $notice->notice_type_id = $req->get('notice_type_id');
        $notice->notice_name = $req->get('notice_name');
        $notice->notice_details = $req->get('notice_details');
        $notice->from_date = $req->get('from_date');
        $notice->to_date = $req->get('to_date');
        $notice->web_url = $req->get('web_url');
        $notice->img_url = $req->get('img_url');
        $notice->created_ip = $req->ip();
        
        // dd($notice);
        // exit();

        // $event_data->save();

        if($notice->save()){
            return redirect('admin/notice_list')->with('success','Notice Added Successfully.');
        }
    }

    public function notice_list(){
        // $data['events'] = DB::table('event_details')->get();
        $data['notices'] = NoticeDetail::all();

        // $data['events'] = EventDetail::Join('event_type_master', function($join){
        //     $join->on('event_details.evnt_type_id','=','event_type_master.evnt_type_id');
        // });
        // dd($data['events']);
        if(count($data) > 0)
        {
            return view('admin.notice_list',$data);
        }
        else{
            return view('admin.notice_list');
        }
    }
}
