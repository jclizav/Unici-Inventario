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
<div class="p-6">
    <h1 class="text-2xl font-bold mb-4">Responsables</h1>

    <!-- Filtro -->
    <div class="mb-4 flex space-x-4">
        <select id="filterType" class="border rounded-lg p-2">
            <option value="">Seleccionar tipo de responsable</option>
            <option value="area">Responsable del área</option>
            <option value="bien">Responsable del bien</option>
        </select>
        <input type="text" id="search" class="border rounded-lg p-2" placeholder="Buscar por nombre...">
    </div>

    <!-- Tabla -->
    <table class="w-full border-collapse border border-gray-300">
        <thead>
            <tr class="bg-gray-200">
                <th class="border border-gray-300 p-2">Nombre</th>
                <th class="border border-gray-300 p-2">Tipo</th>
                <th class="border border-gray-300 p-2">Acciones</th>
            </tr>
        </thead>
        <tbody id="responsablesTable">
            <!-- Aquí se llenará dinámicamente la tabla -->
        </tbody>
    </table>
</div>

<script>
    // Simula datos iniciales de responsables
    const responsables = [
        { id: 1, nombre: 'Juan Pérez', tipo: 'area' },
        { id: 2, nombre: 'María López', tipo: 'bien' },
        { id: 3, nombre: 'Carlos Gómez', tipo: 'area' },
        { id: 4, nombre: 'Ana Díaz', tipo: 'bien' },
    ];

    const tableBody = document.getElementById('responsablesTable');
    const filterType = document.getElementById('filterType');
    const searchInput = document.getElementById('search');

    function renderTable(data) {
        tableBody.innerHTML = '';
        data.forEach(responsable => {
            tableBody.innerHTML += `
                <tr>
                    <td class="border border-gray-300 p-2">${responsable.nombre}</td>
                    <td class="border border-gray-300 p-2">${responsable.tipo === 'area' ? 'Responsable del área' : 'Responsable del bien'}</td>
                    <td class="border border-gray-300 p-2">
                        <button class="bg-blue-500 text-black px-2 py-1 rounded">Editar</button>
                        <button class="bg-red-500 text-black px-2 py-1 rounded">Eliminar</button>
                    </td>
                </tr>
            `;
        });
    }

    function filterData() {
        const filter = filterType.value;
        const search = searchInput.value.toLowerCase();
        const filtered = responsables.filter(r => {
            const matchesType = filter ? r.tipo === filter : true;
            const matchesSearch = r.nombre.toLowerCase().includes(search);
            return matchesType && matchesSearch;
        });
        renderTable(filtered);
    }

    filterType.addEventListener('change', filterData);
    searchInput.addEventListener('input', filterData);

    // Renderiza la tabla inicialmente
    renderTable(responsables);
</script>
@endsection
