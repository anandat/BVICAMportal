<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subjects', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('subject_id');
            $table->string('subject_code');
            $table->string('subject_name');
            $table->integer('semester')->unsigned();
            $table->string('subject_type_id');
            $table->timestamps();

            $table->foreign('semester')
                  ->references('id')->on('semesters')
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
        Schema::drop('subjects');
    }
}
