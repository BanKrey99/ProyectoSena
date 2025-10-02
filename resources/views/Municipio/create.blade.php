@extends('layout.app')

@section('titulo', 'Nuevo Municipio')

@section('content')
<div class="card shadow-sm">
    <div class="card-header bg-success text-white">
        <i class="bi bi-plus-circle"></i> Crear Municipio
    </div>
    <div class="card-body">
        <form action="{{ route('municipios.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre del Municipio</label>
                <input type="text" class="form-control" id="nombre" name="nombre"
                    placeholder="Ej: Málaga" required>
            </div>

            <div class="mb-3">
                <label for="codigoPostal" class="form-label">Codigo postaal</label>
                <input type="text" class="form-control" id="codigoPostal" name="codigoPostal"
                    placeholder="Ej: 2536" required>
            </div>

            <div class="d-flex justify-content-end">
                <a href="{{ route('municipios.index') }}" class="btn btn-secondary me-2">
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



