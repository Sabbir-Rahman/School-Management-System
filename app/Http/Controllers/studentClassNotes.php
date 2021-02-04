<?php

namespace App\Http\Controllers;

use App\Models\classNotes;
use App\Models\courseSectionTeacher;
use App\Models\sectionTable;
use App\Models\StudentInfo;
use Illuminate\Http\Request;

class studentClassNotes extends Controller
{
    //
    function index(){


        $data = StudentInfo::where('id',session('userId'))->first();

        $dataCourse =  courseSectionTeacher::where('sectionId',$data->student_section)->get();
        $classNote = classNotes::where('sectionId',$data->student_section)->get();







        return view('student/studentClassNotes',['courses'=>$dataCourse,'student'=>$data,'classNotes'=>$classNote]);
    }
}
