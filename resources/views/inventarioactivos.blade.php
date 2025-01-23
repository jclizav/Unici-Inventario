@extends('layouts.app')

@section('content')

    <!-- Contenido principal -->
    <div class="main-content">
        <section class="section">
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
        </section>
</div>
@endsection
