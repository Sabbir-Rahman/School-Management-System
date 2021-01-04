<?php

namespace App\Http\Controllers;

use App\Models\teacher_info;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class teacherAuth extends Controller
{

    public $branchNo= '01';
    public $joinYear;
    public $occupation = '01';
    public $speciality;
    public $count;
    public $uniqueId;

    //
    function addData(Request $request){


        //join year
        $this->joinYear = $request->teacher_joining_year;

        if(strlen($this->joinYear)!=4)
            return "Please put 4 digit join year correctly";

        if($request->teacher_subject_speciality=='Bangla')
            $this->speciality = '01';
        else if($request->teacher_subject_speciality=='English')
            $this->speciality = '02';
        else if($request->teacher_subject_speciality=='Math')
            $this->speciality = '03';
        else if($request->teacher_subject_speciality=='Physics')
            $this->speciality = '04';
        else if($request->teacher_subject_speciality=='Chemistry')
            $this->speciality = '05';
        else if($request->teacher_subject_speciality=='History')
            $this->speciality = '06';
        else if($request->teacher_subject_speciality=='Accounting')
            $this->speciality = '07';
        else if($request->teacher_subject_speciality=='Management')
            $this->speciality = '08';
        else if($request->teacher_subject_speciality=='Finance')
            $this->speciality = '09';
        else if($request->teacher_subject_speciality=='Social Science')
            $this->speciality = '10';
        else if($request->teacher_subject_speciality=='Islam Religion')
            $this->speciality = '11';
        else if($request->teacher_subject_speciality=='Hindu Religion')
            $this->speciality = '12';
        else if($request->teacher_subject_speciality=='Christian Religion')
            $this->speciality = '13';
        else if($request->teacher_subject_speciality=='Buddho Religion')
            $this->speciality = '14';
        else if($request->teacher_subject_speciality=='Physical Education')
            $this->speciality = '15';
        else if($request->teacher_subject_speciality=='Music')
            $this->speciality = '16';
        else if($request->teacher_subject_speciality=='Art')
            $this->speciality = '17';
        else
            $this->speciality = '18';


        $this->count = DB::table('teacher_infos')->count() +1;

        //branch no(two digit)/occupation(two digit)/special skill-subject(two digit)/joining year(4 digit)/id(three digit)

        if($this->count<10)
            $this->uniqueId = $this->branchNo.$this->occupation.$this->speciality.$this->joinYear.'00'.strval($this->count);
        else if($this->count>9 && $this->count<100)
            $this->uniqueId = $this->branchNo.$this->occupation.$this->speciality.$this->joinYear.'0'.strval($this->count);
        else if($this->count>100 && $this->count<1000)
            $this->uniqueId = $this->branchNo.$this->occupation.$this->speciality.$this->joinYear.strval($this->count);
        else
            return "Something bad happen";


        dd($this->uniqueId);

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
