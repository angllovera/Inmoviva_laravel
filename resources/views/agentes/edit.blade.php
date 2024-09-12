@extends('adminlte::page')

@section('title', 'Editar Agente')

@section('content_header')
    <h1>Editar Agente</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Editar Información del Agente</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('agentes.update', $agente->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" class="form-control" value="{{ $agente->nombre }}" placeholder="Ingresa el nombre">
                </div>
                <div class="form-group">
                    <label for="email">Correo Electrónico</label>
                    <input type="email" name="email" class="form-control" value="{{ $agente->email }}" placeholder="Ingresa el correo">
                </div>
                <div class="form-group">
                    <label for="telefono">Teléfono</label>
                    <input type="text" name="telefono" class="form-control" value="{{ $agente->telefono }}" placeholder="Ingresa el teléfono">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Actualizar</button>
                    <a href="{{ route('agentes.index') }}" class="btn btn-secondary">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
@stop
