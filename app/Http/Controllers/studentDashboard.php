<?php

namespace App\Http\Controllers;

use App\Models\courseSectionTeacher;
use App\Models\sectionHw;
use App\Models\sectionTable;
use Illuminate\Http\Request;
use App\Models\StudentInfo;

class studentDashboard extends Controller
{
    function index(){

        //take the student section
        $data = StudentInfo::where('id',session('userId'))->first();

        $dataCourse =  courseSectionTeacher::where('sectionId',$data->student_section)->get();
        $section = sectionTable::find($data->student_section);





        return view('student/studentDashboard',['courses'=>$dataCourse,'student'=>$data,'section'=>$section]);
    }
}
