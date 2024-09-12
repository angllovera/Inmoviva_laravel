@extends('adminlte::page')

@section('title', 'Crear Tipo de Propiedad')

@section('content_header')
    <h1>Crear Tipo de Propiedad</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Nuevo Tipo de Propiedad</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('tipos-propiedades.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" class="form-control" placeholder="Ingresa el nombre" required>
                </div>
                <div class="form-group">
                    <label for="descripcion">Descripción</label>
                    <textarea name="descripcion" class="form-control" placeholder="Ingresa la descripción"></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Guardar</button>
                    <a href="{{ route('tipos-propiedades.index') }}" class="btn btn-secondary">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
@stop
