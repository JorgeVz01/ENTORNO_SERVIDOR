<?php
require_once "../functions.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Obtener datos del formulario
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $contrasena = $_POST["contrasena"];
    $tipoUsuario = $_POST["tipoUsuario"];
    
    // Verificar si el correo electrónico ya está registrado
    if (existeCorreoRegistrado($correo)) {
        header("Location: ../register.php?error=repeated_email");
    } else {
        // Llamar a la función para registrar el usuario
        if (registrarUsuario($nombre, $correo, $contrasena, $tipoUsuario)) {
            // Iniciar sesión después del registro exitoso
            session_start();
            // Obtener el ID del usuario recién registrado
            $usuario = obtenerUsuarioPorCorreo($correo);
            // Guardar el ID del usuario en la sesión
            $_SESSION["usuario_id"] = $usuario["usuario_id"];
            // Redirigir al usuario a la página correspondiente según su tipo de usuario
            if ($tipoUsuario === "Comprador") {
                header("Location: ../pisos/comprador.php");
            } elseif ($tipoUsuario === "Vendedor") {
                header("Location: ../vendedor.html");
            } else {
                // Redirigir a una página por defecto si el tipo de usuario es desconocido
                header("Location: ../index.html");
            }
            exit(); // Importante terminar el script después de la redirección
        } else {
            echo "<p>Error al registrar usuario.</p>";
        }
    }
}
?>
