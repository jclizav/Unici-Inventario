@extends('layouts.app')

@section('content')
<div class="flex h-screen">
    <!-- Sidebar -->
    <div class="flex flex-col w-64 text-white bg-cyan-700">
        <div class="p-6 text-lg font-bold text-center">
            <div class="mb-4">
                <p class="mt-2">Elian</p>
                <p class="text-sm text-gray-800">Elian@gmail.com</p>
            </div>
        </div>

        {{-- <nav class="flex-1">
            <ul>
                <li><a href="{{ route('dashboard') }}" class="block px-4 py-3 rounded-lg hover:bg-orange-500">Dashboard</a></li>
                <li><a href="{{ route('departamento.index') }}" class="block px-4 py-3 rounded-lg hover:bg-orange-500">Departamento</a></li>
                <li><a href="{{ route('responsable') }}" class="block px-4 py-3 rounded-lg hover:bg-orange-500">Responsables</a></li>
                <li><a href="{{ route('inventario') }}" class="block px-4 py-3 rounded-lg hover:bg-orange-500">Inventario</a></li>
                <li><a href="{{ route('reportes') }}" class="block px-4 py-3 rounded-lg hover:bg-orange-500">Reportes</a></li>
                <li><a href="{{ route('sourvenirs') }}" class="block px-4 py-3 rounded-lg hover:bg-orange-500">Sourvenirs</a></li>
                <li><a href="{{ route('papeleriainsumos') }}" class="block px-4 py-3 rounded-lg hover:bg-orange-500">Insumos de papeleria</a></li>
                <li><a href="{{ route('inventarioactivos') }}" class="block px-4 py-3 rounded-lg hover:bg-orange-500">Inventario activos</a></li>
                <li><a href="#" class="block px-4 py-3 rounded-lg hover:bg-orange-500">Configuración</a></li>
            </ul>
        </nav> --}}
    </div>

</div>
@endsection
