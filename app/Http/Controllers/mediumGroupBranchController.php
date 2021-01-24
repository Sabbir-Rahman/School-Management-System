<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\mediumTable;
use App\Models\group;
use App\Models\mediumGroupBranch;

class mediumGroupBranchController extends Controller
{

    function index(){


        $data1 = mediumTable::all();
        $data2 = group::all();
        $data3 = mediumGroupBranch::all();
        return view('admin/adminMediumGroupBranch',['mediums'=>$data1,'groups'=>$data2,'mediumGroups'=>$data3]);
    }

    function addData(Request $request){

        $uniqueId = '';
        $branchId = '';
        $mediumGroupId = '';


        $medium = mediumTable::where('name',$request->input('select_option_medium'))->first();
        $group = group::where('name',$request->input('select_option_group'))->first();

        if($group['id']<10 and $medium['id']<10)
            $mediumGroupId = strval($medium['id']<10).strval($group['id']);
        else
            return 'Medium or Group overlimit';

        if(($request->input('branchNo'))<10)
            $branchId = '0'.strval($request->input('branchNo'));
        else
            $branchId = strval($request->input('branchNo'));

        $uniqueId = $branchId.$mediumGroupId;


        $mediumGroupsBranch = new mediumGroupBranch();

        $mediumGroupsBranch->id = $uniqueId;
        $mediumGroupsBranch->branch = $request->input('branchNo') ;
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
