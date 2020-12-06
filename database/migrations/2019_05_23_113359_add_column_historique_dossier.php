<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnHistoriqueDossier extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('dossiers', function (Blueprint $table) {
            $table->string('allergie');
            $table->string('hist_trt');
            $table->string('hist_chr');
            $table->string('hist_fam');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('dossiers', function (Blueprint $table) {
            $table->dropColumn('allergie');
            $table->dropColumn('hist_trt');
            $table->dropColumn('hist_chr');
            $table->dropColumn('hist_fam');
        });
    }
}
