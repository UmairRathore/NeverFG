<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFrontendVirtualFuneralsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('frontend_virtual_funerals', function (Blueprint $table) {
            $table->id();
            $table->string('frontend_virtual_funeral_title');
            $table->string('frontend_virtual_funeral_image');
            $table->text('frontend_virtual_funeral_description');
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
        Schema::dropIfExists('frontend_virtual_funerals');
    }
}
