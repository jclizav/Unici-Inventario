@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalles del Inventario</h1>
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <img src="{{ asset('storage/' . $item->imagen) }}" alt="Imagen del bien" class="img-fluid mb-3">
                </div>
                <div class="col-md-6">
                    <p><strong>Código QR:</strong> <img src="{{ asset('storage/' . $item->codigo_qr) }}" alt="Código QR"></p>
                    <p><strong>Clave del Inventario:</strong> {{ $item->clave }}</p>
                    <p><strong>Campus:</strong> {{ $item->campus }}</p>
                    <p><strong>Área:</strong> {{ $item->area }}</p>
                    <p><strong>Responsable del Bien:</strong> {{ $item->responsable }}</p>
                    <p><strong>Nombre del Bien:</strong> {{ $item->nombre }}</p>
                    <p><strong>Descripción:</strong> {{ $item->descripcion }}</p>
                    <p><strong>Marca:</strong> {{ $item->marca }}</p>
                    <p><strong>Modelo:</strong> {{ $item->modelo }}</p>
                    <p><strong>Número de Serie:</strong> {{ $item->numero_serie }}</p>
                    <p><strong>Estado:</strong> {{ $item->estado }}</p>
                    <p><strong>Fecha de Adquisición:</strong> {{ $item->fecha_adquisicion }}</p>
                    <p><strong>Precio:</strong> ${{ number_format($item->precio, 2) }}</p>
                </div>
            </div>
        </div>
    </div>
    <a href="{{ route('inventario') }}" class="btn btn-primary mt-3">Regresar</a>
</div>
@endsection