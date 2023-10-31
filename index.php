<h1>HTML</h1>

<?php
    echo "<h1>codigo php </h1>";
    print("hola");

    $nombre = "Jorge";
    $texto = "variable texto con otra variable $nombre";
    $num = 888;

    #puntos para concatenar

    echo "<h2>" .$texto. " numero: ". $num. "</h2>";
   
    $numero = 0;

while ($numero <= 100) {
    if ($numero % 5 == 0) {
        echo $numero . " ";
    }
    $numero++;
}
echo '<br><hr><br>';

for ($numero = 320; $numero >= 150; $numero -= 20) {
    echo $numero . " ";
}
?>
