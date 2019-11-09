<?php
/* Dado el siguiente array:
$productos2 = array ("M"=>"MESA","S"=>"SILLA","F"=>"FLEXO","E"=>"ESTANTERIA");
echo "<br>";
Realizar:
f) Recorrido del array anterior mediante el uso de variables.
g) Recorrido del array anterior mediante el uso de un bucle while.
h) Recorrido del array anterior mediante el uso de foreach. */

$productos2 = array
("M"=>"MESA","S"=>"SILLA","F"=>"FLEXO","E"=>"ESTANTERIA");

//f
echo "Valor: $productos2[M]"."\n";
echo "Valor: $productos2[S]"."\n";
echo "Valor: $productos2[F]"."\n";
echo "Valor: $productos2[E]"."\n";

//g
reset($productos2);
while (list($indice, $valor) = each($productos2))
  echo "Indice: $indice, Valor: $valor"."\n";

//h
foreach($productos2 as $indice => $valor)
  echo "Indice: $indice, Valor: $valor\n";
?>