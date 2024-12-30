<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Crear Operación Aduanal') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="{{ route('operaciones.store') }}" method="POST">
                        @csrf
                        <div class="mb-4">
                            <label for="referencia" class="block text-gray-700">Referencia</label>
                            <input type="text" name="referencia" id="referencia" class="form-input mt-1 block w-full" required>
                        </div>
                        <div class="mb-4">
                            <label for="pedimento" class="block text-gray-700">Pedimento</label>
                            <input type="text" name="pedimento" id="pedimento" class="form-input mt-1 block w-full" required>
                        </div>
                        <div class="mb-4">
                            <label for="cliente" class="block text-gray-700">Cliente</label>
                            <input type="text" name="cliente" id="cliente" class="form-input mt-1 block w-full" required>
                        </div>
                        <div class="mb-4">
                            <label for="aduana" class="block text-gray-700">Aduana</label>
                            <input type="text" name="aduana" id="aduana" class="form-input mt-1 block w-full" required>
                        </div>
                        <div class="mb-4">
                            <label for="patente" class="block text-gray-700">Patente</label>
                            <input type="text" name="patente" id="patente" class="form-input mt-1 block w-full" required>
                        </div>
                        <div class="mb-4">
                            <label for="tipo_mercancia" class="block text-gray-700">Tipo de Mercancía</label>
                            <select name="tipo_mercancia" id="tipo_mercancia" class="form-select mt-1 block w-full" required>
                                <option value="contenedor">Contenedor</option>
                                <option value="carga_suelta">Carga Suelta</option>
                            </select>
                        </div>
                        <div class="mb-4">
                            <label for="tipo_operacion" class="block text-gray-700">Tipo de Operación</label>
                            <select name="tipo_operacion" id="tipo_operacion" class="form-select mt-1 block w-full" required>
                                <option value="importacion">Importación</option>
                                <option value="exportacion">Exportación</option>
                            </select>
                        </div>
                        <div class="mb-4">
                            <label for="estatus" class="block text-gray-700">Estatus</label>
                            <input type="text" name="estatus" id="estatus" class="form-input mt-1 block w-full" required>
                        </div>
                        <div class="mb-4">
                            <label for="fecha_arribo" class="block text-gray-700">Fecha de Arribo</label>
                            <input type="date" name="fecha_arribo" id="fecha_arribo" class="form-input mt-1 block w-full">
                        </div>
                        <div class="mb-4">
                            <label for="pais_origen" class="block text-gray-700">País de Origen</label>
                            <input type="text" name="pais_origen" id="pais_origen" class="form-input mt-1 block w-full">
                        </div>
                        <div class="mb-4">
                            <label for="fecha_zarpe" class="block text-gray-700">Fecha de Zarpe</label>
                            <input type="date" name="fecha_zarpe" id="fecha_zarpe" class="form-input mt-1 block w-full">
                        </div>
                        <div class="mb-4">
                            <label for="pais_destino" class="block text-gray-700">País de Destino</label>
                            <input type="text" name="pais_destino" id="pais_destino" class="form-input mt-1 block w-full">
                        </div>
                        <div class="mb-4">
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>