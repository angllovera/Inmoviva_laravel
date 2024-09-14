@extends('adminlte::page')

@section('title', 'Detalles del Permiso')

@section('content_header')
    <h1>Detalles del Permiso</h1>
@stop

@section('content')
    <p><strong>Nombre:</strong> {{ $permiso->name }}</p>

    <a href="{{ route('permisos.index') }}" class="btn btn-primary">Volver</a>
@stop