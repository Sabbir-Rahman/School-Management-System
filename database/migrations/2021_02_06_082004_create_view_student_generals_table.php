<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateViewStudentGeneralsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement($this->dropView());

        DB::statement($this->createView());
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('view_student_generals');
    }


    private function dropView(){
            return <<<SQL
    DROP VIEW IF EXISTS `view_student_generals`;
    SQL;
    }

    private function createView():string {
        return <<<SQL
            CREATE VIEW view_student_generals AS
                SELECT
                    id,
                    name,
                    student_blood_group,
                    student_address,
                    student_class,
                    student_section,
                    (SELECT phone FROM father_infos
                                WHERE student_infos.id = father_infos.studentId
                            ) AS contact

                FROM student_infos
            SQL;
    }
}
