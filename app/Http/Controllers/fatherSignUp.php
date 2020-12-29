<?php

namespace App\Http\Controllers;

use App\Models\father_info;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class fatherSignUp extends Controller
{
    public $studentId;
    public $fatherId='';
    public $studentCount;
    function create(Request $request){

        $this->studentId = $request->Student_id;
        $this->studentCount = DB::table('student_infos')
            ->where('id',$this->studentId)
            ->count();

        if($this->studentCount==0)
            return "Student not exist so how can student father??";


        $this->fatherId = strval($this->studentId).'1';
        //register new user
        $father = new father_info();
        $father->id = $this->fatherId;
        $father->name = $request->Father_name;
        $father->birthdate = $request->Father_birthdate;
        $father->occupation = $request->Father_occupation;
        $father->income_per_month = $request->Father_income;
        $father->nid = $request->Father_nid;
        $father->address = $request->Father_address;
        $father->phone = $request->Father_phone;
        $father->password = $request->Father_password;
        $father->comment = $request->Father_comment;

        $query = $father->save();

        if($query){
            return view('signUpFatherConfirm',['id'=>$father->id,'name'=> $father->name]);
            //return redirect()->route('signUpFather');
        }
        else
            return  "Something went wrong";
        //return $request->input();
    }
}
