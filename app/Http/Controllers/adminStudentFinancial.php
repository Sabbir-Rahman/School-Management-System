<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminStudentFinancial extends Controller
{
    function goToStudentFinancialCondition(){

        return view('admin/adminStudentFinancialStatusView');
    }

    function goToStudentPayment(){
        return view('admin/adminStudentPaymentView');
    }
}
