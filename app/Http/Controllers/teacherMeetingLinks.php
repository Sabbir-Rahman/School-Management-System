<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class teacherMeetingLinks extends Controller
{
    function index($sectionCourseTeacherId){

        //receive sectionTeacherCourse id


        return view('teacher/details/teacherMeetingLinksDetails',['idSectionCourseTeacher'=>$sectionCourseTeacherId]);
    }


}
