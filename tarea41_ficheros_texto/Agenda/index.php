<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Agenda</title>
</head>
<body>
    <h1>Agenda de Contactos</h1>

    <?php
    include 'agenda.php';

    $agenda = new Agenda();

    // Mostrar los contactos
    $agenda->mostrarContactos();

    // Mostrar formulario para dar de alta un nuevo contacto
    include 'formulario_contacto.php';
    ?>

    <h2>Buscar Contacto</h2>
    <form action="" method="post">
        <label for="buscar">Buscar por teléfono:</label>
        <input type="text" id="buscar" name="telefono">
        <button type="submit">Buscar</button>
    </form>

    <?php
    // Buscar y mostrar datos del contacto
    if (isset($_POST['telefono'])) {
        $telefonoBuscar = $_POST['telefono'];
        $agenda->buscarContacto($telefonoBuscar);
    }
    ?>
</body>
</html>
