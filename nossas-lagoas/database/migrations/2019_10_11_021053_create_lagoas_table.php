<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLagoasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lagoas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome');
            $table->string('descricao');
            $table->bigInteger('fisicoquimica_id')->unsigned();
            $table->foreign('fisicoquimica_id')->references('id')->on('fisicoquimicas');
            $table->bigInteger('biologica_id')->unsigned();
            $table->foreign('biologica_id')->references('id')->on('biologicas');
            $table->bigInteger('localidade_id')->unsigned();
            $table->foreign('localidade_id')->references('id')->on('localidades');
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
        Schema::dropIfExists('lagoas');
    }
}
