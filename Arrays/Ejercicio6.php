<?php
/* Realizar un ejemplo de uso de Colas mediante arrays, usando
algunas de las cuatro últimas funciones vistas.
Mostrar el resultado. */

$array3 = array('cero', 'uno', 'dos', 'tres');
print_r(array_values($array3));

print_r(array_shift($array3));

print_r(array_values($array3));

print_r(array_unshift($array3,"otra vez cero"));

print_r(array_values($array3));

?>