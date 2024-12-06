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

    <!-- Main Content -->
    <div class="flex-1 p-6 bg-white"> <!-- Aquí cambia el fondo a blanco -->
        <h1 class="text-2xl font-bold mb-4">Dashboard</h1>
        <div class="grid grid-cols-2 gap-4">
            <div class="bg-blue-300 text-black p-4 rounded-lg shadow-md">
                <h2 class="text-lg font-bold">Responsables</h2>
                <p class="text-2xl">16</p>
            </div>
            <div class="bg-orange-300 text-black p-4 rounded-lg shadow-md">
                <h2 class="text-lg font-bold">Productos</h2>
                <p class="text-2xl">10</p>
            </div>
            <div class="bg-blue-300 text-black p-4 rounded-lg shadow-md">
                <h2 class="text-lg font-bold">Sourvenirs</h2>
                <p class="text-2xl">185</p>
            </div>
            <div class="bg-orange-300 text-black p-4 rounded-lg shadow-md">
                <h2 class="text-lg font-bold">Inventario activos</h2>
                <p class="text-2xl">2</p>
            </div>
        </div>
    </div>
</div>
@endsection
