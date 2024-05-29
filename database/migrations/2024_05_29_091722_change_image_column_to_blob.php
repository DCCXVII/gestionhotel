<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('pieces', function (Blueprint $table) {
            $table->binary('image')->nullable()->change();
        });
    }

    public function down()
    {
        Schema::table('pieces', function (Blueprint $table) {
            $table->string('image', 255)->nullable()->change();
        });
    }
};
