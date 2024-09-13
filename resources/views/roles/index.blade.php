@extends('adminlte::page')

@section('title', 'Roles')

@section('content_header')
    <h1>Lista de Roles</h1>
@stop

@section('content')
    <a href="{{ route('roles.create') }}" class="btn btn-primary mb-3">Nuevo Rol</a>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($roles as $rol)
                <tr>
                    <td>{{ $rol->name }}</td>
                    <td>{{ $rol->descripcion }}</td>
                    <td>
                        <a href="{{ route('roles.show', $rol->id) }}" class="btn btn-info btn-sm">Ver</a>
                        <a href="{{ route('roles.edit', $rol->id) }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ route('roles.destroy', $rol->id) }}" method="POST" style="display:inline-block;" onsubmit="confirmDelete(event)">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <script>
        function confirmDelete(event) {
            if (!confirm('¿Estás seguro de que deseas eliminar este rol?')) {
                event.preventDefault();
            }
        }
    </script>
@stop