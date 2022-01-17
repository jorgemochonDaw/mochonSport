<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCalzadoFacturaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calzado_factura', function (Blueprint $table) {
            $table->bigInteger('calzado_id')->unsigned();
            $table->bigInteger('factura_id')->unsigned();
            $table->integer('anniadido')->unsigned();
            $table->foreign('calzado_id')->references('id')->on('calzados');
            $table->foreign('factura_id')->references('id')->on('facturas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('calzado_factura');
    }
}
