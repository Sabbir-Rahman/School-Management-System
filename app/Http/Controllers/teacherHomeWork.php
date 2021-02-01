<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class teacherHomeWork extends Controller
{
    function index($sectionCourseTeacherId){

        //receive sectionTeacherCourse id


        return view('teacher/details/teacherHomeWorkDetails',['idSectionCourseTeacher'=>$sectionCourseTeacherId]);
    }
}
