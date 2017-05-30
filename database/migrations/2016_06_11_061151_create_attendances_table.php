<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttendancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attendances', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('student_id')->unsigned();
            $table->integer('subject_id')->unsigned();
            $table->date('date_of_lecture');
            $table->integer('attendance_type_id')->unsigned();
            $table->integer('time_period_id')->unsigned();
            $table->timestamps();

            $table->foreign('subject_id')
                  ->references('id')->on('subjects')
                  ->onDelete('CASCADE')
                  ->onUpdate('CASCADE');

            $table->foreign('attendance_type_id')
                  ->references('id')->on('attendance_types')
                  ->onDelete('CASCADE')
                  ->onUpdate('CASCADE');

            $table->foreign('student_id')
                  ->references('id')->on('students')
                  ->onDelete('CASCADE')
                  ->onUpdate('CASCADE');

            $table->foreign('time_period_id')
                  ->references('id')->on('time_periods')
                  ->onDelete('CASCADE')
                  ->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('attendances');
    }
}
