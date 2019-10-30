<?php

/* Crear un array unidimensional indexado $array, con el número de
elementos que posea la variable $n. El valor de cada elemento será un
elemento comprendido entre $a y $b.
Una vez construido el array, mostar el array indicando:
El elemento de posición 0 tendrá el valor 125
Realizar el recorrido del array unidimensional indexado numéricamente de
dos maneras:
a) Usando el bucle for.
b) Usando el bucle while*/

$a = 0;
$b = 1000;

$array = array(125);

#Recorrido con For
echo "Recorrido con For: "."\n";
echo $array[0]."\n";
for ($x = 1; $x < 10; $x++):

  $n = rand($a,$b);
  echo $array[] = $n."\n";

endfor;

#Recorrido con While
echo "Recorrido con While: "."\n";
echo $array[0]."\n";
$contador = 1;
while ($contador < 10){

  $n = rand($a,$b);
  echo $array[] = $n."\n";
  $contador++;

}
?>