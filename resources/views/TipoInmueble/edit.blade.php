@extends('layout.app')

@section('titulo', 'Editar tipo de inmueble')

@section('content')
<div class="card shadow-sm">
    <div class="card-header bg-success text-white">
        <i class="bi bi-plus-circle"></i> Editar inmueble
    </div>
    <div class="card-body">
        <form action="{{ route('tipoInmueble.update', $tipoInmueble->id) }}" method="POST">

            @csrf
            <div class="mb-3">
                <label for="nombre" class="form-label">Tipo de inmueble</label>
                <input type="text" class="form-control" id="nombre" name="nombre"
                value="{{ $tipoInmueble->nombre }}" required>

            </div>

            <div class="d-flex justify-content-end">
                <a href="{{ route('tipoInmueble.index') }}" class="btn btn-secondary me-2">
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