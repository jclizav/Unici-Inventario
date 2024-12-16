@extends('layouts.app')

@section('content')
<div class="flex h-screen">

    <!-- Contenido principal -->
    <div class="h-screen p-0 bg-white sm:px-1 sm:pt-7 md:w-full">
        <div class="flex items-center justify-between mb-4">
            <h1 class="text-2xl font-bold text-gray-700 pl-7">Inventario</h1>
        </div>

        <!-- Filtros -->
        <div class="flex flex-wrap gap-4 p-2 place-content-between bg-slate-300">
            <div class="flex gap-4">
                <input type="text" id="search" placeholder="Buscar por nombre..." class="px-2 py-1 border border-gray-300 rounded-lg focus:outline-none focus:ring focus:ring-blue-300">
                <div class="border-2 rounded-lg w-9 border-slate-500"> <button id="Mostrar" class="grid w-full h-full place-content-center"> <svg class="w-7 h-7 text-slate-500"  width="18" height="18" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <line x1="12" y1="5" x2="12" y2="19" />  <line x1="5" y1="12" x2="19" y2="12" /></svg></button> </div>
                <div class="border-2 rounded-lg w-9 border-slate-500"> <button id="" class="grid w-full h-full place-content-center"> <svg class="w-7 h-7 text-slate-500"  fill="none" viewBox="0 0 24 24" stroke="currentColor"> <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/> </svg> </button> </div>
                <div class="border-2 rounded-lg w-9 border-slate-500"> <button class="grid w-full h-full place-content-center"> <svg class="w-6 h-6 text-slate-500"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <polyline points="3 6 5 6 21 6" />  <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2" />  <line x1="10" y1="11" x2="10" y2="17" />  <line x1="14" y1="11" x2="14" y2="17" /></svg> </button> </div>
                <div class="border-2 border-red-600 rounded-lg w-9"> <button class="grid w-full h-full place-content-center"> <svg class="text-red-600 h-7 w-7"  fill="none" viewBox="0 0 24 24" stroke="currentColor"> <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/> </svg> </button> </div>
            </div>
            <div class="flex gap-4">
                <select id="filterType" class="px-2 py-1 border border-gray-300 rounded-lg focus:outline-none focus:ring focus:ring-blue-300">
                    <option value="">Filtrar por Estado</option>
                    <option value="en_uso">En Uso</option>
                    <option value="resguardo">Resguardo</option>
                    <option value="en_revision">En Revisión</option>
                    <option value="descompuesto">Descompuesto</option>
                    <option value="de_baja">De Baja</option>
                </select>
                <div class="border-2 rounded-lg w-9 border-emerald-600"> <button class="grid w-full h-full place-content-center"> <svg class="w-7 h-7 text-emerald-600"  fill="none" viewBox="0 0 24 24" stroke="currentColor"> <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/> </svg> </button> </div>
            </div>
        </div>
        <!-- Tabla -->
        <div class="overflow-x-scroll max-w-[80vw] sm:max-w-none h-[87%]">
            <table class="min-w-full border border-collapse border-gray-300">
                <thead class="sticky top-0">
                    <tr class="bg-gray-200">
                        <th class="px-4 py-2 text-sm font-semibold text-left text-gray-700 border border-gray-300">ID</th>
                        <th class="px-4 py-2 text-sm font-semibold text-left text-gray-700 border border-gray-300">Código de Barras</th>
                        <th class="px-4 py-2 text-sm font-semibold text-left text-gray-700 border border-gray-300">Nombre/Bien</th>
                        <th class="px-4 py-2 text-sm font-semibold text-left text-gray-700 border border-gray-300">Marca</th>
                        <th class="px-4 py-2 text-sm font-semibold text-left text-gray-700 border border-gray-300">Color</th>
                        <th class="px-4 py-2 text-sm font-semibold text-left text-gray-700 border border-gray-300">Modelo</th>
                        <th class="px-4 py-2 text-sm font-semibold text-left text-gray-700 border border-gray-300">Estado</th>
                        <th class="px-4 py-2 text-sm font-semibold text-left text-gray-700 border border-gray-300">Observaciones</th>
                    </tr>
                </thead> 
                <tbody id="inventoryTable" class="sm:max-w-[90vw] overflow-y-scroll">
                    <!-- Filas dinámicas -->
                </tbody>
            </table>
        </div>
    </div>
