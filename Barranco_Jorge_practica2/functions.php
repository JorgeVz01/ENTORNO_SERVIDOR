<?php

require_once "config.php";

// Nombres de las tablas

$cfg["pisos"] = "pisos";           
$cfg["usuario"] = "usuario";         

// FUNCIONES ESPECÍFICAS DE LA BASE DE DATOS MYSQL

// MYSQL: FUNCIÓN DE CONEXIÓN CON LA BASE DE DATOS
function conectaDb()
{
    global $cfg;

    try {
        $tmp = new PDO("mysql:host=$cfg[mysqlHost];dbname=$cfg[mysqlDatabase];charset=utf8mb4", $cfg["mysqlUser"], $cfg["mysqlPassword"]);
    } catch (PDOException $e) {
        $tmp = new PDO("mysql:host=$cfg[mysqlHost];charset=utf8mb4", $cfg["mysqlUser"], $cfg["mysqlPassword"]);
    } catch (PDOException $e) {
        print "    <p class=\"aviso\">Error: No puede conectarse con la base de datos. {$e->getMessage()}</p>\n";
        exit;
    } finally {
        $tmp->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT);
        $tmp->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, true);
        return $tmp;
    }
}

function registrarUsuario($nombre, $correo, $contrasena, $tipoUsuario)
{
    try {
        $conn = conectaDb();
        $contrasenaHash = password_hash($contrasena, PASSWORD_DEFAULT); // Hash de la contraseña
        $stmt = $conn->prepare("INSERT INTO usuario (nombres, correo, clave, tipo_usuario) VALUES (:nombre, :correo, :contrasena, :tipoUsuario)");
        $stmt->bindParam(":nombre", $nombre);
        $stmt->bindParam(":correo", $correo);
        $stmt->bindParam(":contrasena", $contrasenaHash);
        $stmt->bindParam(":tipoUsuario", $tipoUsuario);
        $stmt->execute();
        return true; // Éxito
    } catch (PDOException $e) {
        // Manejo de errores
        return false; // Error
    }
}


function obtenerUsuarioPorCorreo($correo)
{
    try {
        $conn = conectaDb();
        $stmt = $conn->prepare("SELECT * FROM usuario WHERE correo = :correo");
        $stmt->bindParam(":correo", $correo);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        // Manejo de errores
        return false;
    }
}
// Verificar si el correo electrónico ya está registrado en la base de datos
function existeCorreoRegistrado($correo) {
    $conexion = conectaDb();
    $consulta = "SELECT COUNT(*) AS total FROM usuario WHERE correo = :correo";
    $stmt = $conexion->prepare($consulta);
    $stmt->bindParam(":correo", $correo, PDO::PARAM_STR);
    $stmt->execute();
    $resultado = $stmt->fetch(PDO::FETCH_ASSOC);
    return $resultado["total"] > 0;
}

function guardarPiso($calle, $numero, $piso, $puerta, $cp, $metros, $zona, $precio, $imagen, $usuario_id, $estado_reserva)
{
    try {
        $conn = conectaDb();
        $stmt = $conn->prepare("INSERT INTO pisos (calle, numero, piso, puerta, cp, metros, zona, precio, imagen, usuario_id, estado_reserva) VALUES (:calle, :numero, :piso, :puerta, :cp, :metros, :zona, :precio, :imagen, :usuario, :estado_reserva)");
        $stmt->bindParam(":calle",$calle);
        $stmt->bindParam(":numero",$numero);
        $stmt->bindParam(":piso",$piso);
        $stmt->bindParam(":puerta",$puerta);
        $stmt->bindParam(":cp",$cp);
        $stmt->bindParam(":metros",$metros);
        $stmt->bindParam(":zona",$zona);
        $stmt->bindParam(":precio",$precio);
        $stmt->bindParam(":imagen",$imagen);
        $stmt->bindParam(":usuario", $usuario_id);
        $stmt->bindParam(":estado_reserva", $estado_reserva); // Vincula el parámetro $estado_reserva
        $stmt->execute();
        return true; // Éxito
    } catch (PDOException $e) {
        // Manejo de errores
        return false; // Error
    }
}

function obtenerPisosPorUsuario($usuario_id)
{
    try {
        $conn = conectaDb();
        $stmt = $conn->prepare("SELECT * FROM pisos WHERE usuario_id = :usuario_id");
        $stmt->bindParam(":usuario_id", $usuario_id);
        $stmt->execute();
        $pisos = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $pisos;
    } catch (PDOException $e) {
        // Manejo de errores
        return [];
    }
}

function obtenerTodosLosPisos()
{
    try {
        $conn = conectaDb();
        $stmt = $conn->query("SELECT Codigo_piso, calle, numero, piso, puerta, cp, metros, zona, precio, imagen FROM pisos");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        // Manejo de errores
        return false; // Error
    }
}

function obtenerEstadoReserva()
{
    try {
        $conn = conectaDb();
        $stmt = $conn->query("SELECT estado_reserva FROM pisos");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        // Manejo de errores
        return false; // Error
    }
}

function obtenerDetallesPiso($id_piso){
    try {
        $conn = conectaDb(); // Esta función debe establecer la conexión a la base de datos

        // Preparar la consulta SQL para obtener los detalles del piso por su ID
        $stmt = $conn->prepare("SELECT * FROM pisos WHERE Codigo_piso = :id_piso");
        $stmt->bindParam(":id_piso", $id_piso);
        $stmt->execute();

        // Obtener y devolver los detalles del piso como un array asociativo
        return $stmt->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        // Manejo de errores: puedes registrar o imprimir el error si es necesario
        error_log("Error al obtener detalles del piso: " . $e->getMessage());
        return false; // Devolver false en caso de error
    }
}

function actualizarEstadoReserva($Codigo_piso) {
    try {
        $conn = conectaDb();
        $stmt = $conn->prepare("UPDATE pisos SET estado_reserva = 'Reservado' WHERE Codigo_piso = :Codigo_piso");
        $stmt->bindParam(':Codigo_piso', $Codigo_piso);
        $stmt->execute();
        return true; // Éxito
    } catch (PDOException $e) {
        // Manejo de errores
        return false; // Error
    }
}

// Función para obtener todos los usuarios de la base de datos
function obtenerTodosLosUsuarios()
{
    try {
        $conn = conectaDb();
        $stmt = $conn->query("SELECT * FROM usuario");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        // Manejo de errores
        return false; // Error
    }
}

// Función para eliminar un usuario de la base de datos
function eliminarUsuario($idUsuario)
{
    try {
        $conn = conectaDb();
        $stmt = $conn->prepare("DELETE FROM usuario WHERE usuario_id = :idUsuario");
        $stmt->bindParam(":idUsuario", $idUsuario);
        $stmt->execute();
        return true; // Éxito
    } catch (PDOException $e) {
        // Manejo de errores
        return false; // Error
    }
}

