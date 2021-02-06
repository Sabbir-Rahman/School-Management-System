<?php

namespace App\Http\Controllers;

use App\Models\institutionPreviousAcademicRecord;
use Illuminate\Http\Request;


class academicRecords extends Controller
{
    //

    function index(){

        $data = institutionPreviousAcademicRecord::all();
        return view('admin/adminPreviousAcademicRecord',['records'=>$data]);
    }

    function addData(Request $request){



        $academics = new institutionPreviousAcademicRecord();
        $academics->branchNo = $request->branchNo;
        $academics->eventName = $request->eventName;
        $academics->eventDetails = $request->eventDetails;
        $academics->occurDate = $request->eventDate;

        $query = $academics->save();

        if($query){

            return redirect('admin/previousAcademicInfo')->with('success','Data Saved');
            //return redirect()->route('signUpFather');
        }
        else
            return  "Something went wrong";
    }
}
