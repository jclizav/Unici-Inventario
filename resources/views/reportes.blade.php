@extends('layouts.app')

@section('content')
<div class="flex h-screen">
    <!-- Sidebar -->
    <div class="w-64 bg-cyan-700 text-white flex flex-col">
        <div class="p-6 text-center font-bold text-lg">
            <div class="mb-4">
                <p class="mt-2">Elian</p>
                <p class="text-sm text-gray-400">Elian@gmail.com</p>
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
            <h1 class="text-2xl font-bold text-gray-700">Reportes</h1>
            <a href="#" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">Exportar PDF</a>
        </div>

        <!-- Filtros dinámicos -->
        <div class="border border-gray-300 p-6 rounded-lg mb-6 bg-gray-50">
            <h2 class="text-lg font-semibold text-gray-700 mb-4">Generar Reporte</h2>
            <form method="GET" action="#" class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <!-- Filtro por Departamento -->
                <div>
                    <label for="departamento" class="block text-sm font-medium text-gray-700 mb-2">Departamento</label>
                    <select id="departamento" name="departamento" class="border border-gray-300 p-2 rounded-lg w-full focus:outline-none focus:ring focus:ring-blue-300">
                        <option value="">Selecciona un Departamento</option>
                        <option value="finanzas">Finanzas</option>
                        <option value="recursos_humanos">Recursos Humanos</option>
                        <option value="tecnologia">Tecnología</option>
                    </select>
                </div>
                <!-- Filtro por Responsable -->
                <div>
                    <label for="responsable" class="block text-sm font-medium text-gray-700 mb-2">Responsable</label>
                    <select id="responsable" name="responsable" class="border border-gray-300 p-2 rounded-lg w-full focus:outline-none focus:ring focus:ring-blue-300">
                        <option value="">Selecciona un Responsable</option>
                        <option value="juan_perez">Juan Pérez</option>
                        <option value="maria_gomez">María Gómez</option>
                        <option value="pedro_lopez">Pedro López</option>
                    </select>
                </div>
                <!-- Filtro por Estado -->
                <div>
                    <label for="estado" class="block text-sm font-medium text-gray-700 mb-2">Estado</label>
                    <select id="estado" name="estado" class="border border-gray-300 p-2 rounded-lg w-full focus:outline-none focus:ring focus:ring-blue-300">
                        <option value="">Selecciona un Estado</option>
                        <option value="en_uso">En Uso</option>
                        <option value="resguardo">Resguardo</option>
                        <option value="en_revision">En Revisión</option>
                        <option value="descompuesto">Descompuesto</option>
                        <option value="de_baja">De Baja</option>
                    </select>
                </div>
                <!-- Botón de búsqueda -->
                <div class="md:col-span-3 flex justify-end">
                    <button type="submit" class="bg-green-500 text-white px-6 py-2 rounded-lg hover:bg-green-600">Generar Reporte</button>
                </div>
            </form>
        </div>

        <!-- Resultados de Reportes -->
        <div class="overflow-x-auto">
            <table class="min-w-full border-collapse border border-gray-300">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="border border-gray-300 px-4 py-2 text-left text-sm font-semibold text-gray-700">#</th>
                        <th class="border border-gray-300 px-4 py-2 text-left text-sm font-semibold text-gray-700">Nombre del Bien</th>
                        <th class="border border-gray-300 px-4 py-2 text-left text-sm font-semibold text-gray-700">Departamento</th>
                        <th class="border border-gray-300 px-4 py-2 text-left text-sm font-semibold text-gray-700">Responsable</th>
                        <th class="border border-gray-300 px-4 py-2 text-left text-sm font-semibold text-gray-700">Estado</th>
                        <th class="border border-gray-300 px-4 py-2 text-left text-sm font-semibold text-gray-700">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Ejemplo de datos -->
                    <tr class="hover:bg-gray-100">
                        <td class="border border-gray-300 px-4 py-2 text-sm text-gray-600">1</td>
                        <td class="border border-gray-300 px-4 py-2 text-sm text-gray-600">Laptop HP</td>
                        <td class="border border-gray-300 px-4 py-2 text-sm text-gray-600">Tecnología</td>
                        <td class="border border-gray-300 px-4 py-2 text-sm text-gray-600">Juan Pérez</td>
                        <td class="border border-gray-300 px-4 py-2 text-sm text-gray-600">En Uso</td>
                        <td class="border border-gray-300 px-4 py-2 text-sm text-gray-600">
                            <a href="#" class="text-blue-500 hover:underline mr-2">Detalles</a>
                        </td>
                    </tr>
                    <!-- Más filas dinámicas -->
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
