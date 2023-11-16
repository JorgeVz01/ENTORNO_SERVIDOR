<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJ_1</title>
</head>
<body>
    <?php
        $tirada = array();

        //Guardar la tirada en el vector    
        for ($i=0; $i < 5; $i++) { 
            $tirada[] = rand(1,6);
        }

        for ($i=0; $i < 5; $i++) { 
            echo "<img src='./img/$tirada[$i].jpg' width=100 height=100>";
        }
        //echo "Tirada de dados: " . implode(", ", $tirada) . "<br>"; ?????

        $maxdado = max($tirada);
        $maxposicion = array_search($maxdado,$tirada);

        echo "<br>La tirada mas alta fue $maxdado en la posicion $maxposicion del array";

    ?>
</body>
</html>