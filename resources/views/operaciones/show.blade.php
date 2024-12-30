<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Detalles de la Operación Aduanal') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-lg font-semibold">Referencia: {{ $operacion->referencia }}</h3>
                    <p>Pedimento: {{ $operacion->pedimento }}</p>
                    <p>Cliente: {{ $operacion->cliente }}</p>
                    <p>Aduana: {{ $operacion->aduana }}</p>
                    <p>Patente: {{ $operacion->patente }}</p>
                    <p>Tipo de Mercancía: {{ $operacion->tipo_mercancia }}</p>
                    <p>Tipo de Operación: {{ $operacion->tipo_operacion }}</p>
                    <p>Fecha de Arribo: {{ $operacion->fecha_arribo }}</p>
                    <p>País de Origen: {{ $operacion->pais_origen }}</p>
                    <p>Fecha de Zarpe: {{ $operacion->fecha_zarpe }}</p>
                    <p>País de Destino: {{ $operacion->pais_destino }}</p>

                    <a href="{{ route('operaciones.edit', $operacion) }}" class="btn btn-warning">Editar</a>

                    <form action="{{ route('operaciones.destroy', $operacion) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>