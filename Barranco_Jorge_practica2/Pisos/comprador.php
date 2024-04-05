<?php
// Verificar si el usuario está autenticado
session_start();
if (!isset($_SESSION["usuario_id"])) {
    // Si no está autenticado, redirigir al usuario al formulario de inicio de sesión
    header("Location: ../login.php");
    exit();
}

// Obtener todos los pisos registrados en la base de datos
require_once "../functions.php";
$pisos = obtenerTodosLosPisos();

$estados_reserva = obtenerEstadoReserva();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compras</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="p-2 row">
            <div class="col">
                <h1>Compras</h1>
            </div>
            <div class="col-auto">
                <a href="../session/close.php" class="btn btn-danger">Cerrar Sesión</a>
            </div>
        </div>

        <!-- Mostrar los pisos disponibles -->
        <div class="row mt-5">
            <?php foreach ($pisos as $index => $piso) : ?>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="<?php echo $piso['imagen']; ?>" class="card-img-top" alt="Imagen del piso" style="object-fit: cover; height: 250px;">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $piso['calle']; ?></h5>
                            <p class="card-text"><?php echo $piso['zona']; ?></p>
                            <p class="card-text" style="color: blue;"><strong>Precio: <?php echo number_format($piso['precio'], 2); ?> €</strong></p>
                            <a href="./detalles_piso.php?id_piso=<?php echo $piso['Codigo_piso']; ?>" class="btn btn-primary">Ver detalles</a>
                            <?php
                                // Obtener el estado de reserva del piso actual
                                $estado_reserva = $estados_reserva[$index]['estado_reserva'];

                                // Mostrar el estado de reserva del piso
                                if ($estado_reserva === 'Reservado') {
                                    echo '<p class="card-text text-danger">¡Reservado!</p>';
                                }
                            ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>


</body>
</html>
