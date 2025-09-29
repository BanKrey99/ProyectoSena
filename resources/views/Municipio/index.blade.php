@extends('layout.app')

@section('titulo', 'Gestión de Municipios')

@section('contenido')
<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2 class="mb-0">Listado de Municipios</h2>
        <a href="{{ route('municipios.create') }}" class="btn btn-success btn-sm">
            <i class="fas fa-plus-circle"></i> Nuevo Municipio
        </a>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-8"> <!-- ajusta el ancho de la tabla -->
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-sm text-center align-middle">
                    <thead class="table-dark">
                        <tr>
                            <th style="width: 10%;">ID</th>
                            <th style="width: 50%;">Nombre</th>
                            <th style="width: 40%;">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($municipios as $municipio)
                        <tr>
                            <td>{{ $municipio->id }}</td>
                            <td>{{ $municipio->nombre }}</td>
                            <td>
                                <a href="{{ route('municipios.edit', $municipio->id) }}" class="btn btn-warning btn-sm">
                                    <i class="fas fa-edit"></i> Editar
                                </a>
                                <form action="{{ route('municipios.destroy', $municipio->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">
                                        <i class="fas fa-trash-alt"></i> Eliminar
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <a href="{{ route('welcome') }}" class="btn btn-secondary me-2">
                    <i class="bi bi-arrow-left"></i> Volver
                </a>
            </div>
        </div>
    </div>
</div>

@endsection