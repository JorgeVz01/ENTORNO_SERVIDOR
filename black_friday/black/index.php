<?PHP
	if(isset($_REQUEST['enviar'])) {
		$archivo=fopen("clave.txt", "r");
		$nombre=trim($_REQUEST['nombre']);
		$contrasena=trim($_REQUEST['contrasena'])	;
		$prueba=false;
		while (!feof($archivo)) {
			//Todo esto tambien se podria hacer con strpos, comparando la cadena $nombre $contrasena con cada una de las lineas del fichero de usuarios
			$linea = fgets($archivo);
			$array=explode(":", $linea);
			
			if ($array[0]==$nombre and $array[1]==$contrasena) {
				$prueba=true;
			}
		}
		if ($prueba==true) {
			echo 'BIENVENIDO USUARIO<br/><a href="hacer_pedido.php">Hacer pedido</a><br/><a href="mostrar_pedido.php">Mostrar pedidos</a><br/><a href="calcular_precio.php">Calcular pedido</a><br/><a href="sorteo_pedido.php">Sorteo pedido</a><br/>';
		} else {
			echo "Usuario o clave incorrectas";
		}
		fclose($archivo);
	}
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>	</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<link rel="stylesheet" href="./css/style.css" title="Color"> 
	<script type="text/javascript" src="./js/script.js"></script>
</head>

<body>
	<form action="index.php" method="POST">
		Nombre: <input type="text" name="nombre" /><br/>
		Contraseña: <input type="text" name="contrasena"><br/>
		<input type="submit" name="enviar" value="Enviar">
	</form>

</body>

</html>