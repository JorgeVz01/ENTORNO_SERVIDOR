<?php
// Inicializar variables
$kilobytes = 0;
$megabytes = 0;

// Verificar si se han enviado datos por el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los kilobytes desde el formulario
    $kilobytes = floatval($_POST["kilobytes"]);

    // Calcular los megabytes
    $megabytes = $kilobytes / 1024;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Kb a Mb</title>
</head>
<body>

    <h1>Conversor de Kilobytes a Megabytes</h1>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label for="kilobytes">Ingrese la cantidad en Kilobytes:</label>
        <input type="text" name="kilobytes" required>
        <br>

        <input type="submit" value="Convertir">
    </form>

    <?php
    // Mostrar resultados si se han calculado
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "<h2>Resultados:</h2>";
        echo $kilobytes . " Kilobytes son aproximadamente " . $megabytes . " Megabytes.";
    }
    ?>

</body>
</html>
