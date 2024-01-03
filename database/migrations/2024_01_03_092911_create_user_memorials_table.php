<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserMemorialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_memorials', function (Blueprint $table) {
            $table->id();
            $table->date('dod')->nullable();
            $table->string('city_of_birth');
            $table->string('image')->nullable();
            $table->text('biography')->nullable();
            $table->string('fav_saying')->nullable();
            $table->string('resting_place')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->enum('status', ['active', 'inactive'])->default('active'); // Use ENUM for two options

            //foreign key constraint
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('user_memorials');
    }
}
