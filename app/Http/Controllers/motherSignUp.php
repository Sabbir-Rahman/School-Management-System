<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class motherSignUp extends Controller
{
    function create(Request $request){

        return $request->input();
    }
}
