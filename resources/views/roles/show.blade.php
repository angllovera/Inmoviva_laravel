@extends('adminlte::page')

@section('title', 'Detalles del Rol')

@section('content_header')
    <h1>Detalles del Rol</h1>
@stop

@section('content')
    <p><strong>Nombre:</strong> {{ $role->name }}</p>

    <a href="{{ route('roles.index') }}" class="btn btn-primary">Volver</a>
@stop