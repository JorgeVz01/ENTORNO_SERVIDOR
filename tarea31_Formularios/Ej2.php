<?php
// Definir la tarifa por hora
$tarifaPorHora = 12;

// Inicializar variables
$horasTrabajadas = 0;
$salarioSemanal = 0;

// Verificar si se han enviado datos por el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener las horas trabajadas desde el formulario
    $horasTrabajadas = floatval($_POST["horas"]);

    // Calcular el salario semanal
    $salarioSemanal = $horasTrabajadas * $tarifaPorHora;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Salario Semanal</title>
</head>
<body>

    <h1>Calculadora de Salario Semanal</h1>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label for="horas">Ingrese las horas trabajadas:</label>
        <input type="text" name="horas" required>
        <br>

        <input type="submit" value="Calcular Salario">
    </form>

    <?php
    // Mostrar resultados si se han calculado
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "<h2>Resultados:</h2>";
        echo "Horas trabajadas: " . $horasTrabajadas . " horas<br>";
        echo "Tarifa por hora: " . $tarifaPorHora . " euros/hora<br>";
        echo "Salario semanal: " . $salarioSemanal . " euros<br>";
    }
    ?>

</body>
</html>
