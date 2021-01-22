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

        $data = room::all();
        return view('admin/adminRoomInfo',['rooms'=>$data]);
    }

    function addDataView(Request $request){

        $this->branchNo = $request->input('branchNo');

        $data = buildings::where('branch',$this->branchNo)->get();

        return view('admin/adminAddRooms',['buildings'=>$data,'branchNo'=>$this->branchNo]);
    }

    function addData(Request $request){

        $building = buildings::where('branch',$request->input('branchNo'))->where('name',$request->input('search_option'))->first();
        $room = new room();
        $room->roomNo = $request->input('roomNo');
        $room->studentCapacity = $request->input('studentCapacity');
        $room->buildingId = $building->id;
        $room->buildingName = $request->input('search_option');

        $query = $room->save();


        if($query)
            return redirect('/admin/RoomInfo')->with('success','Data Saved');
        else
            return "Data not insert";
    }
}
