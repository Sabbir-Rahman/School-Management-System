<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentAuth;
use App\Http\Controllers\fatherSignUp;
use App\Http\Controllers\motherSignUp;
use App\Http\Controllers\login;
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

Route::get('fatherSignUp',function (){
    return view('signUpFather');
})->name('fatherSignUp') ;

Route::get('motherSignUp',function (){
    return view('signUpMother');
})->name('motherSignUp') ;




Route::get('loginMysql',[UserAuth::class,'login']);
Route::get('studentSignUp',[StudentAuth::class,'signUp'])->name('studentSignUp');
Route::post('create',[StudentAuth::class,'create'])->name('studentcreate');
Route::post('fatherSignUpCreate',[fatherSignUp::class,'create'])->name('fatherCreate');
Route::post('motherSignUpCreate',[motherSignUp::class,'create'])->name('motherCreate');
Route::post('loginCheck',[login::class,'loginCheck'])->name('loginCheck');




Route::post('check',[UserAuth::class,'check'])->name('auth.check');




//hello sabbir.
