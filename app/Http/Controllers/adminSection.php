<?php

namespace App\Http\Controllers;

use App\Models\sectionTable;
use Illuminate\Http\Request;
use App\Models\classTable;
use App\Models\buildings;
use App\Models\room;
use App\Models\mediumTable;
use App\Models\group;


class adminSection extends Controller
{
    function index(){
        $data = sectionTable::all();
        return view('admin/adminSection',['sections'=>$data]);
    }

    function addDataView(Request $request){

        $data = $request->input('branchNo');
        $cls = classTable::where('branch',$request->input('branchNo'))->orderBy('created_at','DESC')->get();
        $building = buildings::where('branch',$request->input('branchNo'))->orderBy('created_at','DESC')->get();
        $medium = mediumTable::where('branch',$request->input('branchNo'))->orderBy('created_at','DESC')->get();
        $group = group::where('branch',$request->input('branchNo'))->orderBy('created_at','DESC')->get();
        return view('admin/adminAddSection',['branch'=>$data,'class'=>$cls,'buildings'=>$building,'mediums'=>$medium,'groups'=>$group]);
    }


    function addData(Request $request){

        $cls = classTable::where('branch',$request->input('branchNo'))->where('class',$request->input('search_option_class'))->first();
        $building = buildings::where('branch',$request->input('branchNo'))->where('buildingName',$request->input('search_option_building'))->first();
        $room = room::where('buildingId',$building['id'])->where('roomNo',$request->input('roomNo'))->first();
        $medium = mediumTable::where('branch',$request->input('branchNo'))->where('name',$request->input('search_option_medium'))->first();
        $group = group::where('branch',$request->input('branchNo'))->where('name',$request->input('search_option_group'))->first();

        $section = new sectionTable();
        $section->branch = $request->input('branchNo');
        $section->class = $request->input('search_option_class');
        $section->classId = $cls['id'];
        $section->sectionName = $request->input('sectionName');
        $section->roomNo = $request->input('roomNo');
        $section->roomId = $room['id'];
        $section->buildingName = $request->input('search_option_building');
        $section->buildingId = $building['id'];
        $section->shift = $request->input('search_option_shift');
        $section->medium = $request->input('search_option_medium');
        $section->mediumId = $medium['id'];
        $section->groupName = $request->input('search_option_group');
        $section->groupId = $group['id'];


        $query = $section->save();

        if($query)
            return redirect('/admin/section')->with('success','Data Saved');
        else
            return "Data not insert";
    }
}
