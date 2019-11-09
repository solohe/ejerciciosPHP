<?php
/* Realizar:
$productos = array
("M"=>"MESA","S"=>"SILLA","F"=>"FLEXO","E"=>"ESTANTERIA");
- Recorrido del array mediante el uso de variables.
- Recorrido del array mediante el uso del bucle while.
- Recorrido del array mediante el uso de foreach. */

$productos = array
("M"=>"MESA","S"=>"SILLA","F"=>"FLEXO","E"=>"ESTANTERIA");

echo "Valor: $productos[M]"."\n";
echo "Valor: $productos[S]"."\n";
echo "Valor: $productos[F]"."\n";
echo "Valor: $productos[E]"."\n";

reset($productos);
while (list($indice, $valor) = each($productos))
  echo "Indice: $indice, Valor: $valor"."\n";

foreach($productos as $indice => $valor)
  echo "Indice: $indice, Valor: $valor\n";
?>