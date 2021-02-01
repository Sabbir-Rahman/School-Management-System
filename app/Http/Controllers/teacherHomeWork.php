<?php

namespace App\Http\Controllers;

use App\Models\sectionHw;
use Illuminate\Http\Request;

class teacherHomeWork extends Controller
{
    private $allName;
    function index($sectionCourseTeacherId){

        //receive sectionTeacherCourse id


        return view('teacher/details/teacherHomeWorkDetails',['idSectionCourseTeacher'=>$sectionCourseTeacherId]);
    }

    function addHomeWork(Request $request){


        $homeWork = new sectionHw();
        $files = $request->file('files');

        foreach ($files as $file){
            //dd($file->getClientOriginalName());

            //adding time with file for stop duplicating same name
            $name = time().$file->getClientOriginalName();
            $file->move('teacherHwFile',$name);
            $this->allName = $this->allName.'-'.$name;

        }

        //start date is here it will help in predefined hw

        $homeWork->courseSectionTeacherId = $request->courseTeacherSectionTableId;
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
