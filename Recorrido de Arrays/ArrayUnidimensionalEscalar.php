<?php
/*
ARRAY UNIDIMENSIONAL ESCALAR (Indexado numéricamente).
Dado el siguiente array:
$productos = array ("MESA", "SILLA", "FLEXO", "ESTANTERIA"); echo "<br>";
Realizar:
a) Recorrido del array anterior mediante el uso de variables, accediendo directamente a
los elementos del array.
b) Recorrido del array anterior mediante el uso de un bucle for, conociendo previamente
el número de elementos.
c) Recorrido del array anterior mediante el uso de un bucle for, si conocer previamente el
número de elementos.
d) Recorrido del array anterior mediante el uso de un bucle while.
e) Recorrido del array anterior mediante el uso de foreach.
*/

$productos = array ("MESA", "SILLA", "FLEXO", "ESTANTERIA");

//a
echo "Valor: $productos[0]"."\n";
echo "Valor: $productos[1]"."\n";
echo "Valor: $productos[2]"."\n";
echo "Valor: $productos[3]"."\n";

//b
for ($i=0;$i<=3;$i++) echo "Valor: $productos[$i]\n";

//c
for ($i=0;$i<count($productos);$i++)
echo "Valor: $productos[$i]\n";

//d
reset($productos);
while (list($indice, $valor) = each($productos))
  echo "Indice: $indice, Valor: $valor"."\n";

//e
foreach($productos as $indice => $valor)
  echo "Indice: $indice, Valor: $valor\n";
?>