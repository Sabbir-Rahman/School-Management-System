<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\classTable;

class adminClass extends Controller
{
    private $id;
    function index(){

        $data = classTable::all();
        return view('admin\adminClass',['class'=>$data]);
    }

    function addData(Request $request){

        $this->validate($request,[
            'class' => 'required',
        ]);


        $cls = new classTable();
        $cls->class = $request->input('class');

        $query = $cls->save();

        if($query)
            return redirect('/admin/class')->with('success','Data Saved');
        else
            return "Data not insert";


    }
}
