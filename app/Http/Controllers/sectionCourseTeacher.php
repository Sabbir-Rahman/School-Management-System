<?php

namespace App\Http\Controllers;

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

    function goToAddCourse(){

        $data = sectionTable::all();
        return view('admin/courseSectionTeacherAddSection',['sections'=>$data]);
    }

    function goCourseAdd($id){
        $section = sectionTable::find($id);
        return view('admin/courseSectionTeacherAddCourse',['sections'=>$section]);
    }

}
