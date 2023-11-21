<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
    <style></style>
</head>
<body>

<form action="datos_operaciones.php" method="post">
    
    <table>
        <tr>
            <td>
                Introduzca el primer número: <input type="number" name="a" style="width: 100px; margin-left: 11px;"><br>
                Introduzca el segundo número: <input type="number" name="b" style="width: 100px; margin-right: 10px"></td>
            <td style="text-align:center" >
                Seleccione la operación: <br>
                <input type="radio" name="operaciones" value="suma" checked>Suma
                <input type="radio" name="operaciones" value="resta">Resta
                <input type="radio" name="operaciones" value="producto">Producto
                <input type="radio" name="operaciones" value="cociente">Cociente
            </td>
        </tr>
    </table> <br>

        
    


     

    <input class="s" type="submit" value="Enviar datos">



</form>
</body>
</html>