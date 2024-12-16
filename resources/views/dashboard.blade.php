@extends('layouts.app')

@section('content')
<div class="flex h-screen"> 
    <!-- Main Content -->
    <div class="flex-1 p-8 bg-white"> <!-- Aquí cambia el fondo a blanco -->
        
        <div class="flex gap-4">
            <div class="w-[50%]">
                <h1 class="mb-4 text-2xl font-bold">Inicio</h1>
                <div class="grid gap-4" >
                    <div class="grid grid-cols-2 gap-4 w-full h-[25%]">
                        <div class="p-4 text-black bg-blue-300 rounded-lg shadow-md">
                            <h2 class="text-lg font-bold">Alumnos Nuevos</h2>
                            <p class="text-2xl">16</p>
                        </div>
                        <div class="p-4 text-black bg-orange-300 rounded-lg shadow-md">
                            <h2 class="text-lg font-bold">Reingresos</h2>
                            <p class="text-2xl">10</p>
                        </div>
                        <div class="p-4 text-black bg-blue-300 rounded-lg shadow-md">
                            <h2 class="text-lg font-bold">Bajas</h2>
                            <p class="text-2xl">185</p>
                        </div>
                        <div class="p-4 text-black bg-orange-300 rounded-lg shadow-md">
                            <h2 class="text-lg font-bold">Reinscritos</h2>
                            <p class="text-2xl">2</p>
                        </div>
                    </div>
                    <div class="p-4 text-black bg-orange-300 rounded-lg shadow-md">
                        <h2 class="text-lg font-bold">Total de Alumnos</h2>
                        <p class="text-2xl">2</p>
                    </div>
                </div>   
            </div>
            <div class="w-[50%] ">
                <h4 class="text-2xl font-bold">Estadisticas</h4>
                <canvas id="myPieChart"></canvas>
            </div>
        </div>
        
        <div>
            
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    // Datos iniciales (pueden ser dinámicos más adelante)
    const data = {
        labels: ['Rojo', 'Azul', 'Amarillo'],
        datasets: [{
            label: 'Ejemplo de datos',
            data: [300, 50, 100], // Cantidades para cada sección
            backgroundColor: [
                'rgba(255, 99, 132, 0.7)',  // Rojo
                'rgba(54, 162, 235, 0.7)',  // Azul
                'rgba(255, 206, 86, 0.7)'   // Amarillo
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)'
            ],
            borderWidth: 1
        }]
    };

    // Configuración de la gráfica
    const config = {
        type: 'pie',
        data: data,
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'top',
                },
                tooltip: {
                    enabled: true,
                }
            }
        }
    };

    // Renderizar la gráfica
    const myChart = new Chart(
        document.getElementById('myPieChart'),
        config
    );
</script>
@endsection
