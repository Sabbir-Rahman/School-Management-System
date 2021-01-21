<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentAuth;
use App\Http\Controllers\fatherSignUp;
use App\Http\Controllers\motherSignUp;
use App\Http\Controllers\login;
use App\Http\Controllers\teacherAuth;
use App\Http\Controllers\adminClass;
//False test comments.
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('landing');
});

Route::get('login',function (){
    return view('login');
})->name('login') ;

Route::get('teacherSignUp', function () {
    return view('teacherSignUp');
})->name('teacherSignUp');

Route::get('teacherDashboard', function () {
    return view('teacherDashboard');
})->name('teacherDashboard');

Route::get('adminDashboard',function (){
    return view('adminDashboard');
});

Route::get('admin',function (){
    return view('admin\adminDashboard');
})->name('admin.adminDashboard');


Route::get('fatherSignUp',function (){
    return view('signUpFather');
})->name('fatherSignUp') ;

Route::get('motherSignUp',function (){
    return view('signUpMother');
})->name('motherSignUp') ;

Route::get('signUpOption',function (){
    return view('signUpOption');
})->name('signUpOption') ;

Route::get('academicDashboard',function (){
    return view('academicDashboard');
})->name('academicDashboard') ;

Route::get('adminAcademics',function (){
    return view('admin/adminAcademics');
})->name('adminAcademics') ;







Route::get('manageTeachers',function (){
    return view('manageTeacher');
})->name('manageTeacher') ;

Route::get('manageStudents',function (){
    return view('manageStudents');
})->name('manageStudent') ;

Route::get('showRecords',function (){
    return view('showRecords');
})->name('showRecord') ;


Route::get('studentSignUp',[StudentAuth::class,'signUp'])->name('studentSignUp');
Route::post('create',[StudentAuth::class,'create'])->name('studentcreate');

Route::get('admin/class',[adminClass::class,'index'])->name('admin.class');
Route::post('admin/addClass',[adminClass::class,'addData'])->name('addClass');





Route::post('fatherSignUpCreate',[fatherSignUp::class,'create'])->name('fatherCreate');
Route::post('motherSignUpCreate',[motherSignUp::class,'create'])->name('motherCreate');
Route::post('loginCheck',[login::class,'loginCheck'])->name('loginCheck');

Route::post('teacherSigningUp',[teacherAuth::class,'addData'])->name('teacherSigningUp');








