<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListaCliente extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lista_cliente', function (Blueprint $table) {
            $table->unsignedBigInteger('cliente_id');
            $table->unsignedBigInteger('lista_id');
            $table->foreign('cliente_id')->references('id')->on('cliente');
            $table->foreign('lista_id')->references('id')->on('lista_bonus');
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
        Schema::dropIfExists('lista_cliente');
    }
}
