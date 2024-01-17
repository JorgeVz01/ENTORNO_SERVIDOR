<?php
// Función para establecer el color de fondo de la página
function setBgColor() {
    if (isset($_POST['color'])) {
        $color = $_POST['color'];
        setcookie('bg_color', $color, time() + 3600, '/');
        echo '<style>body { background-color: ' . $color . '; }</style>';
    } elseif (isset($_COOKIE['bg_color'])) {
        echo '<style>body { background-color: ' . $_COOKIE['bg_color'] . '; }</style>';
    }
}

// Llamamos a la función para establecer el color de fondo
setBgColor();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Color de Fondo</title>
</head>
<body>
    <h1>Cambiar Color de Fondo</h1>

    <!-- Formulario para cambiar el color de fondo -->
    <form method="post" action="">
        <label for="color">Elige un color:</label>
        <input type="color" id="color" name="color">
        <button type="submit">Cambiar Color</button>
    </form>

    <p>Esta es una página de ejemplo.</p>
</body>
</html>
