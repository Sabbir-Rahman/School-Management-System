<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\group;

class adminGroup extends Controller
{
    //
    function index(){

        //test
        $data = group::all();
        return view('admin/adminGroup',['groups'=>$data]);
    }

    function addData(Request $request){

        $grp = new group();
        $grp->name = $request->input('name');
        $grp->branch = $request->input('branchNo');

        $query = $grp->save();



        if($query)
            return redirect('/admin/Group')->with('success','Data Saved');
        else
            return "Data not insert";
    }
}
