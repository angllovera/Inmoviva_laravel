@extends('adminlte::page')

@section('title', 'Detalles del Tipo de Propiedad')

@section('content_header')
    <h1>Detalles del Tipo de Propiedad</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">{{ $tipoPropiedad->nombre }}</h3>
        </div>
        <div class="card-body">
            <p><strong>ID:</strong> {{ $tipoPropiedad->id }}</p>
            <p><strong>Nombre:</strong> {{ $tipoPropiedad->nombre }}</p>
            <p><strong>Descripción:</strong> {{ $tipoPropiedad->descripcion }}</p>
            <a href="{{ route('tipos-propiedades.index') }}" class="btn btn-secondary">Volver a la lista</a>
        </div>
    </div>
@stop
