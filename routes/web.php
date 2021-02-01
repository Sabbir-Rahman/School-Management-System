<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentAuth;
use App\Http\Controllers\fatherSignUp;
use App\Http\Controllers\motherSignUp;
use App\Http\Controllers\login;
use App\Http\Controllers\teacherAuth;
use App\Http\Controllers\adminClass;
use App\Http\Controllers\adminBuildingInfo;
use App\Http\Controllers\adminRoomInfo;
use App\Http\Controllers\adminStudentInfo;
use App\Http\Controllers\adminTeacherInfo;
use App\Http\Controllers\adminMedium;
use App\Http\Controllers\adminGroup;
use App\Http\Controllers\adminSection;
use App\Http\Controllers\adminCourse;
use App\Http\Controllers\mediumClassGroupBranchController;
use App\Http\Controllers\adminSubject;
use App\Http\Controllers\sectionCourseTeacher;
use App\Http\Controllers\teacherDashboard;
use App\Http\Controllers\teacherHomeWork;
use App\Http\Controllers\teacherAnnouncement;
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


Route::get('adminStudents',function (){
    return view('admin/adminStudents');
})->name('adminStudents') ;

Route::get('adminTeachers',function (){
    return view('admin/adminTeachers');
})->name('adminTeachers') ;

Route::get('adminInfrastructures',function (){
    return view('admin/adminInfrastructures');
})->name('adminInfrastructures') ;





Route::get('manageTeachers',function (){
    return view('manageTeacher');
})->name('manageTeacher') ;

Route::get('manageStudents',function (){
    return view('manageStudents');
})->name('manageStudent') ;

Route::get('showRecords',function (){
    return view('showRecords');
})->name('showRecord') ;

Route::get('teacher/teacherDashboard',[teacherDashboard::class,'index']);


Route::get('studentSignUp',[StudentAuth::class,'signUp'])->name('studentSignUp');
Route::post('create',[StudentAuth::class,'create'])->name('studentcreate');

Route::get('admin/class',[adminClass::class,'index'])->name('admin.class');
Route::post('admin/addClass',[adminClass::class,'addData'])->name('addClass');

Route::post('admin/addBuilding',[adminBuildingInfo::class,'addData']);

Route::post('admin/addMedium',[adminMedium::class,'addData']);
Route::post('admin/addGroup',[adminGroup::class,'addData']);


Route::get('admin/Medium',[adminMedium::class,'index'])->name('Medium');
Route::get('admin/Group',[adminGroup::class,'index'])->name('Group');

Route::get('admin/section',[adminSection::class,'index'])->name('admin.section');


Route::post('fatherSignUpCreate',[fatherSignUp::class,'create'])->name('fatherCreate');
Route::post('motherSignUpCreate',[motherSignUp::class,'create'])->name('motherCreate');
Route::post('loginCheck',[login::class,'loginCheck'])->name('loginCheck');

Route::post('teacherSigningUp',[teacherAuth::class,'addData'])->name('teacherSigningUp');


Route::get('admin/StudentInfo',[adminStudentInfo::class,'index'])->name('admin.studentInfo');
Route::get('admin/TeacherInfo',[adminTeacherInfo::class,'index'])->name('admin.teacherInfo');
Route::get('admin/BuildingInfo',[adminBuildingInfo::class,'index'])->name('admin.buildingInfo');
Route::get('admin/RoomInfo',[adminRoomInfo::class,'index'])->name('admin.roomInfo');

Route::get('admin/course',[adminCourse::class,'index'])->name('admin.course');

Route::post('admin/addRoomsView',[adminRoomInfo::class,'addDataView']);
Route::post('admin/addRooms',[adminRoomInfo::class,'addData']);
Route::post('admin/addSectionView',[adminSection::class,'addDataView']);

Route::post('admin/addSectionAdmin',[adminSection::class,'addData']);

Route::post('admin/mediumClassGroupBranch',[mediumClassGroupBranchController::class,'addData']);
Route::post('admin/addSubjectName',[adminSubject::class,'addData']);
Route::post('admin/addCourse',[adminCourse::class,'addData']);

Route::get('admin/mediumGroupBranchView',[mediumClassGroupBranchController::class,'index'])->name('admin.mediumClassGroupBranch');
Route::get('admin/addSubjects',[adminSubject::class,'index'])->name('adminSubjects');

Route::get('admin/addSectionView',[sectionCourseTeacher::class, 'goToAddSection'])->name('admin.sectionView');

Route::get('admin/sectionTeacherCourse',[sectionCourseTeacher::class,'index'])->name('admin.sectionCourseTeacher');
Route::get('admin/addTeacherSectionChoice',[sectionCourseTeacher::class,'goToAddTeacherSectionChoice'])->name('admin.addTeacherView');
Route::get('admin/addTeacherTeacherChoice/{id}',[sectionCourseTeacher::class,'goToAddTeacherTeacherChoice'])->name('admin.goToAddTeacherTeacherChoice');

Route::get('admin/addSectionGoCourse/{id}',[sectionCourseTeacher::class,'goCourseAdd'])->name('admin.goToCourse');
Route::get('admin/addSectionCourse/{section_id}/course/{course_id}',[sectionCourseTeacher::class,'addCourse'])->name('admin.addCourse');
Route::get('admin/addSectionTeacher/{sectionCourse_id}/teacher/{teacher_id}',[sectionCourseTeacher::class,'addTeacherToCourse'])->name('admin.addTeacherToCourse');

Route::get('teacher/teacherHomeWork',[teacherDashboard::class,'goToHomeWorkPage'])->name('teacher.goToHomeWorkPage');
Route::get('teacher/details/homework/{sectionCourseTeacherId}',[teacherHomeWork::class,'index'])->name('teacher.details.ToHomeWorkPage');

Route::get('teacher/teacherAnnouncement',[teacherDashboard::class,'goToAnnouncementPage'])->name('teacher.goToAnnouncementPage');
Route::get('teacher/details/announcement/{sectionCourseTeacherId}',[teacherAnnouncement::class,'index'])->name('teacher.details.ToAnnouncementPage');
