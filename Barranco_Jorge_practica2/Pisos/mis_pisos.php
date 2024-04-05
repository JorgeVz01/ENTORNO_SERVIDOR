<?php
require_once "../functions.php";
session_start();

// Verificar si el usuario está autenticado
if (!isset($_SESSION["usuario_id"])) {
    // Si no está autenticado, redirigir al usuario al formulario de login
    header("Location: login.php");
    exit();
}

// Obtener el ID del usuario actualmente autenticado
$usuario_id = $_SESSION["usuario_id"];

// Obtener los pisos registrados por el usuario
$mis_pisos = obtenerPisosPorUsuario($usuario_id);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mis Pisos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">Mis Pisos Registrados</h2>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Calle</th>
                    <th scope="col">Número</th>
                    <th scope="col">Piso</th>
                    <th scope="col">Puerta</th>
                    <th scope="col">CP</th>
                    <th scope="col">Metros</th>
                    <th scope="col">Zona</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Imagen</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($mis_pisos as $piso) : ?>
                <tr>
                    <td><?php echo $piso['calle']; ?></td>
                    <td><?php echo $piso['numero']; ?></td>
                    <td><?php echo $piso['piso']; ?></td>
                    <td><?php echo $piso['puerta']; ?></td>
                    <td><?php echo $piso['cp']; ?></td>
                    <td><?php echo $piso['metros']; ?></td>
                    <td><?php echo $piso['zona']; ?></td>
                    <td><?php echo $piso['precio']; ?></td>
                    <td><img src="<?php echo $piso['imagen']; ?>" alt="Imagen del piso" style="width:100px;"></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <a href="../vendedor.html" class="btn btn-primary">Volver</a>
    </div>
</body>
</html>
