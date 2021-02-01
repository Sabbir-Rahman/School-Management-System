<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSectionHwsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('section_hws', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('courseSectionTeacherId');
            $table->text('homeWorkTitle');
            $table->text('homeWorkDetails');
            $table->date('startDate');
            $table->date('lastDateSubmission')->nullable();
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
        Schema::dropIfExists('section_hws');
    }
}
