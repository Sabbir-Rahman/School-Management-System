<?php

namespace App\Http\Controllers;

use App\Models\userLoginTime;
use Illuminate\Http\Request;
use App\Models\StudentInfo;
use App\Models\father_info;
use App\Models\mother_info;
use App\Models\teacher_info;
use App\Http\Controllers\teacherDashboard;
use App\Models\admin;

class login extends Controller
{

    private $afterLoginView = '';
    function loginCheck(Request $request){

        $teacherController = new teacherDashboard();
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
            $this->afterLoginView = 'student';
        }
        //teacher id
        else if(strlen($request->Login_id)==12) {
            $id = teacher_info::where('id', '=', $request->Login_id)->first();
            $this->afterLoginView = 'teacher';
        }
        //admin id
        else if(strlen($request->Login_id)==15) {
            $id = admin::where('id', '=', $request->Login_id)->first();
            $this->afterLoginView = 'admin';
        }
        else {
            return "No account";
        }

        if($id){
            if($request->Login_password==$id->password){
                $request->session()->put('userId',$request->Login_id);

                $user = new userLoginTime();

                $user->userId = $request->Login_id;
                $user->name = $id->name;

                $query = $user->save();

                if(!$query)
                    return "Something wrong happened";

                if($this->afterLoginView == 'teacher'){
                    return redirect('teacher/teacherDashboard');
                }
                if($this->afterLoginView == 'admin'){
                    $user->name = 'admin';
                    return redirect('adminAcademics');
                }
                else if($this->afterLoginView == 'student'){
                    return redirect('student/studentDashboard');
                }
                else
                    return view($this->afterLoginView);
            }
            else
                return "Invalid password";
        }
        else
            return "No account";
    }
}
