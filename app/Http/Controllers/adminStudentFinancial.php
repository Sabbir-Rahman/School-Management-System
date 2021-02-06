<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\view_adminStudentFinancial;

class adminStudentFinancial extends Controller
{
    function goToStudentFinancialCondition(){

            $student = view_adminStudentFinancial::select("*")->get();


        return view('admin/adminStudentFinancialStatusView',['students'=>$student]);
    }

    function goToStudentPayment(){
        return view('admin/adminStudentPaymentView');
    }
}
