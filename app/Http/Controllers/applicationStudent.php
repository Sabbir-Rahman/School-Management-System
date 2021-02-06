<?php

namespace App\Http\Controllers;

use App\Models\courseSectionTeacher;
use App\Models\studentApplication;
use App\Models\StudentInfo;
use App\Models\teacherMeetLink;
use Illuminate\Http\Request;

class applicationStudent extends Controller
{
    //
    function index(){

        $data = studentApplication::all();
        $data2 = StudentInfo::where('id',session('userId'))->first();




        return view('student/studentApplication',['applications'=>$data,'student'=>$data2]);
    }

    function goEnterApplication(){

        return view('student/addStudentApplication');
    }

    function addApplication(Request $request){

        $application = new studentApplication();

        $application->studentId = $request->studentId;
        $application->title = $request->applicationTitle;
        $application->details = $request->applicationDetail;
        $application->want = $request->applicationWant;

        $query = $application->save();

        if($query)
            return redirect('/student/studentApplicationDashboard')->with('success','Data Saved');
        else
            return "Data not insert";


    }

    function goAdminStudentApplication(){

        $data = studentApplication::all();

        return view('admin/adminStudentApplication',['applications'=>$data]);
    }
}
