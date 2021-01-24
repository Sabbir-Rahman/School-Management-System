<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSectionTablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('section_tables', function (Blueprint $table) {
            $table->string('id')->unique();
            $table->Integer('branch');
            $table->text('class');
            $table->unsignedBigInteger('classId');
            $table->text('sectionName');
            $table->integer('roomNo');
            $table->unsignedBigInteger('roomId');
            $table->text('buildingName');
            $table->unsignedBigInteger('buildingId');
            $table->string('shift');
            $table->text('medium');
            $table->integer('mediumId');
            $table->text('groupName');
            $table->integer('groupId');
            $table->foreign('buildingId')->references('id')->on('buildings');
            $table->foreign('roomId')->references('id')->on('rooms');
            $table->foreign('classId')->references('id')->on('class_tables');
            $table->unique(['branch','shift','roomNo'],'shift_room_branch_unique');
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
        Schema::dropIfExists('section_tables');
    }
}
