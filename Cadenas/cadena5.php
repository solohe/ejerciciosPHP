<?php
    /*Buscar el carácter “@” en la cadena $email del ejemplo anterior.
    Si no lo encuentra mostrar “No ha encontrado ‘@’ dentro del email”. */
    
    echo "EJERCICIO 5:"."\n";
    $email = 'name@example.com';
    echo "email: " . $email;
    echo "\n";
    $CharEmail = strstr($email, '@');
    if ($CharEmail == true) {
        echo "Se ha encontrado ‘@’ dentro del email";
    } else {
        echo "No ha encontrado ‘@’ dentro del email";
    }

?>