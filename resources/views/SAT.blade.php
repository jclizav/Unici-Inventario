@extends('layouts.app')

@section('content')
    <!-- Contenido principal -->
    <div class="flex-1 p-8">
        <div class="flex items-center justify-between mb-4">
            <h1 class="text-2xl font-bold text-gray-700">SAT</h1>
            <a href="#" class="px-4 py-2 text-white bg-blue-500 rounded-lg hover:bg-blue-600">Añadir Departamento</a>
        </div>

        <!-- Formulario para agregar departamentos -->

        <!-- Tabla para listar departamentos -->
        <div class="overflow-x-auto">
            <table class="min-w-full border border-collapse border-gray-300">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="px-4 py-2 text-sm font-semibold text-left text-gray-700 border border-gray-300">Codigo de barras</th>
                        <th class="px-4 py-2 text-sm font-semibold text-left text-gray-700 border border-gray-300">Nomenclatura</th>
                        <th class="px-4 py-2 text-sm font-semibold text-left text-gray-700 border border-gray-300">Bien</th>
                        <th class="px-4 py-2 text-sm font-semibold text-left text-gray-700 border border-gray-300">Marca</th>
                        <th class="px-4 py-2 text-sm font-semibold text-left text-gray-700 border border-gray-300">Modelo</th>
                        <th class="px-4 py-2 text-sm font-semibold text-left text-gray-700 border border-gray-300">SAT</th>
                        <th class="px-4 py-2 text-sm font-semibold text-left text-gray-700 border border-gray-300">Adquisicion</th>
                        <th class="px-4 py-2 text-sm font-semibold text-left text-gray-700 border border-gray-300">Precio</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Ejemplo de datos estáticos -->
                    @foreach ( $Datos as $Dato )
                        <tr class="hover:bg-gray-100">
                            <td class="px-4 py-2 text-sm text-gray-600 border border-gray-300">{{ $Dato->CodigoDeBarras }}</td>
                            <td class="px-4 py-2 text-sm text-gray-600 border border-gray-300">{{ $Dato->IdNomenclatura }}</td>
                            <td class="px-4 py-2 text-sm text-gray-600 border border-gray-300">{{ $Dato->Bien }}</td>
                            <td class="px-4 py-2 text-sm text-gray-600 border border-gray-300">{{ $Dato->Marca }}</td>
                            <td class="px-4 py-2 text-sm text-gray-600 border border-gray-300">{{ $Dato->Modelo }}</td>
                            <td class="px-4 py-2 text-sm text-gray-600 border border-gray-300">{{ $Dato->Sat }}</td>
                            <td class="px-4 py-2 text-sm text-gray-600 border border-gray-300">{{ $Dato->Fecha }}</td>
                            <td class="px-4 py-2 text-sm text-gray-600 border border-gray-300">{{ $Dato->Precio }}</td>
                        </tr>    
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
