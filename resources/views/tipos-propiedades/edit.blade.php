@extends('adminlte::page')

@section('title', 'Editar Tipo de Propiedad')

@section('content_header')
    <h1>Editar Tipo de Propiedad</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Editar Tipo de Propiedad</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('tipos-propiedades.update', $tipoPropiedad->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" class="form-control" value="{{ $tipoPropiedad->nombre }}" required>
                </div>
                <div class="form-group">
                    <label for="descripcion">Descripción</label>
                    <textarea name="descripcion" class="form-control">{{ $tipoPropiedad->descripcion }}</textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Actualizar</button>
                    <a href="{{ route('tipos-propiedades.index') }}" class="btn btn-secondary">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
@stop
