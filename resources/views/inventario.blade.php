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
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventario</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- DataTables CSS -->
    <link href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h1>Inventario</h1>
            <a href="#" class="btn btn-primary">Añadir Bien</a>
        </div>

        <!-- Filtros -->
        <div class="mb-3">
            <form method="GET" action="#" class="row g-3">
                <div class="col-md-4">
                    <select name="estado" class="form-select">
                        <option value="">Filtrar por Estado</option>
                        <option value="en_uso">En Uso</option>
                        <option value="resguardo">Resguardo</option>
                        <option value="en_revision">En Revisión</option>
                        <option value="descompuesto">Descompuesto</option>
                        <option value="de_baja">De Baja</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <input type="text" name="buscar" class="form-control" placeholder="Buscar Bien">
                </div>
                <div class="col-md-2">
                    <button type="submit" class="btn btn-secondary">Buscar</button>
                </div>
            </form>
        </div>

        <!-- Tabla del Inventario -->
        <table class="table table-striped" id="inventarioTable">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Código de Barras</th>
                    <th>Nombre/Bien</th>
                    <th>Marca</th>
                    <th>Modelo</th>
                    <th>Color</th>
                    <th>Precio</th>
                    <th>Estado</th>
                    <th>Unidad de Medida</th>
                    <th>Observaciones</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <!-- Datos ficticios para mostrar el diseño -->
                <tr>
                    <td>1</td>
                    <td>1234567890</td>
                    <td>Monitor 24 pulgadas</td>
                    <td>Samsung</td>
                    <td>LF24T350</td>
                    <td>Negro</td>
                    <td>200.00</td>
                    <td><span class="badge bg-success">En Uso</span></td>
                    <td>Pieza</td>
                    <td>En perfectas condiciones</td>
                    <td>
                        <a href="#" class="btn btn-warning btn-sm">Editar</a>
                        <a href="#" class="btn btn-danger btn-sm">Eliminar</a>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>0987654321</td>
                    <td>Impresora Láser</td>
                    <td>HP</td>
                    <td>LaserJet Pro M404</td>
                    <td>Blanco</td>
                    <td>300.00</td>
                    <td><span class="badge bg-warning">En Revisión</span></td>
                    <td>Pieza</td>
                    <td>Falla en el tóner</td>
                    <td>
                        <a href="#" class="btn btn-warning btn-sm">Editar</a>
                        <a href="#" class="btn btn-danger btn-sm">Eliminar</a>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>1122334455</td>
                    <td>Laptop Dell Inspiron</td>
                    <td>Dell</td>
                    <td>Inspiron 15</td>
                    <td>Plata</td>
                    <td>700.00</td>
                    <td><span class="badge bg-danger">De Baja</span></td>
                    <td>Pieza</td>
                    <td>Baja por obsolescencia</td>
                    <td>
                        <a href="#" class="btn btn-warning btn-sm">Editar</a>
                        <a href="#" class="btn btn-danger btn-sm">Eliminar</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

    <!-- Inicializar DataTables -->
    <script>
        $(document).ready(function () {
            $('#inventarioTable').DataTable({
                language: {
                    url: "//cdn.datatables.net/plug-ins/1.13.6/i18n/es-ES.json" // Traducción al español
                }
            });
        });
    </script>
</body>
</html>

@endsection