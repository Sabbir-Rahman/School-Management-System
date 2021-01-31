<?php

namespace App\Http\Controllers;

use App\Models\buildings;
use App\Models\classTable;
use App\Models\group;
use App\Models\mediumClassGroupBranch;
use App\Models\mediumTable;
use App\Models\room;
use App\Models\sectionTable;
use App\Models\StudentInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class StudentAuth extends Controller
{
    public   $estd=2020;
    private  $occupation;
    private  $branch;
    private  $batch=0;
    private  $shift;
    private  $section;
    private  $rownum;
    private  $uniqueId = "";
    //public $batchNo = array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);


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


        //generating unique id
        $this->occupation = 1;
        $this->branch = 1;
        //batch no calculation
        if(strcmp($request->student_class,"Play")==0) {
            $this->batch = abs(($request->student_admission_year) - $this->estd) + 1;
            $this->shift = 'Morning';
        }
        else if(strcmp($request->student_class,"Nursury")==0){
            $this->batch = abs(($request->student_admission_year)-($this->estd-1))+1;
            $this->shift = 'Morning';
        }
        else if(strcmp($request->student_class,"KG-1")==0){
            $this->batch = abs(($request->student_admission_year)-($this->estd-2))+1;
            $this->shift = 'Morning';
        }
        else if(strcmp($request->student_class,"KG-2")==0) {
            $this->batch = abs(($request->student_admission_year) - ($this->estd - 3)) + 1;
            $this->shift = 'Morning';
        }
        else if(strcmp($request->student_class,"One")==0) {
            $this->batch = abs(($request->student_admission_year) - ($this->estd - 4)) + 1;
            $this->shift = 'Morning';
        }
        else if(strcmp($request->student_class,"Two")==0) {
            $this->batch = abs(($request->student_admission_year) - ($this->estd - 5)) + 1;
            $this->shift = 'Morning';
        }
        else if(strcmp($request->student_class,"Three")==0) {
            $this->batch = abs(($request->student_admission_year) - ($this->estd - 6)) + 1;
            $this->shift = 'Morning';
        }
        else if(strcmp($request->student_class,"Four")==0) {
            $this->batch = abs(($request->student_admission_year) - ($this->estd - 7)) + 1;
            $this->shift = 'Morning';
        }
        else if(strcmp($request->student_class,"Five")==0) {
            $this->batch = abs(($request->student_admission_year) - ($this->estd - 8)) + 1;
            $this->shift = 'Morning';
        }
        else if(strcmp($request->student_class,"Six")==0) {
            $this->batch = abs(($request->student_admission_year) - ($this->estd - 9)) + 1;
            $this->shift = 'Day';
        }
        else if(strcmp($request->student_class,"Seven")==0) {
            $this->batch = abs(($request->student_admission_year) - ($this->estd - 10)) + 1;
            $this->shift = 'Day';
        }
        else if(strcmp($request->student_class,"Eight")==0) {
            $this->batch = abs(($request->student_admission_year) - ($this->estd - 11)) + 1;
            $this->shift = 'Day';
        }
        else if(strcmp($request->student_class,"Nine")==0) {
            $this->batch = abs(($request->student_admission_year) - ($this->estd - 12)) + 1;
            $this->shift = 'Day';
        }
        else if(strcmp($request->student_class,"Ten")==0) {
            $this->batch = abs(($request->student_admission_year) - ($this->estd - 13)) + 1;
            $this->shift = 'Day';
        }

        //batch wise roll no
        $this->rownum = DB::table('student_infos')
            ->where('student_class',$request->student_class)
            ->count();

        //increment 1 for one student
        $this->rownum = $this->rownum+1;

        //batch single digit
        if($this->batch>0 and $this->batch<10)
        {
            if($this->rownum>0 and $this->rownum<10)
                //occupation/branch/batch/no
                $this->uniqueId = strval($this->occupation).strval($this->branch).'00'.strval($this->batch).'00'.strval($this->rownum);
            else if($this->rownum>9 and $this->rownum<100)
                //occupation/branch/batch/no
                $this->uniqueId = strval($this->occupation).strval($this->branch).'00'.strval($this->batch).'0'.strval($this->rownum);
            else
                //occupation/branch/batch/no
                $this->uniqueId = strval($this->occupation).strval($this->branch).'00'.strval($this->batch).'0'.strval($this->rownum);

        }
        //batch two digit
        else if($this->batch>9 and $this->batch<100)
        {
            if($this->rownum>0 and $this->rownum<10)
                //occupation/branch/batch/no
                $this->uniqueId = strval($this->occupation).strval($this->branch).'0'.strval($this->batch).'00'.strval($this->rownum);
            else if($this->rownum>9 and $this->rownum<100)
                //occupation/branch/batch/no
                $this->uniqueId = strval($this->occupation).strval($this->branch).'0'.strval($this->batch).'0'.strval($this->rownum);
            else
                //occupation/branch/batch/no
                $this->uniqueId = strval($this->occupation).strval($this->branch).'0'.strval($this->batch).'0'.strval($this->rownum);

        }
        //batch three digit
        else
        {
            if($this->rownum>0 and $this->rownum<10)
                //occupation/branch/batch/no
                $this->uniqueId = strval($this->occupation).strval($this->branch).strval($this->batch).'00'.strval($this->rownum);
            else if($this->rownum>9 and $this->rownum<100)
                //occupation/branch/batch/no
                $this->uniqueId = strval($this->occupation).strval($this->branch).strval($this->batch).'0'.strval($this->rownum);
            else
                //occupation/branch/batch/no
                $this->uniqueId = strval($this->occupation).strval($this->branch).strval($this->batch).'0'.strval($this->rownum);

        }




        $objectSection = sectionTable::where('medium',$request->input('student_medium'))->where('groupName', $request->input('student_group'))->where('branch', $this->branch)->where('class', $request->input('student_class'))->first();

        dd($objectSection);
        $sectionCount = count(sectionTable::all());


        if ($sectionCount< 10) {
            $idSectionCount = '000'.strval($sectionCount+1);
        }
        else if (($sectionCount > 9) and ($sectionCount < 100)) {
            $idSectionCount = '00'.strval($sectionCount+1);
        }
        else if (($sectionCount > 99) and ($sectionCount < 1000)) {
            $idSectionCount = '0'.strval($sectionCount+1);
        }
        else
            $idSectionCount = strval($sectionCount+1);

        $uniqueIdSession = $objectSection['id'];


        dd($uniqueIdSession);

        if(strlen($uniqueIdSession)==9)
            $uniqueIdSession = '0'.$uniqueIdSession;
        elseif (strlen($uniqueIdSession)>10)
            return "Data overlimit";

        $this->section = $uniqueIdSession;







        //register new user

        $student = new StudentInfo();
        $student->id = $this->uniqueId;
        $student->name = $request->student_name;
        $student->student_birthdate = $request->student_birthdate;
        $student->student_blood_group = $request->student_blood_group;
        $student->student_address = $request->student_address;
        $student->student_gender = $request->student_gender;
        $student->student_school_branch = $this->branch;
        $student->student_class = $request->student_class;
        $student->student_shift = $this->shift;
        $student->student_section = $this->section;
        $student->student_medium = $request->student_medium;
        $student->student_group = $request->student_group;
        $student->student_religion = $request->student_religion;
        $student->student_admission_year = $request->student_admission_year;
        $student->student_hobby = $request->student_hobby;
        $student->password = $request->student_password;
        $student->comment = $request->student_comment;
        $query = $student->save();

        if($query){

            return view('signUpStudentConfirm',['id'=>$student->id,'name'=> $student->name,'batch'=>$this->batch,'class'=> $student->student_class,'shift'=> $student->student_shift,'section'=>$student->student_section]);
            //return redirect()->route('signUpFather');
        }
        else
            return  "Something went wrong";

    }
}
