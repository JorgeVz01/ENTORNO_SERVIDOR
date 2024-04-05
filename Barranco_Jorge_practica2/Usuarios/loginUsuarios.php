<?php
require_once "../functions.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener datos del formulario
    $correo = $_POST["correo"];
    $contrasena = $_POST["contrasena"];

    // Verificar las credenciales del usuario
    $usuario = obtenerUsuarioPorCorreo($correo);

    if ($usuario && password_verify($contrasena, $usuario["clave"])) {
        // Las credenciales son correctas
        session_start();
        $_SESSION["usuario_id"] = $usuario["usuario_id"];

        // Verificar el tipo de usuario y redirigir
        if ($usuario["tipo_usuario"] === "Comprador") {
            header("Location: ../pisos/comprador.php");
            exit();
        } elseif ($usuario["tipo_usuario"] === "Vendedor") {
            header("Location: ../vendedor.html");
            exit();
        } else {
            // Manejar el caso en el que el tipo de usuario es desconocido
            header("Location: ../index.html");
            exit();
        }
    } else {
        // Las credenciales son incorrectas, redirigir de vuelta al formulario de login con un mensaje de error
        header("Location: ../login.php?error=incorrect_password");
        exit();
    }
}
?>


