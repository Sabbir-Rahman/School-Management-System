<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class teacherAnnouncement extends Controller
{
    function index($sectionCourseTeacherId){

        //receive sectionTeacherCourse id


        return view('teacher/details/teacherAnnouncementDetails',['idSectionCourseTeacher'=>$sectionCourseTeacherId]);
    }
}
