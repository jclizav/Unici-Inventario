@extends('layouts.app')

@section('content')
    <!-- Contenido principal -->
    <div class="flex-1 bg-white p-8">
        <div class="flex justify-between items-center mb-4">
            <h1 class="text-2xl font-bold text-gray-700">Departamentos</h1>
            <a href="#" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">Añadir Departamento</a>
        </div>

        <!-- Formulario para agregar departamentos -->
        <div class="border border-gray-300 p-6 rounded-lg mb-6 bg-gray-50">
            <h2 class="text-lg font-semibold text-gray-700 mb-4">Registrar Departamento</h2>
            <form method="POST" action="#" class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <!-- Campo Campus -->
                <div>
                    <label for="campus" class="block text-sm font-medium text-gray-700 mb-2">Campus</label>
                    <input type="text" id="campus" name="campus" placeholder="Ejemplo: Campus Central" class="border border-gray-300 p-2 rounded-lg w-full focus:outline-none focus:ring focus:ring-blue-300">
                </div>
                <!-- Campo Departamento -->
                <div>
                    <label for="departamento" class="block text-sm font-medium text-gray-700 mb-2">Departamento/Área</label>
                    <input type="text" id="departamento" name="departamento" placeholder="Ejemplo: Recursos Humanos" class="border border-gray-300 p-2 rounded-lg w-full focus:outline-none focus:ring focus:ring-blue-300">
                </div>
                <!-- Botón de enviar -->
                <div class="md:col-span-2 flex justify-end">
                    <button type="submit" class="bg-green-500 text-white px-6 py-2 rounded-lg hover:bg-green-600">Guardar</button>
                </div>
            </form>
        </div>

        <!-- Tabla para listar departamentos -->
        <div class="overflow-x-auto">
            <table class="min-w-full border-collapse border border-gray-300">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="border border-gray-300 px-4 py-2 text-left text-sm font-semibold text-gray-700">#</th>
                        <th class="border border-gray-300 px-4 py-2 text-left text-sm font-semibold text-gray-700">Campus</th>
                        <th class="border border-gray-300 px-4 py-2 text-left text-sm font-semibold text-gray-700">Departamento/Área</th>
                        <th class="border border-gray-300 px-4 py-2 text-left text-sm font-semibold text-gray-700">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Ejemplo de datos estáticos -->
                    <tr class="hover:bg-gray-100">
                        <td class="border border-gray-300 px-4 py-2 text-sm text-gray-600">1</td>
                        <td class="border border-gray-300 px-4 py-2 text-sm text-gray-600">Campus Central</td>
                        <td class="border border-gray-300 px-4 py-2 text-sm text-gray-600">Recursos Humanos</td>
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
