<?php

namespace App\Http\Controllers;

use App\Models\father_info;
use Illuminate\Http\Request;

class fatherSignUp extends Controller
{
    public $studentId;
    public $fatherId='';
    function create(Request $request){

        $this->studentId = $request->Student_id;
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

        $query = $father->save();

        if($query){
            return view('signUpMother');
            //return redirect()->route('signUpFather');
        }
        else
            return  "Something went wrong";
        //return $request->input();
    }
}
