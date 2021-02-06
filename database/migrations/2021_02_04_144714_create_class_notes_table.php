<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassNotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('class_notes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('courseSectionTeacherId');
            $table->string('sectionId');
            $table->string('course');
            $table->string('paper');
            $table->string('teacherName');
            $table->text('classNotesTitle');
            $table->text('classNotesDetails');
            $table->date('classNotesDate');
            $table->text('file')->nullable();
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
        Schema::dropIfExists('class_notes');
    }
}
