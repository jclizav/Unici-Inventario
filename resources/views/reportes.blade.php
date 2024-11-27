@extends('layouts.app')

@section('content')
<div class="flex h-screen">
    <!-- Sidebar -->
    <div class="w-64 bg-cyan-700 text-white flex flex-col">
        <div class="p-6 text-center font-bold text-lg">
            <div class="mb-4">
                <p class="mt-2">Elian</p>
                <p class="text-sm text-gray-800">Elian@gmail.com</p>
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
                <li><a href="{{ route('papeleriainsumos') }}" class="block py-3 px-4 hover:bg-orange-500 rounded-lg">Insumos de papeleria</a></li>
                <li><a href="{{ route('inventarioactivos') }}" class="block py-3 px-4 hover:bg-orange-500 rounded-lg">Inventario activos</a></li>
                <li><a href="#" class="block py-3 px-4 hover:bg-orange-500 rounded-lg">Configuración</a></li>
            </ul>
        </nav>
    </div>

</div>
@endsection
