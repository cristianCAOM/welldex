<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('User Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in as User!") }}
                </div>
            </div>
        </div>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-6">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <h3 class="text-lg font-semibold">Crear Operación Aduanal</h3>
                        <p class="mt-2">Crear una nueva operación aduanal.</p>
                        <a href="{{ route('operaciones.create') }}" class="mt-4 inline-block bg-blue-500 text-white px-4 py-2 rounded">Crear</a>
                    </div>
                </div>
                <!-- Puedes agregar más cards aquí -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <h3 class="text-lg font-semibold">Ver Operaciones Aduanales</h3>
                        <p class="mt-2">Ver todas las operaciones aduanales existentes.</p>
                        <a href="{{ route('operaciones.index') }}" class="mt-4 inline-block bg-green-500 text-white px-4 py-2 rounded">Ver</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>