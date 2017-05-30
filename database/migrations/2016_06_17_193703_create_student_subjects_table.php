<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentSubjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_subjects', function (Blueprint $table) {
            $table->increments('id');
             $table->integer('student_id')->unsigned();
            $table->integer('subject_id')->unsigned();
            $table->timestamps();

            $table->foreign('subject_id')
                  ->references('id')->on('subjects')
                  ->onDelete('CASCADE')
                  ->onUpdate('CASCADE');

            $table->foreign('student_id')
                  ->references('id')->on('students')
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
        Schema::drop('student_subjects');
    }
}
