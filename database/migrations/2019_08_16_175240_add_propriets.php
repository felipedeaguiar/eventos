<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPropriets extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('lista_cliente', function (Blueprint $table) {
            $table->unsignedBigInteger('promoter_id');
            $table->foreign('promoter_id')->references('id')->on('promoter');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('lista_cliente', function (Blueprint $table) {
            //
        });
    }
}
