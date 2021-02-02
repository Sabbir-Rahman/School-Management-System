<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class teacherAnnouncement extends Controller
{
    //
    function index(){

        return view('teacher/teacherAnnouncement');
    }
}
