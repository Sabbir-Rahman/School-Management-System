<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class view_studentGeneral extends Controller
{
    public function test(){

        $student = \App\Models\view_studentGeneral::select("*")->get();

        dd($student);

    }

    public function goToTeacherStudentGeneralView(){
        $student = \App\Models\view_studentGeneral::select("*")->get();


        return view('teacher/details/teacherStudentGeneralViewDetails',['students'=>$student]);

    }


}
