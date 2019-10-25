<?php
     /* Ejercicio1: Uso de Explode
        Dado vuestro “Apellido1 Apellido2, Nombre”.
        Obtener las siguientes salidas usando la función EXPLODE:
        Los apellidos son: Apellido1 Apellido2
        El nombre es: Nombre
        El nombre y apellidos son: Nombre Apellido1 Apellido2.
        Posteriormente mostrar el array de cadenas. Usar print_r y var_dump.
        ¿Qué diferencias hay entre print_r y var_dump? */
        
    echo "EJERCICIO 1"."\n";
    $nombrecompleto = "Santaniello Lozano, Carlos"."\n";
    $separacion = explode(",", $nombrecompleto);
    echo "Los apellidos son: " . $separacion[0]."\n";
    echo "El nombre es: " . $separacion[1]."\n";
    
    echo "El nombre y los apellidos son: " . $separacion[1] . " " . $separacion[0]."\n";
    print_r($separacion);
    
    echo "var_dump:";
    var_dump($separacion);
    
    echo "print_r: Recibe una variable y la muestra entera, si la variable es un array muestra todo su contenido.
    var_dump: muestra información estructurada sobre una o más expresiones incluyendo su tipo y valor.";   
?> 