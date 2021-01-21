<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminBuildingInfo extends Controller
{
    function index(){
        return view('admin/adminBuildingInfo');
    }
}
