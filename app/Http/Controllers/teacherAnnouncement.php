<?php

namespace App\Http\Controllers;

use App\Models\courseSectionTeacher;
use App\Models\teacher_info;
use Illuminate\Http\Request;
use App\Models\Announcement;

class teacherAnnouncement extends Controller
{
    public $allName;
    //
    function index(){

        $data = teacher_info::find(session('userId'));
        $dataCourseSection = courseSectionTeacher::where('teacherId',session('userId'))->get();


        return view('teacher/teacherAnnouncement',['teacher'=>$data,'teacherCoursesSections'=>$dataCourseSection]);
    }

    function goDetailAnnouncement($sectionCourseTeacherId){

        //receive sectionTeacherCourse id
        $announcement = announcement::where('courseSectionTeacherId',$sectionCourseTeacherId)->get();


        return view('teacher/details/teacherAnnouncementDetails',['idSectionCourseTeacher'=>$sectionCourseTeacherId,'allAnnouncements'=>$announcement]);
    }

    function addAnnouncements(Request $request){


        $announcement = new Announcement();
        $files = $request->file('files');
        $courseSectionTeacherInfo = courseSectionTeacher::find($request->courseTeacherSectionTableId);

        $course = $courseSectionTeacherInfo->courseName;
        $paper = $courseSectionTeacherInfo->coursePaper;
        $teacherName = $courseSectionTeacherInfo->teacherName;

        foreach ($files as $file){
            //dd($file->getClientOriginalName());

            //adding time with file for stop duplicating same name
            $name = time().$file->getClientOriginalName();
            $file->move('teacherAnnouncementFile',$name);
            $this->allName = $this->allName.'-'.$name;

        }

        //start date is here it will help in predefined hw

        $announcement->courseSectionTeacherId = $request->courseTeacherSectionTableId;
        $announcement->sectionId = $courseSectionTeacherInfo->sectionId;
        $announcement->course = $course;
        $announcement->paper = $paper;
        $announcement->teacherName = $teacherName;
        $announcement->announcementTitle = $request->announcementTitle;
        $announcement->announcementDetails = $request->announcementDetails;
        $announcement->announcementdate = $request->announcementDate;
        $announcement->file = $this->allName;
        $announcement->comment = $request->announcementComment;


        $query = $announcement->save();

        if($query)
            return redirect('teacher/teacherClassNotes')->with('success','Data Saved');
        else
            return "Data not insert";
    }
}
