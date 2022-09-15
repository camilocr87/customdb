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
        Schema::create('vehiculos', function (Blueprint $table) {
            $table->id();

            $table->string('Marca');
            $table->string('Modelo');
            $table->varchar('Precio');
            $table->string('Kilometraje');
            $table->string('Transmision');
            $table->varchar('Motor');
            $table->string('Placa');
            $table->string('Ciudad');
            $table->string('Estado');
            $table->string('Foto');

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
        Schema::dropIfExists('vehiculos');
    }
};