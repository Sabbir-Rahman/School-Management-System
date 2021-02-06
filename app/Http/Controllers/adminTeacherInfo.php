<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\teacher_info;

class adminTeacherInfo extends Controller
{
    //
    function index()
    {
        $data = teacher_info::all();
        return view('admin/adminTeacherInfo',['teachers'=>$data]);
    }

    function searchTeacher(Request $request){
        $data = teacher_info::where($request->input('search_option'), $request->input('search_data'))->get();
        $cnt = count($data);
        return view('search/adminSearchTeacherInfo',['teachers'=>$data,'count'=>$cnt]);
    }

    function goEditTeacher($id){



        $teacher = teacher_info::find($id);




        return view('edit/adminEditTeacherInfo',['teachers'=>$teacher]);
    }

    function editTeacher(Request $request){

        $data = teacher_info::all();

        $query = teacher_info::where('id', $request->teacherId)
            ->update(['name' => $request->teacherName,'email'=>$request->email,'educational_qualification'=>$request->education,'experience'=>$request->experiences,'hobby'=>$request->hobby,'address'=>$request->address,'contact'=>$request->contact,'optional_contact'=>$request->optional_contact]);



        if($query){

            return redirect('/admin/teacher_info')->with('success','Data Saved');

        }
        else
            return  "Something went wrong";

    }

    function delete(Request $request){


        $data = teacher_info::find($request->delete_input_id);

        $query = $data->delete();

        if ($query) {
            return redirect('/admin/teacher_info')->with('success','Data Saved');

        } else
            return "Fail";

    }
}
