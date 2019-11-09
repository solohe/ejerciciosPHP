<?php
/* $arr = array ("Mamifero" => "Ballena","Insecto" => "Hormiga");
reset($arr);
while( list( ,$valor)=each($arr)) echo "Valor: $valor<br \>\n";
Resultado:
Valor: Ballena
Valor: Hormiga

Mostrar sólo los índices (usando el while) del ejer anterior.
*/

$arr = array("Mamifero" => "Ballena", "Insecto" => "Hormiga");
reset($arr);
while (list($indice) = each($arr))
  echo "Indice: $indice". "\n";
?>