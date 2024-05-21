<?php
	$nombre="fichero.txt";
	$fd=fopen($nombre, "r");
 
	$palabra = "exit";
	$encontrada=false;
	$x = 1;
 
	while(!feof($fd))
	{
		$busca = fgets($fd);
		//if (strstr($busca, $palabra))
		//echo $busca.'--'.$palabra.'--'.strpos($busca, $palabra).'<br>'; 
	
		if (strpos($busca, $palabra))
		{
			echo "<p>Palabra encontrada: <b>$palabra</b></p>";
			$encontrada=true;
		}
		$x++;
	}
	if(!$encontrada){
		echo 'No se encontro la palabra ' .$palabra;
	}
	fclose($fd);
	

?>