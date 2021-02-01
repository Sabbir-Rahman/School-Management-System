<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class teacherClassNotes extends Controller
{
    function index($sectionCourseTeacherId){

        //receive sectionTeacherCourse id


        return view('teacher/details/teacherClassNotesDetails',['idSectionCourseTeacher'=>$sectionCourseTeacherId]);
    }
}
