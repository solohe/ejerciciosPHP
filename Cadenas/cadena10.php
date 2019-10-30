<?php
# Realizar el ejercicio 1 sin usar la función Explode. Usar las funciones strpos y substr.

$nombrecompleto = "Santaniello Lozano, Carlos";
$apellidos = substr(trim("$nombrecompleto", $nombre), 0, -8);
$nombre = substr(stristr($nombrecompleto, ","), 1);
echo "Los apellidos son: " . $apellidos . "\n";
echo "El nombre es: " . $nombre . "\n";
echo "El nombre y  los apellidos son: " . $nombre . " " . $apellidos . "\n";
?>