<?php
session_start();

$_SESSION["nombre"] = "Pepito Conejo";

session_destroy();//elimina la sesion pero no la variable 
unset($_SESSION["nombre"]);//ahora si elimina la variable 

if (isset($_SESSION["nombre"])) {
    print "<p>Su nombre es $_SESSION[nombre].</p>\n";
} else {
    print "<p>No sé su nombre.</p>\n";
}
?>