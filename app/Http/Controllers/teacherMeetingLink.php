<?php

namespace App\Http\Controllers;

use App\Models\announcement;
use App\Models\courseSectionTeacher;
use App\Models\sectionHw;
use Illuminate\Http\Request;
use App\Models\teacherMeetLink;

class teacherMeetingLink extends Controller
{
    //
    function index(){

        return view('teacher/teacherMeetingLink');
    }

    function goDetailHomework($sectionCourseTeacherId){

        //receive sectionTeacherCourse id
        $meetingLinks = teacherMeetLink::where('courseSectionTeacherId',$sectionCourseTeacherId)->get();


        return view('teacher/details/teacherMeetingLinksDetails',['idSectionCourseTeacher'=>$sectionCourseTeacherId,'meetingLinks'=>$meetingLinks]);
    }

    function addMeetingLinks(Request $request){


        $meeting = new teacherMeetLink();

        $courseSectionTeacherInfo = courseSectionTeacher::find($request->courseTeacherSectionTableId);

        $course = $courseSectionTeacherInfo->courseName;
        $paper = $courseSectionTeacherInfo->coursePaper;
        $teacherName = $courseSectionTeacherInfo->teacherName;


        //start date is here it will help in predefined hw
        $meeting->courseSectionTeacherId = $request->courseTeacherSectionTableId;
        $meeting->sectionId = $courseSectionTeacherInfo->sectionId;
        $meeting->course = $course;
        $meeting->paper = $paper;
        $meeting->teacherName = $teacherName;
        $meeting->meetingTitle = $request->meetingTitle;
        $meeting->meetingDetails = $request->meetingDetails;
        $meeting->meetingLink = $request->meetingLink;
        $meeting->meetingDate = $request->meetingDate;
        $meeting->meetingTime = $request->meetingTime;
        $meeting->comment = $request->meetingComment;


        $query = $meeting->save();

        if($query)
            return redirect('teacher/teacherMeetingLinks')->with('success','Data Saved');
        else
            return "Data not insert";
    }
}
