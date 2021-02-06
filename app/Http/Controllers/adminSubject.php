<?php

namespace App\Http\Controllers;

use App\Models\subject;
use Illuminate\Http\Request;

class adminSubject extends Controller
{
    function index(){

        $data = subject::all();
        return view('admin/adminSubjects',['subjects'=>$data]);
    }


    function addData(Request $request){

        $subject = new subject();
        $subject->subjectName = $request->input('subjectName');
        $query = $subject->save();

        if($query)
            return redirect('/admin/addSubjects')->with('success','Data Saved');
        else
            return "Data not insert";


    }
}
