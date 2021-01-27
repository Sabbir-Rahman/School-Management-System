<?php

namespace App\Http\Controllers;

use App\Models\course;
use App\Models\sectionTable;
use Illuminate\Http\Request;
use App\Models\courseSectionTeacher;

class sectionCourseTeacher extends Controller
{
    //
    function index()
    {
        $data = courseSectionTeacher::all();
        return view('admin/adminSectionCourseTeacher',['sectionTeachers'=>$data]);
    }

    function goToAddSection(){

        $data = sectionTable::all();
        return view('admin/courseSectionTeacherAddSection',['sections'=>$data]);
    }

    function goCourseAdd($id){
        if($id<1000000000)
            $id = strval('0'.$id);

        $course = course::all();
        return view('admin/courseSectionTeacherAddCourse',['sectionId'=>$id,'courses'=>$course]);
    }

    function addCourse($id){

        dd($id);
        return "success";
    }

}
