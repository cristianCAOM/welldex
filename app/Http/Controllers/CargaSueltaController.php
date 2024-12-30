<?php

namespace App\Http\Controllers;

use App\Models\CargaSuelta;
use App\Models\OperacionAduanal;
use Illuminate\Http\Request;

class CargaSueltaController extends Controller
{
    public function create(OperacionAduanal $operacion)
    {
        return view('cargas_sueltas.create', compact('operacion'));
    }

    public function store(Request $request, OperacionAduanal $operacion)
    {
        $data = $request->validate([
            'descripcion' => 'required|string',
            'cantidad' => 'required|integer',
            'fecha_descargo' => 'nullable|date',
        ]);

        $data['operacion_id'] = $operacion->id;
        CargaSuelta::create($data);

        return redirect()->route('operaciones.show', $operacion);
    }
    public function destroy(CargaSuelta $cargaSuelta)
    {
        $cargaSuelta->delete();

        return redirect()->route('operaciones.index')->with('success', 'Carga suelta eliminada correctamente.');
    }
}