</div>

<dialog id="dialog" class="top-40 py-5 min-w-[400px] px-5 rounded-lg bg-slate-300 border-2 border-sky-700" >
    <button id="cerrarDialogo" class="absolute px-3 py-1 font-bold rounded-full right-10 text-slate-200 bg-sky-700">
        X
    </button>
    <h3 class="pb-6 text-2xl font-bold text-center text-sky-700"> 
        Nuevo elemento
    </h3>
    <div class="flex gap-8">
        <div>
            <h2 class="pl-2 mb-2 font-semibold text-sky-800">
                Código de Barras
            </h2>
            <input type="text" name="Codigo" id="codigo" class="px-1.5 py-1 rounded-lg border-2 border-sky-500"> 
            <h2 class="pl-2 mt-1 mb-1 font-semibold text-sky-800">
                Nombre
            </h2>
            <input type="text" name="Codigo" id="nombre" class="px-1.5 py-1 rounded-lg border-2 border-sky-500"> 
            <h2 class="pl-2 mt-1 mb-1 font-semibold text-sky-800">
                Marca
            </h2>
            <input type="text" name="Codigo" id="marca" class="px-1.5 py-1 rounded-lg border-2 border-sky-500"> 
            <h2 class="pl-2 mt-1 mb-1 font-semibold text-sky-800">
                Observaciones
            </h2>
            <input type="text" name="Codigo" id="obs" class="px-1.5 py-1 rounded-lg border-2 border-sky-500"> 
        </div>
        <div>
            <h2 class="pl-2 mt-1 mb-1 font-semibold text-sky-800">
                Color
            </h2>
            <input type="text" name="Codigo" id="color" class="px-1.5 py-1 rounded-lg border-2 border-sky-500"> 
            <h2 class="pl-2 mt-1 mb-1 font-semibold text-sky-800">
                Modelo
            </h2>
            <input type="text" name="Codigo" id="modelo" class="px-1.5 py-1 rounded-lg border-2 border-sky-500"> 
            <h2 class="pl-2 mt-1 mb-1 font-semibold text-sky-800">
                Estado
            </h2>
            <input type="text" name="Codigo" id="estado" class="px-1.5 py-1 rounded-lg border-2 border-sky-500"> 
            
        </div>
    </div>
    <button class="w-full py-2 mt-4 font-semibold rounded-lg bg-sky-700 text-slate-200"> Cargar elemento </button>
</dialog>

