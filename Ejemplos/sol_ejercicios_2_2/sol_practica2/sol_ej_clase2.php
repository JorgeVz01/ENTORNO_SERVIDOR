<!DOCTYPE html>
<html>
<head>
    <title>Tirada de Dados</title>
</head>
<body>
    <h1>Tirada de Dados</h1>
    <?php
     // Inicializar el vector para almacenar los resultados
    $tiradaDados = array();

    // Realizar la tirada de 5 dados y almacenar los resultados
    for ($i = 0; $i < 5; $i++) {
        $resultado = rand(1,6);
        $tiradaDados[$i] = $resultado;
    }
    // Mostrar los resultados de la tirada
    for ($i = 0; $i < 5; $i++) { 
		print "  <img src='./img/$tiradaDados[$i].jpg' width='100'>\n"; 
	}
    // Encontrar el dado más alto y su posición
    $maxDado = max($tiradaDados);
    $posicionMaxDado = array_search($maxDado, $tiradaDados);

    echo "<p>El dado más alto es un $maxDado y se encuentra en la posición $posicionMaxDado</p>";
    ?>
</body>
</html>
