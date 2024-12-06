@extends('layouts.app')

@section('content')
<div class="flex h-screen">
    <div class="w-64 bg-cyan-700 text-white flex flex-col">
        <div class="p-6 text-center font-bold text-lg">
            <div class="mb-4">
                @if(Auth::check())
                    <p class="mt-2">{{ Auth::user()->name }}</p> 
                    <p class="text-sm text-gray-400">{{ Auth::user()->email }}</p> 
                @else
                    <p class="mt-2">Invitado</p>
                    <p class="text-sm text-gray-400">No autenticado</p>
                @endif
            </div>
        </div>

        <nav class="flex-1">
            <ul>
                <li><a href="{{ route('dashboard') }}" class="block py-3 px-4 hover:bg-orange-500 rounded-lg">Dashboard</a></li>
                <li><a href="{{ route('departamento.index') }}" class="block py-3 px-4 hover:bg-orange-500 rounded-lg">Departamento</a></li>
                <li><a href="{{ route('responsable') }}" class="block py-3 px-4 hover:bg-orange-500 rounded-lg">Responsables</a></li>
                <li><a href="{{ route('inventario') }}" class="block py-3 px-4 hover:bg-orange-500 rounded-lg">Inventario</a></li>
                <li><a href="{{ route('reportes') }}" class="block py-3 px-4 hover:bg-orange-500 rounded-lg">Reportes</a></li>
                <li><a href="{{ route('sourvenirs') }}" class="block py-3 px-4 hover:bg-orange-500 rounded-lg">Sourvenirs</a></li>
                <li><a href="{{ route('papeleriainsumos') }}" class="block py-3 px-4 hover:bg-orange-500 rounded-lg">Insumos de papelería</a></li>
                <li><a href="{{ route('inventarioactivos') }}" class="block py-3 px-4 hover:bg-orange-500 rounded-lg">Inventario activos</a></li>
                <li><a href="#" class="block py-3 px-4 hover:bg-orange-500 rounded-lg">Configuración</a></li>
            </ul>
        </nav>
    </div>

    <!-- Contenido principal -->
    <div class="flex-1 bg-white p-8">
        <div class="flex justify-between items-center mb-4">
            <h1 class="text-2xl font-bold text-gray-700">Sourvenirs</h1>
            <a href="#" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">Añadir Sourvenir</a>
        </div>

        <!-- Tabla para Sourvenirs -->
        <div class="overflow-x-auto">
            <table class="min-w-full border-collapse border border-gray-300">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="border border-gray-300 px-4 py-2 text-left text-sm font-semibold text-gray-700">#</th>
                        <th class="border border-gray-300 px-4 py-2 text-left text-sm font-semibold text-gray-700">Unidad de Medida</th>
                        <th class="border border-gray-300 px-4 py-2 text-left text-sm font-semibold text-gray-700">Precio</th>
                        <th class="border border-gray-300 px-4 py-2 text-left text-sm font-semibold text-gray-700">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Ejemplo de datos -->
                    <tr class="hover:bg-gray-100">
                        <td class="border border-gray-300 px-4 py-2 text-sm text-gray-600">1</td>
                        <td class="border border-gray-300 px-4 py-2 text-sm text-gray-600">Pieza</td>
                        <td class="border border-gray-300 px-4 py-2 text-sm text-gray-600">$10.00</td>
                        <td class="border border-gray-300 px-4 py-2 text-sm text-gray-600">
                            <a href="#" class="text-yellow-500 hover:underline mr-2">Editar</a>
                            <a href="#" class="text-red-500 hover:underline">Eliminar</a>
                        </td>
                    </tr>
                    <!-- Más filas -->
                </tbody>
            </table>
        </div>

        <!-- Configuración -->
        <div class="mt-8">
            <h2 class="text-xl font-bold text-gray-700 mb-4">Configuración</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Administración de Usuarios -->
                <div class="border border-gray-300 p-4 rounded-lg bg-gray-50">
                    <h3 class="text-lg font-semibold text-gray-700 mb-2">Administración de Usuarios</h3>
                    <p class="text-sm text-gray-600">Gestiona los usuarios que tienen acceso al sistema.</p>
                    <a href="#" class="text-blue-500 hover:underline mt-2 block">Ir a Usuarios</a>
                </div>
                <!-- Roles -->
                <div class="border border-gray-300 p-4 rounded-lg bg-gray-50">
                    <h3 class="text-lg font-semibold text-gray-700 mb-2">Roles</h3>
                    <p class="text-sm text-gray-600">Define los roles y permisos de los usuarios.</p>
                    <a href="#" class="text-blue-500 hover:underline mt-2 block">Ir a Roles</a>
                </div>
                <!-- Permisos -->
                <div class="border border-gray-300 p-4 rounded-lg bg-gray-50">
                    <h3 class="text-lg font-semibold text-gray-700 mb-2">Permisos</h3>
                    <p class="text-sm text-gray-600">Configura los permisos específicos para cada rol.</p>
                    <a href="#" class="text-blue-500 hover:underline mt-2 block">Ir a Permisos</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
