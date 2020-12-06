<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdossiersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adossiers', function (Blueprint $table) {

            $table->bigIncrements('id');
            $table->bigInteger('dossier_id')->unsigned();
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('pat_id')->unsigned();
            $table->string('status');
            $table->string('motif')->nullable();
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('dossier_id')->references('id')->on('dossiers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('adossiers');
    }
}
