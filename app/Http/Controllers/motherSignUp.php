<?php

namespace App\Http\Controllers;

use App\Models\mother_info;
use Illuminate\Http\Request;

class motherSignUp extends Controller
{
    function create(Request $request){

        //register new user
        $mother = new mother_info();
        $mother->name = $request->Mother_name;
        $mother->birthdate = $request->Mother_birthdate;
        $mother->occupation = $request->Mother_occupation;
        $mother->income_per_month = $request->Mother_income;
        $mother->nid = $request->Mother_nid;
        $mother->address = $request->Mother_address;
        $mother->phone = $request->Mother_phone;

        $query = $mother->save();

        if($query){
            return "Success";
            //return redirect()->route('signUpFather');
        }
        else
            return  "Something went wrong";
        //return $request->input();
    }
}
