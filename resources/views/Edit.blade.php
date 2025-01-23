@extends('layouts.app')

@section('content')
    <!-- Contenido principal -->
<div class="main-content">
    <section class="section">
        <div class="flex-1 p-8">
            <div class="flex items-center justify-between mb-4">
                <h1 class="text-2xl font-bold text-gray-700">Editar Dato</h1>
            </div>

            <!-- Formulario para agregar departamentos -->

            <!-- Tabla para listar departamentos -->
            <div class="overflow-x-auto">
                <form action="{{ route('editN.up', ['id' => $Datos->id]) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                        @php
                        $campos = [
                            'CodigoDeBarras' => 'Código de barras',
                            'IdNomenclatura' => 'Nomenclatura',
                            'Campus' => 'Campus',
                            'Area' => 'Departamento/Área',
                            'ResponsableArea' => 'Responsable del Área',
                            'ResponsableBien' => 'Responsable del bien',
                            'Bien' => 'Bien',
                            'Marca' => 'Marca',
                            'Modelo' => 'Modelo',
                            'Color' => 'Color',
                            'NumSerie' => 'Número de serie',
                            'Sat' => 'SAT',
                            'Fecha' => 'Adquisición',
                            'Precio' => 'Precio',
                            'CodigoCFiscal' => 'Conta Fiscal',
                            'Estado' => 'Estado',
                            'Descripcion' => 'Descripción',
                            'Observaciones' => 'Observaciones',
                            'Factura' => 'Factura',
                            'Imagen' => 'Imagen',
                            'Medida' => 'Unidad',
                        ];
                    @endphp

                    @foreach ($campos as $campo => $label)
                        <h2 class="px-4 py-2 text-sm font-semibold text-left text-gray-700 border border-gray-300">{{ $label }}</h2>
                        <input class="w-full px-4 py-2 mb-2 text-sm text-gray-600 border border-gray-300" 
                            name="{{ $campo }}" 
                            value="{{ $Datos->$campo }}"
                            type="text" 
                            >
                    @endforeach

                    <button class="w-full p-2"> Actualizar </button> 
                </form>

            </div>

        </div>
    </section>
</div>
         
@endsection
