@extends('layouts.app')

@section('content')


    <!-- Main Content -->
    <div class="flex-1 p-6">
        <h1 class="mb-6 text-3xl font-bold text-gray-700">Inicio - UNICI</h1>
        
        <!-- Top Statistics -->
        <div class="grid grid-cols-3 gap-4 mb-8">
            <div class="p-4 bg-blue-100 rounded-lg shadow">
                <h2 class="text-lg font-bold text-blue-600">Inventario General</h2>
                <p class="text-2xl font-bold">1,230 elementos</p>
                <p class="text-sm text-green-600">Actualizado</p>
            </div>
            <div class="p-4 bg-green-100 rounded-lg shadow">
                <h2 class="text-lg font-bold text-green-600">Insumos</h2>
                <p class="text-2xl font-bold">540 elementos</p>
                <p class="text-sm text-gray-500">Última entrada: 15/01/2025</p>
            </div>
            <div class="p-4 bg-yellow-100 rounded-lg shadow">
                <h2 class="text-lg font-bold text-yellow-600">Papelería</h2>
                <p class="text-2xl font-bold">320 elementos</p>
                <p class="text-sm text-gray-500">Departamentos: 8</p>
            </div>
            <div class="p-4 bg-red-100 rounded-lg shadow">
                <h2 class="text-lg font-bold text-red-600">Activos</h2>
                <p class="text-2xl font-bold">230 elementos</p>
                <p class="text-sm text-gray-500">En uso: 95%</p>
            </div>
            <div class="p-4 bg-purple-100 rounded-lg shadow">
                <h2 class="text-lg font-bold text-purple-600">Reportes Generados</h2>
                <p class="text-2xl font-bold">45</p>
                <p class="text-sm text-green-600">Este mes</p>
            </div>
            <div class="p-4 bg-teal-100 rounded-lg shadow">
                <h2 class="text-lg font-bold text-teal-600">Departamentos</h2>
                <p class="text-2xl font-bold">12</p>
                <p class="text-sm text-gray-500">Con inventario registrado</p>
            </div>
        </div>

        <!-- Graphs Section -->
        <div class="grid grid-cols-2 gap-4">
            <!-- Inventario General Chart -->
            <div class="p-4 bg-white rounded-lg shadow">
                <h3 class="mb-4 text-xl font-bold text-gray-700">Inventario General</h3>
                <canvas id="inventoryChart"></canvas>
            </div>
            <!-- Insumos Chart -->
            <div class="p-4 bg-white rounded-lg shadow">
                <h3 class="mb-4 text-xl font-bold text-gray-700">Distribución de Insumos</h3>
                <canvas id="suppliesChart"></canvas>
            </div>
        </div>

        <!-- Recent Data Section -->
        <div class="grid grid-cols-2 gap-4 mt-8">
            <!-- Últimos movimientos -->
            <div class="p-4 bg-white rounded-lg shadow">
                <h3 class="mb-4 text-xl font-bold text-gray-700">Últimos Movimientos</h3>
                <table class="w-full text-left table-auto">
                    <thead>
                        <tr>
                            <th class="px-4 py-2 text-gray-600">Departamento</th>
                            <th class="px-4 py-2 text-gray-600">Ítem</th>
                            <th class="px-4 py-2 text-gray-600">Cantidad</th>
                            <th class="px-4 py-2 text-gray-600">Fecha</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="px-4 py-2">Administración</td>
                            <td class="px-4 py-2">Plumas</td>
                            <td class="px-4 py-2">120</td>
                            <td class="px-4 py-2">20/01/2025</td>
                        </tr>
                        <!-- Añadir más filas dinámicas -->
                    </tbody>
                </table>
            </div>
            <!-- Alertas de inventario -->
            <div class="p-4 bg-white rounded-lg shadow">
                <h3 class="mb-4 text-xl font-bold text-gray-700">Alertas de Inventario</h3>
                <ul>
                    <li class="py-2 text-gray-700">Papel Bond: <span class="font-bold text-red-600">Bajo Stock</span></li>
                    <li class="py-2 text-gray-700">Tóner: <span class="font-bold text-yellow-600">Por reabastecer</span></li>
                    <li class="py-2 text-gray-700">Escritorios: <span class="font-bold text-green-600">Suficiente</span></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    // Inventario General Chart
    const inventoryData = {
        labels: ['Insumos', 'Papelería', 'Activos', 'Otros'],
        datasets: [{
            data: [540, 320, 230, 140],
            backgroundColor: [
                'rgba(54, 162, 235, 0.7)',
                'rgba(255, 206, 86, 0.7)',
                'rgba(255, 99, 132, 0.7)',
                'rgba(153, 102, 255, 0.7)'
            ],
        }]
    };
    const inventoryConfig = {
        type: 'pie',
        data: inventoryData,
        options: { responsive: true }
    };
    new Chart(document.getElementById('inventoryChart'), inventoryConfig);

    // Insumos Chart
    const suppliesData = {
        labels: ['Tóner', 'Papel Bond', 'Plumas', 'Otros'],
        datasets: [{
            label: 'Distribución de Insumos',
            data: [120, 200, 300, 100],
            backgroundColor: [
                'rgba(75, 192, 192, 0.7)',
                'rgba(255, 159, 64, 0.7)',
                'rgba(153, 102, 255, 0.7)',
                'rgba(201, 203, 207, 0.7)'
            ],
            borderColor: [
                'rgba(75, 192, 192, 1)',
                'rgba(255, 159, 64, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(201, 203, 207, 1)'
            ],
            borderWidth: 1
        }]
    };
    const suppliesConfig = {
        type: 'bar',
        data: suppliesData,
        options: { responsive: true }
    };
    new Chart(document.getElementById('suppliesChart'), suppliesConfig);
</script>
@endsection
