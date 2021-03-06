<?php

namespace App\Http\Controllers;

use App\Models\courseSectionTeacher;
use App\Models\sectionHw;
use Illuminate\Http\Request;

class teacherHomeWork extends Controller
{

    //this is basically homework details page
    private $allName;
    function goDetailHomework($sectionCourseTeacherId){

        //receive sectionTeacherCourse id
        $homework = sectionHw::where('courseSectionTeacherId',$sectionCourseTeacherId)->get();


        return view('teacher/details/teacherHomeWorkDetails',['idSectionCourseTeacher'=>$sectionCourseTeacherId,'homeworks'=>$homework]);
    }

    function addHomeWork(Request $request){


        $homeWork = new sectionHw();
        $files = $request->file('files');
        $courseSectionTeacherInfo = courseSectionTeacher::find($request->courseTeacherSectionTableId);

        $course = $courseSectionTeacherInfo->courseName;
        $paper = $courseSectionTeacherInfo->coursePaper;
        $teacherName = $courseSectionTeacherInfo->teacherName;

        foreach ($files as $file){
            //dd($file->getClientOriginalName());

            //adding time with file for stop duplicating same name
            $name = time().$file->getClientOriginalName();
            $file->move('teacherHwFile',$name);
            $this->allName = $this->allName.'-'.$name;

        }

        //start date is here it will help in predefined hw

        $homeWork->courseSectionTeacherId = $request->courseTeacherSectionTableId;
        $homeWork->sectionId = $courseSectionTeacherInfo->sectionId;
        $homeWork->course = $course;
        $homeWork->paper = $paper;
        $homeWork->teacherName = $teacherName;
        $homeWork->homeWorkTitle = $request->homeWorkTitle;
        $homeWork->homeWorkDetails = $request->homeWorkDetails;
        $homeWork->startDate = $request->homeWorkStartDate;
        $homeWork->lastDateSubmission = $request->homeWorkEndDate;
        $homeWork->file = $this->allName;
        $homeWork->comment = $request->homeWorkComment;


        $query = $homeWork->save();

        if($query)
            return redirect('teacher/teacherHomeWork')->with('success','Data Saved');
        else
            return "Data not insert";
    }
}
