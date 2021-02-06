<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstitutionPreviousAcademicRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('institution_previous_academic_records', function (Blueprint $table) {
            $table->id();
            $table->integer('branchNo');
            $table->text('eventName');
            $table->text('eventDetails');
            $table->date('occurDate');
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
        Schema::dropIfExists('institution_previous_academic_records');
    }
}
