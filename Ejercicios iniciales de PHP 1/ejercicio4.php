<?php

#Realizar la potencia de dos números.

$base = 0;
$exponente = 1;

$respuesta = pow($base,$exponente);

echo(" elevado a 1 es: ". $respuesta . "\n");

$base = 1;
$exponente = 1;

echo("1 elevado a 1 es: ". $respuesta);
?>

<?php

#El número entero más grande. ¿Cuántos bytes ocupa un número entero?

$maximo = 10 **308;  // 10^308
print "<p>10<sup>308</sup> se puede guardar en una variable decimal: $maximo</p>\n";
print "\n";
$demasiado = 10 * $maximo;
print "<p>Si se intenta guardar 10<sup>309</sup>, el resultado es $demasiado</p>\n";
#Normalmente las variables decimales siguen la norma IEEE 758, concretamente el formato denominado "doble precisión", que emplea 8 bytes (64 bits) para almacenar un número.De esos 64 bits, uno se utiliza para el signo, 53 para la parte fraccionaria y 11 para el exponente. Eso hace que el valor más grande que se pueda almacenar sea aproximadamente 1,8.10308.Si se intenta guardar un número demasiado grande positivo (tanto si ese valor se obtiene en un cálculo o si se escribe directamente) PHP no puede manejarlo y lo que hace es sustituirlo por la constante predefinida INF.
?>

<?php

#Asignar a una variable un valor mayor al máximo entero. ¿Qué ocurre?

$numero_grande = 9223372036854775807;
var_dump($numero_grande);                  

#Las plataformas de 64 bits normalmente tienen un valor máximo de aproximadamente 9E18 (2^64-1)−1.
?>

<?php

/*¿Cuántos bytes ocupa un número real en PHP? Intentar asignar a una
variable un valor superior al máximo real permitido. ¿Qué ocurre?*/

$numero_grande = 9223372036854775807;
var_dump($numero_grande);                  

$numero_grande += 1;
var_dump($numero_grande); // float(9.2233720368548E+18)

#Si PHP encuentra un número fuera de los límites de un integer, se interpretará en su lugar como un valor de tipo float. También, una operación cuyo resultado sea un número fuera de los límites de un integer devolverá en su lugar un valor de tipo float. No existe ningún tipo de entero de 64 bits en PHP, por lo que los valores de gran tamaño se representan como un valor flotante. 

$maximo = PHP_INT_MAX;
print "<p>El mayor entero que se puede guardar en una variable entera es $maximo</p>\n";

$demasiado = (int)($maximo+1);
print "<p>Si se intenta guardar 1 más, el resultado es $demasiado</p>\n";

#Si se intenta guardar un número demasiado grande positivo, el resultado será seguramente incorrecto. En el ejemplo siguiente se fuerza a PHP a guardar como entero el valor siguiente al máximo valor posible. El valor se guarda, pero cuando se utiliza, PHP lo interpreta como negativo.
?>