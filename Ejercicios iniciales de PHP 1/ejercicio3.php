<?php

/* Crear el array anterior $frutas, en el que se dibuje el array, con un color de fondo
para los elementos, unos bordes, un color de letra y un tamaño. Considerar que
vamos a usar el atributo style para definir los estilos sobre etiquetas.*/

$arrayBi = array(
    array("uno","dos","tres"),
    array("cuatro","cinco","seis"),
    array("siete","ocho","nueve")
);
    print_r($arrayBi);

    echo("<table style=\"background-color:red;border:5px solid black;color:white\">");
    foreach($arrayBi as $clave => $arrayBi2){
        echo("<tr>");
        foreach($arrayBi2 as  $valor)
        echo("<td><p>Array $clave y  su valor: $valor</p></td>");
        echo("</tr>");
    }
    echo("</table>");
?>