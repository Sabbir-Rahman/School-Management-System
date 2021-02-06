<?php

namespace App\Http\Controllers;

use Facade\FlareClient\Time\Time;
use Illuminate\Http\Request;
use App\Models\StudentInfo;

class adminStudentInfo extends Controller
{
    //
    function index(){

        $data = StudentInfo::all();
        return view('admin/adminStudentInfo',['students'=>$data]);
    }

    function searchStudent(Request $request){
        $data = StudentInfo::where($request->input('search_option'), $request->input('search_data'))->get();
        $cnt = count($data);
        return view('search/adminSearchStudentInfo',['students'=>$data,'count'=>$cnt]);
    }

    function goEditStudent($id){

        //dd($id);

        $student = StudentInfo::find($id);
        //dd($student['id']);



        return view('edit/adminEditStudentInfo',['student'=>$student]);
    }

    function editStudent(Request $request){

        $query = StudentInfo::where('id', $request->studentId)
            ->update(['name' => $request->studentName,'student_address'=>$request->studentAddress]);



        if($query){

            return redirect('/admin/StudentInfo')->with('success','Data Saved');
            //return redirect()->route('signUpFather');
        }
        else
            return  "Something went wrong";

    }

    function delete(Request $request){


        $data = StudentInfo::find($request->delete_input_id);

        $query = $data->delete();

        if ($query) {
            return redirect('/admin/StudentInfo')->with('success','Data Saved');

        } else
            return "Fail";

    }
}
