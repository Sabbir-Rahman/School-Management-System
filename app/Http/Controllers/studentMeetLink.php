<?php

namespace App\Http\Controllers;

use App\Models\ClassNotes;
use App\Models\courseSectionTeacher;
use App\Models\StudentInfo;
use App\Models\teacherMeetLink;
use Illuminate\Http\Request;

class studentMeetLink extends Controller
{
    //

    function index(){
        $data = StudentInfo::where('id',session('userId'))->first();

        $dataCourse =  courseSectionTeacher::where('sectionId',$data->student_section)->get();
        $meeting = teacherMeetLink::where('sectionId',$data->student_section)->get();







        return view('student/studentMeetingLinksDashboard',['courses'=>$dataCourse,'student'=>$data,'meetings'=>$meeting]);
    }
}
