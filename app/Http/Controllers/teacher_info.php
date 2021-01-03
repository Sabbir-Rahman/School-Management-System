<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class teacher_info extends Controller
{
    //

    function addData(Request $request){
        return $request->input();
    }
}
