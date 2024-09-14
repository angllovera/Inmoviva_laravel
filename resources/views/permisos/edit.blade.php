@extends('adminlte::page')

@section('title', 'Editar Permiso')

@section('content_header')
    <h1>Editar Permiso</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Modificar Rol</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('permisos.update', $permiso->id) }}" method="POST">
                @csrf
                @method('PUT') <!-- Método PUT para actualizar el recurso -->
                <div class="form-group">
                    <label for="name">Nombre del Permiso</label>
                    <input type="text" name="name" class="form-control" value="{{ old('name', $permiso->name) }}" placeholder="Ingresa el nombre del Permiso">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Actualizar</button>
                    <a href="{{ route('permisos.index') }}" class="btn btn-secondary">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
@stop
