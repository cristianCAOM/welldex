<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCargasSueltasTable extends Migration
{
    public function up()
    {
        Schema::create('cargas_sueltas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('operacion_id')->constrained('operaciones_aduanales')->onDelete('cascade');
            $table->string('descripcion');
            $table->integer('cantidad');
            $table->date('fecha_descargo')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('cargas_sueltas');
    }
}