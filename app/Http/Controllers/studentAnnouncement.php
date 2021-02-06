<?php

namespace App\Http\Controllers;

use App\Models\announcement;
use App\Models\ClassNotes;
use App\Models\courseSectionTeacher;
use App\Models\sectionTable;
use App\Models\StudentInfo;
use Illuminate\Http\Request;

class studentAnnouncement extends Controller
{
    //
    function index(){


        $data = StudentInfo::where('id',session('userId'))->first();

        $dataCourse =  courseSectionTeacher::where('sectionId',$data->student_section)->get();
        $announcement = announcement::where('sectionId',$data->student_section)->get();







        return view('student/studentAnnouncement',['courses'=>$dataCourse,'student'=>$data,'announcements'=>$announcement]);
    }
}
