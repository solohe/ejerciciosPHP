<?php
/*  ¿Qué es el paso de parámetros por Referencia?
¿En qué se diferencia el paso de parámetros por Valor y por
Referencia en los ejemplos anteriores? 

Pasar por referencia
Pasar por referencia significa que además de pasar el valor a la función, se pasa la referencia a la variable original. De este modo, si el valor cambia dentro de la función, también cambiará en la variable original.

Para indicar que el argumento de una función se pasa por referencia, se utiliza el símbolo & (ampersand, et) delante del argumento.

Entender la diferencia entre pasar por valor y pasar por referencia es esencial para entender como se comporta cada lenguaje de programación.

Si PHP pasa por valor de forma predeterminada y para pasar por referencia hay que indicarlo, otros lenguajes, por el contrario, pasan por referencia de forma predeterminada, por ejemplo JavaScript, donde distintos scopes o contextos para variables se pueden definir con var, let y const.
*/

echo "Paso de Parámetros por Referencia: ";
function incremento2(&$valor, $cantidad = 1){
    $valor += $cantidad;
}
$numero=10;
incremento2($numero,1);
echo($numero);
echo"<br>";echo"<br>";
//Paso de Parámetros por Valor: 10
//Paso de Parámetros por Referencia: 11

?>