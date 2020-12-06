<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRdvsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rdvs', function (Blueprint $table) {
            
            $table->bigIncrements('id');
            $table->bigInteger('adossier_id')->unsigned();

            $table->date('debut');
            $table->time('fin');
            $table->timestamps();

            $table->foreign('adossier_id')->references('id')->on('adossiers');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rdvs');
    }
}
