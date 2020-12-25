<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_infos', function (Blueprint $table) {
            $table->id();
            $table->text('student_name');
            $table->text('student_birthdate');
            $table->text('student_blood_group');
            $table->text('student_address');
            $table->text('student_gender');
            $table->text('student_school_branch');
            $table->text('student_class');
            $table->text('student_shift');
            $table->text('student_section');
            $table->text('student_medium');
            $table->text('student_group');
            $table->text('student_religion');
            $table->text('student_admission_year');
            $table->text('student_hobby');
            $table->text('password');
            $table->text('extra');
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
        Schema::dropIfExists('student_infos');
    }
}
