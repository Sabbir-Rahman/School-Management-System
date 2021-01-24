<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMediumGroupBranchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medium_group_branches', function (Blueprint $table) {
            $table->string('id')->unique();
            $table->integer('branch');
            $table->string('mediumName');
            $table->string('groupName');
            $table->foreign('mediumName')->references('name')->on('medium_tables');
            $table->foreign('groupName')->references('name')->on('groups');
            $table->unique(['branch','mediumName','groupName'],'branch_medium_group_unique');
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
        Schema::dropIfExists('member_group_branches');
    }
}
