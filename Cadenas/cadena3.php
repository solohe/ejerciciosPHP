<?php
    /* Ejercicio3: Uso de Explode
        $str = 'one|two|three|four'; // positive limit
        print_r(explode('|', $str, 2));
        Realizar:
        Modifica la variable $str para que llegue hasta 10.
        Mostrar cada número en un elemento del array y el último elemento del array
        contenga del five hasta el final que es el ten.
        Mostrar cada número en un elemento del array excepto los dos últimos que no
        deben ser mostrados.
        Comprobar con print_r */
        
    echo "EJERCICIO 3:"."\n";
    $str = 'one|two|three|four|five|six|seven|eigth|nine|ten'; // positive limit
    print_r(explode('|', $str, 5));
    echo "\n";
    print_r(explode('|', $str, -2));

?>  