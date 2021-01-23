<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminSection extends Controller
{
    function index(){
        return view('admin/adminSection');
    }

    function addDataView(Request $request){

        $data = $request->input('branchNo');
        return view('admin/adminAddSection',['branch'=>$data]);
    }
}
