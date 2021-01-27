<?php

namespace App\Http\Controllers;

use App\Models\classTable;
use Illuminate\Http\Request;
use App\Models\mediumTable;
use App\Models\group;
use App\Models\mediumClassGroupBranch;

class mediumClassGroupBranchController extends Controller
{

    function index(){


        $data1 = mediumTable::all();
        $data2 = group::all();
        $data3 = mediumClassGroupBranch::all();
        $data4 = classTable::all();

        return view('admin/adminClassMediumGroupBranch',['mediums'=>$data1,'groups'=>$data2,'mediumGroupsClasses'=>$data3,'classes'=>$data4]);
    }

    function addData(Request $request){



        $medium = mediumTable::where('name',$request->input('select_option_medium'))->first();
        $group = group::where('name',$request->input('select_option_group'))->first();
        $class = classTable::where('class',$request->input('select_option_class'))->first();

        if($group['id']<10 and $medium['id']<10)
            $mediumGroupId = strval($medium['id']<10).strval($group['id']);
        else
            return 'Medium or Group overlimit';

        if(($request->input('branchNo'))<10)
            $branchId = '0'.strval($request->input('branchNo'));
        else
            $branchId = strval($request->input('branchNo'));

        if(($class['id'])<10)
            $classId = '0'.strval($class['id']);
        else
            $classId = strval($class['id']);


        $uniqueId = $branchId.$classId.$mediumGroupId;


        $mediumGroupsBranch = new mediumClassGroupBranch();

        $mediumGroupsBranch->id = $uniqueId;
        $mediumGroupsBranch->branch = $request->input('branchNo') ;
        $mediumGroupsBranch->className = $request->input('select_option_class') ;
        $mediumGroupsBranch->mediumName = $request->input('select_option_medium') ;
        $mediumGroupsBranch->groupName = $request->input('select_option_group') ;

        $query = $mediumGroupsBranch->save();

        if($query)
            return redirect('/admin/mediumGroupBranchView')->with('success','Data Saved');
        else
            return "Data not insert";


        return $request->input();
    }
}
