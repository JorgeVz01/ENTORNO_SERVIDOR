<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJ_4</title>
</head>
<body>
    <?php

        $numero = rand(0,9999);

        echo "<h1>¿Cuantos digitos tiene? $numero</h1><br><br>";

        $numerostring = (string)$numero;

        //String length 
        $digitos = strlen($numerostring);
        
        echo "Cantidad $digitos";

    ?>
</body>
</html>