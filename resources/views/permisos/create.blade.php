@extends('adminlte::page')

@section('title', 'Crear Permiso')

@section('content_header')
    <h1>Crear Permiso</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Nuevo Permiso</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('permisos.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nombre">Nombre del Permiso</label>
                    <input type="text" name="name" class="form-control" placeholder="Ingresa el nombre del permiso" value="{{ old('name') }}">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Guardar</button>
                    <a href="{{ route('permisos.index') }}" class="btn btn-secondary">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
@stop


