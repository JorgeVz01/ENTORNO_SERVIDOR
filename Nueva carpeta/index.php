<h1>HTML</h1>

<?php
    echo "<h1>codigo php </h1>";
    print("hola");

    $nombre = "Jorge";
    $texto = "variable texto con otra variable $nombre";
    $num = 888;

    #puntos para concatenar

    echo "<h2>" .$texto. " numero: ". $num. "</h2>";
   


// Función para lanzar un dado y obtener un número aleatorio del 1 al 6
function lanzarDado() {
    return rand(1, 6);
}

// Inicializar las variables para almacenar las tiradas de los jugadores y la suma de sus puntuaciones
$jugador1Tiradas = [];
$jugador2Tiradas = [];
$sumaPuntuacionJugador1 = 0;
$sumaPuntuacionJugador2 = 0;

// Simular las tiradas de los dos jugadores
for ($i = 0; $i < 3; $i++) {
    // Jugador 1
    $tiradaJugador1 = lanzarDado();
    $jugador1Tiradas[] = $tiradaJugador1;
    $sumaPuntuacionJugador1 += $tiradaJugador1;

    // Jugador 2
    $tiradaJugador2 = lanzarDado();
    $jugador2Tiradas[] = $tiradaJugador2;
    $sumaPuntuacionJugador2 += $tiradaJugador2;
}

// Mostrar las tiradas de los jugadores
echo "<h1>Tiradas de los jugadores</h1>";
echo "<p>Jugador 1: " . implode(", ", $jugador1Tiradas) . "</p>";
echo "<p>Jugador 2: " . implode(", ", $jugador2Tiradas) . "</p>";

// Determinar el ganador
$ganador = ($sumaPuntuacionJugador1 > $sumaPuntuacionJugador2) ? "Jugador 1" : "Jugador 2";
$mensajeGanador = "El ganador es: $ganador";

// Mostrar la puntuación y al ganador
echo "<h1>Puntuación Total</h1>";
echo "<p>Jugador 1: $sumaPuntuacionJugador1</p>";
echo "<p>Jugador 2: $sumaPuntuacionJugador2</p>";
echo "<h2>$mensajeGanador</h2>";
?>
