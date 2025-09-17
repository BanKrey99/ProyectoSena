<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('titulo')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .sidebar {
            min-width: 220px;
            max-width: 220px;
            background-color: #343a40;
            color: white;
        }

        .sidebar a {
            color: #adb5bd;
            text-decoration: none;
        }

        .sidebar a:hover {
            color: white;
        }

        .content {
            flex-grow: 1;
            padding: 20px;
            background-color: #f8f9fa;
        }
    </style>
</head>

<body>
    <div class="d-flex">
        <!-- Sidebar -->
        <div class="sidebar d-flex flex-column p-3">
            <h4 class="text-white">Dashboard</h4>
            <hr class="text-secondary">
            <ul class="nav nav-pills flex-column mb-auto">
                <li><a href="usuarios.html" class="nav-link"><i class="bi bi-people me-2"></i>Usuarios</a></li>
                <li><a href="inmuebles.html" class="nav-link"><i class="bi bi-building me-2"></i>Inmuebles</a></li>
                <li><a href="imagenes.html" class="nav-link"><i class="bi bi-card-image me-2"></i>Imágenes</a></li>
                <li><a href="{{ route(municipios.index) }}" class="nav-link"><i class="bi bi-geo-alt me-2"></i>Municipios</a></li>
                <li><a href="tipos.html" class="nav-link"><i class="bi bi-list-ul me-2"></i>Tipos Inmueble</a></li>
                <li><a href="casas.html" class="nav-link"><i class="bi bi-house-door me-2"></i>Casas</a></li>
                <li><a href="apartamentos.html" class="nav-link"><i class="bi bi-building-check me-2"></i>Apartamentos</a></li>
                <li><a href="bodegas.html" class="nav-link"><i class="bi bi-box-seam me-2"></i>Bodegas</a></li>
                <li><a href="locales.html" class="nav-link"><i class="bi bi-shop me-2"></i>Locales</a></li>
                <li><a href="lotes.html" class="nav-link"><i class="bi bi-tree me-2"></i>Lotes</a></li>
                <li><a href="oficinas.html" class="nav-link"><i class="bi bi-door-open me-2"></i>Oficinas</a></li>
                <li><a href="habitaciones.html" class="nav-link"><i class="bi bi-door-closed me-2"></i>Habitaciones</a></li>
            </ul>
            <hr class="text-secondary">
            <a href="#" class="nav-link"><i class="bi bi-box-arrow-right me-2"></i>Salir</a>
        </div>

        <!-- Contenido principal -->
        <div class="content w-100">
            <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm mb-4">
                <div class="container-fluid">
                    <span class="navbar-brand">@yield('titulo')</span>
                </div>
            </nav>

            <div class="container-fluid">
                @yield('contenido')
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>