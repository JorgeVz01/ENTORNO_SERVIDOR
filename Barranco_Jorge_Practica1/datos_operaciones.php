<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>
<body>
    <?php 
//variables de los numeros 
        $num1 = $_REQUEST['a'];
        $num2 = $_REQUEST['b'];
//variable para la seleccion "radio"
        $operacion = $_POST['operaciones'];
//switch para realizar la operacion seleccionada
    switch ($operacion) {
        case 'suma':
            $resultado = $num1 + $num2;
            break;
        case 'resta':
            $resultado = $num1 - $num2;
            break;
                
        case 'producto':
            $resultado = $num1 * $num2;
            break;

        case 'cociente':
            $resultado = $num1 / $num2;
            break;
    }

    echo "El resultado de realizar $operacion de los numeros $num1 y $num2 es $resultado"

    ?>
</body>
</html>