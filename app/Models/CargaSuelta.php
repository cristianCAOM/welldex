<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CargaSuelta extends Model
{
    use HasFactory;

    protected $fillable = [
        'operacion_id', 'descripcion', 'cantidad', 'fecha_descargo'
    ];

    public function operacion()
    {
        return $this->belongsTo(OperacionAduanal::class, 'operacion_id');
    }
}