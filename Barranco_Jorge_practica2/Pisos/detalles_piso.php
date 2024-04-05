<?php
require_once "../functions.php";

// Obtener el ID del piso desde la URL
$id_piso = $_GET['id_piso'];

// Obtener los detalles del piso
$piso = obtenerDetallesPiso($id_piso);

// Comprueba si se encontró el piso
if ($piso) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del Piso</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .card-img-top {
            max-width: 30vw; /* 80% del ancho de la pantalla */
            max-height: 40vh; /* 80% del alto de la pantalla */
        }
        .card {
            max-width: 400px; /* Ancho máximo deseado para la tarjeta */
        }
        .reservado {
            opacity: 0.5; /* Cambia la opacidad para simular que el piso está reservado */
            pointer-events: none; /* Deshabilita los eventos de clic en el piso */
        }


    </style>
</head>
<body>
    <div class="container mt-2">
        <div class="p-2 row">
            <div class="col">
                <h1>Detalles del piso</h1>
            </div>
            <div class="col-auto">
                <a href="../session/close.php" class="btn btn-danger">Cerrar Sesión</a>
            </div>
        </div>
        <table class="table mt-2">
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
                
                <tr>
                    <td><strong><?php echo $piso['calle']; ?></strong></td>
                    <td><?php echo $piso['numero']; ?></td>
                    <td><?php echo $piso['piso']; ?></td>
                    <td><?php echo $piso['puerta']; ?></td>
                    <td><?php echo $piso['cp']; ?></td>
                    <td><?php echo $piso['metros']; ?> m2</td>
                    <td><?php echo $piso['zona']; ?></td>
                    <td class="card-text" style="color: blue;"><strong>Precio: <?php echo number_format($piso['precio'], 2); ?> €</strong></td>
                    <td><img src="<?php echo $piso['imagen']; ?>" alt="Imagen del piso" style="width:200px;"></td>
                </tr>
                
            </tbody>
        </table>

        <div class="p-2 row">
            <div class="col">
                <h3>Proceder a la compra:</h3>
            </div>
            <div class="col-auto">
                <a href="./comprador.php" class="btn btn-dark">Volver</a>
            </div>

            <?php  
                // Verificar el estado de reserva
                if ($piso['estado_reserva'] === 'Reservado') {
                    echo "<p>Este piso ya está reservado.</p>";
                    // Deshabilitar el botón de reserva
                    $disabled = "disabled";
                } else {
                     echo "<p>Este piso está disponible para reservar.</p>";
                     // Habilitar el botón de reserva
                     $disabled = "";
                }
            ?>

            <form action="../Reserva/actualizar_estado_reserva.php" method="post">
            <input type="hidden" name="id_piso" value="<?php echo $piso['Codigo_piso']; ?>">
                <button type="submit" class="btn btn-success btn-lg btn-block" <?php echo $disabled; ?> >Reservar</button>
            </form>


   
    </div>

</body>
</html>



<?php
} else {
    echo "<p>No se encontraron detalles para el piso seleccionado.</p>";
}
?>
