<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StudentInfo;

class login extends Controller
{
    function loginCheck(Request $request){
        $id = StudentInfo::where('id','=',$request->Login_id)->first();
        if($id){
            if($request->Login_password==$id->password){
                return "Logged in";
            }
            else
                return "Invalid password";
        }
        else
            return "No account";
    }
}
