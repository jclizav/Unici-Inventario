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
            <h1 class="text-2xl font-bold text-gray-700">Responsables</h1>
        </div>

        <!-- Filtros -->
        <div class="flex flex-wrap gap-4 mb-6">
            <select id="filterType" class="border border-gray-300 p-2 rounded-lg focus:outline-none focus:ring focus:ring-blue-300">
                <option value="">Filtrar por tipo</option>
                <option value="area">Responsable del área</option>
                <option value="bien">Responsable del bien</option>
            </select>
            <input type="text" id="search" placeholder="Buscar por nombre..." class="border border-gray-300 p-2 rounded-lg focus:outline-none focus:ring focus:ring-blue-300">
        </div>

        <!-- Tabla -->
        <div class="overflow-x-auto">
            <table class="min-w-full border-collapse border border-gray-300">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="border border-gray-300 px-4 py-2 text-left text-sm font-semibold text-gray-700">Nombre</th>
                        <th class="border border-gray-300 px-4 py-2 text-left text-sm font-semibold text-gray-700">Tipo</th>
                        <th class="border border-gray-300 px-4 py-2 text-left text-sm font-semibold text-gray-700">Acciones</th>
                    </tr>
                </thead>
                <tbody id="responsablesTable">
                    <!-- Se llenará dinámicamente -->
                </tbody>
            </table>
        </div>
    </div>
</div>

<script>
    // Datos de ejemplo
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
                <tr class="hover:bg-gray-100">
                    <td class="border border-gray-300 px-4 py-2 text-sm text-gray-600">${responsable.nombre}</td>
                    <td class="border border-gray-300 px-4 py-2 text-sm text-gray-600">${responsable.tipo === 'area' ? 'Responsable del área' : 'Responsable del bien'}</td>
                    <td class="border border-gray-300 px-4 py-2 text-sm text-gray-600">
                        <button class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600">Editar</button>
                        <button class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600">Eliminar</button>
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
