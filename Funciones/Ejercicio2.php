<?php
/*Ejercicio 2: Explicar que hace la función reset, current y next
sobre arrays.
Poner algún otro ejemplo.
¿Qué es el paso de parámetros por Valor?*/

/* 
reset
(PHP 4, PHP 5, PHP 7)

reset — Establece el puntero interno de un array a su primer elemento

Descripción
reset ( array &$array ) : mixed
reset() rebobina el puntero interno de un array al primer elemento y devuelve el valor del primer elemento del array.
*/

$array = array('paso uno', 'paso dos', 'paso tres', 'paso cuatro');

// Por defecto, el puntero está en el primer elemento
echo current($array) . "<br />\n"; // "paso uno"

// Omite dos pasos
next($array);
next($array);
echo current($array) . "<br />\n"; // "paso tres"

// Resetea el puntero, empieza otra vez en paso uno
reset($array);
echo current($array) . "<br />\n"; // "paso uno"

/* 
current
(PHP 4, PHP 5, PHP 7)

current — Devuelve el elemento actual en un array

Descripción
current ( array &$array ) : mixed
Cada array tiene un puntero interno a su elemento "actual", que es iniciado desde el primer elemento insertado en el array.
*/

$transport = array('pie', 'bici', 'coche', 'avión');
$mode = current($transport); // $mode = 'pie';
$mode = next($transport);    // $mode = 'bici';
$mode = current($transport); // $mode = 'bici';
$mode = prev($transport);    // $mode = 'pie';
$mode = end($transport);     // $mode = 'avión';
$mode = current($transport); // $mode = 'avión';

$arr = array();
var_dump(current($arr)); // bool(false)

$arr = array(array());
var_dump(current($arr)); // array(0) { }

/*
next
(PHP 4, PHP 5, PHP 7)

next — Avanza el puntero interno de un array

Descripción
next ( array &$array ) : mixed
next() se comporta como current(), con una diferencia. Avanza el puntero interno un lugar a delante antes de devolver el valor del elemento. Esto significa que devuelve el siguiente valor del array y avanza el puntero interno del array un lugar.
*/

$transport = array('pie', 'bici', 'coche', 'avión');
$mode = current($transport); // $mode = 'pie';
$mode = next($transport);    // $mode = 'bici';
$mode = next($transport);    // $mode = 'coche';
$mode = prev($transport);    // $mode = 'bici';
$mode = end($transport);     // $mode = 'avión';


//En PHP, la información se puede pasar a las funciones y métodos a través de la lista de argumentos definida para la función o método en cuestión. En el siguiente ejemplo, la función suma() acepta dos argumentos:

function suma($num1, $num2) {
    echo $num1 + $num2;
}
De forma predeterminada, PHP pasa la información a las funciones y métodos por valor. Esto quiere decir que PHP le da el valor a la función, y solo el valor, para que haga con él lo que quiera:

function sumar_uno($x) {
   $x++;
   echo $x;
}

$a = 2;

sumar_uno($a); // 3

echo $a; // 2
/*Las variables se pueden entender como tentáculos que sostienen valores o información en memoria. Cada tentáculo tiene una referencia que PHP utiliza para saber que información exactamente es la que tiene que manipular.

Al pasar por valor, el argumento de la función crea su propia referencia, su propio tentáculo con el valor pasado. Dentro y fuera de la función las referencias en memoria son diferentes.

Hay que tener claro que la referencia y el nombre de la variable no son lo mismo; por eso pueden existir variables con el mismo nombre en contextos diferentes, por ejemplo, dentro y fuera de la función se puede utilizar el mismo nombre de variable pero manteniendo cada una su propia referencia:
*/
function sumar_uno($a) {
    $a++;
    echo $a;
}

$a = 2;
sumar_uno($a); // 3
echo $a; // 2
*/
?>