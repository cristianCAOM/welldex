<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Operaciones Aduanales') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <a href="{{ route('operaciones.create') }}" class="btn btn-primary">Crear Operación</a>
                    <table class="table mt-4">
                        <thead>
                            <tr>
                                <th>Referencia</th>
                                <th>Pedimento</th>
                                <th>Cliente</th>
                                <th>Aduana</th>
                                <th>Patente</th>
                                <th>Tipo Mercancía</th>
                                <th>Tipo Operación</th>
                                <th>Estatus</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($operaciones as $operacion)
                                <tr>
                                    <td>{{ $operacion->referencia }}</td>
                                    <td>{{ $operacion->pedimento }}</td>
                                    <td>{{ $operacion->cliente }}</td>
                                    <td>{{ $operacion->aduana }}</td>
                                    <td>{{ $operacion->patente }}</td>
                                    <td>{{ $operacion->tipo_mercancia }}</td>
                                    <td>{{ $operacion->tipo_operacion }}</td>
                                    <td>{{ $operacion->estatus }}</td>
                                    <td>
                                        <a href="{{ route('operaciones.show', $operacion) }}" class="btn btn-info">Ver</a>
                                        <a href="{{ route('operaciones.edit', $operacion) }}" class="btn btn-warning">Editar</a>
                                        <form action="{{ route('operaciones.destroy', $operacion) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Eliminar</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>