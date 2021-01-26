<?php

namespace App\Http\Controllers;

use App\Models\mediumClassGroupBranch;
use App\Models\sectionTable;
use Illuminate\Http\Request;
use App\Models\classTable;
use App\Models\buildings;
use App\Models\room;
use App\Models\mediumTable;
use App\Models\group;


class adminSection extends Controller
{
    function index()
    {
        $data = sectionTable::all();
        return view('admin/adminSection', ['sections' => $data]);
    }

    function addDataView(Request $request)
    {

        $data = $request->input('branchNo');
        $cls = classTable::all();
        $building = buildings::where('branch', $request->input('branchNo'))->orderBy('created_at', 'DESC')->get();
        $medium = mediumTable::all();
        $group = group::all();
        return view('admin/adminAddSection', ['branch' => $data, 'class' => $cls, 'buildings' => $building, 'mediums' => $medium, 'groups' => $group]);
    }


    function addData(Request $request)
    {

             //Branch(1)+Class (3)+Medium(3)+Group(3)+SectionNo(4)
        $uniqueId = '';

        $idMediumGroupBranch = '';
        $objectMediumGroupBranch = '';


        $cls = classTable::where('class', $request->input('search_option_class'))->first();
        $building = buildings::where('branch', $request->input('branchNo'))->where('buildingName', $request->input('search_option_building'))->first();
        $room = room::where('buildingId', $building['id'])->where('roomNo', $request->input('roomNo'))->first();
        $medium = mediumTable::where('name', $request->input('search_option_medium'))->first();
        $group = group::where('name', $request->input('search_option_group'))->first();

        $objectMediumGroupBranch = mediumClassGroupBranch::where('mediumName',$request->input('search_option_medium'))->where('groupName', $request->input('search_option_group'))->where('branch', $request->input('branchNo'))->where('className', $request->input('search_option_class'))->first();


        $sectionCount = count(sectionTable::all());



        if ($cls['id']< 10) {
            $idClass = '0'.strval($cls['id']);
        }
        else
            $idClass = strval($cls['id']);

        if ($sectionCount< 10) {
            $idSection = '000'.strval($sectionCount+1);
        }
        else if (($sectionCount > 9) and ($sectionCount < 100)) {
            $idSection = '00'.strval($sectionCount+1);
        }
        else if (($sectionCount > 99) and ($sectionCount < 1000)) {
            $idSection = '0'.strval($sectionCount+1);
        }
        else
            $idSection = strval($sectionCount+1);

        $uniqueId = $objectMediumGroupBranch['id'].$idSection;



        if(strlen($uniqueId)==9)
           $uniqueId = '0'.$uniqueId;
        elseif (strlen($uniqueId)>10)
            return "Data overlimit";

        $section = new sectionTable();
        $section->id = $uniqueId;
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

        if ($query)
            return redirect('/admin/section')->with('success', 'Data Saved');
        else
            return "Data not insert";
    }
}
