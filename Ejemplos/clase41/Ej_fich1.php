<?php

$nombreArchivo = "clase545645.txt";
$mensaje=" va a ser un mensaje nuevo";

//abrir un fichero
$archivo = fopen($nombreArchivo, "a"); // w - write a-append
echo $archivo;
fwrite($archivo, $mensaje);
echo "fichero grabado";
fclose($archivo); // cierra el fichero.

?>

