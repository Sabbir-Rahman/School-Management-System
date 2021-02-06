<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFatherInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('father_infos', function (Blueprint $table) {
            $table->id();
            $table->string('studentId');
            $table->text('name');
            $table->text('birthdate');
            $table->text('occupation');
            $table->text('income_per_month');
            $table->text('nid');
            $table->text('address');
            $table->text('phone');
            $table->text('password');
            $table->text('comment');
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
        Schema::dropIfExists('father_infos');
    }
}
