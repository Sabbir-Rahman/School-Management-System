<?php

namespace App\Http\Controllers;

use App\Models\classTable;
use App\Models\group;
use App\Models\mediumTable;
use App\Models\StudentInfo;
use App\Models\studentPayment;
use Illuminate\Http\Request;
use App\Models\studentPaymentQuantity;

class adminFinancial extends Controller
{
    //

    function index(){

        return view('admin/adminFinancial');
    }

    function goAdminStudentMoneyRule(){

        $payment = studentPaymentQuantity::all();
        $class = StudentInfo::all();
        $medium = mediumTable::all();
        $group = group::all();
        return view('admin/adminStudentMoneyRule',['payments'=>$payment,'classes'=>$class,'mediums'=>$medium,'groups'=>$group]);
    }

    function goAdminTeacherMoneyRule(){

        return view('admin/adminTeacherMoneyRule');
    }

    function addStudentMoneyRule(Request $request){

        //taking all the student id with same branch, medium,group
        //with cursor
        $students = StudentInfo::where('student_school_branch',$request->branchNo)->where('student_class',$request->search_option_class)
                    ->where('student_medium',$request->search_option_medium)->where('student_group',$request->search_option_group)->cursor();

        foreach ($students as $student)
        {
            $payment = new studentPayment();
            $payment->studentId = $student->id;
            $payment->basePayment = $request->basePayment;
            $payment->total = $request->basePayment;

            $payment->save();

        }
            $studentPayment = new studentPaymentQuantity();
            $studentPayment->Branch = $request->branchNo;
            $studentPayment->Class = $request->search_option_class;
            $studentPayment->Medium = $request->search_option_medium;
            $studentPayment->Group = $request->search_option_group;
            $studentPayment->BasePayment = $request->basePayment;
            $query = $studentPayment->save();

        if($query)
            return redirect('/admin/studentPaymentRule')->with('success','Data Saved');
        else
            return "Data not insert";
    }
}
