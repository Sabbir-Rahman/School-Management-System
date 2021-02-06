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
use App\Http\Controllers\studentDashboard;
use App\Http\Controllers\studentHomeWorkDashboard;
use App\Http\Controllers\teacherClassNotes;
use App\Http\Controllers\teacherAnnouncement;
use App\Http\Controllers\teacherMeetingLink;
use App\Http\Controllers\studentAnnouncement;
use App\Http\Controllers\studentClassNotes;
use App\Http\Controllers\view_studentGeneral;
use App\Http\Controllers\studentMeetLink;
use App\Http\Controllers\applicationStudent;
use App\Http\Controllers\academicRecords;
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
Route::post('admin/searchStudent',[adminStudentInfo::class,'searchStudent']);
Route::get('admin/goToEditStudent/{id}',[adminStudentInfo::class,'goEditStudent'])->name('admin.goEditStudent');
Route::get('admin/goToReviewApplication/{id}',[applicationStudent::class,'goreviewStudentApplication'])->name('admin.goReviewApplication');

Route::post('admin/goToEditStudent/editStudentInfo',[adminStudentInfo::class,'editStudent']);
Route::post('admin/deleteStudent',[adminStudentInfo::class,'delete']);
Route::post('admin/goToReviewApplication/reviewStudentApplication',[applicationStudent::class,'adminReview']);

Route::get('admin/StudentInfo',[adminStudentInfo::class,'index'])->name('admin.studentInfo');
Route::get('admin/previousAcademicInfo',[academicRecords::class,'index'])->name('admin.previousAcademicRecord');


Route::get('admin/StudentApplication',[applicationStudent::class,'goAdminStudentApplication'])->name('admin.studentApplication');
Route::get('admin/TeacherInfo',[adminTeacherInfo::class,'index'])->name('admin.teacherInfo');
Route::get('admin/BuildingInfo',[adminBuildingInfo::class,'index'])->name('admin.buildingInfo');
Route::get('admin/RoomInfo',[adminRoomInfo::class,'index'])->name('admin.roomInfo');

Route::get('admin/course',[adminCourse::class,'index'])->name('admin.course');

Route::post('admin/addRoomsView',[adminRoomInfo::class,'addDataView']);
Route::post('admin/addRooms',[adminRoomInfo::class,'addData']);
Route::post('admin/addSectionView',[adminSection::class,'addDataView']);

Route::post('admin/addPreviousAcademicRecords',[academicRecords::class,'addData']);

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

Route::get('teacher/teacherDashboard',[teacherDashboard::class,'index'])->name('teacher.goToTeacherDashboard');
Route::get('teacher/teacherHomeWork',[teacherDashboard::class,'goToHomeWorkPage'])->name('teacher.goToHomeWorkPage');
Route::get('teacher/teacherClassNotes',[teacherClassNotes::class,'index'])->name('teacher.goToClassNotesPage');
Route::get('teacher/teacherAnnouncement',[teacherAnnouncement::class,'index'])->name('teacher.goToAnnouncementPage');
Route::get('teacher/teacherMeetingLinks',[teacherDashboard::class,'goToMeetingLinksPage'])->name('teacher.goToMeetingLinksPage');
Route::get('teacher/teacherGoStudentInfo',[teacherDashboard::class,'goToStudentSection'])->name('teacher.goToStudentSection');

Route::get('teacher/details/homework/{sectionCourseTeacherId}',[teacherHomeWork::class,'goDetailHomework'])->name('teacher.details.ToHomeWorkPage');
Route::get('teacher/details/classnotes/{sectionCourseTeacherId}',[teacherClassNotes::class,'goDetailClassnotes'])->name('teacher.details.ToClassNotesPage');
Route::get('teacher/details/announcements/{sectionCourseTeacherId}',[teacherAnnouncement::class,'goDetailAnnouncement'])->name('teacher.details.ToAnnouncementPage');
Route::get('teacher/details/meetingLinks/{sectionCourseTeacherId}',[teacherMeetingLink::class,'goDetailHomework'])->name('teacher.details.meetingLink');

Route::post('teacher/details/homework/addHomework',[teacherHomeWork::class,'addHomeWork']);
Route::post('teacher/details/classnotes/addClassnotes',[teacherClassNotes::class,'addClassNotes']);
Route::post('teacher/details/announcements/addAnnouncements',[teacherAnnouncement::class,'addAnnouncements']);
Route::post('teacher/details/meetingLinks/addMeetingLink',[teacherMeetingLink::class,'addMeetingLinks']);



Route::get('student/studentDashboard',[studentDashboard::class,'index'])->name('student.studentDashboard');
Route::get('student/studentHomeWorkDashboard',[studentHomeWorkDashboard::class,'index'])->name('student.studentHomeWorkDashboard');
Route::get('student/studentAnnouncementDashboard',[studentAnnouncement::class,'index'])->name('student.studentAnnouncementDashboard');
Route::get('student/studentClassNotesDashboard',[studentClassNotes::class,'index'])->name('student.studentClassNotesDashboard');
Route::get('student/studentMeetingLinksDashboard',[studentMeetLink::class,'index'])->name('student.studentMeetingLinksDashboard');
Route::get('student/studentApplicationDashboard',[applicationStudent::class,'index'])->name('student.studentApplicationDashboard');
Route::get('student/studentApplicationEnter',[applicationStudent::class,'goEnterApplication'])->name('student.enterApplication');

Route::post('student/addApplication',[applicationStudent::class,'addApplication'])->name('student.addApplication');

Route::get('student/generalViewTest',[view_studentGeneral::class,'test'])->name('student.studentGeneralView');
Route::get('student/generalViewTeacher',[view_studentGeneral::class,'goToTeacherStudentGeneralView'])->name('student.generalInfo');



