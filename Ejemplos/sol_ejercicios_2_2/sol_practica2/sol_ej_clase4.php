<!DOCTYPE html>
<html>
<head>
    <title>Mini Diccionario Español-Inglés</title>
</head>
<body>
    <h1>Mini Diccionario Español-Inglés</h1>
    <?php
    // Crear un array asociativo con las palabras y sus traducciones
    $diccionario = array(
        "casa" => "house",
        "perro" => "dog",
        "gato" => "cat",
        "coche" => "car",
        "manzana" => "apple",
        "libro" => "book",
        "sol" => "sun",
        "luna" => "moon",
        "amigo" => "friend",
        "agua" => "water"
    );

    // Probar la traducción de una palabra en español
    $palabraEspanol = "casa";

    if (array_key_exists($palabraEspanol, $diccionario)) {
        $traduccion = $diccionario[$palabraEspanol];
        echo "La traducción de \"$palabraEspanol\" en inglés es \"$traduccion\".";
    } else {
        echo "La palabra \"$palabraEspanol\" no está en el diccionario.";
    }
    ?>
</body>
</html>