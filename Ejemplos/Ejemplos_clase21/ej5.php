<?php 
define("PI", 3.14); // constantes
print "<p>El valor de pi es " . PI . "</p>\n";

$valor = 9;
$valor++; // ++ suma 1   -- resta1
print "<p>" . $valor++. "</p>\n";
print "<p>" . $valor--. "</p>\n";

$numero = 4.3555;
$numero1 = round($numero,2);//redondea al nº de decimales
print "<p> Round " . $numero1. "</p>\n";
$numero2 = floor($numero);//lo redondea al entero más cercano por debajo
print "<p> floor " . $numero2. "</p>\n";
$numero3 = ceil($numero);// lo redondea al entero más cercano por encima de su valor
print "<p> ceil " . $numero3. "</p>\n";

$aletorio=rand(1,100);
echo "el numero aleatorio es $aletorio";


?>