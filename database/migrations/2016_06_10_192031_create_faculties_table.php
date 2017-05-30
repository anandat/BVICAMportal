<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFacultiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faculties', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('profile_photo')->default('default.jpg');
            $table->string('gender', 1);
            $table->string('designation');
            $table->date('dob');
            $table->string('qualification');
            $table->string('area_of_expertise');
            $table->string('address', 100);
            $table->string('email')->unique();
            $table->string('password',60);
            $table->string('mobile', 10);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('faculties');
    }
}
