<?php

/* Crear un array unidimensional indexado $array, con el número de
elementos que posea la variable $n. El valor de cada elemento será un
elemento comprendido entre $a y $b.
Una vez construido el array, mostar el array indicando:
El elemento de posición 0 tendrá el valor 125
Realizar el recorrido del array unidimensional indexado numéricamente de
dos maneras:
a) Usando el bucle for.
b) Usando el bucle while

Posteriormente, buscando información del uso de funciones.
Realizar el ejercicio anterior como función crearMostrarArray, donde $n,
$a, y $b sean parámetros. La funición debe devolver el array creado.
Usar las funciones print_r() y var_dump(), que tome como parámetro el
array devuelto en la función anterior. ¿Qué nos muestra en cada uno de los
casos?
*/

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

#Función crearMostrarArray
function crearMostrarArray($n, $a, $b){
  $array=[];
  for ($i = 0; $i < $n; $i ++) {
      $array[$i] = rand($a, $b);
      
  }
  return $array;
}
echo "<br>print_r():<br>";
print_r(crearMostrarArray(5, 10, 1000));
echo "<br>var_dump():<br>";
var_dump(crearMostrarArray(5, 10, 1000));
?>