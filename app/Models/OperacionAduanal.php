<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OperacionAduanal extends Model
{
    use HasFactory;

    protected $table = 'operaciones_aduanales';

    protected $fillable = [
        'referencia', 'pedimento', 'cliente', 'aduana', 'patente', 'tipo_mercancia', 'tipo_operacion', 'estatus', 'fecha_arribo', 'pais_origen', 'fecha_zarpe', 'pais_destino'
    ];

  /*   public function contenedores()
    {
        return $this->hasMany(Contenedor::class, 'operacion_id');
    }

    public function cargasSueltas()
    {
        return $this->hasMany(CargaSuelta::class, 'operacion_id');
    } */
}