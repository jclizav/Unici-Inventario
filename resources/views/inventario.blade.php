<!-- resources/views/inventario.blade.php -->

@extends('layouts.app')

@section('content')
<div class="bg-white shadow-md py-4 mb-6">
    <div class="max-w-7xl mx-auto px-6 text-center">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Inventario') }}
        </h2>
    </div>
</div>
<div class="flex h-screen">
    <!-- Sidebar -->
    <div class="w-64 bg-teal-600 text-black flex flex-col">
        <div class="p-6 text-center font-bold text-lg">
            <div class="mb-4">
                <p class="mt-2">Elian</p>
                <p class="text-sm text-gray-800">Elian@gmail.com</p>
            </div>
        </div>

        <nav class="flex-1">
            <ul>
                <li><a href="{{ route('dashboard') }}" class="block py-3 px-4 hover:bg-teal-500 rounded-lg">Dashboard</a></li>
                <li><a href="{{ route('departamento.index') }}" class="block py-3 px-4 hover:bg-teal-500 rounded-lg">Departamento</a></li>
                <li><a href="{{ route('responsable') }}" class="block py-3 px-4 hover:bg-teal-500 rounded-lg">Responsable</a></li>
                <li><a href="{{ route('inventario') }}" class="block py-3 px-4 hover:bg-teal-500 rounded-lg">Inventario</a></li>
                <li><a href="{{ route('reportes') }}" class="block py-3 px-4 hover:bg-teal-500 rounded-lg">Reportes</a></li>
                <li><a href="{{ route('sourvenirs') }}" class="block py-3 px-4 hover:bg-teal-500 rounded-lg">Sourvenirs</a></li>
                <li><a href="{{ route('papeleriainsumos') }}" class="block py-3 px-4 hover:bg-teal-500 rounded-lg">Insumos de papeleria</a></li>
                <li><a href="{{ route('inventarioactivos') }}" class="block py-3 px-4 hover:bg-teal-500 rounded-lg">Inventario activos</a></li>
                <li><a href="#" class="block py-3 px-4 hover:bg-teal-500 rounded-lg">Configuración</a></li>
            </ul>
        </nav>
    </div>
    <div class="container mx-auto mt-8 flex justify-center">
        <div class="w-full max-w-4xl">
            <h1 class="text-2xl font-bold mb-6 text-center">Inventario de Productos</h1>

            <div class="overflow-x-auto">
                <table class="min-w-full bg-white border border-gray-200 rounded-lg mx-auto">
                    <thead class="border-b border-gray-300">
                        <tr>
                            <th class="px-6 py-3 border-r border-gray-300 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">No. De inventario</th>
                            <th class="px-6 py-3 border-r border-gray-300 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">Id Codigo de barras</th>
                            <th class="px-6 py-3 border-r border-gray-300 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">Nombre</th>
                            <th class="px-6 py-3 border-r border-gray-300 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">Marca</th>
                            <th class="px-6 py-3 border-r border-gray-300 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">Modelo</th>
                            <th class="px-6 py-3 border-r border-gray-300 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">Descripción</th>
                            <th class="px-6 py-3 border-r border-gray-300 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">Observaciones</th>
                            <th class="px-6 py-3 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b border-gray-300">
                            <td class="px-6 py-4 border-r border-gray-300 text-center">UNICI-TUX-EM-0080</td>
                            <td class="px-6 py-4 border-r border-gray-300 text-center">- - - -</td>
                            <td class="px-6 py-4 border-r border-gray-300 text-center">Cesto</td>
                            <td class="px-6 py-4 border-r border-gray-300 text-center">Desconocida</td>
                            <td class="px-6 py-4 border-r border-gray-300 text-center">Desconocido</td>
                            <td class="px-6 py-4 border-r border-gray-300 text-center">Cesto de basura metálico de color gris</td>
                            <td class="px-6 py-4 border-r border-gray-300 text-center">Buen estado</td>
                            <td class="px-6 py-4 text-center">
                                <!-- Puedes agregar botones de acción aquí -->
                            </td>
                        </tr>
                        <tr class="border-b border-gray-300">
                            <td class="px-6 py-4 border-r border-gray-300 text-center">UNICI-TUX-ME-0171</td>
                            <td class="px-6 py-4 border-r border-gray-300 text-center">- - - -</td>
                            <td class="px-6 py-4 border-r border-gray-300 text-center">Silla</td>
                            <td class="px-6 py-4 border-r border-gray-300 text-center">Desconocida</td>
                            <td class="px-6 py-4 border-r border-gray-300 text-center">Desconocido</td>
                            <td class="px-6 py-4 border-r border-gray-300 text-center">Silla secretarial color negro base de plástico</td>
                            <td class="px-6 py-4 border-r border-gray-300 text-center">Daño en el respaldo</td>
                            <td class="px-6 py-4 text-center">
                                <!-- Botones de acción -->
                            </td>
                        </tr>
                        <tr class="border-b border-gray-300">
                            <td class="px-6 py-4 border-r border-gray-300 text-center">UNICI-TUX-ME-0409</td>
                            <td class="px-6 py-4 border-r border-gray-300 text-center">- - - -</td>
                            <td class="px-6 py-4 border-r border-gray-300 text-center">Escritorio</td>
                            <td class="px-6 py-4 border-r border-gray-300 text-center">Desconocida</td>
                            <td class="px-6 py-4 border-r border-gray-300 text-center">Desconocido</td>
                            <td class="px-6 py-4 border-r border-gray-300 text-center">Escritorio de madera pequeño con 2 gavetas con llave</td>
                            <td class="px-6 py-4 border-r border-gray-300 text-center">Buen estado</td>
                            <td class="px-6 py-4 text-center">
                                <!-- Botones de acción -->
                            </td>
                        </tr>
                        <tr class="border-b border-gray-300">
                            <td class="px-6 py-4 border-r border-gray-300 text-center">UNICI-TUX-ME-0409</td>
                            <td class="px-6 py-4 border-r border-gray-300 text-center">- - - -</td>
                            <td class="px-6 py-4 border-r border-gray-300 text-center">Escritorio</td>
                            <td class="px-6 py-4 border-r border-gray-300 text-center">Desconocida</td>
                            <td class="px-6 py-4 border-r border-gray-300 text-center">Desconocido</td>
                            <td class="px-6 py-4 border-r border-gray-300 text-center">Escritorio de madera pequeño con 2 gavetas con llave</td>
                            <td class="px-6 py-4 border-r border-gray-300 text-center">Buen estado</td>
                            <td class="px-6 py-4 text-center">
                            </td>
                        </tr>
                        <tr class="border-b border-gray-300">
                            <td class="px-6 py-4 border-r border-gray-300 text-center">UNICI-TUX-ME-0409</td>
                            <td class="px-6 py-4 border-r border-gray-300 text-center">- - - -</td>
                            <td class="px-6 py-4 border-r border-gray-300 text-center">Escritorio</td>
                            <td class="px-6 py-4 border-r border-gray-300 text-center">Desconocida</td>
                            <td class="px-6 py-4 border-r border-gray-300 text-center">Desconocido</td>
                            <td class="px-6 py-4 border-r border-gray-300 text-center">Escritorio de madera pequeño con 2 gavetas con llave</td>
                            <td class="px-6 py-4 border-r border-gray-300 text-center">Buen estado</td>
                            <td class="px-6 py-4 text-center">
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
