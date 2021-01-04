<?php

namespace App\Http\Controllers;

use App\Models\teacher_info;
use Illuminate\Http\Request;

class teacherAuth extends Controller
{

    public $branchNo= '01';
    public $joinYear;
    //
    function addData(Request $request){
        //add to database
        $teacher = new teacher_info();
        $teacher->name = $request->teacher_name;
        $teacher->email = $request->teacher_email;
        $teacher->educational_qualification = $request->teacher_educational_qualification;
        $teacher->experiences = $request->teacher_experience;
        $teacher->speciality = $request->teacher_subject_speciality;
        $teacher->joining_year = $request->teacher_joining_year;
        $teacher->father_name = $request->teacher_father_name;
        $teacher->mother_name = $request->teacher_mother_name;
        $teacher->nid = $request->teacher_nid;
        $teacher->gender = $request->teacher_gender;
        $teacher->hobby = $request->teacher_hobby;
        $teacher->address = $request->teacher_address;
        $teacher->contact = $request->teacher_contact;
        $teacher->optional_contact = $request->teacher_contact_optional;
        $teacher->password = $request->teacher_password;
        $teacher->comment = $request->teacher_comment;

        $query = $teacher->save();


        if($query)
            return "Data added succesfully";
        else
            return "Something error try again";
    }
}
