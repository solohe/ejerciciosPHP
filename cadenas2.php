<?php

    /* Ejercicio2: Uso de Explode
        $pizza = "piece1 piece2 piece3 piece4 piece5 piece6";
        $pieces = explode(" ", $pizza);
        echo $pieces[0]; // piece1
        echo $pieces[1]; // piece2
        Dado el ejercicio anterior, mostrar todos los pieces una en cada fila.
        Lo vamos a realizar independientemente del número de pieces. */
        
    echo "EJERCICIO 2"."\n";
    $pizza = "piece1 piece2 piece3 piece4 piece5 piece6";
    $pieces = explode(" ", $pizza);
    for ($i = 0; $i < count($pieces); $i++) {
        echo $pieces[$i] . "\n";
    }

?>        