<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminStudentInfo extends Controller
{
    //
    function index(){
        return view('admin/adminStudentInfo');
    }
}
