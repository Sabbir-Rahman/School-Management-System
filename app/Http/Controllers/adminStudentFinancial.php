<?php

namespace App\Http\Controllers;

use App\Models\father_info;
use App\Models\studentPayment;
use Illuminate\Http\Request;
use App\Models\view_adminStudentFinancial;

class adminStudentFinancial extends Controller
{
    function goToStudentFinancialCondition(){

            $student = view_adminStudentFinancial::select("*")->get();


        return view('admin/adminStudentFinancialStatusView',['students'=>$student]);
    }

    function goToStudentPayment(){

        $student = studentPayment::all();
        return view('admin/adminStudentPaymentView',['students'=>$student]);
    }

    function discountPaymentStudent(Request $request){


        return $request->input();

    }
}
