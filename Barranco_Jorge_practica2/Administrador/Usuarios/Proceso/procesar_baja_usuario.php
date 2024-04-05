<?php
require_once "../../../functions.php";

// Verificar si se recibió el ID del usuario a eliminar
if (isset($_POST['usuario'])) {
    $idUsuario = $_POST['usuario'];

    // Eliminar el usuario de la base de datos
    if (eliminarUsuario($idUsuario)) {
        echo "Usuario eliminado correctamente.";
    } else {
        echo "Error al eliminar el usuario.";
    }
} else {
    echo "ID de usuario no proporcionado.";
}
?>
