<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeacherInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teacher_infos', function (Blueprint $table) {
            $table->id();
            $table->text('name');
            $table->text('email');
            $table->text('educational_qualification');
            $table->text('experiences');
            $table->integer('joining_year');
            $table->text('father_name');
            $table->text('mother_name');
            $table->text('nid');
            $table->text('gender');
            $table->text('hobby');
            $table->text('address');
            $table->text('contact');
            $table->text('optional_contact');
            $table->text('password');
            $table->text('comment');
            $table->text('leaving_year')->nullable();
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
        Schema::dropIfExists('teacher_infos');
    }
}
