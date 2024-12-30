<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contenedor extends Model
{
    use HasFactory;

    protected $table = 'contenedores'; // Asegúrate de que el nombre de la tabla sea correcto

    protected $fillable = [
        'operacion_id', 'numero_contenedor', 'tipo_contenedor', 'dimensiones', 'fecha_descargo'
    ];

    public function operacion()
    {
        return $this->belongsTo(OperacionAduanal::class, 'operacion_id');
    }
}