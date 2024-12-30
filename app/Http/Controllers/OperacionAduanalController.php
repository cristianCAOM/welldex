<?php
namespace App\Http\Controllers;

use App\Models\OperacionAduanal;
use Illuminate\Http\Request;

class OperacionAduanalController extends Controller
{
    public function index()
    {
        $operaciones = OperacionAduanal::all();
        return view('operaciones.index', compact('operaciones'));
    }

    public function create()
    {
        return view('operaciones.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'referencia' => 'required|string',
            'pedimento' => 'required|string',
            'cliente' => 'required|string',
            'aduana' => 'required|string',
            'patente' => 'required|string',
            'tipo_mercancia' => 'required|in:contenedor,carga_suelta',
            'tipo_operacion' => 'required|in:importacion,exportacion',
            'fecha_arribo' => 'nullable|date',
            'pais_origen' => 'nullable|string',
            'fecha_zarpe' => 'nullable|date',
            'pais_destino' => 'nullable|string',
        ]);

        OperacionAduanal::create($data);

        return redirect()->route('operaciones.index');
    }

    public function show(OperacionAduanal $operacion)
    {
        return view('operaciones.show', compact('operacion'));
    }

    public function edit(OperacionAduanal $operacion)
    {
        return view('operaciones.edit', compact('operacion'));
    }

    public function update(Request $request, OperacionAduanal $operacion)
    {
        $data = $request->validate([
            'referencia' => 'required|string',
            'pedimento' => 'required|string',
            'cliente' => 'required|string',
            'aduana' => 'required|string',
            'patente' => 'required|string',
            'tipo_mercancia' => 'required|in:contenedor,carga_suelta',
            'tipo_operacion' => 'required|in:importacion,exportacion',
            'fecha_arribo' => 'nullable|date',
            'pais_origen' => 'nullable|string',
            'fecha_zarpe' => 'nullable|date',
            'pais_destino' => 'nullable|string',
        ]);

        $operacion->update($data);

        return redirect()->route('operaciones.index');
    }

    public function destroy(OperacionAduanal $operacion)
    {
        $operacion->delete();

        return redirect()->route('operaciones.index')->with('success', 'Operación eliminada correctamente.');
    }
}