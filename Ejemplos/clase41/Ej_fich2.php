<?php
$nombreArchivo = "nombres.txt";
$archivo = fopen($nombreArchivo, "w");
//echo $archivo;
$nombres = array(
    "Luis",
    "María",
    "Carlos",
    "Paco",
    "Lucia",
	"Ana"
);
for($i=0;$i<=count($nombres);$i++)
{
	fwrite($archivo, $nombres[$i] . PHP_EOL);//End of Line
}
//foreach ($nombres as $n){
  //  fwrite($archivo, $n . PHP_EOL);
//}
fclose($archivo);
echo "fichero creado...";
?>