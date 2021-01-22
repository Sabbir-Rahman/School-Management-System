<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\room;
use App\Models\buildings;
class adminRoomInfo extends Controller
{
    private $branchNo;

    function index(){
        return view('admin/adminRoomInfo');
    }

    function addDataView(Request $request){

        $this->branchNo = $request->input('branchNo');

        $data = buildings::where('branch',$this->branchNo)->get();

        return view('admin/adminAddRooms');
    }

    function addData(Request $request){

        $room = new room();
        $room->roomNo = $request->input('roomNo');
        $room->roomNo = $request->input('roomNo');

        return $request->input();
    }
}
