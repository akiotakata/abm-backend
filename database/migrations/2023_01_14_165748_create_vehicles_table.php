<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->string('tipo_vehiculo', 64);
            $table->tinyInteger('cantidad_ruedas');
            $table->string('marca', 64);
            $table->string('modelo', 64);
            $table->string('patente', 10);
            $table->integer('numero_chasis');
            $table->mediumInteger('kilometros');
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
        Schema::dropIfExists('vehicles');
    }
};
