<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StudentInfo;
use App\Models\father_info;
use App\Models\mother_info;
use App\Models\teacher_info;

class login extends Controller
{
    private $afterLoginView = '';
    function loginCheck(Request $request){

        //father id
        if(strlen($request->Login_id)==9 and $request->Login_id[8]==1) {
            $id = father_info::where('id', '=', $request->Login_id)->first();
            $this->afterLoginView = 'fatherLandingPage';
        }
        //mother id
        else if(strlen($request->Login_id)==9 and $request->Login_id[8]==2) {
            $id = mother_info::where('id', '=', $request->Login_id)->first();
            $this->afterLoginView = 'motherLandingPage';
        }
        //student id
        else if(strlen($request->Login_id)==8) {
            $id = StudentInfo::where('id', '=', $request->Login_id)->first();
            $this->afterLoginView = 'studentLandingPage';
        }
        else if(strlen($request->Login_id)==12) {
            $id = teacher_info::where('id', '=', $request->Login_id)->first();
            $this->afterLoginView = 'teacherDashboard';
        }
        else {
            return "No account";
        }

        if($id){
            if($request->Login_password==$id->password){
                return view($this->afterLoginView,['name'=>$id->name]);
            }
            else
                return "Invalid password";
        }
        else
            return "No account";
    }
}
