<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRopasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ropas', function (Blueprint $table) {
            $table->id();
            $table->string('color');
            $table->float('talla')->unsigned();
            $table->string('marca');
            $table->string('tipo');
            $table->float('precio')->unsigned();
            $table->integer('cantidadRopa')->unsigned();
            $table->string('stock')->default('no disponible');
            $table->string('pathRopa');
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
        Schema::dropIfExists('ropas');
    }
}
