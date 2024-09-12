@extends('adminlte::page')

@section('title', $action . ' Usuario')

@section('content_header')
    <h1>{{ $action }} Usuario</h1>
@stop

@section('content')
    <form method="POST" action="{{ $action === 'Editar' ? route('usuarios.update', $usuario->id) : route('usuarios.store') }}">
        @csrf
        @if ($action === 'Editar')
            @method('PUT')
        @endif

        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $action === 'Editar' ? $usuario->nombre : old('nombre') }}" required>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $action === 'Editar' ? $usuario->email : old('email') }}" required>
        </div>

        <div class="form-group">
            <label for="telefono">Teléfono</label>
            <input type="text" class="form-control" id="telefono" name="telefono" value="{{ $action === 'Editar' ? $usuario->telefono : old('telefono') }}">
        </div>

        <button type="submit" class="btn btn-primary">{{ $action === 'Editar' ? 'Actualizar' : 'Guardar' }}</button>
    </form>
@stop
