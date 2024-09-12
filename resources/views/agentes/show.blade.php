@extends('adminlte::page')

@section('title', 'Detalles del Agente')

@section('content_header')
    <h1>Detalles del Agente</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Información del Agente</h3>
        </div>
        <div class="card-body">
            <div class="form-group">
                <strong>Nombre:</strong>
                <p>{{ $agente->nombre }}</p>
            </div>
            <div class="form-group">
                <strong>Correo Electrónico:</strong>
                <p>{{ $agente->email }}</p>
            </div>
            <div class="form-group">
                <strong>Teléfono:</strong>
                <p>{{ $agente->telefono }}</p>
            </div>
            <a href="{{ route('agentes.index') }}" class="btn btn-secondary">Volver</a>
        </div>
    </div>
@stop
