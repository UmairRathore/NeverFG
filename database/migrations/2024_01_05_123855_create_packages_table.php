<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('packages', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('account_type_id');
            $table->tinyInteger('memento_images')->default(0);
            $table->tinyInteger('guestbook_and_tributes')->default(0);
            $table->tinyInteger('biography_and_obituary')->default(0);
            $table->tinyInteger('in_memoriam_donation_link')->default(0);
            $table->tinyInteger('online_forever')->default(0);
            $table->tinyInteger('unlimited_milestones')->default(0);
            $table->tinyInteger('share_cemetery_and_grave_location')->default(0);
            $table->tinyInteger('full_privacy_settings')->default(0);
            $table->tinyInteger('downloading_images')->default(0);
            $table->tinyInteger('video_uploading')->default(0);
            $table->tinyInteger('customizable_url')->default(0);
            $table->tinyInteger('keeper_administrators')->default(0);
            $table->tinyInteger('events_pages')->default(0);
            $table->tinyInteger('family_tree')->default(0);
            $table->tinyInteger('memorial_pages')->default(0);
            $table->timestamps();

            $table->foreign('account_type_id')->references('id')->on('account_types')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('packages');
    }
}
