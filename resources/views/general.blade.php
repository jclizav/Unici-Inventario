@extends('layouts.app')

@section('content')
    <!-- Contenido principal -->
    <div class="flex-1 pt-8">
        <div class="flex items-center justify-between mb-4">
            <h1 class="px-8 text-2xl font-bold text-gray-700">Inventario</h1>
        </div>

        <div class="flex flex-wrap gap-4 p-2 place-content-between bg-slate-400">
            <div class="flex items-center gap-2">
                <input type="text" id="search" class="px-3 py-2 border rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-300 focus:border-blue-300" placeholder="Buscar ...">
                <div class="flex items-center mx-1">
                    <button id="Mostrar" class="flex items-center justify-center pl-1 pr-2 border border-gray-300 rounded-md h-9 hover:bg-gray-100">
                        <div class="flex items-center gap-1 align-middle">
                             <svg
                                class="w-6 h-6 text-gray-500"
                                width="18"
                                height="18"
                                viewBox="0 0 24 24"
                                stroke-width="2"
                                stroke="currentColor"
                                fill="none"
                                stroke-linecap="round"
                                stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" />
                                <line x1="12" y1="5" x2="12" y2="19" />
                                <line x1="5" y1="12" x2="19" y2="12" />
                            </svg>
                            <p class="text-sm text-gray-600">Añadir</p>
                        </div>
                    </button>
                </div>
                <div class="">
                    <a href="{{ route('Descarga',['filename' => 'Reporte_Bienes.pdf'])}}" class="flex items-center justify-center pl-1 pr-2 font-normal border-0 border-gray-300 rounded-md hover:no-underline h-9 hover:bg-gray-100">
                        <div class="flex items-center gap-1 align-middle">
                            <svg class="w-6 h-6 text-red-500"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                            </svg>
                            <p class="text-sm text-gray-600">Generar reporte</p>
                        </div>
                    </a>
                </div>
            </div>
            <!-- Formulario para agregar departamentos -->
            <div class="flex items-center gap-4">
                <select id="filterType" class="w-full px-4 py-2 text-gray-700 bg-transparent border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-400 focus:outline-none">
                    <option value="">Filtrar por estado</option>
                    <option value="En_uso">En uso</option>
                    <option value="descompuesto">Descompuesto</option>
                    <option value="en_reparacion">En reparación</option>
                    <option value="nuevo">Nuevo</option>
                </select>
                <select id="filterType2" class="w-full px-4 py-2 text-gray-700 bg-transparent border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-400 focus:outline-none">
                    <option value="">Filtrar por Activo</option>
                    <option value="121.01">121.01</option>
                    <option value="154.01">154.01</option>
                    <option value="155.01">155.01</option>
                    <option value="156.01">156.01</option>
                </select>
            </div>
        </div>
        <!-- Tabla para listar departamentos -->
        <div class="overflow-x-auto">
            <table id="inventoryTable" class="min-w-full border border-collapse border-gray-300">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="px-4 py-2 text-sm font-semibold text-left text-gray-700 border border-gray-300">Codigo de barras</th>
                        <th class="px-4 py-2 text-sm font-semibold text-left text-gray-700 border border-gray-300">Nomenclatura</th>
                        <th class="px-4 py-2 text-sm font-semibold text-left text-gray-700 border border-gray-300">Campus</th>
                        <th class="px-4 py-2 text-sm font-semibold text-left text-gray-700 border border-gray-300">Departamento/Área</th>
                        <th class="px-4 py-2 text-sm font-semibold text-left text-gray-700 border border-gray-300">Responsable del Área</th>
                        <th class="px-4 py-2 text-sm font-semibold text-left text-gray-700 border border-gray-300">Responsable del bien</th>
                        <th class="px-4 py-2 text-sm font-semibold text-left text-gray-700 border border-gray-300">Bien</th>
                        <th class="px-4 py-2 text-sm font-semibold text-left text-gray-700 border border-gray-300">Marca</th>
                        <th class="px-4 py-2 text-sm font-semibold text-left text-gray-700 border border-gray-300">Modelo</th>
                        <th class="px-4 py-2 text-sm font-semibold text-left text-gray-700 border border-gray-300">Color</th>
                        <th class="px-4 py-2 text-sm font-semibold text-left text-gray-700 border border-gray-300">Numero de serie</th>
                        <th class="px-4 py-2 text-sm font-semibold text-left text-gray-700 border border-gray-300">SAT</th>
                        <th class="px-4 py-2 text-sm font-semibold text-left text-gray-700 border border-gray-300">Adquisicion</th>
                        <th class="px-4 py-2 text-sm font-semibold text-left text-gray-700 border border-gray-300">Precio</th>
                        <th class="px-4 py-2 text-sm font-semibold text-left text-gray-700 border border-gray-300">Conta Fiscal</th>
                        <th class="px-4 py-2 text-sm font-semibold text-left text-gray-700 border border-gray-300">Estado</th>
                        <th class="px-4 py-2 text-sm font-semibold text-left text-gray-700 border border-gray-300">Descripcion</th>
                        <th class="px-4 py-2 text-sm font-semibold text-left text-gray-700 border border-gray-300">Observaciones</th>
                        <th class="px-4 py-2 text-sm font-semibold text-left text-gray-700 border border-gray-300">Factura</th>
                        <th class="px-4 py-2 text-sm font-semibold text-left text-gray-700 border border-gray-300">Imagen</th>
                        <th class="px-4 py-2 text-sm font-semibold text-left text-gray-700 border border-gray-300">Unidad</th>
                        <th class="px-4 py-2 text-sm font-semibold text-left text-gray-700 border border-gray-300">Acciones</th>
                    </tr>
                </thead> 
                <tbody>
                    <!-- Ejemplo de datos estáticos -->
                    {{-- @foreach ( $Datos as $Dato )
                        <tr class="hover:bg-gray-100">
                            <td class="px-4 py-2 text-sm text-gray-600 border border-gray-300">{{ $Dato->CodigoDeBarras }}</td>
                            <td class="px-4 py-2 text-sm text-gray-600 border border-gray-300">{{ $Dato->IdNomenclatura }}</td>
                            <td class="px-4 py-2 text-sm text-gray-600 border border-gray-300">{{ $Dato->Campus }}</td>
                            <td class="px-4 py-2 text-sm text-gray-600 border border-gray-300">{{ $Dato->Area }}</td>
                            <td class="px-4 py-2 text-sm text-gray-600 border border-gray-300">{{ $Dato->ResponsableArea }}</td>
                            <td class="px-4 py-2 text-sm text-gray-600 border border-gray-300">{{ $Dato->ResponsableBien }}</td>
                            <td class="px-4 py-2 text-sm text-gray-600 border border-gray-300">{{ $Dato->Bien }}</td>
                            <td class="px-4 py-2 text-sm text-gray-600 border border-gray-300">{{ $Dato->Marca }}</td>
                            <td class="px-4 py-2 text-sm text-gray-600 border border-gray-300">{{ $Dato->Modelo }}</td>
                            <td class="px-4 py-2 text-sm text-gray-600 border border-gray-300">{{ $Dato->Color }}</td>
                            <td class="px-4 py-2 text-sm text-gray-600 border border-gray-300">{{ $Dato->NumSerie }}</td>
                            <td class="px-4 py-2 text-sm text-gray-600 border border-gray-300">{{ $Dato->Sat }}</td>
                            <td class="px-4 py-2 text-sm text-gray-600 border border-gray-300">{{ $Dato->Fecha }}</td>
                            <td class="px-4 py-2 text-sm text-gray-600 border border-gray-300">{{ $Dato->Precio }}</td>
                            <td class="px-4 py-2 text-sm text-gray-600 border border-gray-300">{{ $Dato->CodigoCFiscal }}</td>
                            <td class="px-4 py-2 text-sm text-gray-600 border border-gray-300">{{ $Dato->Estado }}</td>
                            <td class="px-4 py-2 text-sm text-gray-600 border border-gray-300">{{ $Dato->Descripcion }}</td>
                            <td class="px-4 py-2 text-sm text-gray-600 border border-gray-300">{{ $Dato->Observaciones }}</td>
                            <td class="px-4 py-2 text-sm text-gray-600 border border-gray-300">{{ $Dato->Factura }}</td>
                            <td class="px-4 py-2 text-sm text-gray-600 border border-gray-300">{{ $Dato->Imagen }}</td> 
                            <td class="px-4 py-2 text-sm text-gray-600 border border-gray-300">{{ $Dato->Medida }}</td>
                            
                            <td class="flex px-4 py-2 text-sm text-gray-600 border border-gray-300">
                                <a class="p-2 Mostrar-e" href="{{ route('editN', ['id' => $Dato->id]) }}" > Editar </a>
                                <form action="{{ route('eliminarN', ['id' => $Dato->id]) }}" method="POST">
                                    @csrf
                                    @method('PUT') <!-- Aquí se indica que el formulario debe usar PUT -->
                                    <button type="submit">Eliminar</button>
                                </form>
                            </td>

                        </tr>    
                    @endforeach --}}
                </tbody>
            </table>
        </div>

        {{-- <img src="{{ Storage::get('app/public/'.'Test.jpeg') }}" alt="">
        <img src="{{ Storage::url($Datos[1]->Imagen) }}" alt=""> --}}
        {{-- <img src="{{ asset($Datos[1]->Imagen) }}" class="w-40 h-40" alt=""> --}}
    </div>

    <dialog id="dialog" class="top-10 py-5 min-w-[400px] px-5 rounded-lg bg-slate-300 border-2 border-sky-700" style="display: none;">
        <button id="cerrarDialogo" class="absolute px-3 py-1 font-bold rounded-full right-10 text-slate-200 bg-sky-700">
            X
        </button>
        <h3 class="pb-6 text-2xl font-bold text-center text-sky-700"> 
            Nuevo elemento
        </h3>
        <form action="{{ route('createN') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="flex gap-8">
                <div>
                    <h2 class="pl-2 mb-2 font-semibold text-sky-800">
                        Nomenclatura
                    </h2>
                    <input type="text" name="Nomenclatura" id="Nomenclatura" class="px-1.5 py-1 rounded-lg border-2 border-sky-500"> 
                    <h2 class="pl-2 mt-1 mb-1 font-semibold text-sky-800">
                        Responsable del Área
                    </h2>
                    <input type="text" name="ResponsableArea" id="ResponsableArea" class="px-1.5 py-1 rounded-lg border-2 border-sky-500"> 
                    <h2 class="pl-2 mt-1 mb-1 font-semibold text-sky-800">
                        Responsable del bien
                    </h2>
                    <input type="text" name="ResponsableBien" id="ResponsableBien" class="px-1.5 py-1 rounded-lg border-2 border-sky-500"> 
                    <h2 class="pl-2 mt-1 mb-1 font-semibold text-sky-800">
                        Marca
                    </h2>
                    <input type="text" name="Marca" id="Marca" class="px-1.5 py-1 rounded-lg border-2 border-sky-500"> 
                    <h2 class="pl-2 mt-1 mb-1 font-semibold text-sky-800">
                        Color
                    </h2>
                    <input type="text" name="Color" id="Color" class="px-1.5 py-1 rounded-lg border-2 border-sky-500"> 
                    <h2 class="pl-2 mt-1 mb-1 font-semibold text-sky-800">
                        Numero De Serie
                    </h2>
                    <input type="text" name="NumeroDeSerie" id="NumeroDeSerie" class="px-1.5 py-1 rounded-lg border-2 border-sky-500"> 
                    <h2 class="pl-2 mt-1 mb-1 font-semibold text-sky-800">
                        CodigoCFiscal
                    </h2>
                    <input type="text" name="CodigoCFiscal" id="CodigoCFiscal" class="px-1.5 py-1 rounded-lg border-2 border-sky-500"> 
                </div>
                <div>
                    <h2 class="pl-2 mt-1 mb-1 font-semibold text-sky-800">
                        Estado
                    </h2>
                    <select name="Estado" class="p-2 mt-2 border border-gray-300">
                        <option value="">Filtrar por estado</option>
                        <option value="En_uso">En uso</option>
                        <option value="descompuesto">Descompuesto</option>
                        <option value="en_reparacion">En reparación</option>
                        <option value="nuevo">Nuevo</option>
                    </select> 
                    <h2 class="pl-2 mt-1 mb-1 font-semibold text-sky-800">
                        Campus
                    </h2>
                    <input type="text" name="Campus" id="Campus" class="px-1.5 py-1 rounded-lg border-2 border-sky-500"> 
                    <h2 class="pl-2 mt-1 mb-1 font-semibold text-sky-800">
                        Adquisicion
                    </h2>
                    <input type="text" name="Adquisicion" id="Adquisicion" class="px-1.5 py-1 rounded-lg border-2 border-sky-500"> 
                    <h2 class="pl-2 mt-1 mb-1 font-semibold text-sky-800">
                        Imagen
                    </h2> 
                    <input type="file" name="DirArchivo" id="DirArchivo" onchange="fileSelected(event)">
                </div>
                <div>
                    <h2 class="pl-2 mt-1 mb-1 font-semibold text-sky-800">
                        Area
                    </h2>
                    <input type="text" name="Area" id="Area" class="px-1.5 py-1 rounded-lg border-2 border-sky-500"> 
                    <h2 class="pl-2 mt-1 mb-1 font-semibold text-sky-800">
                        Bien
                    </h2>
                    <input type="text" name="Bien" id="Bien" class="px-1.5 py-1 rounded-lg border-2 border-sky-500"> 
                    <h2 class="pl-2 mt-1 mb-1 font-semibold text-sky-800">
                        Modelo
                    </h2>
                    <input type="text" name="Modelo" id="Modelo" class="px-1.5 py-1 rounded-lg border-2 border-sky-500"> 
                    <h2 class="pl-2 mt-1 mb-1 font-semibold text-sky-800">
                        SAT
                    </h2>
                    <select name="SAT" class="p-2 mt-2 border border-gray-300">
                        <option value="">Filtrar por Activo</option>
                        <option value="121.01">121.01</option>
                        <option value="154.01">154.01</option>
                        <option value="155.01">155.01</option>
                        <option value="156.01">156.01</option>
                    </select>
                    <h2 class="pl-2 mt-1 mb-1 font-semibold text-sky-800">
                        Precio
                    </h2>
                    <input type="text" name="Precio" id="Precio" class="px-1.5 py-1 rounded-lg border-2 border-sky-500"> 
                </div>
            </div>
            <button id="addItemButton" class="w-full py-2 mt-4 font-semibold rounded-lg bg-sky-700 text-slate-200"> Cargar elemento </button>
        </form>
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
        
        // Obtener el botón y el diálogo por su ID
        // var botonesE = document.querySelectorAll(".Mostrar-e");
        // var dialogoE = document.getElementById("dialog-e");
    
        // // Agregar un evento a cada botón
        // botonesE.forEach(function(boton) {
        //     boton.addEventListener("click", function() {
        //         dialogoE.style.display = "block";
        //     });
        // });
    
        // // Cuando se hace clic en el botón de cerrar, ocultar el diálogo
        // document.getElementById("cerrarDialogo-e").addEventListener("click", function() {
        //     dialogoE.style.display = "none";
        // });

        // function abrirDialogo(id) {
        //     // Selecciona el diálogo y el input
        //     var dialogoE = document.getElementById("dialog-e");
        //     var inputNomenclatura = document.getElementById("NomenclaturaE");
            
        //     // Asigna el valor del ID al input
        //     console.log(id);
            
        //     // inputNomenclatura.value =;

        //     // Muestra el diálogo
        //     dialogoE.style.display = "block";
        // }
    </script>

    <script>
        function fileSelected(event) {
            const file = event.target.files[0];
            if (file) {
                alert(`Archivo seleccionado: ${file.name}`);
            }
        }
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const inventoryTable = document.getElementById('inventoryTable');
            const filterType = document.getElementById('filterType');
            const filterType2 = document.getElementById('filterType2');
            const searchInput = document.getElementById('search');

            let inventory = [
                @foreach ($Datos as $Dato)
                {
                    id: {{ $Dato->id }},
                    codigo: '{{ $Dato->CodigoDeBarras }}',
                    Nomecla: '{{ $Dato->IdNomenclatura }}',
                    Campus: '{{ $Dato->Campus }}',
                    Area: '{{ $Dato->Area }}',
                    RA: '{{ $Dato->ResponsableArea }}',
                    RB: '{{ $Dato->ResponsableBien }}',
                    nombre: '{{ $Dato->Bien }}',
                    marca: '{{ $Dato->Marca }}',
                    modelo: '{{ $Dato->Modelo }}',
                    color: '{{ $Dato->Color }}',
                    serie: '{{ $Dato->NumSerie }}',
                    sat: '{{ $Dato->Sat }}',
                    fecha: '{{ $Dato->Fecha }}',
                    precio: '{{ $Dato->Precio }}',
                    CCF: '{{ $Dato->CodigoCFiscal }}',
                    estado: '{{ $Dato->Estado }}',
                    Des: '{{ $Dato->Descripcion }}',
                    observaciones: '{{ $Dato->Observaciones }}',
                    fac: '{{ $Dato->Factura }}',
                    img: '{{ $Dato->Imagen }}',
                    med: '{{ $Dato->Medida }}',
                    // categoria: 'Equipo de computo', // Puedes personalizar esta categoría si es necesario
                },
                @endforeach
            ];

            // Definir los títulos de las cabeceras
            // const tableHeaders = ['Codigo', 'ID', 'Nombre', 'Marca', 'Modelo', 'Color', 'Estado', 'Observaciones', 'Acciones'];

            const renderTable = () => {
                // Seleccionar el tbody de la tabla y limpiarlo
                const tbody = inventoryTable.querySelector('tbody');
                tbody.innerHTML = '';

                // Seleccionar el thead de la tabla y agregar los encabezados
                const thead = inventoryTable.querySelector('thead');
                if (!thead) {
                    const newThead = document.createElement('thead');
                    const headerRow = document.createElement('tr');
                    
                    tableHeaders.forEach(header => {
                        const th = document.createElement('th');
                        th.textContent = header;
                        headerRow.appendChild(th);
                    });
                    
                    newThead.appendChild(headerRow);
                    inventoryTable.insertBefore(newThead, tbody);
                }

                let filteredInventory = inventory;

                if (searchInput.value) {
                    filteredInventory = filteredInventory.filter(item => item.codigo.includes(searchInput.value));
                }

                if (filterType.value) {
                    filteredInventory = filteredInventory.filter(item => item.estado === filterType.value);
                }

                if (filterType2.value) {
                    filteredInventory = filteredInventory.filter(item => item.sat === filterType2.value);
                }

                filteredInventory.forEach(item => {
                    const row = document.createElement('tr');
                    row.classList.add('hover:bg-gray-100');

                    row.innerHTML = `
                        <td class="px-4 py-2 text-sm text-gray-600 border border-gray-300">${item.codigo}</td>
                        <td class="px-4 py-2 text-sm text-gray-600 border border-gray-300">${item.Nomecla}</td>
                        <td class="px-4 py-2 text-sm text-gray-600 border border-gray-300">${item.Campus}</td>
                        <td class="px-4 py-2 text-sm text-gray-600 border border-gray-300">${item.Area}</td>
                        <td class="px-4 py-2 text-sm text-gray-600 border border-gray-300">${item.RA}</td>
                        <td class="px-4 py-2 text-sm text-gray-600 border border-gray-300">${item.RB}</td>
                        <td class="px-4 py-2 text-sm text-gray-600 border border-gray-300">${item.nombre}</td>
                        <td class="px-4 py-2 text-sm text-gray-600 border border-gray-300">${item.marca}</td>
                        <td class="px-4 py-2 text-sm text-gray-600 border border-gray-300">${item.modelo}</td>
                        <td class="px-4 py-2 text-sm text-gray-600 border border-gray-300">${item.color}</td>
                        <td class="px-4 py-2 text-sm text-gray-600 border border-gray-300">${item.serie}</td>
                        <td class="px-4 py-2 text-sm text-gray-600 border border-gray-300">${item.sat}</td>
                        <td class="px-4 py-2 text-sm text-gray-600 border border-gray-300">${item.fecha}</td>
                        <td class="px-4 py-2 text-sm text-gray-600 border border-gray-300">${item.precio}</td>
                        <td class="px-4 py-2 text-sm text-gray-600 border border-gray-300">${item.CCF}</td>
                        <td class="px-4 py-2 text-sm text-gray-600 border border-gray-300">${item.estado}</td>
                        <td class="px-4 py-2 text-sm text-gray-600 border border-gray-300">${item.Des}</td>
                        <td class="px-4 py-2 text-sm text-gray-600 border border-gray-300">${item.observaciones}</td>
                        <td class="px-4 py-2 text-sm text-gray-600 border border-gray-300">${item.fac}</td>
                        <td class="px-4 py-2 text-sm text-gray-600 border border-gray-300">
                            <img src='${item.img}' />
                        </td>
                        <td class="px-4 py-2 text-sm text-gray-600 border border-gray-300">${item.med}</td>
                        <td class="flex h-full px-4 py-2 text-sm text-gray-600 border border-gray-300">
                            <a class="p-2 Mostrar-e" href="actualizarDato/${item.id}">Editar</a>
                            <form action="/eliminarDato/${item.id}" method="POST">
                                @csrf
                                @method('PUT')
                                <button type="submit">Eliminar</button>
                            </form>
                        </td>
                    `;
                    
                    tbody.appendChild(row);
                });
            };

            searchInput.addEventListener('input', renderTable);
            filterType.addEventListener('change', renderTable);
            filterType2.addEventListener('change', renderTable);

            renderTable();
        });
    </script>

@endsection
