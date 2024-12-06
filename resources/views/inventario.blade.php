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
                <li><a href="{{ route('papeleriainsumos') }}" class="block py-3 px-4 hover:bg-orange-500 rounded-lg">Insumos de papelería</a></li>
                <li><a href="{{ route('inventarioactivos') }}" class="block py-3 px-4 hover:bg-orange-500 rounded-lg">Inventario activos</a></li>
                <li><a href="#" class="block py-3 px-4 hover:bg-orange-500 rounded-lg">Configuración</a></li>
            </ul>
        </nav>
    </div>

    <!-- Contenido principal -->
    <div class="flex-1 bg-white p-8">
        <div class="flex justify-between items-center mb-4">
            <h1 class="text-2xl font-bold text-gray-700">Inventario</h1>
            <button id="addItemButton" class="bg-blue-700 text-white px-4 py-2 rounded-lg hover:bg-blue-600">Añadir Bien</button>
        </div>

        <!-- Filtros -->
        <div class="flex flex-wrap gap-4 mb-6">
            <select name="estado" id="filterStatus" class="border border-gray-300 p-2 rounded-lg focus:outline-none focus:ring focus:ring-blue-300">
                <option value="">Filtrar por Estado</option>
                <option value="en_uso">En Uso</option>
                <option value="resguardo">Resguardo</option>
                <option value="en_revision">En Revisión</option>
                <option value="descompuesto">Descompuesto</option>
                <option value="de_baja">De Baja</option>
            </select>
            <input type="text" id="searchInput" placeholder="Buscar Bien" class="border border-gray-300 p-2 rounded-lg focus:outline-none focus:ring focus:ring-blue-300">
            <button id="searchButton" class="bg-gray-500 text-white px-4 py-2 rounded-lg hover:bg-gray-600">Buscar</button>
        </div>

        <!-- Tabla -->
        <div class="overflow-x-auto">
            <table class="min-w-full border-collapse border border-gray-300">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="border border-gray-300 px-4 py-2 text-left text-sm font-semibold text-gray-700">#</th>
                        <th class="border border-gray-300 px-4 py-2 text-left text-sm font-semibold text-gray-700">Código de Barras</th>
                        <th class="border border-gray-300 px-4 py-2 text-left text-sm font-semibold text-gray-700">Nombre/Bien</th>
                        <th class="border border-gray-300 px-4 py-2 text-left text-sm font-semibold text-gray-700">Marca</th>
                        <th class="border border-gray-300 px-4 py-2 text-left text-sm font-semibold text-gray-700">Color</th>
                        <th class="border border-gray-300 px-4 py-2 text-left text-sm font-semibold text-gray-700">Modelo</th>
                        <th class="border border-gray-300 px-4 py-2 text-left text-sm font-semibold text-gray-700">Estado</th>
                        <th class="border border-gray-300 px-4 py-2 text-left text-sm font-semibold text-gray-700">Observaciones</th>
                        <th class="border border-gray-300 px-4 py-2 text-left text-sm font-semibold text-gray-700">Acciones</th>
                    </tr>
                </thead>
                <tbody id="inventoryTable">
                    <!-- Filas dinámicas -->
                </tbody>
            </table>
        </div>
    </div>
</div>

<script>
    const inventoryTable = document.getElementById('inventoryTable');
    const addItemButton = document.getElementById('addItemButton');

    // Datos iniciales
    let inventory = [
        { id: 1, codigo: '1234567890', nombre: 'Monitor', marca: 'Samsung', color: 'Negro', modelo: 'LF24T350', estado: 'en_uso', observaciones: 'En buen estado' },
        { id: 2, codigo: '0987654321', nombre: 'Mouse', marca: 'Logitech', color: 'Gris', modelo: 'M185', estado: 'descompuesto', observaciones: 'Cable suelto' },
        { id: 3, codigo: '0987654321', nombre: 'Mouse', marca: 'Logitech', color: 'Gris', modelo: 'M185', estado: 'descompuesto', observaciones: 'Cable suelto' },

    ];

    // Renderizar tabla
    function renderTable(data) {
        inventoryTable.innerHTML = '';
        data.forEach((item, index) => {
            inventoryTable.innerHTML += `
                <tr class="hover:bg-gray-100">
                    <td class="border border-gray-300 px-4 py-2 text-sm text-gray-600">${index + 1}</td>
                    <td class="border border-gray-300 px-4 py-2 text-sm text-gray-600">${item.codigo}</td>
                    <td class="border border-gray-300 px-4 py-2 text-sm text-gray-600">${item.nombre}</td>
                    <td class="border border-gray-300 px-4 py-2 text-sm text-gray-600">${item.marca}</td>
                    <td class="border border-gray-300 px-4 py-2 text-sm text-gray-600">${item.color}</td>
                    <td class="border border-gray-300 px-4 py-2 text-sm text-gray-600">${item.modelo}</td>
                    <td class="border border-gray-300 px-4 py-2 text-sm text-gray-600">${item.estado}</td>
                    <td class="border border-gray-300 px-4 py-2 text-sm text-gray-600">${item.observaciones}</td>
                    <td class="border border-gray-300 px-4 py-2 text-sm text-gray-600">
                        <button class="text-blue-700 hover:underline mr-2">Editar</button>
                        <button class="text-orange-700 hover:underline">Eliminar</button>
                    </td>
                </tr>
            `;
        });
    }

    // Añadir nuevo bien
    addItemButton.addEventListener('click', () => {
        const newItem = {
            id: inventory.length + 1,
            codigo: prompt('Ingrese el código de barras:'),
            nombre: prompt('Ingrese el nombre del bien:'),
            marca: prompt('Ingrese la marca:'),
            color: prompt('Ingrese el color:'),
            modelo: prompt('Ingrese el modelo:'),
            estado: 'en_uso',
            observaciones: 'Sin observaciones',
        };

        if (newItem.codigo && newItem.nombre) {
            inventory.push(newItem);
            renderTable(inventory);
        }
    });

    // Inicializar
    renderTable(inventory);
</script>
@endsection
