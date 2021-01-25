<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\mediumTable;

class adminMedium extends Controller
{
    //
    function index()
    {
        $data = mediumTable::all();
        return view('admin/adminMedium',['mediums'=>$data]);
    }

    function addData(Request $request){

        $medium = new mediumTable();
        $medium->name = $request->input('name');


        $query = $medium->save();



        if($query)
            return redirect('/admin/Medium')->with('success','Data Saved');
        else
            return "Data not insert";
    }
}
