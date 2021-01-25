<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminSubject extends Controller
{
    function index(){

        return view('admin/adminSubjects');
    }
}
