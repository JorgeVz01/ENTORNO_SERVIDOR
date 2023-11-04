<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJ_6</title>
</head>

<body>
    <?php

    $totalJ1 = 0;

    print "<h1>Jugador 1</h1>\n";

    for ($i = 0; $i < 3; $i++) {
        $dado = rand(1, 6);
        print "<img src='./dados/$dado.jpg' width=100 height=100>\n";
        $totalJ1 = $totalJ1 + $dado;
    }
    print "<h2>El jugador 1 ha obtenido $totalJ1 puntos.</h2><hr>";

    $totalJ2 = 0;

    print "<h1>Jugador 2</h1>\n";

    for ($i = 0; $i < 3; $i++) {
        $dado = rand(1, 6);
        print "<img src='./dados/$dado.jpg' width=100 height=100>\n";
        $totalJ2 = $totalJ2 + $dado;
    }
    print "<h2>El jugador 2 ha obtenido $totalJ2 puntos.</h2><hr>";

    if ($totalJ1 == $totalJ2) {
        print "<h2>Esto es un empate</h2>";
    } elseif ($totalJ1 > $totalJ2) {
        print "<h2>Jugador 1 gana!!</h2>";
    } else {
        print "<h2>Jugador 2 gana!!</h2>";
    }

    ?>
</body>

</html>