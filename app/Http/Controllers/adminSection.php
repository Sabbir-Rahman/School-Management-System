<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\classTable;
use App\Models\buildings;
use App\Models\room;
use App\Models\mediumTable;
use App\Models\group;

class adminSection extends Controller
{
    function index(){
        return view('admin/adminSection');
    }

    function addDataView(Request $request){

        $data = $request->input('branchNo');
        $cls = classTable::where('branch',$request->input('branchNo'))->orderBy('created_at','DESC')->get();
        $building = buildings::where('branch',$request->input('branchNo'))->orderBy('created_at','DESC')->get();
        $medium = mediumTable::where('branch',$request->input('branchNo'))->orderBy('created_at','DESC')->get();
        $group = group::where('branch',$request->input('branchNo'))->orderBy('created_at','DESC')->get();
        return view('admin/adminAddSection',['branch'=>$data,'class'=>$cls,'buildings'=>$building,'mediums'=>$medium,'groups'=>$group]);
    }
}
