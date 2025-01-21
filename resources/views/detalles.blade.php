@extends('layouts.app')

@section('content')
{{-- <div class="container">
    <h1>Detalles del Inventario</h1>
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <img src="{{ asset('storage/' . $Datos->imagen) }}" alt="Imagen del bien" class="mb-3 img-fluid">
                </div>
                <div class="col-md-6">
                    <p><strong>Código QR:</strong> 
                        <img src="{{ asset('storage/' . $Datos->codigo_qr) }}" alt="Código QR">
                    </p>
                    <p><strong>Clave del Inventario:</strong> {{ $Datos->IdNomenclatura }}</p>
                    <p><strong>Campus:</strong> {{ $Datos->Campus }}</p>
                    <p><strong>Área:</strong> {{ $Datos->Area }}</p>
                    <p><strong>Responsable del Bien:</strong> {{ $Datos->ResponsableArea }}</p>
                    <p><strong>Responsable del Bien:</strong> {{ $Datos->ResponsableBien }}</p>
                    <p><strong>Nombre del Bien:</strong> {{ $Datos->Bien }}</p>
                    <p><strong>Descripción:</strong> {{ $Datos->descripcion }}</p>
                    <p><strong>Marca:</strong> {{ $Datos->marca }}</p>
                    <p><strong>Modelo:</strong> {{ $Datos->modelo }}</p>
                    <p><strong>Número de Serie:</strong> {{ $Datos->numero_serie }}</p>
                    <p><strong>Estado:</strong> {{ $Datos->estado }}</p>
                    <p><strong>Fecha de Adquisición:</strong> {{ $Datos->fecha_adquisicion }}</p>
                    <p><strong>Precio:</strong> ${{ number_format($Datos->precio, 2) }}</p>
                </div>
            </div>
        </div>
    </div>
    <a href="{{ route('inventario') }}" class="mt-3 btn btn-primary">Regresar</a>
</div> --}}


@endsection
