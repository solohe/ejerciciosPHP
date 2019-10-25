<?php
        /* Ejercicio 7: strpos
          Comprobar el ejercicio anterior, y arreglarlo para que funcione.
          No devuelve “ We found ….”
          Razona la respuesta. */
          
        echo "EJERCICIO 7";
        echo"\n";
        $findme = 'A';
        $mystring1 = 'ayz';
        $mystring2 = 'ABC';
        $pos1 = strpos($mystring1, $findme);
        $pos2 = strpos($mystring2, $findme);
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
        echo "La razón es que hay que añadir otro igual para que detecte que son del mismo tipo";

?>