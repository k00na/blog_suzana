<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ModifyAboutColumns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('abouts', function (Blueprint $table) {
            //

            $table->string('image')->nullable()->change();
            $table->string('title')->nullable()->change();
            $table->string('description')->nullable()->change();
            $table->string('imageSecond')->nullable()->change();
            $table->string('descriptionSecond')->nullable()->change();
            $table->string('titleSecond')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('abouts', function (Blueprint $table) {
            //
        });
    }
}
