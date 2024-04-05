<?php
require_once "../functions.php";

// Verificar si se recibió el ID del piso a reservar
if (isset($_POST['id_piso'])) {
    $Codigo_piso = $_POST['id_piso'];

    // echo "Código de piso recibido: " . $Codigo_piso;

    // Actualizar el estado de reserva del piso en la base de datos
    if (actualizarEstadoReserva($Codigo_piso)) {
        // Redireccionar de vuelta a la página de detalles del piso
        header("Location: ../pisos/detalles_piso.php?id_piso=$Codigo_piso");
        exit();
        // Mostrar mensaje de éxito
    } else {
        // Mostrar mensaje de error
        echo "<p>Error al actualizar el estado de reserva del piso.</p>";
    }
} else {
    // Manejar errores si no se recibe el ID del piso
    echo "<p>ID de piso no proporcionado.</p>";
}
?>


