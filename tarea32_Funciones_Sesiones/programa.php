<?php
session_start();

// Función para mostrar el menú
function mostrarMenu() {
    ?>
    <h2>Elija una opción:</h2>
    <ul>
        <li><a href="programa.php?opcion=nombre">Escribir su nombre</a></li>
        <li><a href="programa.php?opcion=apellidos">Escribir sus apellidos</a></li>
        <li><a href="programa.php?opcion=ver">Ver su nombre y apellido</a></li>
        <li><a href="programa.php?opcion=borrar">Borrar la información</a></li>
    </ul>
    <?php
}

if (isset($_GET['opcion'])) {
    // Se ha seleccionado una opción
    $opcion = $_GET['opcion'];

    switch ($opcion) {
        case 'nombre':
        case 'apellidos':
            // Procesamiento para 'nombre' y 'apellidos'
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                // Si el formulario ha sido enviado
                $_SESSION[$opcion] = $_POST[$opcion];
                echo '<p>' . ucfirst($opcion) . ' almacenado correctamente.</p>';
            } else {
                // Si el formulario no ha sido enviado, mostrar el formulario
                ?>
                <form method="post" action="programa.php?opcion=<?php echo $opcion; ?>">
                    <?php echo ucfirst($opcion); ?>: <input type="text" name="<?php echo $opcion; ?>" required>
                    <input type="submit" value="Guardar">
                </form>
                <?php
            }
            break;

        case 'ver':
            // Procesamiento para 'ver'
            echo '<h2>Su nombre y apellidos:</h2>';

            if (isset($_SESSION['nombre'])) {
                echo '<p>Nombre: ' . ($_SESSION['nombre']) . '</p>';

            }else echo '<p>Nombre: No disponible</p>';
            //Se imprime el nombre dos veces para ver las dos maneras de hacerlo 
            //De esta manera se simplifica el codigo
            // "??" imprime su lado izquierdo si posee datos ,O, el derecho si es Null
            echo '<p>Nombre: ' . ($_SESSION['nombre'] ?? 'No disponible') . '</p>';

            echo '<p>Apellidos: ' . ($_SESSION['apellidos'] ?? 'No disponibles') . '</p>';
            break;

        case 'borrar':
            // Procesamiento para 'borrar'
            session_unset(); // = que destroy
            echo '<p>Información borrada correctamente.</p>';
            break;

        default:
            // Opción por defecto, mostrar el menú
            mostrarMenu();
            break;
    }
} else {
    // No se ha seleccionado una opción, mostrar el menú
    mostrarMenu();
}

?>
<!-- Siempre se muestra  -->
<p><a href="programa.php">Volver al programa principal</a></p>
