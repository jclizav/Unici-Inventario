@extends('layouts.app')

@section('content')
    <!-- Contenido principal -->
    <div class="flex-1 py-6 pl-1 bg-white">
        <div class="flex items-center justify-between pl-8 mb-4">
            <h1 class="text-2xl font-bold text-gray-700">Responsables</h1>
        </div>

        <!-- Filtros -->
        <div class="flex flex-wrap gap-4 p-2 place-content-between bg-slate-300">
            <div class="flex gap-4">
                <input type="text" id="search" placeholder="Buscar por nombre..." class="px-2 py-1 border border-gray-300 rounded-lg focus:outline-none focus:ring focus:ring-blue-300">
                <div class="border-2 rounded-lg w-9 border-slate-500"> <button class="grid w-full h-full place-content-center"> <svg class="w-7 h-7 text-slate-500"  width="18" height="18" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <line x1="12" y1="5" x2="12" y2="19" />  <line x1="5" y1="12" x2="19" y2="12" /></svg></button> </div>
                <div class="border-2 rounded-lg w-9 border-slate-500"> <button class="grid w-full h-full place-content-center"> <svg class="w-7 h-7 text-slate-500"  fill="none" viewBox="0 0 24 24" stroke="currentColor"> <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/> </svg> </button> </div>
                <div class="border-2 rounded-lg w-9 border-slate-500"> <button class="grid w-full h-full place-content-center"> <svg class="w-6 h-6 text-slate-500"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <polyline points="3 6 5 6 21 6" />  <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2" />  <line x1="10" y1="11" x2="10" y2="17" />  <line x1="14" y1="11" x2="14" y2="17" /></svg> </button> </div>
                <div class="border-2 border-red-600 rounded-lg w-9"> <button class="grid w-full h-full place-content-center"> <svg class="text-red-600 h-7 w-7"  fill="none" viewBox="0 0 24 24" stroke="currentColor"> <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/> </svg> </button> </div>
            </div>
            <div class="flex gap-4">
                <select id="filterType" class="px-2 py-1 border border-gray-300 rounded-lg focus:outline-none focus:ring focus:ring-blue-300">
                    <option value="">Filtrar por tipo</option>
                    <option value="area">Responsable del área</option>
                    <option value="bien">Responsable del bien</option>
                </select>
                <div class="border-2 rounded-lg w-9 border-emerald-600"> <button class="grid w-full h-full place-content-center"> <svg class="w-7 h-7 text-emerald-600"  fill="none" viewBox="0 0 24 24" stroke="currentColor"> <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/> </svg> </button> </div>
            </div>
        </div>

        <!-- Tabla -->
        <div class="overflow-x-auto">
            <table class="min-w-full border border-collapse border-gray-300">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="px-4 py-2 text-sm font-semibold text-left text-gray-700 border border-gray-300">Nombre</th>
                        <th class="px-4 py-2 text-sm font-semibold text-left text-gray-700 border border-gray-300">Tipo</th> 
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
                    <td class="px-4 py-2 text-sm text-gray-600 border border-gray-300">${responsable.nombre}</td>
                    <td class="px-4 py-2 text-sm text-gray-600 border border-gray-300">${responsable.tipo === 'area' ? 'Responsable del área' : 'Responsable del bien'}</td>
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
