<?php
    /*Buscar el carácter “s” en la cadena $email del ejemplo anterior.
    Si no lo encuentra mostrar “No ha encontrado ‘s’ dentro del email”. */
    
    echo "EJERCICIO 4:"."\n";
    $email = 'names@example.com';
    echo "email: " . $email;
    echo "\n";
    $busqueda = strstr($email, 's', true);
    if ($busqueda == 's') {
        echo $busqueda;
    } else {
        echo "No ha encontrado ‘s’ dentro del email";
    }

?>