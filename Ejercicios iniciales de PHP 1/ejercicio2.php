<?php

/* Crear un array bidimensional llamado $arraybi, con los valores para la primera fila,
 uno, dos, y tres. La segunda fila tendrá los valores cuatro, cinco y seis, y la tercera
 fila los valores siete, ocho y nueve. Mostrar los distintos valores por pantalla.
 Posteriormente, investigar para mostrar los valores mediante el recorrido de arrays
 bidimensionales.*/

$arrayBi = array(
    array("uno","dos","tres"),
    array("cuatro","cinco","seis"),
    array("siete","ocho","nueve")
);
print_r($arrayBi);

foreach($arrayBi as $clave => $arrayBi2){
    foreach($arrayBi2 as  $valor)
    echo("<p>Array $clave y  su valor: $valor</p>");
}
?>