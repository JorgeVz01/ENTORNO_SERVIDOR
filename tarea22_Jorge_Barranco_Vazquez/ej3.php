<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJ_1</title>
    <style></style>
</head>
<body>
    <?php
        $numeros = array();
        //guardar 8 numeros aleatorios 
        for ($i=0; $i < 8; $i++) { 
            $numeros[] = rand(1,100);
        }
        //recorrer array con foreach y mostrar diferenciados entre pares e impares 
        foreach ($numeros as $numero) {
            if ($numero % 2 == 0) {
                echo "<p style= 'color:blue;'>$numero </p>";
            }else {
                echo "<p style= 'color:red;'>$numero </p>";
            }
        }

    ?>
</body>
</html>