<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Http\Controllers\uniqueId;


class TriggerStudentId extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        $var = 100;

        //
        DB::unprepared('CREATE TRIGGER student_id_auto BEFORE INSERT ON  `student_infos` FOR EACH ROW
                BEGIN
                    SET NEW.id = .$var;
                END');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
