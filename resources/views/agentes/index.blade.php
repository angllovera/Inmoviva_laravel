@extends('adminlte::page')

@section('title', 'Lista de Agentes')

@section('content_header')
    <h1>Lista de Agentes</h1>
@stop

@section('content')
    <a href="{{ route('agentes.create') }}" class="btn btn-primary">Nuevo Agente</a>

    <table class="table mt-3">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Email</th>
                <th>Teléfono</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($agentes as $agente)
                <tr>
                    <td>{{ $agente->nombre }}</td>
                    <td>{{ $agente->email }}</td>
                    <td>{{ $agente->telefono }}</td>
                    <td>
                        <!-- Botón Ver -->
                        <a href="{{ route('agentes.show', $agente->id) }}" class="btn btn-sm btn-info">Ver</a>
                        
                        <!-- Botón Editar -->
                        <a href="{{ route('agentes.edit', $agente->id) }}" class="btn btn-sm btn-warning">Editar</a>
                        
                        <!-- Botón Eliminar -->
                        <form action="{{ route('agentes.destroy', $agente->id) }}" method="POST"
                            style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@stop