<script>
    // Obtener el botón y el diálogo por su ID
    var boton = document.getElementById("Mostrar");
    var dialogo = document.getElementById("dialog");

    // Cuando se hace clic en el botón, mostrar el diálogo
    boton.addEventListener("click", function() {
        dialogo.style.display = "block";
    });

    // Cuando se hace clic en el botón de cerrar, ocultar el diálogo
    document.getElementById("cerrarDialogo").addEventListener("click", function() {
        dialogo.style.display = "none";
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', () => {
    const inventoryTable = document.getElementById('inventoryTable');
    const addItemButton = document.getElementById('addItemButton');
    const filterType = document.getElementById('filterType');
    const searchInput = document.getElementById('search');

    let inventory = [
        { id: 1, codigo: '1234567890', nombre: 'Monitor', marca: 'Samsung', color: 'Negro', modelo: 'LF24T350', estado: 'en_uso', observaciones: 'En buen estado' },
        { id: 2, codigo: '0987654321', nombre: 'Mouse', marca: 'Logitech', color: 'Gris', modelo: 'M185', estado: 'descompuesto', observaciones: 'Cable suelto' },
        { id: 3, codigo: '1122334455', nombre: 'Teclado', marca: 'HP', color: 'Negro', modelo: 'K500F', estado: 'nuevo', observaciones: 'Empaque original' },
        { id: 4, codigo: '5566778899', nombre: 'Monitor', marca: 'LG', color: 'Blanco', modelo: '27UL500', estado: 'en_reparacion', observaciones: 'Pantalla dañada' },
        { id: 5, codigo: '6677889900', nombre: 'CPU', marca: 'Dell', color: 'Negro', modelo: 'Optiplex 3020', estado: 'en_uso', observaciones: 'Ruido al encender' },
        { id: 6, codigo: '4455667788', nombre: 'Impresora', marca: 'Canon', color: 'Blanco', modelo: 'G2010', estado: 'nuevo', observaciones: 'Recién comprada' },
        { id: 7, codigo: '9988776655', nombre: 'Laptop', marca: 'Lenovo', color: 'Gris', modelo: 'ThinkPad X1', estado: 'en_uso', observaciones: 'Cargador original' },
        { id: 8, codigo: '2233445566', nombre: 'Router', marca: 'TP-Link', color: 'Blanco', modelo: 'Archer C6', estado: 'en_uso', observaciones: 'Funcionando correctamente' },
        { id: 9, codigo: '3344556677', nombre: 'Switch', marca: 'Netgear', color: 'Negro', modelo: 'GS108', estado: 'en_uso', observaciones: 'Conexiones estables' },
        { id: 10, codigo: '5566778890', nombre: 'Monitor', marca: 'Acer', color: 'Negro', modelo: 'KG241Q', estado: 'descompuesto', observaciones: 'Sin imagen' },
        { id: 11, codigo: '6677889901', nombre: 'Mouse', marca: 'Microsoft', color: 'Blanco', modelo: 'Ergonomic Mouse', estado: 'nuevo', observaciones: 'Sin uso previo' },
        { id: 12, codigo: '7788990011', nombre: 'Teclado', marca: 'Razer', color: 'Negro', modelo: 'BlackWidow', estado: 'en_uso', observaciones: 'Tecla shift desgastada' },
        { id: 13, codigo: '8899001122', nombre: 'Laptop', marca: 'HP', color: 'Plateado', modelo: 'Spectre x360', estado: 'nuevo', observaciones: 'Recién comprada' },
        { id: 14, codigo: '9900112233', nombre: 'Impresora', marca: 'Epson', color: 'Negro', modelo: 'EcoTank L3150', estado: 'en_reparacion', observaciones: 'Problemas de tinta' },
        { id: 15, codigo: '0011223344', nombre: 'Router', marca: 'Cisco', color: 'Negro', modelo: 'RV340', estado: 'en_uso', observaciones: 'Configuración establecida' },
        { id: 16, codigo: '1122334466', nombre: 'Proyector', marca: 'BenQ', color: 'Blanco', modelo: 'MW535', estado: 'en_uso', observaciones: 'Lámpara al 50%' },
        { id: 17, codigo: '2233445567', nombre: 'Monitor', marca: 'Asus', color: 'Negro', modelo: 'VG248QE', estado: 'nuevo', observaciones: 'Sin daños visibles' },
        { id: 18, codigo: '3344556678', nombre: 'Switch', marca: 'D-Link', color: 'Negro', modelo: 'DGS-108', estado: 'en_uso', observaciones: 'Conexiones estables' },
        { id: 19, codigo: '5566778891', nombre: 'Teclado', marca: 'Logitech', color: 'Blanco', modelo: 'K380', estado: 'en_uso', observaciones: 'Algunas teclas sin respuesta' },
        { id: 20, codigo: '6677889902', nombre: 'Mouse', marca: 'Razer', color: 'Negro', modelo: 'DeathAdder', estado: 'nuevo', observaciones: 'Recién comprado' },
        { id: 21, codigo: '7788990022', nombre: 'Proyector', marca: 'Sony', color: 'Negro', modelo: 'VPL-EX455', estado: 'en_uso', observaciones: 'Lente rayado' },
        { id: 22, codigo: '8899001123', nombre: 'Laptop', marca: 'Acer', color: 'Gris', modelo: 'Swift 3', estado: 'en_reparacion', observaciones: 'Batería defectuosa' },
        { id: 23, codigo: '9900112234', nombre: 'Impresora', marca: 'Brother', color: 'Gris', modelo: 'HL-L2395DW', estado: 'en_uso', observaciones: 'Imprime lento' },
        { id: 24, codigo: '0011223345', nombre: 'Router', marca: 'Ubiquiti', color: 'Blanco', modelo: 'AmpliFi', estado: 'nuevo', observaciones: 'Sin problemas' },
        { id: 25, codigo: '1122334467', nombre: 'Teclado', marca: 'Corsair', color: 'Negro', modelo: 'K70', estado: 'descompuesto', observaciones: 'Teclas no responden' },
        { id: 26, codigo: '2233445568', nombre: 'Monitor', marca: 'Dell', color: 'Negro', modelo: 'P2419H', estado: 'en_reparacion', observaciones: 'Problemas de brillo' },
        { id: 27, codigo: '3344556679', nombre: 'Mouse', marca: 'HP', color: 'Negro', modelo: 'Z3700', estado: 'en_uso', observaciones: 'Rueda desgastada' },
        { id: 28, codigo: '5566778892', nombre: 'Switch', marca: 'Cisco', color: 'Negro', modelo: 'SG350-10', estado: 'nuevo', observaciones: 'Conexiones funcionales' },
        { id: 29, codigo: '6677889903', nombre: 'Laptop', marca: 'Samsung', color: 'Plateado', modelo: 'Galaxy Book', estado: 'nuevo', observaciones: 'Empaque original' },
        { id: 30, codigo: '7788990033', nombre: 'Proyector', marca: 'Epson', color: 'Blanco', modelo: 'EX3260', estado: 'en_uso', observaciones: 'Foco a cambiar' },
        { id: 31, codigo: '8899001124', nombre: 'Router', marca: 'Netgear', color: 'Negro', modelo: 'Nighthawk', estado: 'nuevo', observaciones: 'Recién configurado' },
        { id: 32, codigo: '9900112235', nombre: 'Teclado', marca: 'Microsoft', color: 'Negro', modelo: 'Sculpt', estado: 'en_uso', observaciones: 'Diseño ergonómico' },
        { id: 33, codigo: '0011223346', nombre: 'Impresora', marca: 'Canon', color: 'Gris', modelo: 'Pixma G7020', estado: 'en_uso', observaciones: 'Nivel bajo de tinta' },
        { id: 34, codigo: '1122334468', nombre: 'Monitor', marca: 'LG', color: 'Negro', modelo: '24MP59G', estado: 'en_uso', observaciones: 'Buen rendimiento' },
        { id: 35, codigo: '2233445569', nombre: 'Mouse', marca: 'Logitech', color: 'Rojo', modelo: 'MX Anywhere', estado: 'nuevo', observaciones: 'Funciona perfectamente' },
        { id: 36, codigo: '3344556680', nombre: 'Proyector', marca: 'BenQ', color: 'Negro', modelo: 'TH585', estado: 'en_reparacion', observaciones: 'Conector roto' },
        { id: 37, codigo: '5566778893', nombre: 'Switch', marca: 'D-Link', color: 'Gris', modelo: 'DGS-1210', estado: 'en_uso', observaciones: 'Conexiones estables' },
        { id: 38, codigo: '6677889904', nombre: 'Router', marca: 'TP-Link', color: 'Negro', modelo: 'AX3000', estado: 'nuevo', observaciones: 'Recién configurado' },
        { id: 39, codigo: '7788990044', nombre: 'Teclado', marca: 'HP', color: 'Blanco', modelo: '230 Wireless', estado: 'en_uso', observaciones: 'Buena conectividad' },
        { id: 40, codigo: '8899001125', nombre: 'Monitor', marca: 'Samsung', color: 'Negro', modelo: 'CRG5', estado: 'nuevo', observaciones: 'Calibrado correctamente' },
        { id: 41, codigo: '9900112236', nombre: 'Laptop', marca: 'Dell', color: 'Gris', modelo: 'XPS 13', estado: 'en_uso', observaciones: 'Carga lenta' },
        { id: 42, codigo: '0011223347', nombre: 'Mouse', marca: 'Microsoft', color: 'Gris', modelo: 'Arc Mouse', estado: 'nuevo', observaciones: 'Diseño compacto' },
        { id: 43, codigo: '1122334469', nombre: 'Impresora', marca: 'Epson', color: 'Blanco', modelo: 'WorkForce WF-2830', estado: 'en_reparacion', observaciones: 'Cabezal tapado' },
        { id: 44, codigo: '2233445570', nombre: 'Switch', marca: 'Cisco', color: 'Negro', modelo: 'SG300-28', estado: 'en_uso', observaciones: 'Rendimiento estable' },
        { id: 45, codigo: '3344556681', nombre: 'Proyector', marca: 'Sony', color: 'Negro', modelo: 'VPL-DX220', estado: 'en_uso', observaciones: 'Foco desgastado' },
        { id: 46, codigo: '5566778894', nombre: 'Router', marca: 'Ubiquiti', color: 'Blanco', modelo: 'Dream Machine', estado: 'nuevo', observaciones: 'Configurado y funcionando' },
        { id: 47, codigo: '6677889905', nombre: 'Teclado', marca: 'Logitech', color: 'Negro', modelo: 'G Pro', estado: 'nuevo', observaciones: 'Sin uso previo' },
        { id: 48, codigo: '7788990055', nombre: 'Laptop', marca: 'Lenovo', color: 'Negro', modelo: 'Yoga 7i', estado: 'en_uso', observaciones: 'Pantalla táctil funcionando' },
        { id: 49, codigo: '8899001126', nombre: 'Monitor', marca: 'Acer', color: 'Gris', modelo: 'Nitro XV272U', estado: 'en_reparacion', observaciones: 'Problemas de resolución' },
        { id: 50, codigo: '9900112237', nombre: 'Mouse', marca: 'Razer', color: 'Negro', modelo: 'Basilisk V3', estado: 'nuevo', observaciones: 'Empaque original' }
    ];

    function renderTable(data) {
        inventoryTable.innerHTML = '';
        data.forEach((item, index) => {
            inventoryTable.innerHTML += `
                <tr class="hover:bg-gray-100">
                    <td class="px-4 py-2 text-sm text-gray-600 border border-gray-300">${index + 1}</td>
                    <td class="px-4 py-2 text-sm text-gray-600 border border-gray-300">${item.codigo}</td>
                    <td class="px-4 py-2 text-sm text-gray-600 border border-gray-300">${item.nombre}</td>
                    <td class="px-4 py-2 text-sm text-gray-600 border border-gray-300">${item.marca}</td>
                    <td class="px-4 py-2 text-sm text-gray-600 border border-gray-300">${item.color}</td>
                    <td class="px-4 py-2 text-sm text-gray-600 border border-gray-300">${item.modelo}</td>
                    <td class="px-4 py-2 text-sm text-gray-600 border border-gray-300">${item.estado}</td>
                    <td class="px-4 py-2 text-sm text-gray-600 border border-gray-300">${item.observaciones}</td>
                </tr>
            `;
        });
    }

    function filterData() {
        const filter = filterType.value;
        const search = searchInput.value.toLowerCase();

        const filtered = inventory.filter(item => {
            const matchesType = filter ? item.estado === filter : true;
            const matchesSearch = item.nombre.toLowerCase().includes(search);
            return matchesType && matchesSearch;
        });

        renderTable(filtered);
    }

    filterType.addEventListener('change', filterData);
    searchInput.addEventListener('input', filterData);

    addItemButton.addEventListener('click', () => {
        const newItem = {
            id: inventory.length + 1,
            codigo: document.getElementById('codigo').value,
            nombre: document.getElementById('nombre').value,
            marca: document.getElementById('marca').value,
            color: document.getElementById('color').value,
            modelo: document.getElementById('modelo').value,
            estado: 'en_uso',
            observaciones: 'Sin observaciones',
        };

        if (newItem.codigo && newItem.nombre) {
            inventory.push(newItem);
            renderTable(inventory);
            clearDialogFields(); // Limpiar los campos del diálogo
        } else {
            alert('El código de barras y el nombre son obligatorios.');
        }
    });
 
    function clearDialogFields() {
        document.getElementById('codigo').value = '';
        document.getElementById('nombre').value = '';
        document.getElementById('marca').value = '';
        document.getElementById('color').value = '';
        document.getElementById('modelo').value = '';
    }

    renderTable(inventory);
    });
