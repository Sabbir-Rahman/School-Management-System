<?php

namespace App\Http\Controllers;

use App\Models\course;
use App\Models\sectionTable;
use App\Models\teacher_info;
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

    function addCourse($section_id,$course_id){


        $course = course::find($course_id);
        $section = sectionTable::find($section_id);
        $courseSection = new courseSectionTeacher();
        $courseSection->branch = $section->branch;
        $courseSection->class = $section->class;
        $courseSection->medium = $section->medium;
        $courseSection->group = $section->groupName;
        $courseSection->sectionName = $section->sectionName;
        $courseSection->sectionId = $section_id;
        $courseSection->courseName = $course->subject;
        $courseSection->coursePaper = $course->paper;
        $courseSection->courseId = $course->id;
//        $courseSection->teacherName = 'Unassigned';
//        $courseSection->teacherId = 0;


        $query = $courseSection->save();

        if($query)
            return redirect('admin/sectionTeacherCourse')->with('success','Data Saved');
        else
            return "Data not insert";


    }

    function goToAddTeacherSectionChoice(){

        $data = courseSectionTeacher::all();
        return view('admin/courseSectionTeacherAddTeacherSectionChoice',['sectionTeachers'=>$data]);
    }

    function goToAddTeacherTeacherChoice($id){

        $data = courseSectionTeacher::all();
        $data1 = teacher_info::all();

        return view('admin/adminTeacherChoiceForCourse',['sectionTeachers'=>$data,'sectionCourseId'=>$id,'teachers'=>$data1]);
    }

    function addTeacherToCourse($sectionCourse_id,$teacher_id){


        $section = courseSectionTeacher::find($sectionCourse_id);
        $teacher = teacher_info::find($teacher_id);


        $section->teacherName = $teacher->name;
        $section->teacherId = $teacher->id;

        $query = $section->save();
        if($query)
            return redirect('admin/sectionTeacherCourse')->with('success','Data Saved');
        else
            return "Data not insert";



    }

}
