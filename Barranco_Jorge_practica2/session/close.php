<?php
session_start(); // Iniciar la sesión si no está iniciada

// Destruir la sesión
session_destroy();

// Redirigir al usuario a la página de inicio de sesión
header("Location: ../index.html");
exit(); // Importante terminar el script después de la redirección
?>
