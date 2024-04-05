<?php
require_once "../functions.php";

// Obtener todos los pisos registrados en la base de datos
$mostrar_pisos = obtenerTodosLosPisos();

$estados_reserva = obtenerEstadoReserva();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Pisos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <style>
        /* Estilo para el contenedor que contiene los pisos */
        .pisos-container {
           
          
            border-radius: 50px; /* Puedes ajustar el valor según la cantidad de redondeo que desees */

            max-height: calc(100vh - 150px); /* Altura máxima para ajustarse a la pantalla */
            overflow-y: auto; /* Mostrar scroll vertical si el contenido excede la altura */
        }
        .pisos-container::-webkit-scrollbar {
            width: 12px; /* Ancho del scrollbar */
        }   

        .pisos-container::-webkit-scrollbar-track {
            background-color: transparent; /* Color de fondo del scrollbar */
        }

        .pisos-container::-webkit-scrollbar-thumb {
            background-color: #888; /* Color del thumb (la barra móvil) */
            border-radius: 6px; /* Redondear el thumb */
        }

        .pisos-container::-webkit-scrollbar-thumb:hover {
            background-color: #555; /* Color del thumb al pasar el ratón por encima */
        }

        #header{
            background: linear-gradient(to bottom, #F9FFB4, rgba(255, 255, 255, 0)); /* De blanco a transparente */

        }
        .container{

        }

        
      body {
        background-image: url("../img/fondo1.jpg");
        background-size: cover; /* Ajusta el tamaño de la imagen para cubrir todo el fondo */
      }
    
    </style>
</head>
<body>
<div id="header" class=" p-2 row">
    <div class="col text-center">
        <h2>Listado de Pisos disponibles</h2> 
        <h5>Si desea comprar, debe registrarse como comprador</h5>
    </div>
    <div class="col-auto ">
        <a class="btn btn-outline-info btn-lg" href="../index.html" role="button">Volver</a>
        <a class="btn btn-outline-primary btn-lg" href="../login.php" role="button">Login</a>
    </div>
</div>
<div class="container mt-3">
    <!-- Contenedor para los pisos con scroll vertical -->
    <div class="row  pisos-container">
        <?php foreach ($mostrar_pisos as $index => $piso) : ?>
            <div class="col-md-12 mt-3">
                <div class="card">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="<?php echo $piso['imagen']; ?>" alt="Imagen del piso" style="object-fit: cover; height: 250px; width: 100%;">
                        </div>
                        <div class="col-md-4">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $piso['calle']; ?></h5>
                                <p class="card-text"><?php echo $piso['zona']; ?></p>
                                <p class="card-text">Portal <?php echo $piso['numero'] . ', Piso ' . $piso['piso'] . ', Puerta ' . $piso['puerta']; ?></p>
                                <p class="card-text">CP: <?php echo $piso['cp']; ?></p>
                                <p class="card-text">Metros: <?php echo $piso['metros']; ?></p>
                                <p class="card-text" style="color: blue;"><strong>Precio: <?php echo number_format($piso['precio'], 2); ?> €</strong></p>

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
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>




</body>
</html>



