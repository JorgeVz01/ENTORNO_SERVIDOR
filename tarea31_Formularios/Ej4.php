<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información del Usuario</title>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoger los datos del formulario
    $nombre = $_POST["nombre"];
    $apellidos = $_POST["apellidos"];
    $edad = $_POST["edad"];
    $peso = $_POST["peso"];
    $sexo = $_POST["sexo"];
    $estadoCivil = $_POST["estado"];

    // Convertir el rango de edad seleccionado a un valor más específico
    switch ($edad) {
        case "14-19":
            $edad = "Entre 14 y 19 años";
            break;
        case "20-39":
            $edad = "Entre 20 y 39 años";
            break;
        case "40-60":
            $edad = "Entre 40 y 60 años";
            break;
        default:
            $edad = "No especificado";
    }

    // Recoger las aficiones seleccionadas
    $aficiones = isset($_POST["aficiones"]) ? $_POST["aficiones"] : array();

    // Mostrar la información del usuario
    echo "<h2>Información del Usuario</h2>";
    echo "<p><strong>Nombre:</strong> $nombre</p>";
    echo "<p><strong>Apellidos:</strong> $apellidos</p>";
    echo "<p><strong>Edad:</strong> $edad</p>";
    echo "<p><strong>Peso:</strong> $peso kg</p>";
    echo "<p><strong>Sexo:</strong> $sexo</p>";
    echo "<p><strong>Estado Civil:</strong> $estadoCivil</p>";
    
    if (!empty($aficiones)) {
        echo "<p><strong>Aficiones:</strong> " . implode(", ", $aficiones) . "</p>";
    } else {
        echo "<p><strong>Aficiones:</strong> Ninguna seleccionada</p>";
    }
} else {
    echo "<p>No se recibieron datos del formulario.</p>";
}
echo "<p><a href=\"Ej4.html\">Volver al formulario</a></p>";

?>

</body>
</html>
