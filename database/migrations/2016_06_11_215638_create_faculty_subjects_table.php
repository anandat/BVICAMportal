<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFacultySubjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faculty_subjects', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('faculty_id')->unsigned();
            $table->integer('subject_id')->unsigned();
            $table->timestamps();

            $table->foreign('subject_id')
                  ->references('id')->on('subjects')
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
        Schema::drop('faculty_subjects');
    }
}
