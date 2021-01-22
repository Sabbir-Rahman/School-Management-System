<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\teacher_info;

class adminTeacherInfo extends Controller
{
    //
    function index()
    {
        $data = teacher_info::all();
        return view('admin/adminTeacherInfo',['teachers'=>$data]);
    }
}
