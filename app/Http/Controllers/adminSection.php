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
    function index()
    {
        $data = sectionTable::all();
        return view('admin/adminSection', ['sections' => $data]);
    }

    function addDataView(Request $request)
    {

        $data = $request->input('branchNo');
        $cls = classTable::where('branch', $request->input('branchNo'))->orderBy('created_at', 'DESC')->get();
        $building = buildings::where('branch', $request->input('branchNo'))->orderBy('created_at', 'DESC')->get();
        $medium = mediumTable::where('branch', $request->input('branchNo'))->orderBy('created_at', 'DESC')->get();
        $group = group::where('branch', $request->input('branchNo'))->orderBy('created_at', 'DESC')->get();
        return view('admin/adminAddSection', ['branch' => $data, 'class' => $cls, 'buildings' => $building, 'mediums' => $medium, 'groups' => $group]);
    }


    function addData(Request $request)
    {
        //Branch(1)+Class (3)+Medium(3)+Group(3)+SectionNo(4)
        $uniqueId = '';
        $idClass = '';
        $idMedium = '';
        $idGroup = '';
        $idSection = '';



        $cls = classTable::where('branch', $request->input('branchNo'))->where('class', $request->input('search_option_class'))->first();
        $building = buildings::where('branch', $request->input('branchNo'))->where('buildingName', $request->input('search_option_building'))->first();
        $room = room::where('buildingId', $building['id'])->where('roomNo', $request->input('roomNo'))->first();
        $medium = mediumTable::where('branch', $request->input('branchNo'))->where('name', $request->input('search_option_medium'))->first();
        $group = group::where('branch', $request->input('branchNo'))->where('name', $request->input('search_option_group'))->first();
        $sectionCount = count(sectionTable::all());

        if ($cls->id < 10) {
            $idClass = '00'.strval($cls->id);
        }
        else if (($cls->id> 9) and ($cls->id < 100)) {
            $idClass = '0'.strval($cls->id);
        }
        else
            $idClass = strval($cls->id);


        if ($medium['id'] < 10) {
            $idMedium = '00'.strval($medium->id);
        }
        else if (($medium['id'] > 9) and ($medium->id < 100)) {
            $idMedium = '0'.strval($medium->id);
        }
        else
            $idMedium = strval($medium['id']);

        if ($group['id']< 10) {
            $idGroup = '00'.strval($group->id);
        }
        else if (($group['id'] > 9) and ($group['id'] < 100)) {
            $idGroup = '0'.strval($group->id);
        }
        else
            $idGroup = strval($group['id']);

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

        $uniqueId = strval($request->input('branchNo')).$idClass.$idMedium.$idGroup.$idSection;

        if(strlen($uniqueId)>14)
            return "Data Insert Failed";


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
