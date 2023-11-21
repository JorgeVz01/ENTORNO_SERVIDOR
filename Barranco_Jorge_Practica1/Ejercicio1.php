<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>

    <?php 
        $alto = rand(5,15);
        $ancho = rand(5,15);

        echo "Alto: $alto <br> Ancho: $ancho <br><br>";
        
        //Bucle externo para las filas e interno para las columnas.
        //Cada vuelta del bucle externo ejecuta una linea de asteriscos hasta que este acaba.
        for ($i=0; $i < $alto; $i++) { 
            for ($a=0; $a < $ancho; $a++) { 
                echo '* ';
            }
            echo '<br>';
        }
    ?>


</body>
</html>