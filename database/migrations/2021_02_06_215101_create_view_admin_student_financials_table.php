<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateViewAdminStudentFinancialsTable extends Migration
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
        Schema::dropIfExists('view_admin_student_financials');
    }
    private function dropView(){
        return <<<SQL
    DROP VIEW IF EXISTS `view_admin_student_financials`;
    SQL;
    }

    private function createView():string {
        return <<<SQL
            CREATE VIEW view_admin_student_financials AS
                SELECT
                    id,
                    name,
                    (SELECT occupation FROM father_infos
                                WHERE student_infos.id = father_infos.studentId
                            ) AS fatherOcupation,
                     (SELECT income_per_month FROM father_infos
                                WHERE student_infos.id = father_infos.studentId
                            ) AS fatherIncome,
                    (SELECT occupation FROM mother_infos
                                WHERE student_infos.id = mother_infos.studentId
                            ) AS fatherOccupation,
                     (SELECT income_per_month FROM mother_infos
                                WHERE student_infos.id = mother_infos.studentId
                            ) AS motherIncome


                FROM student_infos
            SQL;
    }
}
