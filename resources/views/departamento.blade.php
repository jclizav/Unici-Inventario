@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <h1 class="text-2xl font-bold mb-4">Gestión de Departamentos</h1>

    <!-- Mensajes de éxito -->
    @if(session('success'))
        <div class="bg-green-100 text-blue-800 p-4 mb-4 rounded">
            {{ session('success') }}
        </div>
    @endif

    <!-- Formulario para agregar un departamento -->
    <form action="{{ route('departamento.store') }}" method="POST" class="mb-6 bg-gray-100 p-4 rounded shadow">
        @csrf
        <h2 class="text-lg font-semibold mb-4">Agregar Departamento</h2>
        <div class="mb-4">
            <label for="nombre" class="block text-sm font-medium">Nombre del Departamento</label>
            <input type="text" id="nombre" name="nombre" class="w-full p-2 border rounded" required>
        </div>
        <div class="mb-4">
            <label for="responsable" class="block text-sm font-medium">Responsable</label>
            <input type="text" id="responsable" name="responsable" class="w-full p-2 border rounded">
        </div>
        <button type="submit" class="bg-teal-600 text-white px-4 py-2 rounded">Agregar</button>
    </form>

    <!-- Lista de departamentos -->
    <table class="w-full border-collapse bg-white shadow-lg rounded">
        <thead>
            <tr class="bg-teal-600 text-white">
                <th class="p-4 text-left">Nombre</th>
                <th class="p-4 text-left">Responsable</th>
                <th class="p-4 text-center">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @forelse($departamentos as $departamento)
                <tr class="border-b">
                    <td class="p-4">{{ $departamento['nombre'] }}</td>
                    <td class="p-4">{{ $departamento['responsable'] ?? 'Sin asignar' }}</td>
                    <td class="p-4 text-center">
                        <form action="{{ route('departamento.destroy', $departamento['id']) }}" method="POST" onsubmit="return confirm('¿Estás seguro de eliminar este departamento?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="3" class="p-4 text-center">No hay departamentos registrados.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
