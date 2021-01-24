<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminCourse extends Controller
{
    //
    function index(){
        return view('admin/adminCourse');
    }
}
