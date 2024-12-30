<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOperacionesAduanalesTable extends Migration
{
    public function up()
    {
        Schema::create('operaciones_aduanales', function (Blueprint $table) {
            $table->id();
            $table->string('referencia');
            $table->string('pedimento');
            $table->string('cliente');
            $table->string('aduana');
            $table->string('patente');
            $table->enum('tipo_mercancia', ['contenedor', 'carga_suelta']);
            $table->enum('tipo_operacion', ['importacion', 'exportacion']);
            $table->enum('estatus', ['alta', 'en_espera_de_zarpe', 'en_trayecto', 'en_atraque', 'en_descargo', 'descargada', 'en_reconocimiento', 'liberada'])->default('alta');
            $table->date('fecha_arribo')->nullable();
            $table->string('pais_origen')->nullable();
            $table->date('fecha_zarpe')->nullable();
            $table->string('pais_destino')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('operaciones_aduanales');
    }
}