@extends('layout.app')

@section('titulo', 'Editar usuario')

@section('content')
<div class="card shadow-sm">
    <div class="card-header bg-success text-white">
        <i class="bi bi-person-plus"></i> Editar usuario
    </div>
    <div class="card-body">
        <form action="{{ route('usuario.update', $usuario->id)}}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre"
                value="{{ $usuario->nombre }}" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Correo electrónico</label>
                <input type="email" class="form-control" id="email" name="email"
                value="{{ $usuario->email }}" required>
            </div>

            <div class="mb-3">
                <label for="telefono" class="form-label">Teléfono</label>
                <input type="text" class="form-control" id="telefono" name="telefono"
                value="{{ $usuario->telefono }}" required>
            </div>

            <div class="d-flex justify-content-end">
                <a href="{{ route('usuario.index')}}" class="btn btn-secondary me-2">
                    <i class="bi bi-arrow-left"></i> Cancelar
                </a>
                <button type="submit" class="btn btn-success">
                    <i class="bi bi-check-circle"></i> Guardar
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
