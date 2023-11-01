<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJ_2</title>
</head>
<body>
    <?php

        echo "<h1>Numeros de 320 a 160 de 20 en 20 </h1><br><br>";

        $numero = 0;

        for ($numero = 320; $numero >= 160; $numero -= 20) {
            echo $numero . ", ";
        }
    ?>
</body>
</html>