</script>

{{--  Render table  --}}
<script>
    document.addEventListener('DOMContentLoaded', () => {
    const inventoryTable = document.getElementById('inventoryTable');
    const filterType = document.getElementById('filterType');
    const searchInput = document.getElementById('search');

    let inventory = [
        { id: 1, codigo: '1234567890', nombre: 'Monitor', marca: 'Samsung', color: 'Negro', modelo: 'LF24T350', estado: 'en_uso', observaciones: 'En buen estado' },
        { id: 2, codigo: '0987654321', nombre: 'Mouse', marca: 'Logitech', color: 'Gris', modelo: 'M185', estado: 'descompuesto', observaciones: 'Cable suelto' },
        { id: 3, codigo: '1122334455', nombre: 'Teclado', marca: 'HP', color: 'Negro', modelo: 'K500F', estado: 'nuevo', observaciones: 'Empaque original' },
        { id: 4, codigo: '5566778899', nombre: 'Monitor', marca: 'LG', color: 'Blanco', modelo: '27UL500', estado: 'en_reparacion', observaciones: 'Pantalla dañada' },
        { id: 5, codigo: '6677889900', nombre: 'CPU', marca: 'Dell', color: 'Negro', modelo: 'Optiplex 3020', estado: 'en_uso', observaciones: 'Ruido al encender' },
        { id: 6, codigo: '4455667788', nombre: 'Impresora', marca: 'Canon', color: 'Blanco', modelo: 'G2010', estado: 'nuevo', observaciones: 'Recién comprada' },
        { id: 7, codigo: '9988776655', nombre: 'Laptop', marca: 'Lenovo', color: 'Gris', modelo: 'ThinkPad X1', estado: 'en_uso', observaciones: 'Cargador original' },
        { id: 8, codigo: '2233445566', nombre: 'Router', marca: 'TP-Link', color: 'Blanco', modelo: 'Archer C6', estado: 'en_uso', observaciones: 'Funcionando correctamente' },
        { id: 9, codigo: '3344556677', nombre: 'Switch', marca: 'Netgear', color: 'Negro', modelo: 'GS108', estado: 'en_uso', observaciones: 'Conexiones estables' },
        { id: 10, codigo: '5566778890', nombre: 'Monitor', marca: 'Acer', color: 'Negro', modelo: 'KG241Q', estado: 'descompuesto', observaciones: 'Sin imagen' },
        { id: 11, codigo: '6677889901', nombre: 'Mouse', marca: 'Microsoft', color: 'Blanco', modelo: 'Ergonomic Mouse', estado: 'nuevo', observaciones: 'Sin uso previo' },
        { id: 12, codigo: '7788990011', nombre: 'Teclado', marca: 'Razer', color: 'Negro', modelo: 'BlackWidow', estado: 'en_uso', observaciones: 'Tecla shift desgastada' },
        { id: 13, codigo: '8899001122', nombre: 'Laptop', marca: 'HP', color: 'Plateado', modelo: 'Spectre x360', estado: 'nuevo', observaciones: 'Recién comprada' },
        { id: 14, codigo: '9900112233', nombre: 'Impresora', marca: 'Epson', color: 'Negro', modelo: 'EcoTank L3150', estado: 'en_reparacion', observaciones: 'Problemas de tinta' },
        { id: 15, codigo: '0011223344', nombre: 'Router', marca: 'Cisco', color: 'Negro', modelo: 'RV340', estado: 'en_uso', observaciones: 'Configuración establecida' },
        { id: 16, codigo: '1122334466', nombre: 'Proyector', marca: 'BenQ', color: 'Blanco', modelo: 'MW535', estado: 'en_uso', observaciones: 'Lámpara al 50%' },
        { id: 17, codigo: '2233445567', nombre: 'Monitor', marca: 'Asus', color: 'Negro', modelo: 'VG248QE', estado: 'nuevo', observaciones: 'Sin daños visibles' },
        { id: 18, codigo: '3344556678', nombre: 'Switch', marca: 'D-Link', color: 'Negro', modelo: 'DGS-108', estado: 'en_uso', observaciones: 'Conexiones estables' },
        { id: 19, codigo: '5566778891', nombre: 'Teclado', marca: 'Logitech', color: 'Blanco', modelo: 'K380', estado: 'en_uso', observaciones: 'Algunas teclas sin respuesta' },
        { id: 20, codigo: '6677889902', nombre: 'Mouse', marca: 'Razer', color: 'Negro', modelo: 'DeathAdder', estado: 'nuevo', observaciones: 'Recién comprado' },
        { id: 21, codigo: '7788990022', nombre: 'Proyector', marca: 'Sony', color: 'Negro', modelo: 'VPL-EX455', estado: 'en_uso', observaciones: 'Lente rayado' },
        { id: 22, codigo: '8899001123', nombre: 'Laptop', marca: 'Acer', color: 'Gris', modelo: 'Swift 3', estado: 'en_reparacion', observaciones: 'Batería defectuosa' },
        { id: 23, codigo: '9900112234', nombre: 'Impresora', marca: 'Brother', color: 'Gris', modelo: 'HL-L2395DW', estado: 'en_uso', observaciones: 'Imprime lento' },
        { id: 24, codigo: '0011223345', nombre: 'Router', marca: 'Ubiquiti', color: 'Blanco', modelo: 'AmpliFi', estado: 'nuevo', observaciones: 'Sin problemas' },
        { id: 25, codigo: '1122334467', nombre: 'Teclado', marca: 'Corsair', color: 'Negro', modelo: 'K70', estado: 'descompuesto', observaciones: 'Teclas no responden' },
        { id: 26, codigo: '2233445568', nombre: 'Monitor', marca: 'Dell', color: 'Negro', modelo: 'P2419H', estado: 'en_reparacion', observaciones: 'Problemas de brillo' },
        { id: 27, codigo: '3344556679', nombre: 'Mouse', marca: 'HP', color: 'Negro', modelo: 'Z3700', estado: 'en_uso', observaciones: 'Rueda desgastada' },
        { id: 28, codigo: '5566778892', nombre: 'Switch', marca: 'Cisco', color: 'Negro', modelo: 'SG350-10', estado: 'nuevo', observaciones: 'Conexiones funcionales' },
        { id: 29, codigo: '6677889903', nombre: 'Laptop', marca: 'Samsung', color: 'Plateado', modelo: 'Galaxy Book', estado: 'nuevo', observaciones: 'Empaque original' },
        { id: 30, codigo: '7788990033', nombre: 'Proyector', marca: 'Epson', color: 'Blanco', modelo: 'EX3260', estado: 'en_uso', observaciones: 'Foco a cambiar' },
        { id: 31, codigo: '8899001124', nombre: 'Router', marca: 'Netgear', color: 'Negro', modelo: 'Nighthawk', estado: 'nuevo', observaciones: 'Recién configurado' },
        { id: 32, codigo: '9900112235', nombre: 'Teclado', marca: 'Microsoft', color: 'Negro', modelo: 'Sculpt', estado: 'en_uso', observaciones: 'Diseño ergonómico' },
        { id: 33, codigo: '0011223346', nombre: 'Impresora', marca: 'Canon', color: 'Gris', modelo: 'Pixma G7020', estado: 'en_uso', observaciones: 'Nivel bajo de tinta' },
        { id: 34, codigo: '1122334468', nombre: 'Monitor', marca: 'LG', color: 'Negro', modelo: '24MP59G', estado: 'en_uso', observaciones: 'Buen rendimiento' },
        { id: 35, codigo: '2233445569', nombre: 'Mouse', marca: 'Logitech', color: 'Rojo', modelo: 'MX Anywhere', estado: 'nuevo', observaciones: 'Funciona perfectamente' },
        { id: 36, codigo: '3344556680', nombre: 'Proyector', marca: 'BenQ', color: 'Negro', modelo: 'TH585', estado: 'en_reparacion', observaciones: 'Conector roto' },
        { id: 37, codigo: '5566778893', nombre: 'Switch', marca: 'D-Link', color: 'Gris', modelo: 'DGS-1210', estado: 'en_uso', observaciones: 'Conexiones estables' },
        { id: 38, codigo: '6677889904', nombre: 'Router', marca: 'TP-Link', color: 'Negro', modelo: 'AX3000', estado: 'nuevo', observaciones: 'Recién configurado' },
        { id: 39, codigo: '7788990044', nombre: 'Teclado', marca: 'HP', color: 'Blanco', modelo: '230 Wireless', estado: 'en_uso', observaciones: 'Buena conectividad' },
        { id: 40, codigo: '8899001125', nombre: 'Monitor', marca: 'Samsung', color: 'Negro', modelo: 'CRG5', estado: 'nuevo', observaciones: 'Calibrado correctamente' },
        { id: 41, codigo: '9900112236', nombre: 'Laptop', marca: 'Dell', color: 'Gris', modelo: 'XPS 13', estado: 'en_uso', observaciones: 'Carga lenta' },
        { id: 42, codigo: '0011223347', nombre: 'Mouse', marca: 'Microsoft', color: 'Gris', modelo: 'Arc Mouse', estado: 'nuevo', observaciones: 'Diseño compacto' },
        { id: 43, codigo: '1122334469', nombre: 'Impresora', marca: 'Epson', color: 'Blanco', modelo: 'WorkForce WF-2830', estado: 'en_reparacion', observaciones: 'Cabezal tapado' },
        { id: 44, codigo: '2233445570', nombre: 'Switch', marca: 'Cisco', color: 'Negro', modelo: 'SG300-28', estado: 'en_uso', observaciones: 'Rendimiento estable' },
        { id: 45, codigo: '3344556681', nombre: 'Proyector', marca: 'Sony', color: 'Negro', modelo: 'VPL-DX220', estado: 'en_uso', observaciones: 'Foco desgastado' },
        { id: 46, codigo: '5566778894', nombre: 'Router', marca: 'Ubiquiti', color: 'Blanco', modelo: 'Dream Machine', estado: 'nuevo', observaciones: 'Configurado y funcionando' },
        { id: 47, codigo: '6677889905', nombre: 'Teclado', marca: 'Logitech', color: 'Negro', modelo: 'G Pro', estado: 'nuevo', observaciones: 'Sin uso previo' },
        { id: 48, codigo: '7788990055', nombre: 'Laptop', marca: 'Lenovo', color: 'Negro', modelo: 'Yoga 7i', estado: 'en_uso', observaciones: 'Pantalla táctil funcionando' },
        { id: 49, codigo: '8899001126', nombre: 'Monitor', marca: 'Acer', color: 'Gris', modelo: 'Nitro XV272U', estado: 'en_reparacion', observaciones: 'Problemas de resolución' },
        { id: 50, codigo: '9900112237', nombre: 'Mouse', marca: 'Razer', color: 'Negro', modelo: 'Basilisk V3', estado: 'nuevo', observaciones: 'Empaque original' }
    ];

    function renderTable(data) {
        inventoryTable.innerHTML = '';
        data.forEach((item, index) => {
            inventoryTable.innerHTML += `
                <tr class="hover:bg-gray-100">
                    <td class="px-4 py-2 text-sm text-gray-600 border border-gray-300">${index + 1}</td>
                    <td class="px-4 py-2 text-sm text-gray-600 border border-gray-300">${item.codigo}</td>
                    <td class="px-4 py-2 text-sm text-gray-600 border border-gray-300">${item.nombre}</td>
                    <td class="px-4 py-2 text-sm text-gray-600 border border-gray-300">${item.marca}</td>
                    <td class="px-4 py-2 text-sm text-gray-600 border border-gray-300">${item.color}</td>
                    <td class="px-4 py-2 text-sm text-gray-600 border border-gray-300">${item.modelo}</td>
                    <td class="px-4 py-2 text-sm text-gray-600 border border-gray-300">${item.estado}</td>
                    <td class="px-4 py-2 text-sm text-gray-600 border border-gray-300">${item.observaciones}</td>
                </tr>
            `;
        });
    }

    function filterData() {
        const filter = filterType.value;
        const search = searchInput.value.toLowerCase();

        const filtered = inventory.filter(item => {
            const matchesType = filter ? item.estado === filter : true;
            const matchesSearch = item.nombre.toLowerCase().includes(search);
            return matchesType && matchesSearch;
        });

        renderTable(filtered);
    }
    filterType.addEventListener('change', filterData);
    searchInput.addEventListener('input', filterData);

    renderTable(inventory); 
    });
</script>
@endsection
