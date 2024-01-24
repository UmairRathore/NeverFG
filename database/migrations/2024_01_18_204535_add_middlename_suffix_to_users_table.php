<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMiddlenameSuffixToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
                $table->string('middle_name')->nullable()->after('password');
                $table->string('suffix')->nullable()->after('middle_name');
                $table->string('theme_image')->nullable()->after('profile_image');
                $table->string('icon_image')->nullable()->after('profile_image');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
}
