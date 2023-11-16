<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJ_1</title>
</head>
<body>
    <?php
        //definir array asociativo
        $palabras = array(
            "coche" => "car",
            "camion" => "truck",
            "casa" => "house",
            "mesa" => "table",
            "raton" => "mouse",
            "teclado" => "keyboard",
            "libro" => "book",
            "comida" => "food",
            "perro" => "dog",
            "pajaro" => "bird"
        );

        $esp = "teclado";

        $ing = $palabras[$esp];

        echo "$esp en ingles se dice $ing";

    ?>      
</body>
</html>