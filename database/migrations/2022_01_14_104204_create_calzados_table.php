<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCalzadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calzados', function (Blueprint $table) {
            $table->id();
            $table->string('color');
            $table->float('talla')->unsigned();
            $table->string('marca');
            $table->float('precio')->unsigned();
            $table->integer('cantidadCalzado')->unsigned();
            $table->string('stock')->default('no disponible');
            $table->string('pathCalzado');
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
        Schema::dropIfExists('calzados');
    }
}
