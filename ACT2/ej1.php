<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJ_1</title>
</head>
<body>
    <?php

        echo "<h1>Multiplos de 5, hasta 100</h1><br><br>";

        $numero = 0;

        while ($numero <= 100) {
            if ($numero % 5 == 0) {
                echo $numero . ", ";
            }
            $numero++;
        }
    ?>
</body>
</html>