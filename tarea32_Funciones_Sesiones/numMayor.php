<?php
function encontrarMayor($numero1, $numero2, $numero3) {
    // Compara los números para encontrar el mayor
    $mayor = $numero1;

    if ($numero2 > $mayor) {
        $mayor = $numero2;
    }

    if ($numero3 > $mayor) {
        $mayor = $numero3;
    }

    return $mayor;
}

// Ejemplo de uso
$numero1 = 15;
$numero2 = 8;
$numero3 = 20;

$resultado = encontrarMayor($numero1, $numero2, $numero3);

echo "El mayor de $numero1, $numero2 y $numero3 es: $resultado";
?>
