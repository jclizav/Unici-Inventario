@extends('layouts.app')

@section('content')

    <!-- Contenido principal -->
    <div class="flex-1 p-8 bg-white">
        <div class="flex items-center justify-between mb-4">
            <h1 class="text-2xl font-bold text-gray-700">Sourvenirs</h1>
            <a href="#" class="px-4 py-2 text-white bg-blue-500 rounded-lg hover:bg-blue-600">Añadir Sourvenir</a>
        </div>

        <!-- Tabla para Sourvenirs -->
        <div class="overflow-x-auto">
            <table class="min-w-full border border-collapse border-gray-300">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="px-4 py-2 text-sm font-semibold text-left text-gray-700 border border-gray-300">#</th>
                        <th class="px-4 py-2 text-sm font-semibold text-left text-gray-700 border border-gray-300">Unidad de Medida</th>
                        <th class="px-4 py-2 text-sm font-semibold text-left text-gray-700 border border-gray-300">Precio</th>
                        <th class="px-4 py-2 text-sm font-semibold text-left text-gray-700 border border-gray-300">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Ejemplo de datos -->
                    <tr class="hover:bg-gray-100">
                        <td class="px-4 py-2 text-sm text-gray-600 border border-gray-300">1</td>
                        <td class="px-4 py-2 text-sm text-gray-600 border border-gray-300">Pieza</td>
                        <td class="px-4 py-2 text-sm text-gray-600 border border-gray-300">$10.00</td>
                        <td class="px-4 py-2 text-sm text-gray-600 border border-gray-300">
                            <a href="#" class="mr-2 text-yellow-500 hover:underline">Editar</a>
                            <a href="#" class="text-red-500 hover:underline">Eliminar</a>
                        </td>
                    </tr>
                    <!-- Más filas -->
                </tbody>
            </table>
        </div>

        <!-- Configuración -->
        <div class="mt-8">
            <h2 class="mb-4 text-xl font-bold text-gray-700">Configuración</h2>
            <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3">
                <!-- Administración de Usuarios -->
                <div class="p-4 border border-gray-300 rounded-lg bg-gray-50">
                    <h3 class="mb-2 text-lg font-semibold text-gray-700">Administración de Usuarios</h3>
                    <p class="text-sm text-gray-600">Gestiona los usuarios que tienen acceso al sistema.</p>
                    <a href="#" class="block mt-2 text-blue-500 hover:underline">Ir a Usuarios</a>
                </div>
                <!-- Roles -->
                <div class="p-4 border border-gray-300 rounded-lg bg-gray-50">
                    <h3 class="mb-2 text-lg font-semibold text-gray-700">Roles</h3>
                    <p class="text-sm text-gray-600">Define los roles y permisos de los usuarios.</p>
                    <a href="#" class="block mt-2 text-blue-500 hover:underline">Ir a Roles</a>
                </div>
                <!-- Permisos -->
                <div class="p-4 border border-gray-300 rounded-lg bg-gray-50">
                    <h3 class="mb-2 text-lg font-semibold text-gray-700">Permisos</h3>
                    <p class="text-sm text-gray-600">Configura los permisos específicos para cada rol.</p>
                    <a href="#" class="block mt-2 text-blue-500 hover:underline">Ir a Permisos</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
