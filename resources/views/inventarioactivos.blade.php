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
                <li><a href="{{ route('dashboard') }}" class="block px-4 py-3 rounded-lg hover:bg-orange-500">Dashboard</a></li>
                <li><a href="{{ route('departamento.index') }}" class="block px-4 py-3 rounded-lg hover:bg-orange-500">Departamento</a></li>
                <li><a href="{{ route('responsable') }}" class="block px-4 py-3 rounded-lg hover:bg-orange-500">Responsables</a></li>
                <li><a href="{{ route('inventario') }}" class="block px-4 py-3 rounded-lg hover:bg-orange-500">Inventario</a></li>
                <li><a href="{{ route('reportes') }}" class="block px-4 py-3 rounded-lg hover:bg-orange-500">Reportes</a></li>
                <li><a href="{{ route('sourvenirs') }}" class="block px-4 py-3 rounded-lg hover:bg-orange-500">Sourvenirs</a></li>
                <li><a href="{{ route('papeleriainsumos') }}" class="block px-4 py-3 rounded-lg hover:bg-orange-500">Insumos de papelería</a></li>
                <li><a href="{{ route('inventarioactivos') }}" class="block px-4 py-3 rounded-lg hover:bg-orange-500">Inventario Activos</a></li>
                <li><a href="#" class="block px-4 py-3 rounded-lg hover:bg-orange-500">Configuración</a></li>
            </ul>
        </nav>
    </div> --}}

    <!-- Contenido principal -->
    <div class="flex-1 p-8 bg-white">
        <div class="flex items-center justify-between mb-4">
            <h1 class="text-2xl font-bold text-gray-700">Inventario Activos</h1>
            <a href="#" class="px-4 py-2 text-white bg-blue-500 rounded-lg hover:bg-blue-600">Añadir Activo</a>
        </div>

        <!-- Filtros -->
        <div class="p-6 mb-6 border border-gray-300 rounded-lg bg-gray-50">
            <h2 class="mb-4 text-lg font-semibold text-gray-700">Buscar Activo</h2>
            <form method="GET" action="#" class="grid grid-cols-1 gap-4 md:grid-cols-3">
                <!-- Filtro por Número de Serie -->
                <div>
                    <label for="numero_serie" class="block mb-2 text-sm font-medium text-gray-700">Número de Serie</label>
                    <input type="text" id="numero_serie" name="numero_serie" placeholder="Ingrese Número de Serie" class="w-full p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring focus:ring-blue-300">
                </div>
                <!-- Filtro por Clasificación del SAT -->
                <div>
                    <label for="clasificacion_sat" class="block mb-2 text-sm font-medium text-gray-700">Clasificación del SAT</label>
                    <input type="text" id="clasificacion_sat" name="clasificacion_sat" placeholder="Ingrese Clasificación del SAT" class="w-full p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring focus:ring-blue-300">
                </div>
                <!-- Filtro por Fecha de Adquisición -->
                <div>
                    <label for="fecha_adquisicion" class="block mb-2 text-sm font-medium text-gray-700">Fecha de Adquisición</label>
                    <input type="date" id="fecha_adquisicion" name="fecha_adquisicion" class="w-full p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring focus:ring-blue-300">
                </div>
                <!-- Botón de búsqueda -->
                <div class="flex justify-end md:col-span-3">
                    <button type="submit" class="px-6 py-2 text-white bg-green-500 rounded-lg hover:bg-green-600">Buscar</button>
                </div>
            </form>
        </div>

        <!-- Tabla de Inventario Activos -->
        <div class="overflow-x-auto">
            <table class="min-w-full border border-collapse border-gray-300">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="px-4 py-2 text-sm font-semibold text-left text-gray-700 border border-gray-300">#</th>
                        <th class="px-4 py-2 text-sm font-semibold text-left text-gray-700 border border-gray-300">Número de Serie</th>
                        <th class="px-4 py-2 text-sm font-semibold text-left text-gray-700 border border-gray-300">Clasificación del SAT</th>
                        <th class="px-4 py-2 text-sm font-semibold text-left text-gray-700 border border-gray-300">Fecha de Adquisición</th>
                        <th class="px-4 py-2 text-sm font-semibold text-left text-gray-700 border border-gray-300">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Ejemplo de datos -->
                    <tr class="hover:bg-gray-100">
                        <td class="px-4 py-2 text-sm text-gray-600 border border-gray-300">1</td>
                        <td class="px-4 py-2 text-sm text-gray-600 border border-gray-300">SN123456789</td>
                        <td class="px-4 py-2 text-sm text-gray-600 border border-gray-300">Mobiliario de Oficina</td>
                        <td class="px-4 py-2 text-sm text-gray-600 border border-gray-300">2023-05-10</td>
                        <td class="px-4 py-2 text-sm text-gray-600 border border-gray-300">
                            <a href="#" class="mr-2 text-blue-500 hover:underline">Detalles</a>
                            <a href="#" class="mr-2 text-yellow-500 hover:underline">Editar</a>
                            <a href="#" class="text-red-500 hover:underline">Eliminar</a>
                        </td>
                    </tr>
                    <!-- Más filas dinámicas -->
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
