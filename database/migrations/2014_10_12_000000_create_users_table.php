<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('middle_name');
            $table->string('suffix');
            $table->date('dob');
            $table->string('gender');
            $table->string('profile_image')->nullable(); // Add the profile_image column
            $table->unsignedBigInteger('role_id');
            $table->unsignedBigInteger('account_type_id');
            $table->rememberToken();
            $table->timestamps();

            //foreign key constraint
            $table->foreign('role_id')->references('id')->on('roles');
            $table->foreign('account_type_id')->references('id')->on('account_types');


        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
