<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>
    <?php
    //El contenido de los vectores no se almacenará al tener que recargar la pagina.****
        $tirada1 = array();
        $tirada2 = array();
    
        //Tiradas guardadas en vector
        for ($i=0; $i < 5; $i++) { 
            $tirada1[] = rand(1,6);
        }
        for ($i=0; $i < 5; $i++) { 
            $tirada2[] = rand(1,6);
        }

        echo '<h2>Jugador 1</h2>';
        //Mostrar dados 
        for ($i=0; $i < 5; $i++) { 
            echo "<img src='./img/$tirada1[$i].jpg' width=100 height=100>";
        }

        echo '<h2>Jugador 2</h2>';
        //Mostrar dados 
        for ($i=0; $i < 5; $i++) { 
            echo "<img src='./img/$tirada2[$i].jpg' width=100 height=100>";
        }
        //sumar el contenido de cada vector
        $totalJ1 = array_sum($tirada1);
        $totalJ2 = array_sum($tirada2);
        
        echo '<h2>Resultado <br><br></h2>';
        //If para mostrar el ganador o empate en su caso.
        if ($totalJ1 == $totalJ2) {
            print "Esto es un empate";
        } elseif ($totalJ1 > $totalJ2) {
            print "En conjunto, ha ganado el jugador 1";
        } else {
            print "En conjunto, ha ganado el jugador 2";
        }

    ?>
</body>
</html>