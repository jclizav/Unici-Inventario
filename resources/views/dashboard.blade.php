@extends('layouts.app')

@section('content')
<div class="flex h-screen">
    <!-- Sidebar -->
    {{-- <div class="flex flex-col w-64 text-white bg-cyan-700">
        <div class="p-6 text-lg font-bold text-center">
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
                <li><a href="{{ route('papeleriainsumos') }}" class="block px-4 py-3 rounded-lg hover:bg-orange-500">Insumos de papeleria</a></li>
                <li><a href="{{ route('inventarioactivos') }}" class="block px-4 py-3 rounded-lg hover:bg-orange-500">Inventario activos</a></li>
                <li><a href="#" class="block px-4 py-3 rounded-lg hover:bg-orange-500">Configuración</a></li>
            </ul>
        </nav>
    </div> --}}

    <!-- Main Content -->
    <div class="flex-1 p-6 bg-white"> <!-- Aquí cambia el fondo a blanco -->
        <h1 class="mb-4 text-2xl font-bold">Dashboard</h1>
        <div class="grid grid-cols-2 gap-4">
            <div class="p-4 text-black bg-blue-300 rounded-lg shadow-md">
                <h2 class="text-lg font-bold">Responsables</h2>
                <p class="text-2xl">16</p>
            </div>
            <div class="p-4 text-black bg-orange-300 rounded-lg shadow-md">
                <h2 class="text-lg font-bold">Productos</h2>
                <p class="text-2xl">10</p>
            </div>
            <div class="p-4 text-black bg-blue-300 rounded-lg shadow-md">
                <h2 class="text-lg font-bold">Sourvenirs</h2>
                <p class="text-2xl">185</p>
            </div>
            <div class="p-4 text-black bg-orange-300 rounded-lg shadow-md">
                <h2 class="text-lg font-bold">Inventario activos</h2>
                <p class="text-2xl">2</p>
            </div>
        </div>
    </div>
</div>
@endsection
