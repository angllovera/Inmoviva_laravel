@extends('adminlte::page')

@section('title', 'Editar Rol')

@section('content_header')
    <h1>Editar Rol</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Modificar Rol</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('roles.update', $role->id) }}" method="POST">
                @csrf
                @method('PUT') <!-- Método PUT para actualizar el recurso -->
                <div class="form-group">
                    <label for="nombre">Nombre del Rol</label>
                    <input type="text" name="name" class="form-control" value="{{ old('name', $role->name) }}" placeholder="Ingresa el nombre del rol">
                </div>
                <div class="form-group">
                    <label for="descripcion">Descripción</label>
                    <textarea name="descripcion" class="form-control" placeholder="Ingresa la descripción del rol">{{ old('descripcion', $role->descripcion) }}</textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Actualizar</button>
                    <a href="{{ route('roles.index') }}" class="btn btn-secondary">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
@stop
