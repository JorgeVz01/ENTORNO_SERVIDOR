<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJ_1</title>
</head>
<body>
    <?php
        //definir los 3 arrays
        $numero = array();
        $cuadrado = array();
        $cubo = array();

        //guardar 10 numeros aleatorios en el primer array  
        for ($i=0; $i < 10; $i++) { 
            $numero[] = rand(0,100);
        }
        //guardar para cada posicion de $numero su valor elevado a 2 y 3 
        foreach ($numero as $valor) {
            $cuadrado[] = pow($valor,2);
            $cubo[] = pow($valor,3);
        }
        //establecer una tabla con su cabecera 
        echo '<table border="1">';
        echo '<tr><th>Numero</th><th>^2</th><th>^3</th></tr>';
        //recorrer y mostrar los vectores en formato tabla  
        for ($i=0; $i < 10; $i++) { 
            echo "<tr><td>$numero[$i]</td><td>$cuadrado[$i]</td><td>$cubo[$i]</td></tr>";
        }

        echo '</table>';
    ?>
</body>
</html>