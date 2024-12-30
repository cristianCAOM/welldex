<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContenedoresTable extends Migration
{
    public function up()
    {
        Schema::create('contenedores', function (Blueprint $table) {
            $table->id();
            $table->foreignId('operacion_id')->constrained('operaciones_aduanales')->onDelete('cascade');
            $table->string('numero_contenedor');
            $table->string('tipo_contenedor');
            $table->string('dimensiones');
            $table->date('fecha_descargo')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('contenedores');
    }
}