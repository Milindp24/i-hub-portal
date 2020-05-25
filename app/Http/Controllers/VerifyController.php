<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class VerifyController extends Controller
{
    /* Verify the user with a given token */
    public function verify(Request $request){
        // User::where('token',$token)->firstOrFail()
        $ip_address = $request->ip();
        $token = $request->token;
        User::where('token',$token)
                    ->update(['token'=>null,'verified_ip'=>$ip_address]);
                     // Verify the User

        session(['token' => '']);

        return redirect()->route('student.index')->with('verified','Account Verified!');
    }
}
