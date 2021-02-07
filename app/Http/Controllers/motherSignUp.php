<?php

namespace App\Http\Controllers;

use App\Models\mother_info;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class motherSignUp extends Controller
{
    public $studentId;
    public $motherId='';
    public $studentCount;
    function create(Request $request){
        $this->studentId = $request->Student_id;
        $this->studentCount = DB::table('student_infos')
            ->where('id',$this->studentId)
            ->count();

        if($this->studentCount==0)
            return "Student not exist so how can student mother??";

        $this->motherId = strval($this->studentId).'2';

        $hashed = Hash::make($request->Mother_password, [
            'rounds' => 12,
        ]);

        //register new user
        $mother = new mother_info();
        $mother->id = $this->motherId;
        $mother->studentId = $this->studentId;
        $mother->name = $request->Mother_name;
        $mother->birthdate = $request->Mother_birthdate;
        $mother->occupation = $request->Mother_occupation;
        $mother->income_per_month = $request->Mother_income;
        $mother->nid = $request->Mother_nid;
        $mother->address = $request->Mother_address;
        $mother->phone = $request->Mother_phone;
        $mother->password = $hashed;
        $mother->comment = $request->Mother_comment;

        $query = $mother->save();

        if($query){
            return view('motherSignUpConfirm',['id'=>$mother->id,'name'=> $mother->name]);
            //return redirect()->route('signUpFather');
        }
        else
            return  "Something went wrong";
        //return $request->input();
    }
}
