<?php

namespace App\Http\Controllers;

use App\Models\courseSectionTeacher;
use Illuminate\Http\Request;
use App\Models\StudentInfo;

class studentDashboard extends Controller
{
    function index(){

        $data = StudentInfo::where('id',session('userId'))->first();

        $courseSectionTeacher =  courseSectionTeacher::where('sectionId',$data->student_section)->get();



        return view('student/studentDashboard');
    }
}
