<?php
//Realizar las pruebas de las funciones anteriores. Mostrar los resultados.
$array = array('apellido', 'email', 'telefono');
print_r(array_keys($array)); //Devuelve un vector con todas las claves
print_r(array_values($array)); //Devuelve un vector con todos los valores
print_r(in_array(email, $array)); //Verifica si existe un elemento en el array
print_r(range(0, 2)); //Crea un vector con un rango de min a max
print_r(array_reverse($array)); //Invierte un array
print_r(shuffle($array)); //Desordena un array
print_r(array_merge($array)); //Mezcla arrays
?>
