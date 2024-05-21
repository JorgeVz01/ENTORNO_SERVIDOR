<!DOCTYPE html>
<html>
<head>
    <title>Números, Cuadrados y Cubos</title>
</head>
<body>
    <h1>Números, Cuadrados y Cubos</h1>
    <table border="1">
        <tr>
            <th>Número</th>
            <th>Cuadrado</th>
            <th>Cubo</th>
        </tr>
        <?php
        // Definir los arrays
        $numero = array();
        $cuadrado = array();
        $cubo = array();

        // Cargar el array "numero" con valores aleatorios entre 1 y 20
        for ($i = 0; $i < 10; $i++) {
            $numero[$i] = rand(1, 20);
            $cuadrado[$i] = $numero[$i] ** 2;  // Calcular el cuadrado
            $cubo[$i] = $numero[$i] ** 3;      // Calcular el cubo
        }

        // Mostrar los datos en la tabla
        for ($i = 0; $i < 10; $i++) {
            echo "<tr>";
            echo "<td>" . $numero[$i] . "</td>";
            echo "<td>" . $cuadrado[$i] . "</td>";
            echo "<td>" . $cubo[$i] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
