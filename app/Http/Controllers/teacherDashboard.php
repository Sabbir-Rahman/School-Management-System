<?php

namespace App\Http\Controllers;

use App\Models\courseSectionTeacher;
use Illuminate\Http\Request;
use App\Models\teacher_info;

class teacherDashboard extends Controller
{
    function index(){

        $data = teacher_info::find(session('userId'));
        $dataCourseSection = courseSectionTeacher::where('teacherId',session('userId'))->get();



        return view('teacher/teacherDashboard',['teacher'=>$data,'teacherCoursesSections'=>$dataCourseSection]);
    }

    function goToHomeWorkPage(){

        $data = teacher_info::find(session('userId'));
        $dataCourseSection = courseSectionTeacher::where('teacherId',session('userId'))->get();


        return view('teacher/teacherHomeWork',['teacher'=>$data,'teacherCoursesSections'=>$dataCourseSection]);
    }
    function goToAnnouncementPage(){

        $data = teacher_info::find(session('userId'));
        $dataCourseSection = courseSectionTeacher::where('teacherId',session('userId'))->get();


        return view('teacher/teacherAnnouncement',['teacher'=>$data,'teacherCoursesSections'=>$dataCourseSection]);
    }

    function goToStudentSection(){
        return view('teacher/teacherStudentSection');
    }
    function goToMeetingLinksPage(){

        $data = teacher_info::find(session('userId'));
        $dataCourseSection = courseSectionTeacher::where('teacherId',session('userId'))->get();


        return view('teacher/teacherMeetingLink',['teacher'=>$data,'teacherCoursesSections'=>$dataCourseSection]);
    }
}
