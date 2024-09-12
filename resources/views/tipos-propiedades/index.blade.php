@extends('adminlte::page')

@section('title', 'Lista de Tipos de Propiedades')

@section('content_header')
    <h1>Lista de Tipos de Propiedades</h1>
@stop

@section('content')
    <a href="{{ route('tipos-propiedades.create') }}" class="btn btn-primary mb-3">Nuevo Tipo de Propiedad</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tiposPropiedades as $tipoPropiedad)
                <tr>
                    <td>{{ $tipoPropiedad->id }}</td>
                    <td>{{ $tipoPropiedad->nombre }}</td>
                    <td>{{ $tipoPropiedad->descripcion }}</td>
                    <td>
                        <a href="{{ route('tipos-propiedades.show', $tipoPropiedad->id) }}" class="btn btn-sm btn-info">Ver</a>
                        <a href="{{ route('tipos-propiedades.edit', $tipoPropiedad->id) }}" class="btn btn-sm btn-warning">Editar</a>
                        <form action="{{ route('tipos-propiedades.destroy', $tipoPropiedad->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('¿Estás seguro de eliminar este tipo de propiedad?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@stop
