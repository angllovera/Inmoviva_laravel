@extends('adminlte::page')

@section('title', 'Crear Agente')

@section('content_header')
    <h1>Crear Agente</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Nuevo Agente</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('agentes.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" class="form-control" placeholder="Ingresa el nombre">
                </div>
                <div class="form-group">
                    <label for="email">Correo Electrónico</label>
                    <input type="email" name="email" class="form-control" placeholder="Ingresa el correo">
                </div>
                <div class="form-group">
                    <label for="telefono">Teléfono</label>
                    <input type="text" name="telefono" class="form-control" placeholder="Ingresa el teléfono">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Guardar</button>
                    <a href="{{ route('agentes.index') }}" class="btn btn-secondary">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
@stop
