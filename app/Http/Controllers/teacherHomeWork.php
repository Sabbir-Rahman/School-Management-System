<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class teacherHomeWork extends Controller
{
    function index(){

        return view('teacher/details/teacherHomeWorkDetails');
    }
}
