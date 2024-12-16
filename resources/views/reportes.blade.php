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
                <li><a href="{{ route('inventarioactivos') }}" class="block px-4 py-3 rounded-lg hover:bg-orange-500">Inventario activos</a></li>
                <li><a href="#" class="block px-4 py-3 rounded-lg hover:bg-orange-500">Configuración</a></li>
            </ul>
        </nav>
    </div> --}}

    <!-- Contenido principal -->
    <div class="flex-1 p-8 bg-white">
        <div class="flex items-center justify-between mb-4">
            <h1 class="text-2xl font-bold text-gray-700">Reportes</h1>
            <a href="#" class="px-4 py-2 text-white bg-blue-500 rounded-lg hover:bg-blue-600">Exportar PDF</a>
        </div>

        <!-- Filtros dinámicos -->
        <div class="p-6 mb-6 border border-gray-300 rounded-lg bg-gray-50">
            <h2 class="mb-4 text-lg font-semibold text-gray-700">Generar Reporte</h2>
            <form method="GET" action="#" class="grid grid-cols-1 gap-4 md:grid-cols-3">
                <!-- Filtro por Departamento -->
                <div>
                    <label for="departamento" class="block mb-2 text-sm font-medium text-gray-700">Departamento</label>
                    <select id="departamento" name="departamento" class="w-full p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring focus:ring-blue-300">
                        <option value="">Selecciona un Departamento</option>
                        <option value="finanzas">Finanzas</option>
                        <option value="recursos_humanos">Recursos Humanos</option>
                        <option value="tecnologia">Tecnología</option>
                    </select>
                </div>
                <!-- Filtro por Responsable -->
                <div>
                    <label for="responsable" class="block mb-2 text-sm font-medium text-gray-700">Responsable</label>
                    <select id="responsable" name="responsable" class="w-full p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring focus:ring-blue-300">
                        <option value="">Selecciona un Responsable</option>
                        <option value="juan_perez">Juan Pérez</option>
                        <option value="maria_gomez">María Gómez</option>
                        <option value="pedro_lopez">Pedro López</option>
                    </select>
                </div>
                <!-- Filtro por Estado -->
                <div>
                    <label for="estado" class="block mb-2 text-sm font-medium text-gray-700">Estado</label>
                    <select id="estado" name="estado" class="w-full p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring focus:ring-blue-300">
                        <option value="">Selecciona un Estado</option>
                        <option value="en_uso">En Uso</option>
                        <option value="resguardo">Resguardo</option>
                        <option value="en_revision">En Revisión</option>
                        <option value="descompuesto">Descompuesto</option>
                        <option value="de_baja">De Baja</option>
                    </select>
                </div>
                <!-- Botón de búsqueda -->
                <div class="flex justify-end md:col-span-3">
                    <button type="submit" class="px-6 py-2 text-white bg-green-500 rounded-lg hover:bg-green-600">Generar Reporte</button>
                </div>
            </form>
        </div>

        <!-- Resultados de Reportes -->
        <div class="overflow-x-auto">
            <table class="min-w-full border border-collapse border-gray-300">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="px-4 py-2 text-sm font-semibold text-left text-gray-700 border border-gray-300">#</th>
                        <th class="px-4 py-2 text-sm font-semibold text-left text-gray-700 border border-gray-300">Nombre del Bien</th>
                        <th class="px-4 py-2 text-sm font-semibold text-left text-gray-700 border border-gray-300">Departamento</th>
                        <th class="px-4 py-2 text-sm font-semibold text-left text-gray-700 border border-gray-300">Responsable</th>
                        <th class="px-4 py-2 text-sm font-semibold text-left text-gray-700 border border-gray-300">Estado</th>
                        <th class="px-4 py-2 text-sm font-semibold text-left text-gray-700 border border-gray-300">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Ejemplo de datos -->
                    <tr class="hover:bg-gray-100">
                        <td class="px-4 py-2 text-sm text-gray-600 border border-gray-300">1</td>
                        <td class="px-4 py-2 text-sm text-gray-600 border border-gray-300">Laptop HP</td>
                        <td class="px-4 py-2 text-sm text-gray-600 border border-gray-300">Tecnología</td>
                        <td class="px-4 py-2 text-sm text-gray-600 border border-gray-300">Juan Pérez</td>
                        <td class="px-4 py-2 text-sm text-gray-600 border border-gray-300">En Uso</td>
                        <td class="px-4 py-2 text-sm text-gray-600 border border-gray-300">
                            <a href="#" class="mr-2 text-blue-500 hover:underline">Detalles</a>
                        </td>
                    </tr>
                    <!-- Más filas dinámicas -->
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
