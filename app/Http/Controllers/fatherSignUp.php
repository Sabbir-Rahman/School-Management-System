<?php

namespace App\Http\Controllers;

use App\Models\father_info;
use Illuminate\Http\Request;

class fatherSignUp extends Controller
{
    function create(Request $request){


        //register new user
        $father = new father_info();
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
