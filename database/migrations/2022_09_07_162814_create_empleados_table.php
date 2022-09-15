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
        Schema::create('empleados', function (Blueprint $table) {
            $table->id();

            $table->string('Nombres');
            $table->string('Apellidos');
            $table->varchar('Cedula');
            $table->varchar('Celular');
            $table->string('Correo');
            $table->string('Puesto');
            $table->varchar('Salario');
            $table->string('Estado');

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
        Schema::dropIfExists('empleados');
    }
};
