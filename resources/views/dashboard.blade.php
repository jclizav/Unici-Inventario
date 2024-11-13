<x-app-layout>


    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Inventario') }}
        </h2>
    </x-slot>

    <div class="container mx-auto mt-8 flex justify-center">
        <div class="w-full max-w-4xl">
            <h1 class="text-2xl font-bold mb-6 text-center">Inventario de Productos</h1>

            <div class="overflow-x-auto">
                <table class="min-w-full bg-white border border-gray-200 rounded-lg mx-auto">
                    <thead class="border-b border-gray-300">
                        <tr>
                            <th class="px-6 py-3 border-r border-gray-300 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">No. De inventario</th>
                            <th class="px-6 py-3 border-r border-gray-300 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">Nombre</th>
                            <th class="px-6 py-3 border-r border-gray-300 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">Descripción</th>
                            <th class="px-6 py-3 border-r border-gray-300 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">Observaciones</th>
                            <th class="px-6 py-3 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b border-gray-300">
                            <td class="px-6 py-4 border-r border-gray-300 text-center">UNICI-TUX-EM-0080</td>
                            <td class="px-6 py-4 border-r border-gray-300 text-center">Cesto</td>
                            <td class="px-6 py-4 border-r border-gray-300 text-center">Cesto de basura metalico de color gris</td>
                            <td class="px-6 py-4 border-r border-gray-300 text-center">Buen estado</td>
                            <td class="px-6 py-4 text-center"></td>
                        </tr>
                        <tr class="border-b border-gray-300">
                            <td class="px-6 py-4 border-r border-gray-300 text-center">UNICI-TUX-ME-0171</td>
                            <td class="px-6 py-4 border-r border-gray-300 text-center">Silla</td>
                            <td class="px-6 py-4 border-r border-gray-300 text-center">Silla secretarial color negro base de plastico</td>
                            <td class="px-6 py-4 border-r border-gray-300 text-center">Daño en el respaldo</td>
                            <td class="px-6 py-4 text-center"></td>
                        </tr>
                        <tr class="border-b border-gray-300">
                            <td class="px-6 py-4 border-r border-gray-300 text-center">UNICI-TUX-ME-0409</td>
                            <td class="px-6 py-4 border-r border-gray-300 text-center">Escritorio</td>
                            <td class="px-6 py-4 border-r border-gray-300 text-center">Escritorio de madera pequeño con 2 gavetas con llave</td>
                            <td class="px-6 py-4 border-r border-gray-300 text-center">Buen estado</td>
                            <td class="px-6 py-4 text-center"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
</x-app-layout>
