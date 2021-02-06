<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeacherMeetLinksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teacher_meet_links', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('courseSectionTeacherId');
            $table->string('sectionId');
            $table->string('course');
            $table->string('paper');
            $table->string('teacherName');
            $table->text('meetingTitle');
            $table->text('meetingDetails');
            $table->text('meetingLink');
            $table->date('meetingDate');
            $table->time('meetingTime');
            $table->text('comment')->nullable();
            $table->foreign('courseSectionTeacherId')->references('id')->on('course_section_teachers');
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
        Schema::dropIfExists('teacher_meet_links');
    }
}
