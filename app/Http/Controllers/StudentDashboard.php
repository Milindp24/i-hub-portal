<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class StudentDashboard extends Controller
{
    public function dashboard(){
        return view('student.index');
    }
}
