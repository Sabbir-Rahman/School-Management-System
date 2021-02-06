<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class view_studentGeneral extends Controller
{
    public function test(){

        $student = \App\Models\view_studentGeneral::select("*")->get();

        dd($student);

    }
}
