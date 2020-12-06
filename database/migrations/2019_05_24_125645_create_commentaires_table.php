<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentairesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commentaires', function (Blueprint $table) {

            $table->bigIncrements('id');
            $table->bigInteger('adossier_id')->unsigned();
            $table->bigInteger('user_id')->unsigned();
            $table->string('contenue');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('commentaires');
    }
}
