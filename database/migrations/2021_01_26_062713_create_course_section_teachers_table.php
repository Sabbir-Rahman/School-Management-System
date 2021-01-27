<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseSectionTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_section_teachers', function (Blueprint $table) {
            $table->id();
            $table->integer('branch');
            $table->string('class');
            $table->string('medium');
            $table->string('group');
            $table->string('sectionName');
            $table->string('sectionId');
            $table->string('courseName');
            $table->string('coursePaper');
            $table->unsignedBigInteger('courseId');
            $table->string('teacherName')->nullable();
            $table->unsignedBigInteger('teacherId')->nullable();
            $table->foreign('medium')->references('name')->on('medium_tables');
            $table->foreign('group')->references('name')->on('groups');
            $table->foreign('class')->references('class')->on('class_tables');
            $table->foreign('sectionId')->references('id')->on('section_tables');
            $table->foreign('courseId')->references('id')->on('courses');
            $table->foreign('teacherId')->references('id')->on('teacher_infos');
            $table->unique(['sectionId','courseId'],'section_course_unique');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('course_section_teachers');
    }
}
