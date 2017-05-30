<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('enrollment_number')->unsigned()->unique();
            $table->string('password',60);
            $table->string('profile_photo')->default('default.jpg');
            $table->integer('roll_number')->unsigned();
            $table->string('name');
            $table->string('gender', '1');
            $table->date('DOB');
            $table->string('address', 100);
            $table->string('email')->unique();
            $table->string('phone', '10');
            $table->string('parent_phone', '10');
            $table->integer('section')->unsigned();
            $table->integer('semester')->unsigned();
            $table->string('batch');
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('section')
                  ->references('id')->on('sections')
                  ->onDelete('CASCADE')
                  ->onUpdate('CASCADE');

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
        Schema::drop('students');
    }
}
