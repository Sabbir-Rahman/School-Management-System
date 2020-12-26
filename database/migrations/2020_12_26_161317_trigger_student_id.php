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
        $unique = new uniqueId();

        //
        DB::unprepared('CREATE TRIGGER student_id_auto BEFORE INSERT ON  `student_infos` FOR EACH ROW
                BEGIN
                    SET NEW.id = $unique->studentId(10);
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
