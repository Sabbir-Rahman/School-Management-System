<?php

namespace App\Http\Controllers;

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
        $section = sectionTable::find($data->student_section);





        return view('student/studentClassNotes',['courses'=>$dataCourse,'student'=>$data,'section'=>$section]);
    }
}
