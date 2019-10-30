<?php 
# array_walk Ejecuta y razona qué es lo que hace. ¿Qué significa &?

 /* array_walk
(PHP 4, PHP 5, PHP 7)

array_walk — Aplicar una función proporcionada por el usuario a cada miembro de un array

Descripción 
array_walk ( array &$array , callable $callback [, mixed $userdata = NULL ] ) : bool
Aplica la función definida por el usuario dada por callback a cada elemento del array dado por array.

array_walk() no le afecta el puntero de arrays interno de array. array_walk() recorrerá el array completo sin tener en cuenta la posición del puntero.
*/

$frutas = array("d" => "limón", "a" => "naranja", "b" => "banana", "c" => "manzana");

function test_alter(&$elemento1, $clave, $prefijo)
{
    $elemento1 = "$prefijo: $elemento1";
}

function test_print($elemento2, $clave)
{
    echo "$clave. $elemento2<br />\n";
}

echo "Antes ...:\n";
array_walk($frutas, 'test_print');

array_walk($frutas, 'test_alter', 'fruta');
echo "... y después:\n";

array_walk($frutas, 'test_print');

/*
El resultado del ejemplo sería:

Antes ...:
d. limón
a. naranja
b. banana
c. manzana
... y después:
d. fruta: limón
a. fruta: naranja
b. fruta: banana
c. fruta: manzana

array_walk aplica una función de usuario a cada miembro de un array
& quiere decir que se asigna el valor por referencia y si no es por referencia no funciona. 
*/
?>