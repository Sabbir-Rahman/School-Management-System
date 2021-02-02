<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class studentDashboard extends Controller
{
    function index(){

        return view('student/studentDashboard');
    }
}
