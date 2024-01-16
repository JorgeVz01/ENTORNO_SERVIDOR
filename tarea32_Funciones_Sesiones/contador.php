<?php
session_start();

// Inicializar el contador si no existe
if (!isset($_SESSION['visitas'])) {
    $_SESSION['visitas'] = 0;
}

// Incrementar el contador en cada visita
$_SESSION['visitas']++;

// Mostrar el número total de visitas
echo '<h2>Contador de visitas</h2>';
echo '<p>Esta página ha sido visitada ' . $_SESSION['visitas'] . ' veces.</p>';

// Enlace para reiniciar el contador
?>
