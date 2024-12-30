<?php

namespace App\Http\Controllers;

use App\Models\Contenedor;
use App\Models\OperacionAduanal;
use Illuminate\Http\Request;

class ContenedorController extends Controller
{
    public function create(OperacionAduanal $operacion)
    {
        return view('contenedores.create', compact('operacion'));
    }

    public function store(Request $request, OperacionAduanal $operacion)
    {
        $data = $request->validate([
            'numero_contenedor' => 'required|string',
            'tipo_contenedor' => 'required|string',
            'dimensiones' => 'required|string',
            'fecha_descargo' => 'nullable|date',
        ]);

        $data['operacion_id'] = $operacion->id;
        Contenedor::create($data);

        return redirect()->route('operaciones.show', $operacion);
    }
    public function destroy(Contenedor $contenedor)
    {
        $contenedor->delete();

        return redirect()->route('operaciones.index')->with('success', 'Contenedor eliminado correctamente.');
    }
}