<?php
session_start();
require_once "../../../functions.php";
require_once "../../admin_dashboard.php";


// Verificar si el usuario ha iniciado sesión como administrador
if (!isset($_SESSION['admin']) || $_SESSION['admin'] !== true) {
    // Si no ha iniciado sesión como administrador, redirigir de vuelta a admin.php
    header('Location: ../../admin.php');
    exit();
}

// Recuperar los datos del formulario
$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$contrasena = $_POST["contrasena"];
$tipoUsuario = $_POST["tipoUsuario"];

// Insertar el nuevo usuario en la base de datos
if (registrarUsuario($nombre, $correo, $contrasena, $tipoUsuario)) {
    // Éxito al registrar el usuario, redirigir a una página de confirmación o a admin_dashboard.php
    header('Location: ../../admin_dashboard.php?alta_usuario=success');
    exit();
} else {
    // Error al registrar el usuario, redirigir de vuelta a alta_usuario.php con un mensaje de error
    header('Location: alta_usuario.php?error=1');
    exit();
}
?>
