<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Crear Carga Suelta') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="{{ route('cargas_sueltas.store', $operacion) }}" method="POST">
                        @csrf
                        <div class="mb-4">
                            <label for="descripcion" class="block text-gray-700">Descripción</label>
                            <input type="text" name="descripcion" id="descripcion" class="form-input mt-1 block w-full" required>
                        </div>
                        <div class="mb-4">
                            <label for="cantidad" class="block text-gray-700">Cantidad</label>
                            <input type="number" name="cantidad" id="cantidad" class="form-input mt-1 block w-full" required>
                        </div>
                        <div class="mb-4">
                            <label for="fecha_descargo" class="block text-gray-700">Fecha de Descargo</label>
                            <input type="date" name="fecha_descargo" id="fecha_descargo" class="form-input mt-1 block w-full">
                        </div>
                        <div class="mb-4">
                            <button type="submit" class="btn btn-primary">Crear Carga Suelta</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>