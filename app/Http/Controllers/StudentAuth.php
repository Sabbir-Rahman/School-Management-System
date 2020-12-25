<?php

namespace App\Http\Controllers;

use App\Models\StudentInfo;
use Illuminate\Http\Request;

class StudentAuth extends Controller
{
    function login()
    {
        return view('login');
    }

    function signUp()
    {
        return view('signUpStudent');
    }

    function create(Request $request){
//        //Validate Request
//        $request->validate([
//            'name'=>'required',
//            'username'=>'required',
//            'password'=>'required|min:5|max:12'
//        ]);

        //register new user
        $student = new StudentInfo();
        $student->student_name = $request->student_name;
        $student->student_birthdate = $request->student_birthdate;
        $student->student_blood_group = $request->student_blood_group;
        $student->student_address = $request->student_address;
        $student->student_gender = $request->student_gender;
        $student->student_class = $request->student_class;
        $student->student_medium = $request->student_medium;
        $student->student_group = $request->student_group;
        $student->student_religion = $request->student_religion;
        $student->student_admission_year = $request->student_admission_year;
        $student->student_hobby = $request->student_hobby;
        $query = $student->save();

        if($query){
            return "Data saved";
        }
        else
            return  "Something went wrong";

    }
}
