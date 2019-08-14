<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lista_bonus', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome_lista');
            $table->datetime('validade');
            $table->unsignedBigInteger('id_evento');
            $table->foreign('id_evento')->references('id')->on('evento');
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
        Schema::dropIfExists('lista_bonus');
    }
}
