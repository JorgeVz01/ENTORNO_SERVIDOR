<!DOCTYPE html>
<html>
<head>
    <title>Números Aleatorios en Colores</title>
</head>
<body>
    <h1>Números Aleatorios en Colores</h1>
    <?php
    
    // Inicializar el vector para almacenar los números
    $numeros = array();

    // Generar 8 números aleatorios y almacenarlos en el vector
    for ($i = 0; $i < 8; $i++) {
        $numeros[$i] = rand(1, 19);
    }

    // Mostrar los números en colores
    echo "<p>";
    foreach ($numeros as $numero) {
        if ($numero % 2 == 0) {
            // Número par en azul
            echo '<span style="color: blue;">' . $numero . '</span> ';
        } else {
            // Número impar en rojo
            echo '<span style="color: red;">' . $numero . '</span> ';
        }
    }
    echo "</p>";
    ?>
</body>
</html>
