<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJ_3</title>
</head>
<body>
    <?php
        $numero = rand(1,10);

        echo '<h2>Tabla de multiplicar del numero '.$numero.'</h2>';

        echo '<table border="1">';

            for ($i=1; $i<=10 ; $i++) { 
                $result = $numero * $i;
                echo "<tr><td> $numero x $i </td><td><b> $result </b></td></tr>";
            }

        echo '</table>';

        //Con doble comilla reconoce la variable $, no es necesario concatenar 
    ?>
</body>
</html>