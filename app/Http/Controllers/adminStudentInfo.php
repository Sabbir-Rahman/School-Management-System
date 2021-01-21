<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StudentInfo;

class adminStudentInfo extends Controller
{
    //
    function index(){

        $data = StudentInfo::all();
        return view('admin/adminStudentInfo',['students'=>$data]);
    }
}
