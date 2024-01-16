
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora PHP</title>
</head>
<body>

    <h1>Calculadora PHP</h1>

    <form method="post" action="#" >
        <label for="num1">Ingrese el primer número:</label>
        <input type="text" name="num1" required>
        <br>

        <label for="num2">Ingrese el segundo número:</label>
        <input type="text" name="num2" required>
        <br>

        <input type="submit" value="Calcular">
    </form>

<?php
    $num1 = $_REQUEST['num1'];
    $num2 = $_REQUEST['num2'];

    function sumar($num1, $num2) {
        return $num1 + $num2;
    }
    
    function restar($num1, $num2) {
        return $num1 - $num2;
    }
    
    function multiplicar($num1, $num2) {
        return $num1 * $num2;
    }
    
    function dividir($num1, $num2) {
        if ($num2 != 0) {
            return $num1 / $num2;
        } else {
            return "Error: No se puede dividir por cero.";
        }
    }
    
        $suma = sumar($num1, $num2);
        $resta = restar($num1, $num2);
        $producto = multiplicar($num1, $num2);
        $cociente = dividir($num1, $num2); 
    
        echo "<h2>Resultados de operar con $num1 y $num2:</h2>";
        echo "Suma: " . $suma . "<br>";
        echo "Resta: " . $resta . "<br>";
        echo "Multiplicación: " . $producto . "<br>";
        echo "División: " . $cociente . "<br>";

?>


</body>
</html>