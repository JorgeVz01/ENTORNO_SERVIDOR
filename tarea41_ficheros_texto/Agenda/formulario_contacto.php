<h2>Añadir Nuevo Contacto</h2>
<form action="" method="post">
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre" required>
    <label for="apellido1">Apellido 1:</label>
    <input type="text" id="apellido1" name="apellido1" required>
    <label for="apellido2">Apellido 2:</label>
    <input type="text" id="apellido2" name="apellido2">
    <label for="telefono">Teléfono:</label>
    <input type="tel" id="telefono" name="telefono" required>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>
    <button type="submit">Agregar Contacto</button>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['nombre']) && isset($_POST['apellido1']) && isset($_POST['telefono']) && isset($_POST['email'])) {
        $nombre = $_POST['nombre'];
        $apellido1 = $_POST['apellido1'];
        $apellido2 = isset($_POST['apellido2']) ? $_POST['apellido2'] : '';
        $telefono = $_POST['telefono'];
        $email = $_POST['email'];

        $agenda->agregarContacto($nombre, $apellido1, $apellido2, $telefono, $email);
    }
}
?>
