@extends('layouts.app')

@section('content')

    <!-- Contenido principal -->
    <div class="flex-1 bg-white p-8">
        <div class="flex justify-between items-center mb-4">
            <h1 class="text-2xl font-bold text-gray-700">Papelería e Insumos</h1>
            <a href="#" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">Añadir Insumo</a>
        </div>

        <!-- Filtros -->
        <div class="border border-gray-300 p-6 rounded-lg mb-6 bg-gray-50">
            <h2 class="text-lg font-semibold text-gray-700 mb-4">Buscar Insumo</h2>
            <form method="GET" action="#" class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <!-- Unidad de Medida -->
                <div>
                    <label for="unidad_medida" class="block text-sm font-medium text-gray-700 mb-2">Unidad de Medida</label>
                    <input type="text" id="unidad_medida" name="unidad_medida" placeholder="Ejemplo: Caja, Paquete" class="border border-gray-300 p-2 rounded-lg w-full focus:outline-none focus:ring focus:ring-blue-300">
                </div>
                <!-- Precio -->
                <div>
                    <label for="precio" class="block text-sm font-medium text-gray-700 mb-2">Precio</label>
                    <input type="number" id="precio" name="precio" placeholder="Ingrese Precio" class="border border-gray-300 p-2 rounded-lg w-full focus:outline-none focus:ring focus:ring-blue-300">
                </div>
                <!-- Botón de búsqueda -->
                <div class="md:col-span-3 flex justify-end">
                    <button type="button" class="bg-orange-500 text-white px-6 py-2 rounded-lg hover:bg-green-600">Buscar</button>
                </div>
            </form>
        </div>

        <!-- Tabla de Insumos -->
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
                    <!-- Datos estáticos de ejemplo -->
                    <tr class="hover:bg-gray-100">
                        <td class="border border-gray-300 px-4 py-2 text-sm text-gray-600">1</td>
                        <td class="border border-gray-300 px-4 py-2 text-sm text-gray-600">Caja</td>
                        <td class="border border-gray-300 px-4 py-2 text-sm text-gray-600">$150.00</td>
                        <td class="border border-gray-300 px-4 py-2 text-sm text-gray-600">
                            <a href="#" class="text-blue-500 hover:underline mr-2">Detalles</a>
                            <a href="#" class="text-yellow-500 hover:underline mr-2">Editar</a>
                            <a href="#" class="text-red-500 hover:underline">Eliminar</a>
                        </td>
                    </tr>
                    <tr class="hover:bg-gray-100">
                        <td class="border border-gray-300 px-4 py-2 text-sm text-gray-600">2</td>
                        <td class="border border-gray-300 px-4 py-2 text-sm text-gray-600">Paquete</td>
                        <td class="border border-gray-300 px-4 py-2 text-sm text-gray-600">$75.00</td>
                        <td class="border border-gray-300 px-4 py-2 text-sm text-gray-600">
                            <a href="#" class="text-blue-500 hover:underline mr-2">Detalles</a>
                            <a href="#" class="text-yellow-500 hover:underline mr-2">Editar</a>
                            <a href="#" class="text-red-500 hover:underline">Eliminar</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
