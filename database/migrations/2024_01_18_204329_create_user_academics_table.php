<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserAcademicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_academics', function (Blueprint $table) {
            $table->id();
            $table->string('diploma');
            $table->string('school');
            $table->string('from_year');
            $table->string('to_year');
            $table->timestamps();

            $table->unsignedBigInteger('memorial_user_id');

            $table->foreign('memorial_user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_academics');
    }
}
