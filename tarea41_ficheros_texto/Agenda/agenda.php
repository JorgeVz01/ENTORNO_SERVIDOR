<?php
class Agenda {
    private $archivo = 'contactos.txt';

    public function mostrarContactos() {
        echo "<h2>Contactos</h2>";
        if (file_exists($this->archivo)) {
            $contactos = file($this->archivo, FILE_IGNORE_NEW_LINES);
            if (!empty($contactos)) {
                echo "<ul>";
                foreach ($contactos as $contacto) {
                    list($nombre, $apellido1, $apellido2, $telefono, $email) = explode('|', $contacto);
                    echo "<li>$nombre $apellido1 $apellido2 - Tel: $telefono - Email: $email</li>";
                }
                echo "</ul>";
            } else {
                echo "<p>No hay contactos.</p>";
            }
        } else {
            echo "<p>No hay contactos.</p>";
        }
    }

    public function agregarContacto($nombre, $apellido1, $apellido2, $telefono, $email) {
        $nuevoContacto = "$nombre|$apellido1|$apellido2|$telefono|$email";
        file_put_contents($this->archivo, $nuevoContacto . PHP_EOL, FILE_APPEND);
        echo "<p>Contacto agregado correctamente.</p>";
    }

    public function buscarContacto($telefonoBuscar) {
        if (file_exists($this->archivo)) {
            $contactos = file($this->archivo, FILE_IGNORE_NEW_LINES);
            foreach ($contactos as $contacto) {
                list($nombre, $apellido1, $apellido2, $telefono, $email) = explode('|', $contacto);
                if ($telefono == $telefonoBuscar) {
                    echo "<h3>Datos del Contacto</h3>";
                    echo "<p>Nombre: $nombre</p>";
                    echo "<p>Apellido1: $apellido1</p>";
                    echo "<p>Apellido2: $apellido2</p>";
                    echo "<p>Teléfono: $telefono</p>";
                    echo "<p>Email: $email</p>";
                    return;
                }
            }
            echo "<p>Contacto no encontrado.</p>";
        } else {
            echo "<p>No hay contactos.</p>";
        }
    }
}
?>
