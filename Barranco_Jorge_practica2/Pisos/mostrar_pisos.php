<?php
require_once "../functions.php";

// Obtener todos los pisos registrados en la base de datos
$pisos = obtenerTodosLosPisos();

// Mostrar cada piso en una tarjeta Bootstrap
foreach ($pisos as $piso) {
    ?>
    <div class="col-md-4 mb-4">
        <div class="card">
            <img src="<?php echo $piso['imagen']; ?>" class="card-img-top" alt="Imagen del piso">
            <div class="card-body">
                <h5 class="card-title"><?php echo $piso['calle']; ?></h5>
                <p class="card-text"><?php echo $piso['zona']; ?></p>
                <a href="#" class="btn btn-primary">Ver detalles</a>
            </div>
        </div>
    </div>
    <?php
}
?>
