<?php
        /* Ejercicio 6:
          Comprobar la equivalencia entre 10 y \n, mediante el uso de alguna función.
          Razona la respuesta. */
          
        echo "EJERCICIO 5";
        echo"\n";
        $text = "Line 1\nLine 2\nLine 3";
        print_r($text);
        echo"\n";
        $last = substr(strrchr($text, 10), 1);
        echo $last; //Devuelve Line 3
        echo"\n";
        $last = substr(strrchr($text, "\n"), 1);
        echo $last; //Devuelve Line 3
        echo"\n";
        echo 'En la tabla ASCII 10 corresponde a Line3, por lo que el resultado es el mismo';

?>