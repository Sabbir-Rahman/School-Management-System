<?php

namespace App\Http\Controllers;

use App\Models\classTable;
use App\Models\course;
use App\Models\group;
use App\Models\mediumTable;
use App\Models\subject;
use Illuminate\Http\Request;

class adminCourse extends Controller
{
    //
    function index(){

        $data1 = classTable::all();
        $data2 = mediumTable::all();
        $data3 = group::all();
        $data4 = subject::all();
        $data5 = course::all();

        return view('admin/adminCourse',['classes'=>$data1,'mediums'=>$data2,'groups'=>$data3,'subjects'=>$data4,'courses'=>$data5]);
    }

    function addData(Request $request){



        $course = new course();

        $course->class = $request->input('search_option_class');
        $course->subject = $request->input('search_option_subject');
        $course->paper = $request->input('search_option_paper');
        $course->medium = $request->input('search_option_medium');
        $course->group = $request->input('search_option_group');

        $query = $course->save();


        if($query)
            return redirect('/admin/course')->with('success','Data Saved');
        else
            return "Data not insert";

    }
}
