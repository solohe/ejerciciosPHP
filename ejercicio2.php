<?php
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