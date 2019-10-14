<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFisicoQuimicasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fisicoquimicas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('turbidez');
            $table->string('solidos_totais');
            $table->string('condutividade');
            $table->string('ph');
            $table->string('nitrogenio');
            $table->string('fosforo');
            $table->string('oxigenio');
            $table->string('gas_carbonico');
            $table->string('temperatura');
            $table->string('cloretos');
            $table->string('dureza');
            $table->string('alcalinidade');
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
        Schema::dropIfExists('fisicoquimicas');
    }
}
