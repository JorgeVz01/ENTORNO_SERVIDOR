<?php
include_once 'Bicicleta.php';
include_once 'Coche.php';

// Crea una bicicleta con 24 marchas
$miBici = new Bicicleta("24");

// Crea un coche con 1500cc de cilindrada
$miCoche = new Coche(1500);

$miBici->recorre(40);
$miCoche->recorre(200);

echo $miBici->hazCaballito() . "<br>";
echo $miCoche->quemaRueda() . "<br>";

$miBici->recorre(60);

echo "Mi bici ha recorrido " . $miBici->getKmRecorridos() . " Km<br>";
echo "Mi coche ha recorrido " . $miCoche->getKmRecorridos() . " Km<br>";
echo "Se han creado un total de " . Vehiculo::getVehiculosCreados() . " vehículos<br>";
echo "Todos los vehículos han hecho un total de " . Vehiculo::getKmTotales() . " Km<br>";
?>
