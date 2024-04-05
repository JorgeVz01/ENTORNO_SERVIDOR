<?php
session_start();

// Verificar las credenciales del administrador
if ($_POST['username'] === 'admin' && $_POST['password'] === 'root') {
    // Credenciales válidas, redirigir al área de administrador
    $_SESSION['admin'] = true;
    header('Location: admin_dashboard.php');
    exit();
} else {
    // Credenciales incorrectas, mostrar mensaje de error y redirigir de vuelta a admin.php
    $_SESSION['admin_error'] = 'Nombre de usuario o contraseña incorrectos';
    header('Location: admin.php');
    exit();
}
?>

