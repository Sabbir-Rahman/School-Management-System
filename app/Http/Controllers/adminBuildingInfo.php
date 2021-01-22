<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\buildings;

class adminBuildingInfo extends Controller
{
    function index(){

        $data = buildings::all();
        return view('admin/adminBuildingInfo',['buildings'=>$data]);
    }

    function addData(Request $request){

        $buildings = new buildings();

        $buildings->branch = $request->input('branch');
        $buildings->name = $request->input('buildingName');
        $buildings->totalFloor = $request->input('totalFloor');
        $buildings->totalRoom = $request->input('totalRoom');
        $buildings->comment = $request->input('comment');
        $query = $buildings->save();

        if($query)
            return redirect('admin/BuildingInfo')->with('success','Data Saved');
        else
            return "Data not insert";

        return $request->input();
    }
}
