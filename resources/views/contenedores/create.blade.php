<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Crear Contenedor') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="{{ route('contenedores.store', $operacion) }}" method="POST">
                        @csrf
                        <div class="mb-4">
                            <label for="numero_contenedor" class="block text-gray-700">Número de Contenedor</label>
                            <input type="text" name="numero_contenedor" id="numero_contenedor" class="form-input mt-1 block w-full" required>
                        </div>
                        <div class="mb-4">
                            <label for="tipo_contenedor" class="block text-gray-700">Tipo de Contenedor</label>
                            <input type="text" name="tipo_contenedor" id="tipo_contenedor" class="form-input mt-1 block w-full" required>
                        </div>
                        <div class="mb-4">
                            <label for="dimensiones" class="block text-gray-700">Dimensiones</label>
                            <input type="text" name="dimensiones" id="dimensiones" class="form-input mt-1 block w-full" required>
                        </div>
                        <div class="mb-4">
                            <label for="fecha_descargo" class="block text-gray-700">Fecha de Descargo</label>
                            <input type="date" name="fecha_descargo" id="fecha_descargo" class="form-input mt-1 block w-full">
                        </div>
                        <div class="mb-4">
                            <button type="submit" class="btn btn-primary">Crear Contenedor</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>