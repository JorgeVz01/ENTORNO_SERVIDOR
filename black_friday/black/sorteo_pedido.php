<?PHP
	$archivo = fopen("pedidos.txt", "r");
	$contador=0; //¿existe funcion cuente lineas?
	while (!feof($archivo)) {
		$linea=fgets($archivo);
		$contador=$contador+1;
	}
	fclose($archivo);
	$archivo = fopen("pedidos.txt", "r");
	$numero_aleatorio=mt_rand(1,$contador);
	$contador_dos=1;
	while (!feof($archivo)) { // ¿probar fseek?
		$linea=fgets($archivo);
		if ($contador_dos==$numero_aleatorio) {
			$array=explode(":", $linea);
			echo "El ganador del sorteo es: $array[0]";
		}
		$contador_dos=$contador_dos+1;
	}
	fclose($archivo);
?>
