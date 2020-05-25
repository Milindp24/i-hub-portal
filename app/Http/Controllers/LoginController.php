<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;

use Auth;

use DB;


class LoginController extends Controller
{
    public function index(){
        return view('login');
    }

    public function checkLogin(Request $request){
        $user_data = array(
            'email' => $request->get('username'),
            'password' => $request->get('password')
        );

        if(Auth::attempt($user_data)){
            $user = DB::table('users')->where('email', $request->get('username'))->first();

            $status = $user->verified;
            $token = $user->token;

            session(['verified' => $status]);
            session(['token' => $token]);

            return redirect('login/successlogin');
            // echo 'success';
        }
        else{
            return back()->with('error','Wrong Login Details');
        }
    }

    public function successlogin(){
        return view('student.index');
    }

    public function logout(){
        Auth::logout();

        return redirect('login');
    }
}
