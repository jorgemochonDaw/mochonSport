<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaterialesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materiales', function (Blueprint $table) {
            $table->id();
            $table->string('silbatos');
            $table->string('banderines');
            $table->string('relojes');
            $table->string('tarjetas');
            $table->float('precio')->unsigned();
            $table->integer('cantidadMaterial')->unsigned();
            $table->string('stock')->default('no disponible');
            $table->string('pathMaterial');
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
        Schema::dropIfExists('materiales');
    }
}
