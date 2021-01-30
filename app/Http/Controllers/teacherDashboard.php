<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\teacher_info;

class teacherDashboard extends Controller
{
    function index(){

        $data = teacher_info::find(session('userId'));

        return view('teacher/teacherDashboard',['teacher'=>$data]);
    }
}
