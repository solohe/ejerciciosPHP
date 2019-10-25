<?php
    /* Ejercicio 8: stripos
        Realiza un ejemplo basándote en el caso anterior con stripos. */
    
        echo "EJERCICIO 8";
    $findme = 'A';
    $mystring1 = 'abc';
    $mystring2 = 'ABC';
    $pos1 = stripos($mystring1, $findme);
    $pos2 = stripos($mystring2, $findme);
    if ($pos1 === false) {
        echo "The string '$findme' was not found in the string '$mystring1'";
    }
    echo"\n"; // Nótese el uso de ===
    //Usar sólo == no funcionará como se espera
    // debido a que la posición de 'a' es el 0º (primer) caracter.
    if ($pos2 !== false) {
        echo "We found '$findme' in '$mystring2' at position $pos2";
    }
    echo"\n";
    echo "La función Stripos no distingue entre mayusculas y minusculas.";

?>