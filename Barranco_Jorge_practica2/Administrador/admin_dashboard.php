<?php
session_start();

// Verificar si el usuario ha iniciado sesión como administrador
if (!isset($_SESSION['admin']) || $_SESSION['admin'] !== true) {
    // Si no ha iniciado sesión como administrador, redirigir de vuelta a admin.php
    header('Location: admin.php');
    exit();
}

// Resto del contenido de la página para el área de administrador


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- Enlace al archivo CSS de Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Admin Dashboard</h1>
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="list-group">
                    <a href="./Usuarios/alta_ususario.php" class="list-group-item list-group-item-action">Alta de Usuario</a>
                    <a href="./Usuarios/baja_usuario.php" class="list-group-item list-group-item-action">Baja de Usuario</a>
                    <a href="./Usuarios/buscar_usuario.php" class="list-group-item list-group-item-action">Buscar Usuario</a>
                    <a href="./Usuarios/modificar_usuario.php" class="list-group-item list-group-item-action">Modificar Usuario</a>
                    <a href="./Usuarios/listar_usuarios.php" class="list-group-item list-group-item-action">Listar Usuarios</a>
                </div>
                <hr>
                <div class="list-group">
                    <a href="alta_piso.php" class="list-group-item list-group-item-action">Alta de Piso</a>
                    <a href="baja_piso.php" class="list-group-item list-group-item-action">Baja de Piso</a>
                    <a href="buscar_piso.php" class="list-group-item list-group-item-action">Buscar Piso</a>
                    <a href="modificar_piso.php" class="list-group-item list-group-item-action">Modificar Piso</a>
                    <a href="listar_pisos.php" class="list-group-item list-group-item-action">Listar Pisos</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts JS u otras inclusiones aquí -->

    <!-- Enlace al archivo JS de Bootstrap (opcional si lo necesitas) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

