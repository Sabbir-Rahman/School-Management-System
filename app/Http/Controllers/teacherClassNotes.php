<?php

namespace App\Http\Controllers;

use App\Models\courseSectionTeacher;
use App\Models\sectionHw;
use App\Models\teacher_info;
use App\Models\classNotes;
use Illuminate\Http\Request;


class teacherClassNotes extends Controller
{
    public $allName;
    //
    function index(){

        $data = teacher_info::find(session('userId'));
        $dataCourseSection = courseSectionTeacher::where('teacherId',session('userId'))->get();


        return view('teacher/teacherClassNotes',['teacher'=>$data,'teacherCoursesSections'=>$dataCourseSection]);
    }

    function goDetailClassnotes($sectionCourseTeacherId){

        //receive sectionTeacherCourse id
        $classNotes = classNotes::where('courseSectionTeacherId',$sectionCourseTeacherId)->get();


        return view('teacher/details/teacherClassNotesDetails',['idSectionCourseTeacher'=>$sectionCourseTeacherId,'allClassNotes'=>$classNotes]);
    }

    function addClassNotes(Request $request){


        $classNotes = new classNotes();
        $files = $request->file('files');
        $courseSectionTeacherInfo = courseSectionTeacher::find($request->courseTeacherSectionTableId);

        $course = $courseSectionTeacherInfo->courseName;
        $paper = $courseSectionTeacherInfo->coursePaper;
        $teacherName = $courseSectionTeacherInfo->teacherName;

        foreach ($files as $file){
            //dd($file->getClientOriginalName());

            //adding time with file for stop duplicating same name
            $name = time().$file->getClientOriginalName();
            $file->move('teacherClassNotesFile',$name);
            $this->allName = $this->allName.'-'.$name;

        }

        //start date is here it will help in predefined hw

        $classNotes->courseSectionTeacherId = $request->courseTeacherSectionTableId;
        $classNotes->sectionId = $courseSectionTeacherInfo->sectionId;
        $classNotes->course = $course;
        $classNotes->paper = $paper;
        $classNotes->teacherName = $teacherName;
        $classNotes->classNotesTitle = $request->classNoteTitle;
        $classNotes->classNotesDetails = $request->classNoteDetails;
        $classNotes->classNotesDate = $request->classNoteDate;
        $classNotes->file = $this->allName;
        $classNotes->comment = $request->classNoteComment;


        $query = $classNotes->save();

        if($query)
            return redirect('teacher/teacherClassNotes')->with('success','Data Saved');
        else
            return "Data not insert";
    }
}
