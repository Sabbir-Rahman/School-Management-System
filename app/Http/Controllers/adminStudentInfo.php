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

        $data = StudentInfo::all();

        $query = StudentInfo::where('id', $request->studentId)
            ->update(['name' => $request->studentName,'student_address'=>$request->studentAddress]);

//        $student = new StudentInfo();
//        $student->id = $data->id;
//        $student->name = $request->studentName;
//        $student->student_birthdate = $data->student_birthdate;
//        $student->student_blood_group = $data->student_blood_group;
//        $student->student_address = $request->studentAddress;
//        $student->student_gender = $data->student_gender;
//        $student->student_school_branch = $data->student_school_branch;
//        $student->student_class = $data->student_class;
//        $student->student_shift = $data->student_shift;
//        $student->student_section = $data->student_section;
//        $student->student_medium = $data->student_medium;
//        $student->student_group = $data->student_group;
//        $student->student_religion = $data->student_religion;
//        $student->student_admission_year = $data->student_admission_year;
//        $student->student_hobby = $data->student_hobby;
//        $student->password = $data->password;
//        $student->comment = $data->comment;
//        $student->created_at = $data->created_at;
//        $student->updated_at = time();

//        $query = $student->save();

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
