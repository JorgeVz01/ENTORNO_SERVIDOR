<!DOCTYPE html>
<html lang="es">
<head>
	<title>	</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<link rel="stylesheet" href="./css/style.css" title="Color"> 
	<script type="text/javascript" src="./js/script.js"></script>
</head>

<body>
	<form action="calcular_precio.php" method="POST">
		Nombre: <input type="text" name="nombre"/><br/>
		<input type="submit" name="enviar" value="enviar">
	</form>
</body>

</html>
<?PHP
	if (isset($_REQUEST['enviar'])) {
		$nombre=$_REQUEST['nombre'];
		if ($nombre==NULL) {
			$archivo = fopen("pedidos.txt", "r");
			while (!feof($archivo)) {
			    $linea=fgets($archivo);
			    $array=explode(":", $linea);
			    $precio=$array[2]*1000+$array[3]*500+$array[4]*100;
				$total=$total+$precio;
			    echo "Pedido: $linea Precio: $precio<br>";
			}
			echo "el precio de todo es ".$total;
			fclose($archivo);
		}
		else {
			$archivo = fopen("pedidos.txt", "r");
			$contador = false;
			while (!feof($archivo)) {
			    $linea=fgets($archivo);
			    $array=explode(":", $linea);
				if ($nombre==$array[0]) {
					$precio=$array[2]*1000+$array[3]*500+$array[4]*100;
					echo "Pedido: $linea Precio: $precio<br>";
					$contador = true;
				}
			}
			if ($contador==false) {
				echo "El cliente no existe";
			}
			fclose($archivo);
		}
	}
?>