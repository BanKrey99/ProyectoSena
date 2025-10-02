@extends('layout.app')

@section('titulo', 'Crear usuario')

@section('content')
<div class="card shadow-sm">
    <div class="card-header bg-success text-white">
        <i class="bi bi-person-plus"></i> Crear nuevo usuario
    </div>
    <div class="card-body">
        <form action="{{ route('usuario.store')}}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre"
                    placeholder="Ej: Juanito" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Correo electrónico</label>
                <input type="email" class="form-control" id="email" name="email"
                    placeholder="Ej: xxxxx@gmail.com" required>
            </div>

            <div class="mb-3">
                <label for="telefono" class="form-label">Teléfono</label>
                <input type="text" class="form-control" id="telefono" name="telefono"
                    placeholder="Ej: 3201234567">
            </div>

            <div class="mb-3">
                <label for="tipoUsuario" class="form-label">Tipo de Usuario</label>
                <select name="tipoUsuario" id="tipoUsuario" class="form-select" required>
                    <option value="">Seleccione...</option>
                    <option value="persona">Persona</option>
                    <option value="inmobiliaria">Inmobiliaria</option>
                </select>
            </div>

            <div class="mb-3" id="empresaContainer" style="display:none;">
                <label for="nombreEmpresa" class="form-label">Nombre de la Empresa</label>
                <input type="text" name="nombreEmpresa" id="nombreEmpresa" class="form-control">
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

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const tipoUsuario = document.getElementById('tipoUsuario');
        const empresaContainer = document.getElementById('empresaContainer');
        const inputEmpresa = document.getElementById('nombreEmpresa');

        tipoUsuario.addEventListener('change', function() {
            if (this.value === 'inmobiliaria') {
                empresaContainer.style.display = 'block';
                inputEmpresa.setAttribute('required', 'required');
            } else {
                empresaContainer.style.display = 'none';
                inputEmpresa.removeAttribute('required');
                inputEmpresa.value = '';
            }
        });
    });
</script>