@extends('adminlte::page')

@section('title', 'Crear Permiso')

@section('content_header')
    <h1>Crear Permiso</h1>
@stop

@section('content')
    <form method="POST" action="{{ route('permisos.store') }}">
        @csrf

        <div class="form-group">
            <label for="name">Nombre</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@stop

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
