<?php

namespace App\Http\Controllers;

use App\Models\courseSectionTeacher;
use App\Models\sectionHw;
use App\Models\sectionTable;
use App\Models\StudentInfo;
use Illuminate\Http\Request;

class studentHomeWorkDashboard extends Controller
{
    //
    function index(){

        //take the student section
        $data = StudentInfo::where('id',session('userId'))->first();

        $dataCourse =  courseSectionTeacher::where('sectionId',$data->student_section)->get();
        $section = sectionTable::find($data->student_section);
        $sectionHw = sectionHw::where('sectionId',$data->student_section);

        return view('student/studentHomeWorkDashboard',['courses'=>$dataCourse,'student'=>$data,'section'=>$section,'sectionHws'=>$sectionHw]);
    }
}
