<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCalzadoCarritoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calzado_carrito', function (Blueprint $table) {
            $table->bigInteger('calzado_id')->unsigned();
            $table->bigInteger('carrito_id')->unsigned();
            $table->integer('anniadido')->unsigned();
            $table->foreign('calzado_id')->references('id')->on('calzados');
            $table->foreign('carrito_id')->references('id')->on('carritos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('calzado_carrito');
    }
}
