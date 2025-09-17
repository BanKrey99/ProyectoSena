@extends('layout.app')

@section('titulo', 'Panel de Administración')

@section('contenido')
    <div class="container-fluid">
        <div class="row">
            <!-- Card ejemplo -->
            <div class="col-md-4">
                <div class="card shadow-sm mb-4">
                    <div class="card-body">
                        <h5 class="card-title"><i class="bi bi-people"></i> Usuarios</h5>
                        <p class="card-text">Gestión de usuarios registrados en la plataforma.</p>
                        <a href="#" class="btn btn-primary btn-sm">Administrar</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card shadow-sm mb-4">
                    <div class="card-body">
                        <h5 class="card-title"><i class="bi bi-building"></i> Inmuebles</h5>
                        <p class="card-text">Alta, edición y consulta de propiedades.</p>
                        <a href="#" class="btn btn-primary btn-sm">Administrar</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card shadow-sm mb-4">
                    <div class="card-body">
                        <h5 class="card-title"><i class="bi bi-card-image"></i> Imágenes</h5>
                        <p class="card-text">Administración de imágenes asociadas a inmuebles.</p>
                        <a href="#" class="btn btn-primary btn-sm">Administrar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
</div>

@endsection