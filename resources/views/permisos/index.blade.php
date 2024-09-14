@extends('adminlte::page')

@section('title', 'Permisos')

@section('content_header')
    <h1>Gestión de Permisos</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <a href="{{ route('permisos.create') }}" class="btn btn-primary">Agregar Nuevo Permiso</a>
        </div>
        <div class="card-body">
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($permisos as $permiso)
                        <tr>
                            <td>{{ $permiso->id }}</td>
                            <td>{{ $permiso->name }}</td>
                            
                            <td>
                                <a href="{{ route('permisos.show', $permiso->id) }}" class="btn btn-info btn-sm">Ver</a>
                                <a href="{{ route('permisos.edit', $permiso->id) }}" class="btn btn-warning btn-sm">Editar</a>
                                
                                <form action="{{ route('permisos.destroy', $permiso->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de que deseas eliminar este Permiso?')">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-center">No se encontraron Permisos</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@stop
