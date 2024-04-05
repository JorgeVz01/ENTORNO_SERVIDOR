<?php
require_once "../functions.php";
session_start();

// Verificar si el usuario está autenticado
if (!isset($_SESSION["usuario_id"])) {
    // Si no está autenticado, redirigir al usuario al formulario de login
    header("Location: ../login.php");
    exit();
}

// Obtener el ID del usuario actualmente autenticado
$usuario_id = $_SESSION["usuario_id"];

// Obtener los datos del formulario
$calle = $_POST["calle"];
$numero = $_POST["numero"];
$piso = $_POST["piso"];
$puerta = $_POST["puerta"];
$cp = $_POST["cp"];
$metros = $_POST["metros"];
$zona = $_POST["zona"];
$precio = $_POST["precio"];
$imagen = $_FILES["imagen"]["name"];
$estado_reserva = "Disponible"; // Establece el estado de reserva

// Directorio donde se guardarán las imágenes de los pisos
$directorio_imagenes = "../img/"; // Ruta relativa al directorio "img" dentro del proyecto
$ruta_imagen = $directorio_imagenes . basename($imagen);

// Mover la imagen al directorio de imágenes
if (move_uploaded_file($_FILES["imagen"]["tmp_name"], $ruta_imagen)) {
    // Guardar los datos del piso en la base de datos
    if (guardarPiso($calle, $numero, $piso, $puerta, $cp, $metros, $zona, $precio, $ruta_imagen, $usuario_id, $estado_reserva)) {
        echo "<p>Piso agregado correctamente.</p>";
    } else {
        echo "<p>Error al agregar el piso.</p>";
    }
} else {
    echo "<p>Error al subir la imagen.</p>";
}
?>
