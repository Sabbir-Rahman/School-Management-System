<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\classTable;

class adminClass extends Controller
{
    //
    function index(){

        $data = classTable::all();
        return view('admin\adminClass',['class'=>$data]);
    }
}
