<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\room;
use App\Models\buildings;
class adminRoomInfo extends Controller
{
    private $branchNo;
    private $buildingId;

    function index(){
        return view('admin/adminRoomInfo');
    }

    function addDataView(Request $request){

        $this->branchNo = $request->input('branchNo');

        $data = buildings::where('branch',$this->branchNo)->get();

        return view('admin/adminAddRooms',['buildings'=>$data]);
    }

    function addData(Request $request){

        //$this->buildingId = buildings::where('branch',$this->branchNo)->where('name',)
        $room = new room();
        $room->roomNo = $request->input('roomNo');
        $room->studentCapacity = $request->input('studentCapacity');
        $room->buildingId =
        $room->buildingName = $request->input('search_option');

        $query = $room->save();


        if($query)
            return redirect('/admin/class')->with('success','Data Saved');
        else
            return "Data not insert";
    }
}
