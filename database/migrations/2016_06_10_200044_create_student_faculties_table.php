<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentFacultiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_faculties', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('student_id')->unsigned();
            $table->integer('faculty_id')->unsigned();
            $table->timestamps();

            $table->foreign('student_id')
                  ->references('id')->on('students')
                  ->onDelete('CASCADE')
                  ->onUpdate('CASCADE');

            $table->foreign('faculty_id')
                  ->references('id')->on('faculties')
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
        Schema::drop('student_faculties');
    }
}
