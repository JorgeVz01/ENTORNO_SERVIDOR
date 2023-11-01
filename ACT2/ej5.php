<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJ_5</title>
</head>
<body>
    <?php

        echo "<h1>Cuadrado de numeros de 5 a 20  </h1><br><br>";

        echo '<table border="1">';

        for ($i=1; $i <=10 ; $i++) { 
            $numero = rand(5,20);

            $cuadrado = pow($numero,2);

            echo "<tr><td>$numero</td><td>$cuadrado</td></tr>";
        }




        echo '</table>';
    ?>
</body>
</html>